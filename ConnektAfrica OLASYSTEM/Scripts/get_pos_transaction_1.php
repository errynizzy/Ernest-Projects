<title>Get POS Transaction 1</title><?php
echo('<meta http-equiv="refresh" content="150">');
ini_set('max_execution_time', 900000);
//at the end this script should refresh every 15 minutes
$dbstr ="(DESCRIPTION =(ADDRESS = (PROTOCOL = TCP)(HOST =10.10.10.7)(PORT = 1521))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = cc)))";

//oracle
$conn = oci_connect('cc','smart',$dbstr);
$t = date("Y-m-d H:i:s");
$d = date('m/d/Y');
$msg = '<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<div align="center">
  <p class="style1">Get POS Transaction History Query 1 Completed Successfully</p>
  <p class="style1">Last Query Run: </p>
';
$msgl = '</div>';


//mysql in my laptop
mysql_connect("localhost","root","mahad");
mysql_select_db("connekt");




//fetch from oracle
$sql = "SELECT a.acct_book_id,
			to_char(a.created_date,'mm/dd/yyyy') TRANSFER_DATE,
             h.cust_name ORIGIANL_CUSTOMER,
             g.acc_nbr ORG_SERVICE_NUMBER,
             -1*a.charge / 100 charge,
             e.cust_name DESTINATION_CUSTOMER,
             b.acc_nbr DEST_SERVICE_NUMBER
       FROM acct_book    A,
            subs         B,
            bal_transfer C,
            cust         E,
            acct_book    F,
            subs         G,
            cust         H
       Where -- trunc(a.created_date) >= trunc(sysdate-8)
       -- and   trunc(a.created_date) <= trunc(sysdate-2)
        a.acct_id = b.acct_id
       and b.cust_id = e.cust_id
       and a.acct_book_type in ('L')
       and a.acct_book_id = c.in_acct_book_id
       and c.acct_book_id = f.acct_book_id
       and f.acct_id = g.acct_id
       and g.cust_id = h.cust_id
       and to_char(a.created_date,'mm/dd/yyyy') between '$d' and '$d'
       and g.acc_nbr in (

'798096707',
'798097877',
'798099200',
'789092499',
'798090159',
'798090593',
'798090677',
'798090982',
'798091006',
'798091007',
'798091011',
'798091013',
'798091014',
'798091015',
'798091016',
'798091017',
'798091028',
'798091029',
'798091030',
'798091031',
'798091032',
'798091034',
'798091035',
'798091090',
'798092036',
'798092040',
'798092095',
'798092098',
'798092100',
'798092123',
'798092126',
'798092140',
'798092212',
'798092264',
'798092286',
'798092414',
'798092492',
'798092498',
'798092499',
'798092504',
'798092512',
'798092533',
'798092537',
'798092541',
'798092562',
'798092574',
'798092581',
'798092590',
'798092598',
'798092622',
'798092708',
'798092714',
'798092717',
'798092729',
'79809273',
'798092738',
'798092747',
'798092749',
'798092765',
'798092773',
'798092781',
'798092840',
'798092887',
'798092899',
'798092919',
'798092923',
'798092931',
'798092937',
'798092945',
'798092955',
'798092970',
'798092981',
'798092990',
'798093011',
'798093017',
'798093018',
'798093034',
'798093050',
'798093056',
'798093061',
'798093075',
'798093077',
'798093081',
'798093105',
'798093117',
'798093150',
'798093161',
'798093165',
'798093221',
'798093233',
'798093268',
'798093271',
'798093279',
'798093297',
'798093388',
'798093400',
'798093403',
'798093406',
'798093410',
'798093437',
'798093483',
'798093494',
'798093501',
'798093504',
'798093515',
'798093523',
'798093528',
'798093530',
'798093533',
'798093538',
'798093540',
'798093541',
'798093546',
'798093554',
'798093558',
'798093569',
'798093571',
'798093575',
'798093576',
'798093581',
'798093582',
'798093584',
'798093618',
'798093619',
'798093638',
'798093656',
'798093659',
'798093661',
'798093671',
'798093673',
'798093677',
'798093680',
'798093682',
'798093688',
'798093694',
'798093696',
'798093698',
'798093720',
'798093721',
'798093722',
'798093729',
'798093733',
'798093738',
'798093740',
'798093750',
'798093758',
'798093759',
'798093763',
'798093770',
'798093771',
'798093783',
'798093791',
'798093793',
'798093798',
'798093811',
'798093821',
'798093822',
'798093823',
'798093824',
'798093831',
'798093833',
'798093836',
'798093843',
'798093845',
'798093847',
'798093848',
'798093883',
'798093884',
'798093897',
'798093901',
'798093906',
'798093908',
'798093910',
'798093932',
'798093935',
'798093966',
'798093976',
'798093978',
'798093997',
'798094001',
'798094012',
'798094015',
'798094020',
'798094042',
'798094045',
'798094050',
'798094057',
'798094064',
'798094068',
'798094070',
'798094086',
'798094094',
'798094097',
'798094099',
'798094100',
'798094104',
'798094107',
'798094112',
'798094116',
'798094117',
'798094129',
'798094130',
'798094136',
'798094137',
'798094141',
'798094143',
'798094148',
'798094151',
'798094152',
'798094157',
'798094168',
'798094176',
'798094181',
'798094182',
'798094190',
'798094192',
'798094195',
'798094200',
'798094213',
'798094220',
'798094229',
'798094233',
'798094235',
'798094236',
'798094246',
'798094251',
'798094256',
'798094260',
'798094264',
'798094265',
'798094271',
'798094277',
'798094278',
'798094281',
'798094288',
'798094289',
'798094291',
'798094294',
'798094295',
'798094296',
'798094302',
'798094307',
'798094310',
'798094315',
'798094320',
'798094321',
'798094323',
'798094326',
'798094334',
'798094338',
'798094344',
'798094351',
'798094362',
'798094363',
'798094367',
'798094373',
'798094384',
'798094385',
'798094387',
'798094397',
'798094398',
'798094400',
'798094401',
'798094408',
'798094412',
'798094421',
'798094422',
'798094424',
'798094427',
'798094431',
'798094434',
'798094440',
'798094441',
'798094449',
'798094458',
'798094460',
'798094466',
'798094471',
'798094473',
'798094474',
'798094488',
'798094503',
'798094507',
'798094509',
'798094510',
'798094514',
'798094516',
'798094523',
'798094529',
'798094537',
'798094557',
'798094593',
'798094940',
'798094942',
'798094944',
'798094952',
'798094957',
'798094962',
'798094983',
'798094984',
'798094993',
'798094996',
'798095017',
'798095018',
'798095053',
'798095060',
'798095073',
'798095084',
'798095085',
'798095086',
'798095099',
'798095109',
'798095112',
'798095115',
'798095123',
'798095143',
'798095153',
'798095156',
'798095159',
'798095161',
'798095177',
'798095191',
'798095197',
'798095199',
'798095200',
'798095210',
'798095211',
'798095212',
'798095220',
'798095227',
'798095228',
'798095229',
'798095230',
'798095236',
'798095238',
'798095241',
'798095242',
'798095246',
'798095247',
'798095251',
'798095254',
'798095257',
'798095262',
'798095264',
'798095265',
'798095281',
'798095285',
'798095286',
'798095289',
'798095296',
'798095302',
'798095303',
'798095304',
'798095310',
'798095312',
'798095332',
'798095335',
'798095341',
'798095358',
'798095364',
'798095372',
'798095374',
'798095375',
'798095381',
'798095387',
'798095391',
'798095394',
'798095412',
'798095436',
'798095440',
'798095443',
'798095445',
'798095446',
'798095449',
'798095450',
'798095457',
'798095460',
'798095461',
'798095463',
'798095467',
'798095469',
'798095470',
'798095475',
'798095488',
'798095489',
'798095492',
'798095494',
'798095505',
'798095506',
'798095508',
'798095529',
'798095532',
'798095533',
'798095549',
'798095553',
'798095554',
'798095556',
'798095563',
'798095567',
'798095570',
'798095577',
'798095579',
'798095585',
'798095592',
'798095603',
'798095604',
'798095605',
'798095606',
'798095608',
'798095610',
'798095612',
'798095613',
'798095614',
'798095641',
'798095645',
'798095646',
'798095647',
'798095649',
'798095650',
'798095651',
'798095653',
'798095654',
'798095657',
'798095663',
'798095668',
'798095670',
'798095673',
'798095676',
'798095677',
'798095681',
'798095682',
'798095683',
'798095699',
'798095701',
'798095702',
'798095703',
'798095704',
'798095707',
'798095708',
'798095711',
'798095712',
'798095714',
'798095715',
'798095718',
'798095720',
'798095721',
'798095722',
'798095723',
'798095724',
'798095725',
'798095731',
'798095732',
'798095733',
'798095736',
'798095737',
'798095738',
'798095739',
'798095740',
'798095741',
'798095744',
'798095746',
'798095747',
'798095748',
'798095751',
'798095752',
'798095753',
'798095754',
'798095756',
'798095757',
'798095758',
'798095759',
'798095761',
'798095764',
'798095765',
'798095771',
'798095776',
'798095778',
'798095779',
'798095781',
'798095783',
'798095784',
'798095785',
'798095786',
'798095789',
'798095790',
'798095792',
'798095793',
'798095797',
'798095800',
'798095802',
'798095807',
'798095808',
'798095810',
'798095812',
'798095815',
'798020156',
'798020608',
'7980241601',
'79805676',
'798099298',
'798099300',
'798099302',
'798099303',
'798099306',
'798099311',
'798099312',
'798099313',
'798099314',
'798099316',
'798099317',
'798099322',
'798099325',
'798099327',
'798099329',
'798099332',
'798099333',
'798099334',
'798099336',
'798099342',
'798099345',
'798099351',
'798099354',
'798099358',
'798099359',
'798099364',
'798099365',
'798099372',
'798099373',
'798099375',
'798099376',
'798099378',
'798099384',
'798099388',
'798099390',
'798099392',
'798099395',
'798099396',
'798099398',
'798099406',
'798099408',
'798099417',
'798099421',
'798099424',
'798099426',
'798099431',
'798099436',
'798099437',
'798099439',
'798099440',
'798099442',
'798099444',
'798099445',
'798099453',
'798099457',
'798099460',
'798099462',
'798099466',
'798099469',
'798099470',
'798099474',
'798099483',
'798099488',
'798099492',
'798099495',
'798099497',
'798099500',
'798099501',
'798099503',
'798099507',
'798099511',
'798099512',
'798099523',
'798099524',
'798099530',
'798099532',
'798099534',
'798099538',
'798099543',
'798099545',
'798099547',
'798099548',
'798099549',
'798099550',
'798099552',
'798099557',
'798099562',
'798099563',
'798099569',
'798099570',
'798099571',
'798099572',
'798099574',
'798099576',
'798099577',
'798099579',
'798099581',
'798099582',
'798099583',
'798099584',
'798099590',
'798099592',
'798099594',
'798099595',
'798099596',
'798099597',
'798099598',
'798099599',
'798099609',
'798099610',
'798099611',
'798099613',
'798099614',
'798099616',
'798099618',
'798099620',
'798099621',
'798099622',
'798099623',
'798099624',
'798099625',
'798099626',
'798099627',
'798099628',
'798099629',
'798099630',
'798099631',
'798099632',
'798099633',
'798099634',
'798099635',
'798099636',
'798099637',
'798099638',
'798099640',
'798099645',
'798099647',
'798099648',
'798099657',
'798099658',
'798099659',
'798099660',
'798099661',
'798099663',
'798099664',
'798099665',
'798099667',
'798099668',
'798099669',
'798099670',
'798099671',
'798099672',
'798099675',
'798099677',
'798099678',
'798099680',
'798099683',
'798099684',
'798099689',
'798099692',
'798099693',
'798099694',
'798099695',
'798099696',
'798099697',
'798099699',
'798099703',
'798099704',
'798099707',
'798099708',
'798099712',
'798099717',
'798099718',
'798099719',
'798099721',
'798099723',
'798099724',
'798099725',
'798099726',
'798099728',
'798099729',
'798099731',
'798099736',
'798099738',
'798099739',
'798099742',
'798099744',
'798099746',
'798099747',
'798099749',
'798099750',
'798099751',
'798099754',
'798099755',
'798099756',
'798099757',
'798099759',
'798099761',
'798099766',
'798099767',
'798099768',
'798099769',
'798099771',
'798099772',
'798099774',
'798099779',
'798099780',
'798099781',
'798099782',
'798099783',
'798099784',
'798099785',
'798099787',
'798099790',
'798099793',
'798099796',
'798099797',
'798099798',
'798099799',
'798099803',
'798099804',
'798099806',
'798099808',
'798099809',
'798099810',
'798099811',
'798099812',
'798099813',
'798099814',
'798099815',
'798099817',
'798099820',
'798099825',
'798099828',
'798099840',
'798099841',
'798099842',
'798099844',
'798099845',
'798099846',
'798099847',
'798099849',
'798099850',
'798099851',
'798099852',
'798099853',
'798099854',
'798099855',
'798099856',
'798099857',
'798099859',
'798099862',
'798099863',
'798099864',
'798099865',
'798099866',
'798099867',
'798099868',
'798099872',
'798099875',
'798099879',
'798099882',
'798099883',
'798099884',
'798099885',
'798099886',
'798099888',
'798099893',
'798099899',
'798099900',
'798099901',
'798099902',
'798099903',
'798099904',
'798099905',
'798099906',
'798099907',
'798099911',
'798099913',
'798099914',
'798099917',
'798099918',
'798099919',
'798099920',
'798099921',
'798099923',
'798099927',
'798099929',
'798099930',
'798099931',
'798099932',
'798099939',
'798099945',
'798099946',
'798099947',
'798099948',
'798099950',
'798099959',
'798099960',
'798099965',
'798099966',
'798099968',
'798099971',
'798099972',
'798099984',
'798099985',
'798099998',
'798250896',
'798267262',
'798267344',
'798282684',
'798695060',
'79899542',
'798099040',
'798098983',
'798099008',
'798099020',
'798099211',
'798099601',
'798098910',
'798091392',
'798091389',
'798099441',
'798099472',
'798099174',
'798099477',
'798099042',
'798099467',
'798099045',
'798099380',
'798091390',
'798099585',
'798099062',
'798099435',
'798098928',
'798099166',
'798099201',
'798099296',
'798099218',
'798099111',
'798099055',
'798099077',
'798098903',
'798099079',
'798099170',
'798099068',
'798098900',
'798099090',
'798099229',
'798099221',
'798099379',
'798098948',
'798098982',
'798098987',
'798098981',
'798098971',
'798098962',
'798099186',
'798099121',
'798099028',
'798099030',
'798098985',
'798099619',
'798099012',
'798099000',
'798099047',
'798099154',
'798099073',
'798099533',
'798099489',
'798099455',
'798099360',
'798099072',
'798099247',
'798098997',
'798098961',
'798099535',
'798099461',
'798099587',
'798099468',
'798099536',
'798099391',
'798099162',
'798099153',
'798099155',
'798099102',
'798099150',
'798099604',
'798099049',
'798099443',
'798099268',
'798099009',
'798099145',
'798099319',
'798099243',
'798099275',
'798099228',
'798099355',
'798099212',
'798099357',
'798099251',
'798099745',
'798099236',
'798099338',
'798099156',
'798099149',
'798099043',
'798098959',
'798099110',
'798099088',
'798099054',
'798099126',
'798099058',
'798099291',
'798099370',
'798099075',
'798099172',
'798098996',
'798099006',
'798099160',
'798097519',
'798099193',
'798099575',
'798099176',
'798098957',
'798098929',
'798099169',
'798099284',
'798099004',
'798099189',
'798099270',
'798099092',
'798099131',
'798099021',
'798099024',
'798098934',
'798099163',
'798099184',
'798099002',
'798099482',
'798099449',
'798099261',
'798099167',
'798099025',
'798099308',
'798099239',
'798099301',
'798099252',
'798098965',
'798099127',
'798098908',
'798099168',
'798099231',
'798099320',
'798099473',
'798099041',
'798099097',
'798099446',
'798098918',
'798099447',
'798099522',
'798099258',
'798098953',
'798099608',
'798098956',
'798099036',
'798099015',
'798097459',
'798099438',
'798099048',
'798098998',
'798099112',
'798099339',
'798098978',
'798099277',
'798099010',
'798099052',
'798098895',
'798099142',
'798098944',
'798099148',
'798099109',
'798099269',
'798098932',
'798098909',
'798098970',
'798099295',
'798099037',
'798098960',
'798099175',
'798099018',
'798099016',
'798099023',
'798099060',
'798099297',
'798099137',
'798099007',
'798099039',
'798099183',
'798099001',
'798098933'

	
		


     )
       order by 1,2 asc";

