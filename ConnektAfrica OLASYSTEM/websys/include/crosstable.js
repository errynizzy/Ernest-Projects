
function refresh_crosstable(change_field){var i,j,shref,pos,pos2,getParams,grfunc_value=0;$("input[name=group_func]:checked").each(function(){grfunc_value=this.value;});if($("#print_friendly").length){shref=$("#print_friendly").attr("href");pos=shref.indexOf("field=",0);if(pos>=0){shref=shref.substr(0,pos);}
$("#print_friendly").attr("href",shref+"?field="+$("#select_data").val()+"&group_func="+grfunc_value);}
if($("#cross_print_all").length){shref=$("#cross_print_all").attr("href");pos=shref.indexOf("field=",0);if(pos>=0){shref=shref.substr(0,pos);}
$("#cross_print_all").attr("href",shref+"?field="+$("#select_data").val()+"&group_func="+grfunc_value);$("#cross_print_all_pict").attr("href",shref+"?field="+$("#select_data").val()+"&group_func="+grfunc_value);}
if($("#export_to_excel").length){shref=$("#export_to_excel").attr("href");pos=shref.indexOf("field=",0);if(pos>=0){shref=shref.substr(0,pos);}
$("#export_to_excel").attr("href",shref+"?field="+$("#select_data").val()+"&group_func="+grfunc_value);}
if($("#export_to_word").length){shref=$("#export_to_word").attr("href");pos=shref.indexOf("field=",0);if(pos>=0){shref=shref.substr(0,pos);}
$("#export_to_word").attr("href",shref+"?field="+$("#select_data").val()+"&group_func="+grfunc_value);}
shref=window.location.href;pos=shref.indexOf("&axis_x",0);if(pos>=0){pos2=shref.indexOf("&rname",0);if(pos2<0){shref=shref.substr(0,pos);}else{shref=shref.substr(0,pos)+shref.substr(pos2);}}
getParams={axis_x:$("#select_group_x").val(),axis_y:$("#select_group_y").val(),field:$("#select_data").val(),group_func:grfunc_value,crosstable_refresh:true,rndVal:(new Date()).getTime()};$.get(shref,getParams,function(txt){var obj=JSON.parse(txt);for(var i in obj[0]){if(!isNaN(i)){var subobj=obj[0][i]["row_record"]["data"];for(var j=0;j<subobj.length;j++){$("#"+subobj[j]["id_data"]).html(subobj[j]["row_value"]);}
$("#"+obj[0][i]["id_row_summary"]).html(obj[0][i]["row_summary"]);}}
for(var i in obj[1]["data"]){$("#"+obj[1]["data"][i]["id_col_summary"]).html(obj[1]["data"][i]["col_summary"]);}
$("#id_total_summary").html(obj[2]);$("#group_func").html(obj[3]);$("#totals1").html(obj[4]);$("#totals2").html(obj[4]);});}
function refresh_group(rname,reportFileName){var select_data="",grfunc_value="";if($("#select_data").length){select_data=$("#select_data").val();}
$("input[name=group_func]:checked").each(function(){grfunc_value=this.value;});window.location.href=reportFileName+"?rname="+rname+"&axis_x="+$("#select_group_x").val()+"&axis_y="+$("#select_group_y").val()+"&field="+select_data+"&group_func="+grfunc_value;}