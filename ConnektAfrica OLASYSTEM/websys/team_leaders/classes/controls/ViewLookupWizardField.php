<?php
class ViewLookupWizardField extends ViewControl
{
	public $nLookupType;
	public $lookupTable;
	public $displayFieldName;
	public $linkFieldName;
	public $linkAndDisplaySame;
	public $pSet;
	public $lookupPSet;
	public $cipherer; 
	public $lookupQueryObj;
	public $displayFieldIndex;
	public $LookupSQL;
	public $resolvedLookupValues = array();
	public $resolvedLinkLookupValues = array();
	public $linkFieldIndex;
	
	public $localControlsContainer;
		
	public function ViewLookupWizardField($field, $container, $pageObject)
	{
		parent::ViewControl($field, $container, $pageObject);
		
		$this->nLookupType = null;
		$this->lookupTable = "";
		$this->displayFieldName = "";
		$this->linkFieldName = "";
		$this->linkAndDisplaySame = false;
		$this->lookupPSet = null;
		$this->cipherer = null; 
		$this->lookupQueryObj = null;
		$this->displayFieldIndex = 0;
		$this->linkFieldIndex = 1;
		$this->LookupSQL = "";
		
		if($this->container->pSet->getEditFormat($field) != EDIT_FORMAT_LOOKUP_WIZARD)
		{
			$this->pSet = new ProjectSettings($this->container->pSet->_table, 
				$this->container->pSet->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_LOOKUP_WIZARD));
		}
		else
			$this->pSet = $this->container->pSet;
		
		$this->nLookupType = $this->pSet->getLookupType($this->field);
		$this->lookupTable = $this->pSet->getLookupTable($this->field);
		$this->displayFieldName = $this->pSet->getDisplayField($this->field);
		$this->linkFieldName = $this->pSet->getLinkField($this->field);
		$this->linkAndDisplaySame = $this->displayFieldName == $this->linkFieldName;
		if($this->nLookupType == LT_QUERY){
			$this->lookupPSet = new ProjectSettings($this->lookupTable, $this->container->pageType);
			$this->cipherer = new RunnerCipherer($this->lookupTable);
			$this->lookupQueryObj = $this->lookupPSet->getSQLQuery()->CloneObject();
			if($this->pSet->getCustomDisplay($this->field))
				$this->lookupQueryObj->AddCustomExpression($this->displayFieldName, $this->lookupPSet, $this->pSet->_table, $this->field);
			$this->lookupQueryObj->ReplaceFieldsWithDummies($this->lookupPSet->getBinaryFieldsIndices());
			$lookupIndexes = GetLookupFieldsIndexes($this->pSet, $this->field);
			$this->displayFieldIndex = $lookupIndexes["displayFieldIndex"];
			$this->linkFieldIndex = $lookupIndexes["linkFieldIndex"];			
		}else{
			$this->cipherer = new RunnerCipherer($this->pSet->_table);
			$this->LookupSQL = "SELECT ";
			$this->LookupSQL.= $this->pSet->getLWDisplayField($this->field).", ".$this->pSet->getLWLinkField($this->field);
			$this->LookupSQL.= " FROM ".AddTableWrappers($this->pSet->getLookupTable($this->field))." WHERE ";
		}
		