$stmt = oci_parse($conn, $sql);

oci_execute($stmt);

echo '<pre>';

while ( $row = oci_fetch_assoc($stmt) ) {
  print_r($row); // just to dispaly in browser to confirm if it works


	$ACCT_BOOK_ID = $row['ACCT_BOOK_ID'];
 $TRANSFER_DATE = $row['TRANSFER_DATE'];
 $ORIGIANL_CUSTOMER = $row['ORIGIANL_CUSTOMER'];
 $ORG_SERVICE_NUMBER = $row['ORG_SERVICE_NUMBER'];
 $CHARGE = $row['CHARGE'];
 $DESTINATION_CUSTOMER = $row['DESTINATION_CUSTOMER'];
 $DEST_SERVICE_NUMBER = $row['DEST_SERVICE_NUMBER'];
  
  //insert to my sql table 
  $sql = ("INSERT INTO history (ACCT_BOOK_ID,TRANSFER_DATE, ORIGIANL_CUSTOMER, ORG_SERVICE_NUMBER, CHARGE, DESTINATION_CUSTOMER, DEST_SERVICE_NUMBER)

VALUES
(
'".$ACCT_BOOK_ID."',

'".$TRANSFER_DATE."',

'".$ORIGIANL_CUSTOMER."',

'".$ORG_SERVICE_NUMBER."',

'".$CHARGE."',

'".$DESTINATION_CUSTOMER."',

'".$DEST_SERVICE_NUMBER."'


)");

mysql_query($sql);


}
echo $msg. " ".$t.$msgl;

?>