		$this->localControlsContainer = new ViewControlsContainer($this->pSet, $this->container->pageType, $pageObject);
		$this->localControlsContainer->isLocal = true;
	}
	
	public function showDBValue(&$data, $keylink)
	{
		global $conn, $strTableName;
		$value = $data[$this->field];
		if(!strlen($value))
			return "";
		
		$where = "";
		$out = "";
		$lookupvalue = $value;
		$iquery = "field=".runner_htmlspecialchars(rawurlencode($this->field)).$keylink; 
		
		$where = GetLWWhere($this->field, $this->pSet->getEditPageType());
		if($this->pSet->multiSelect($this->field))
		{
			$arr = splitvalues($value);
			$numeric = true;
			$type = $this->pSet->getLWLinkFieldType($this->field);
			if(!$type)
			{
				foreach($arr as $val)
					if(strlen($val) && !is_numeric($val))
					{
						$numeric=false;
						break;
					}
			}
			else
				$numeric = !NeedQuotes($type);
			$in = "";
			foreach($arr as $val)
			{
				if($numeric && !strlen($val))
					continue;
				if(strlen($in))
					$in.= ",";
				if($numeric)
					$in.= ($val+0);
				else
					$in.= db_prepare_string($this->cipherer->EncryptField($this->nLookupType == LT_QUERY ? $this->linkFieldName : $this->field, $val));
			}
			if(strlen($in))
			{
				
				if( count($this->resolvedLookupValues[$value]) )
				{
					$lookupArr = $this->resolvedLookupValues[$value];
					$lookupLinksResolutionArr = $this->resolvedLinkLookupValues[$value];		
				}
				else
				{
					if($this->nLookupType == LT_QUERY){
						$inWhere = GetFullFieldName($this->linkFieldName, $this->lookupTable, false)." in (".$in.")";
						if(strlen($where))
							$inWhere.=" and (".$where.")";
						$LookupSQL = $this->lookupQueryObj->toSql(whereAdd($this->lookupQueryObj->m_where->toSql($this->lookupQueryObj), $inWhere));
					}else{
						$LookupSQL = $this->LookupSQL.$this->pSet->getLWLinkField($this->field)." in (".$in.")";
						if(strlen($where))
							$LookupSQL.=" and (".$where.")";
					}
					LogInfo($LookupSQL);
					$rsLookup = db_query($LookupSQL,$conn);
					$found = false;
					$lookupArrTmp = array();
					$lookupLinksResolutionArr = array();					
					$lookupArr = array(); 
					while($lookuprow=db_fetch_numarray($rsLookup))
					{
						$displayValue = $lookuprow[$this->displayFieldIndex];
						$lookupArrTmp[] = $displayValue;
						$lookupLinksResolutionArr[$displayValue] = $lookuprow[$this->linkFieldIndex];
					}
					$lookupArr = array_unique($lookupArrTmp);
					if( count($lookupArr) ) 
					{
						$this->resolvedLookupValues[$value] = $lookupArr;
						 $this->resolvedLinkLookupValues[$value] = $lookupLinksResolutionArr;
					}
				}
				$localData = $data;				
				foreach($lookupArr as $lookupvalue)
				{
					if($found)
						$out.= ",";
					$found = true;
					$this->localControlsContainer->linkFieldValues[$this->field] = $data[$this->field];
					$this->localControlsContainer->originlinkValues[$this->field] = $lookupLinksResolutionArr[ $lookupvalue ];
					if($this->pSet->getViewFormat($this->field) != "Custom"){	
						$localData[$this->field] = $lookupvalue;
					}
					$outVal = $this->localControlsContainer->showDBValue($this->field, $localData, $keylink, $lookupvalue);
					$out.= $this->nLookupType == LT_QUERY || $this->linkAndDisplaySame ? 
						$this->cipherer->DecryptField($this->nLookupType == LT_QUERY ? $this->displayFieldName : $this->field, $outVal) : $outVal;
				}
				return $out;
			}
		}
		else
		{
			$found = false;
			if( isset($this->resolvedLookupValues[$value]) )
			{
				$lookupvalue = $this->resolvedLookupValues[$value];
				$found = true;				
			}
			else
			{
				$strdata = $this->cipherer->MakeDBValue($this->nLookupType == LT_QUERY ? $this->linkFieldName : $this->field, $value, "", "", true);
				if($this->nLookupType == LT_QUERY){
					$strWhere = GetFullFieldName($this->linkFieldName, $this->lookupTable, false)." = " . $strdata;
					if(strlen($where))
						$strWhere.= " and (".$where.")";
					$LookupSQL = $this->lookupQueryObj->toSql(whereAdd($this->lookupQueryObj->m_where->toSql($this->lookupQueryObj), $strWhere));
				}else{
					$strWhere = $this->pSet->getLWLinkField($this->field)." = " . $strdata;
					if(strlen($where))
						$strWhere.= " and (".$where.")";
					$LookupSQL = $this->LookupSQL.$strWhere;
				}
				LogInfo($LookupSQL);
				$rsLookup = db_query($LookupSQL,$conn);
				if($lookuprow = db_fetch_numarray($rsLookup)){
					$lookupvalue = $lookuprow[$this->displayFieldIndex];
					$this->resolvedLookupValues[$value] = $lookupvalue;
					$found = true;
				}
			}
		}
		if(!$out){
			if($found && ($this->nLookupType == LT_QUERY || $this->linkAndDisplaySame)){
				$lookupvalue = $this->cipherer->DecryptField($this->nLookupType == LT_QUERY ? $this->displayFieldName : $this->field, $lookupvalue);
			}
			$localData = $data;
			$this->localControlsContainer->linkFieldValues[$this->field] = $data[$this->field];
			if($this->pSet->getViewFormat($this->field) != "Custom"){	
				$localData[$this->field] = $lookupvalue;
			}				
			$out = $this->localControlsContainer->showDBValue($this->field, $localData, $keylink, $lookupvalue);
		}
		return $out;
	}
}
?>