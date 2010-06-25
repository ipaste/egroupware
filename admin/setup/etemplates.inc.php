<?php
/**
	* eGroupWare - eTemplates for Application admin
	* http://www.egroupware.org
	* generated by soetemplate::dump4setup() 2010-01-31 04:31
	*
	* @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
	* @package admin
	* @subpackage setup
	* @version $Id$
	*/

$templ_version=1;

$templ_data[] = array('name' => 'admin.accesslog','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:4:{i:0;a:1:{s:2:"h1";s:6:",!@msg";}i:1;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:5:"align";s:6:"center";s:4:"name";s:3:"msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:4:{s:4:"type";s:9:"nextmatch";s:4:"size";s:4:"rows";s:4:"name";s:2:"nm";s:4:"span";s:3:"all";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:3;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:3:{s:4:"type";s:5:"label";s:5:"label";s:32:"Percent of users that logged out";s:8:"readonly";s:1:"1";}i:2;a:5:{s:4:"type";s:5:"float";s:4:"name";s:7:"percent";s:4:"size";s:4:",,,1";s:5:"label";s:6:": %s %";s:8:"readonly";s:1:"1";}}s:1:"B";a:5:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";s:5:"align";s:5:"right";i:1;a:6:{s:4:"type";s:6:"button";s:4:"name";s:6:"delete";s:4:"size";s:6:"delete";s:5:"label";s:6:"Delete";s:4:"help";s:23:"Delete selected entries";s:7:"onclick";s:46:"return confirm(\'Delete the selected entries\');";}i:2;a:4:{s:4:"type";s:10:"buttononly";s:4:"size";s:9:"arrow_ltr";s:7:"onclick";s:71:"toggle_all(this.form,form::name(\'nm[rows][selected][]\')); return false;";s:4:"span";s:15:",selectAllArrow";}}}}s:4:"rows";i:3;s:4:"cols";i:2;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '.selectAllArrow { padding-right: 12px; }','modified' => '1240661952',);

$templ_data[] = array('name' => 'admin.accesslog.get_rows','template' => '','lang' => '','group' => '0','version' => '1.3.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:2:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";}i:1;a:4:{s:1:"A";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:7:"LoginID";s:4:"name";s:7:"loginid";}s:1:"B";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:2:"IP";s:4:"name";s:2:"ip";}s:1:"C";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:9:"Logintime";s:4:"name";s:2:"li";}s:1:"D";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:9:"Logoutime";s:4:"name";s:2:"lo";}}i:2;a:4:{s:1:"A";a:3:{s:4:"type";s:14:"select-account";s:4:"name";s:15:"${row}[loginid]";s:8:"readonly";s:1:"1";}s:1:"B";a:3:{s:4:"type";s:5:"label";s:4:"name";s:10:"${row}[ip]";s:7:"no_lang";s:1:"1";}s:1:"C";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:10:"${row}[li]";s:8:"readonly";s:1:"1";}s:1:"D";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:10:"${row}[lo]";s:8:"readonly";s:1:"1";}}}s:4:"rows";i:2;s:4:"cols";i:4;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1164479930',);

$templ_data[] = array('name' => 'admin.accesslog.rows','template' => '','lang' => '','group' => '0','version' => '1.7.002','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:3:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";s:1:"H";s:2:"1%";}i:1;a:8:{s:1:"A";a:3:{s:4:"type";s:23:"nextmatch-accountfilter";s:4:"size";s:7:"LoginID";s:4:"name";s:10:"account_id";}s:1:"B";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:12:"Login-Status";s:4:"name";s:13:"sessionstatus";}s:1:"C";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:7:"Loginid";s:4:"name";s:7:"loginid";}s:1:"D";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:2:"IP";s:4:"name";s:2:"ip";}s:1:"E";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:5:"Login";s:4:"name";s:2:"li";}s:1:"F";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:6:"Logout";s:4:"name";s:2:"lo";}s:1:"G";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:5:"Total";s:4:"name";s:5:"total";}s:1:"H";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:5:"label";s:5:"label";s:6:"Action";s:5:"align";s:6:"center";}i:2;a:4:{s:4:"type";s:10:"buttononly";s:4:"size";s:5:"check";s:5:"label";s:10:"Select all";s:7:"onclick";s:61:"toggle_all(this.form,form::name(\'selected[]\')); return false;";}}}i:2;a:8:{s:1:"A";a:3:{s:4:"type";s:14:"select-account";s:4:"name";s:18:"${row}[account_id]";s:8:"readonly";s:1:"1";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:4:"name";s:21:"${row}[sessionstatus]";}s:1:"C";a:2:{s:4:"type";s:5:"label";s:4:"name";s:15:"${row}[loginid]";}s:1:"D";a:2:{s:4:"type";s:5:"label";s:4:"name";s:10:"${row}[ip]";}s:1:"E";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:10:"${row}[li]";s:8:"readonly";s:1:"1";}s:1:"F";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:10:"${row}[lo]";s:8:"readonly";s:1:"1";}s:1:"G";a:4:{s:4:"type";s:13:"date-duration";s:4:"name";s:13:"${row}[total]";s:8:"readonly";s:1:"1";s:4:"size";s:6:",hm,24";}s:1:"H";a:5:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:6:{s:4:"type";s:6:"button";s:4:"size";s:6:"delete";s:5:"label";s:6:"Delete";s:4:"name";s:28:"delete[$row_cont[sessionid]]";s:4:"help";s:21:"Delete this log entry";s:7:"onclick";s:40:"return confirm(\'Delete this log entry\');";}i:2;a:3:{s:4:"type";s:8:"checkbox";s:4:"size";s:20:"$row_cont[sessionid]";s:4:"name";s:10:"selected[]";}s:5:"align";s:6:"center";}}}s:4:"rows";i:2;s:4:"cols";i:8;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1254816462',);

$templ_data[] = array('name' => 'admin.applications','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:4:{s:4:"type";s:9:"nextmatch";s:4:"size";s:4:"rows";s:4:"span";s:3:"all";s:4:"name";s:2:"nm";}}i:2;a:1:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:6:"button";s:5:"label";s:28:"Number applications serially";s:4:"name";s:6:"number";}i:2;a:2:{s:4:"type";s:5:"label";s:5:"label";s:157:"Number the applications serially. If they are not numbered serially, sorting the applications could work wrong. This will not change the application\'s order.";}}}}s:4:"rows";i:2;s:4:"cols";i:1;s:4:"size";s:7:"100%,,0";s:7:"options";a:2:{i:0;s:4:"100%";i:2;s:1:"0";}}}','size' => '100%,,0','style' => '','modified' => '1276610727',);

$templ_data[] = array('name' => 'admin.applications.rows','template' => '','lang' => '','group' => '0','version' => '1.7.002','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:7:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";s:1:"A";s:5:"1px,1";s:1:"E";s:4:"80px";s:1:"D";s:5:"120px";s:1:"F";s:2:"80";s:1:"B";s:5:"120px";}i:1;a:6:{s:1:"A";a:1:{s:4:"type";s:5:"label";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"align";s:6:"center";}s:1:"C";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:4:"Name";s:4:"name";s:4:"name";}s:1:"D";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:7:"Version";s:4:"name";s:7:"version";}s:1:"E";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:5:"Order";s:4:"name";s:5:"order";}s:1:"F";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:7:"Actions";s:4:"name";s:7:"actions";}}i:2;a:6:{s:1:"A";a:3:{s:4:"type";s:5:"image";s:5:"align";s:6:"center";s:4:"name";s:14:"${row}[app_id]";}s:1:"B";a:3:{s:4:"type";s:5:"image";s:4:"name";s:13:"${row}[image]";s:5:"align";s:6:"center";}s:1:"C";a:2:{s:4:"type";s:5:"label";s:4:"name";s:16:"${row}[app_name]";}s:1:"D";a:3:{s:4:"type";s:5:"label";s:4:"name";s:19:"${row}[app_version]";s:8:"readonly";s:1:"1";}s:1:"E";a:4:{s:4:"type";s:5:"label";s:4:"name";s:17:"${row}[app_order]";s:7:"no_lang";s:1:"1";s:8:"readonly";s:1:"1";}s:1:"F";a:5:{s:4:"type";s:4:"hbox";s:8:"readonly";s:1:"1";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:6:"button";s:4:"size";s:3:"up2";s:5:"label";s:2:"up";s:4:"name";s:21:"up[$row_cont[app_id]]";}i:2;a:4:{s:4:"type";s:6:"button";s:4:"size";s:5:"down2";s:5:"label";s:4:"down";s:4:"name";s:23:"down[$row_cont[app_id]]";}}}}s:4:"rows";i:2;s:4:"cols";i:6;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1275405742',);

$templ_data[] = array('name' => 'admin.categories.delete','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:2:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:5:{s:4:"type";s:8:"groupbox";s:4:"size";s:1:"1";s:5:"label";s:20:"Delete this category";i:1;a:5:{s:4:"type";s:4:"grid";s:4:"data";a:4:{i:0;a:3:{s:2:"h3";s:2:"40";s:2:"h1";s:2:"30";s:2:"c2";s:11:"confirmSubs";}i:1;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"span";s:3:"all";s:5:"label";s:47:"Are you sure you want to delete this category ?";s:5:"align";s:6:"center";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:5:{s:4:"type";s:8:"checkbox";s:5:"label";s:53:"Do you also want to delete all global subcategories ?";s:4:"name";s:12:"delete[subs]";s:4:"span";s:3:"all";s:5:"align";s:6:"center";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:3;a:2:{s:1:"A";a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:4:"name";s:14:"delete[delete]";s:5:"align";s:6:"center";}s:1:"B";a:5:{s:4:"type";s:10:"buttononly";s:5:"label";s:6:"Cancel";s:4:"name";s:14:"delete[cancel]";s:5:"align";s:6:"center";s:7:"onclick";s:64:"set_style_by_class(\'fieldset\',\'confirmDelete\',\'display\',\'none\');";}}}s:4:"rows";i:3;s:4:"cols";i:2;s:7:"options";a:0:{}}s:4:"span";s:14:",confirmDelete";}}}s:4:"rows";i:1;s:4:"cols";i:1;}i:1;a:3:{s:4:"type";s:4:"text";s:4:"name";s:14:"delete[cat_id]";s:4:"span";s:12:",hiddenCatid";}}','size' => '','style' => '.confirmDelete {
  position: absolute;
  left: 120px;
  top: 80px;
  background-color: white;
  display: none;
  border: 2px solid black;
}
.hiddenCatid {
  display: none;
}
.confirmSubs
{
}','modified' => '1264754384',);

$templ_data[] = array('name' => 'admin.categories.edit','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:2:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:11:{i:0;a:12:{s:2:"c2";s:2:"th";s:2:"c3";s:3:"row";s:2:"c4";s:7:"row,top";s:2:"c5";s:3:"row";s:2:"c7";s:3:"row";s:2:"c6";s:3:"row";s:2:"h7";s:15:",@appname=phpgw";s:2:"h2";s:2:"25";s:2:"h1";s:6:",!@msg";s:2:"c9";s:3:"row";s:2:"c8";s:3:"row";s:2:"h9";s:11:",!@last_mod";}i:1;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:5:"align";s:6:"center";s:4:"name";s:3:"msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:9:",,,parent";s:5:"label";s:15:"Parent category";}s:1:"B";a:3:{s:4:"type";s:10:"select-cat";s:4:"size";s:25:"None,,,$cont[appname],,-1";s:4:"name";s:6:"parent";}}i:3;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:7:",,,name";s:5:"label";s:4:"Name";}s:1:"B";a:3:{s:4:"type";s:4:"text";s:4:"size";s:6:"50,150";s:4:"name";s:4:"name";}}i:4;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:14:",,,description";s:5:"label";s:11:"Description";}s:1:"B";a:3:{s:4:"type";s:8:"textarea";s:4:"size";s:4:"5,50";s:4:"name";s:11:"description";}}i:5;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:18:",,,cat_data[color]";s:5:"label";s:5:"Color";}s:1:"B";a:2:{s:4:"type";s:11:"colorpicker";s:4:"name";s:11:"data[color]";}}i:6;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:13:",,,data[icon]";s:5:"label";s:4:"Icon";}s:1:"B";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:4:{s:4:"type";s:6:"select";s:4:"name";s:10:"data[icon]";s:4:"size";s:4:"None";s:8:"onchange";s:73:"document.getElementById(\'icon_url\').src = \'$cont[base_url]\' + this.value;";}i:2;a:3:{s:4:"type";s:5:"image";s:4:"name";s:8:"icon_url";s:4:"span";s:9:",leftPad5";}}}i:7;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:11:"Application";}s:1:"B";a:4:{s:4:"type";s:10:"select-app";s:4:"name";s:7:"appname";s:8:"readonly";s:1:"1";s:4:"size";s:16:"All applications";}}i:8;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:8:",,,owner";s:5:"label";s:19:"Limit to members of";}s:1:"B";a:4:{s:4:"type";s:14:"select-account";s:4:"size";s:16:"All users,groups";s:4:"name";s:5:"owner";s:4:"help";s:51:"Limit global category to members of a certain group";}}i:9;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:8:"Modified";}s:1:"B";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:8:"last_mod";s:8:"readonly";s:1:"1";}}i:10;a:2:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:3:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:12:"button[save]";}i:2;a:3:{s:4:"type";s:6:"button";s:5:"label";s:5:"Apply";s:4:"name";s:13:"button[apply]";}}s:1:"B";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:10:"buttononly";s:4:"name";s:14:"button[cancel]";s:5:"label";s:6:"Cancel";s:7:"onclick";s:15:"window.close();";}i:2;a:6:{s:4:"type";s:10:"buttononly";s:5:"label";s:6:"Delete";s:5:"align";s:5:"right";s:4:"name";s:14:"button[delete]";s:4:"help";s:20:"Delete this category";s:7:"onclick";s:157:"set_style_by_class(\'tr\',\'confirmSubs\',\'visibility\',\'$cont[children]\'?\'visible\':\'collapse\'); set_style_by_class(\'fieldset\',\'confirmDelete\',\'display\',\'block\');";}}}}s:4:"rows";i:10;s:4:"cols";i:2;}i:1;a:2:{s:4:"type";s:8:"template";s:4:"name";s:23:"admin.categories.delete";}}','size' => '','style' => '','modified' => '1264740967',);

$templ_data[] = array('name' => 'admin.categories.index','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:2:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:4:{i:0;a:1:{s:2:"h1";s:6:",!@msg";}i:1;a:1:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"name";s:3:"msg";s:5:"align";s:6:"center";s:4:"span";s:13:"all,redItalic";}}i:2;a:1:{s:1:"A";a:3:{s:4:"type";s:9:"nextmatch";s:4:"size";s:4:"rows";s:4:"name";s:2:"nm";}}i:3;a:1:{s:1:"A";a:4:{s:4:"type";s:10:"buttononly";s:5:"label";s:3:"Add";s:4:"name";s:3:"add";s:7:"onclick";s:193:"window.open(egw::link(\'/index.php\',\'menuaction=admin.admin_categories.edit&appname={$cont[nm][appname]}\'),\'_blank\',\'dependent=yes,width=600,height=300,scrollbars=yes,status=yes\'); return false;";}}}s:4:"rows";i:3;s:4:"cols";i:1;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}i:1;a:2:{s:4:"type";s:8:"template";s:4:"name";s:23:"admin.categories.delete";}}','size' => '100%','style' => '.level0 { font-weight: bold; }','modified' => '1264657515',);

$templ_data[] = array('name' => 'admin.categories.index.rows','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:6:{s:2:"c1";s:2:"th";s:2:"c2";s:13:"$row_cont[id]";s:1:"E";s:2:"40";s:1:"H";s:2:"30";s:1:"I";s:2:"1%";s:1:"F";s:2:"80";}i:1;a:9:{s:1:"A";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:4:"Name";s:4:"name";s:4:"name";}s:1:"B";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:11:"Description";s:4:"name";s:11:"description";}s:1:"C";a:3:{s:4:"type";s:16:"nextmatch-header";s:4:"name";s:3:"app";s:5:"label";s:11:"Application";}s:1:"D";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:19:"Limit to members of";s:4:"name";s:5:"owner";}s:1:"E";a:4:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:4:"Icon";s:4:"name";s:4:"icon";s:5:"align";s:6:"center";}s:1:"F";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:5:"Color";s:4:"name";s:5:"color";}s:1:"G";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:8:"Modified";s:4:"name";s:8:"last_mod";}s:1:"H";a:4:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:8:"Children";s:4:"name";s:4:"subs";s:5:"align";s:6:"center";}s:1:"I";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Actions";}}i:2;a:9:{s:1:"A";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"2,,0,0";i:1;a:2:{s:4:"type";s:4:"html";s:4:"name";s:20:"${row}[level_spacer]";}i:2;a:3:{s:4:"type";s:5:"label";s:4:"name";s:12:"${row}[name]";s:4:"span";s:17:",$row_cont[class]";}}s:1:"B";a:2:{s:4:"type";s:5:"label";s:4:"name";s:19:"${row}[description]";}s:1:"C";a:3:{s:4:"type";s:10:"select-app";s:4:"name";s:15:"${row}[appname]";s:8:"readonly";s:1:"1";}s:1:"D";a:4:{s:4:"type";s:14:"select-account";s:4:"name";s:13:"${row}[owner]";s:8:"readonly";s:1:"1";s:4:"size";s:16:"All users,groups";}s:1:"E";a:4:{s:4:"type";s:5:"image";s:4:"name";s:16:"${row}[icon_url]";s:5:"label";s:23:"{$row_cont[data][icon]}";s:5:"align";s:6:"center";}s:1:"F";a:2:{s:4:"type";s:5:"label";s:4:"name";s:19:"${row}[data][color]";}s:1:"G";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:16:"${row}[last_mod]";s:8:"readonly";s:1:"1";}s:1:"H";a:3:{s:4:"type";s:5:"label";s:4:"name";s:12:"${row}[subs]";s:5:"align";s:6:"center";}s:1:"I";a:5:{s:4:"type";s:4:"hbox";s:4:"size";s:6:"3,,0,0";i:1;a:5:{s:4:"type";s:10:"buttononly";s:4:"size";s:4:"edit";s:5:"label";s:4:"Edit";s:4:"name";s:19:"edit[$row_cont[id]]";s:7:"onclick";s:185:"window.open(egw::link(\'/index.php\',\'menuaction=admin.admin_categories.edit&cat_id=$row_cont[id]\'),\'_blank\',\'dependent=yes,width=600,height=380,scrollbars=yes,status=yes\'); return false;";}i:2;a:5:{s:4:"type";s:10:"buttononly";s:4:"size";s:3:"new";s:5:"label";s:7:"Add sub";s:4:"name";s:18:"add[$row_cont[id]]";s:7:"onclick";s:208:"window.open(egw::link(\'/index.php\',\'menuaction=admin.admin_categories.edit&parent=$row_cont[id]&appname=$cont[appname]\'),\'_blank\',\'dependent=yes,width=600,height=380,scrollbars=yes,status=yes\'); return false;";}i:3;a:7:{s:4:"type";s:10:"buttononly";s:4:"size";s:6:"delete";s:5:"label";s:6:"Delete";s:4:"name";s:21:"delete[$row_cont[id]]";s:4:"help";s:20:"Delete this category";s:7:"onclick";s:246:"document.getElementById(\'exec[delete][cat_id]\').value=\'$row_cont[id]\'; set_style_by_class(\'tr\',\'confirmSubs\',\'visibility\',\'$row_cont[children]\'?\'visible\':\'collapse\'); set_style_by_class(\'fieldset\',\'confirmDelete\',\'display\',\'block\'); return false;";s:4:"span";s:9:",leftPad5";}}}}s:4:"rows";i:2;s:4:"cols";i:9;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1264657599',);

$templ_data[] = array('name' => 'admin.cmds','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:3:{s:4:"type";s:9:"nextmatch";s:4:"size";s:15:"admin.cmds.rows";s:4:"name";s:2:"nm";}}}s:4:"rows";i:1;s:4:"cols";i:1;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1195518120',);

$templ_data[] = array('name' => 'admin.cmds.rows','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:3:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";s:2:"h2";s:4:",!@1";}i:1;a:10:{s:1:"A";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:5:"Title";s:4:"name";s:5:"title";}s:1:"B";a:3:{s:4:"type";s:16:"nextmatch-header";s:5:"label";s:9:"Requested";s:4:"name";s:9:"requested";}s:1:"C";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:9:"Scheduled";s:4:"name";s:13:"cmd_scheduled";}s:1:"D";a:3:{s:4:"type";s:22:"nextmatch-filterheader";s:4:"size";s:6:"Remote";s:4:"name";s:9:"remote_id";}s:1:"E";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:7:"Created";s:4:"name";s:11:"cmd_created";}s:1:"F";a:3:{s:4:"type";s:23:"nextmatch-accountfilter";s:4:"name";s:7:"creator";s:4:"size";s:7:"Creator";}s:1:"G";a:3:{s:4:"type";s:22:"nextmatch-filterheader";s:4:"name";s:6:"status";s:4:"size";s:6:"Status";}s:1:"H";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:8:"Modified";s:4:"name";s:12:"cmd_modified";}s:1:"I";a:3:{s:4:"type";s:23:"nextmatch-accountfilter";s:4:"size";s:8:"Modifier";s:4:"name";s:8:"modifier";}s:1:"J";a:1:{s:4:"type";s:5:"label";}}i:2;a:10:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[title]";}s:1:"B";a:4:{s:4:"type";s:9:"url-email";s:4:"name";s:17:"${row}[requested]";s:4:"size";s:29:",,,$row_cont[requested_email]";s:8:"readonly";s:1:"1";}s:1:"C";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:17:"${row}[scheduled]";s:8:"readonly";s:1:"1";}s:1:"D";a:3:{s:4:"type";s:6:"select";s:4:"name";s:17:"${row}[remote_id]";s:8:"readonly";s:1:"1";}s:1:"E";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:15:"${row}[created]";s:8:"readonly";s:1:"1";}s:1:"F";a:4:{s:4:"type";s:9:"url-email";s:4:"name";s:15:"${row}[creator]";s:4:"size";s:27:",,,$row_cont[creator_email]";s:8:"readonly";s:1:"1";}s:1:"G";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:6:"2,,0,0";i:1;a:3:{s:4:"type";s:6:"select";s:4:"name";s:14:"${row}[status]";s:8:"readonly";s:1:"1";}i:2;a:3:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[error]";s:4:"span";s:10:",redItalic";}}s:1:"H";a:3:{s:4:"type";s:9:"date-time";s:4:"name";s:16:"${row}[modified]";s:8:"readonly";s:1:"1";}s:1:"I";a:4:{s:4:"type";s:9:"url-email";s:4:"name";s:16:"${row}[modifier]";s:8:"readonly";s:1:"1";s:4:"size";s:28:",,,$row_cont[modifier_email]";}s:1:"J";a:6:{s:4:"type";s:6:"button";s:4:"size";s:6:"delete";s:5:"label";s:6:"Cancel";s:4:"name";s:21:"delete[$row_cont[id]]";s:4:"help";s:29:"Cancel this scheduled command";s:7:"onclick";s:48:"return confirm(\'Cancel this scheduled command\');";}}}s:4:"rows";i:2;s:4:"cols";i:10;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '','modified' => '1195518170',);

$templ_data[] = array('name' => 'admin.customfields','template' => '','lang' => '','group' => '0','version' => '1.2','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:6:{i:0;a:1:{s:1:"G";s:3:"80%";}i:1;a:7:{s:1:"A";a:5:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:4:"name";s:9:"error_msg";s:5:"align";s:6:"center";s:7:"no_lang";s:1:"1";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:2:{s:4:"type";s:5:"label";s:7:"no_lang";s:1:"1";}}i:2;a:7:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:13:"content_types";s:4:"span";s:3:"all";s:4:"name";s:24:"admin.customfields.types";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}i:3;a:7:{s:1:"A";a:2:{s:4:"type";s:8:"template";s:4:"span";s:3:"all";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}i:4;a:7:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:6:"fields";s:4:"span";s:3:"all";s:4:"name";s:25:"admin.customfields.fields";}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}i:5;a:7:{s:1:"A";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"3";s:4:"span";s:3:"all";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:12:"button[save]";s:4:"help";s:33:"saves the changes made and leaves";}i:2;a:4:{s:4:"type";s:6:"button";s:5:"label";s:5:"Apply";s:4:"name";s:13:"button[apply]";s:4:"help";s:19:"applies the changes";}i:3;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Cancel";s:4:"name";s:14:"button[cancel]";s:4:"help";s:22:"leaves without saveing";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}s:1:"C";a:1:{s:4:"type";s:5:"label";}s:1:"D";a:1:{s:4:"type";s:5:"label";}s:1:"E";a:1:{s:4:"type";s:5:"label";}s:1:"F";a:1:{s:4:"type";s:5:"label";}s:1:"G";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:5;s:4:"cols";i:7;}}','size' => '','style' => '.redItalic { color: red; font-style: italics; }','modified' => '1131453292',);

$templ_data[] = array('name' => 'admin.customfields.fields','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:5:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:4:{s:2:"c1";s:2:"th";s:2:"c2";s:7:"row,top";s:1:"C";s:8:",!@type2";s:1:"E";s:14:",!@use_private";}i:1;a:9:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:5:"label";s:4:"Name";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Label";}s:1:"C";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Subtype";}s:1:"D";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Type";}s:1:"E";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Private";}s:1:"F";a:3:{s:4:"type";s:5:"label";s:5:"label";s:7:"Options";s:4:"help";s:40:"each value is a line like <id>[=<label>]";}s:1:"G";a:2:{s:4:"type";s:5:"label";s:5:"label";s:14:"Length<br>Rows";}s:1:"H";a:2:{s:4:"type";s:5:"label";s:5:"label";s:5:"Order";}s:1:"I";a:4:{s:4:"type";s:5:"label";s:5:"label";s:6:"Action";s:5:"align";s:6:"center";s:4:"help";s:18:"deletes this field";}}i:2;a:9:{s:1:"A";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"20,32";s:4:"name";s:12:"${row}[name]";s:4:"help";s:83:"the name used internaly (<= 20 chars), changeing it makes existing data unavailible";}s:1:"B";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:4:",255";s:4:"name";s:13:"${row}[label]";s:4:"help";s:30:"the text displayed to the user";}i:2;a:2:{s:4:"type";s:5:"label";s:4:"name";s:13:"${row}[label]";}}s:1:"C";a:4:{s:4:"type";s:6:"select";s:4:"size";s:3:"All";s:4:"name";s:13:"${row}[type2]";s:7:"no_lang";s:1:"1";}s:1:"D";a:3:{s:4:"type";s:18:"customfields-types";s:4:"name";s:12:"{$row}[type]";s:4:"help";s:19:"Type of customfield";}s:1:"E";a:5:{s:4:"type";s:14:"select-account";s:4:"name";s:15:"${row}[private]";s:4:"help";s:60:"Select accounts for which the custom field should be visible";s:5:"align";s:6:"center";s:4:"size";s:6:"3,both";}s:1:"F";a:4:{s:4:"type";s:8:"textarea";s:4:"size";s:4:"2,30";s:4:"name";s:14:"${row}[values]";s:4:"help";s:36:"each value is a line like id[=label]";}s:1:"G";a:4:{s:4:"type";s:4:"vbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:4:"text";s:4:"size";s:1:"5";s:4:"name";s:11:"${row}[len]";s:4:"help";s:63:"max length of the input [, length of the inputfield (optional)]";}i:2;a:5:{s:4:"type";s:3:"int";s:4:"size";s:6:"0,10,2";s:4:"name";s:12:"${row}[rows]";s:4:"help";s:70:"number of row for a multiline inputfield or line of a multi-select-box";s:4:"blur";s:1:"1";}}s:1:"H";a:4:{s:4:"type";s:3:"int";s:4:"size";s:4:"1,,3";s:4:"name";s:13:"${row}[order]";s:4:"help";s:45:"determines the order the fields are displayed";}s:1:"I";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:4:"name";s:23:"delete[$row_cont[name]]";s:4:"help";s:18:"deletes this field";}i:2;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Create";s:4:"name";s:21:"create$row_cont[name]";s:4:"help";s:19:"creates a new field";}}}}s:4:"rows";i:2;s:4:"cols";i:9;s:7:"options";a:0:{}}}','size' => '','style' => '','modified' => '1131454776',);

$templ_data[] = array('name' => 'admin.customfields.types','template' => '','lang' => '','group' => '0','version' => '1.2','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:2:{i:0;a:1:{s:1:"D";s:15:",@non_deletable";}i:1;a:6:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:4:"name";s:8:"app-name";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"-  type";}s:1:"C";a:4:{s:4:"type";s:6:"select";s:4:"name";s:5:"types";s:8:"onchange";s:1:"1";s:7:"no_lang";s:1:"1";}s:1:"D";a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Delete";s:4:"name";s:6:"delete";s:7:"onclick";s:110:"return confirm(\'WARNING: You are about to delete this type. Entries of this type won\\\'t be accessable then.\');";}s:1:"E";a:3:{s:4:"type";s:4:"text";s:4:"name";s:4:"name";s:4:"blur";s:8:"new name";}s:1:"F";a:3:{s:4:"type";s:6:"button";s:5:"label";s:6:"Create";s:4:"name";s:6:"create";}}}s:4:"rows";i:1;s:4:"cols";i:6;}}','size' => '','style' => '','modified' => '1139823458',);

$templ_data[] = array('name' => 'admin.remotes','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:6:{s:4:"type";s:4:"grid";s:4:"data";a:5:{i:0;a:3:{s:2:"h2";s:9:",!@remote";s:2:"h1";s:6:",!@msg";s:2:"h3";s:2:",1";}i:1;a:1:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:4:"name";s:3:"msg";}}i:2;a:1:{s:1:"A";a:4:{s:4:"type";s:8:"template";s:4:"size";s:6:"remote";s:4:"span";s:10:"all,border";s:4:"name";s:18:"admin.remotes.edit";}}i:3;a:1:{s:1:"A";a:3:{s:4:"type";s:8:"template";s:5:"align";s:5:"right";s:4:"name";s:26:"admin.remotes.header_right";}}i:4;a:1:{s:1:"A";a:3:{s:4:"type";s:9:"nextmatch";s:4:"name";s:2:"nm";s:4:"size";s:18:"admin.remotes.rows";}}}s:4:"rows";i:4;s:4:"cols";i:1;s:4:"size";s:4:"100%";s:7:"options";a:1:{i:0;s:4:"100%";}}}','size' => '100%','style' => '.border { border: black solid 2px; }','modified' => '1195926693',);

$templ_data[] = array('name' => 'admin.remotes.edit','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:9:{i:0;a:8:{s:2:"c2";s:2:"th";s:2:"c3";s:3:"row";s:2:"c5";s:3:"row";s:2:"c6";s:3:"row";s:2:"c4";s:3:"row";s:2:"c7";s:3:"row";s:2:"h5";s:14:",!@remote_hash";s:2:"h1";s:11:",@remote_id";}i:1;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:5:"label";s:97:"Remote administration need to be enabled in the remote instance under Admin > Site configuration!";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"size";s:14:",,,remote_name";s:5:"label";s:4:"Name";s:6:"needed";s:1:"1";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"64,64";s:4:"name";s:11:"remote_name";s:6:"needed";s:1:"1";}}i:3;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:13:",,,install_id";s:5:"label";s:10:"Install ID";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:24:"40,32,/^[a-f0-9]{0,32}$/";s:4:"name";s:10:"install_id";s:4:"help";s:75:"The install ID of an instance can be found under Admin > Site configuration";}}i:4;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:16:",,,config_passwd";s:5:"label";s:8:"Password";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"40,32";s:4:"name";s:13:"config_passwd";s:4:"help";s:51:"Config password or md5 hash from the header.inc.php";}}i:5;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:4:"Hash";}s:1:"B";a:2:{s:4:"type";s:5:"label";s:4:"name";s:11:"remote_hash";}}i:6;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:13:",,,remote_url";s:5:"label";s:3:"URL";}s:1:"B";a:5:{s:4:"type";s:4:"text";s:4:"size";s:62:"64,128,/^https?:\\/\\/[a-z0-9._-]+(\\:[0-9]+)?(\\/[a-z0-9._-]+)*$/";s:4:"name";s:10:"remote_url";s:6:"needed";s:1:"1";s:4:"help";s:68:"URL of the eGroupWare installation, eg. http://domain.com/egroupware";}}i:7;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:16:",,,remote_domain";s:5:"label";s:8:"Instance";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"size";s:5:"64,64";s:4:"name";s:13:"remote_domain";s:4:"help";s:44:"Name of the eGroupWare instance, eg. default";}}i:8;a:2:{s:1:"A";a:6:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"3";i:1;a:4:{s:4:"type";s:6:"button";s:5:"label";s:4:"Save";s:4:"name";s:12:"button[save]";s:4:"help";s:16:"Saves this entry";}s:4:"span";s:3:"all";i:2;a:4:{s:4:"type";s:6:"button";s:4:"name";s:13:"button[apply]";s:5:"label";s:5:"Apply";s:4:"help";s:17:"Apply the changes";}i:3;a:4:{s:4:"type";s:6:"button";s:5:"label";s:6:"Cancel";s:4:"name";s:14:"button[cancel]";s:4:"help";s:31:"leave without saveing the entry";}}s:1:"B";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:8;s:4:"cols";i:2;}}','size' => '','style' => '','modified' => '1195927476',);

$templ_data[] = array('name' => 'admin.remotes.header_right','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:7:{s:4:"type";s:6:"button";s:4:"data";a:2:{i:0;a:0:{}i:1;a:1:{s:1:"A";a:1:{s:4:"type";s:5:"label";}}}s:4:"rows";i:1;s:4:"cols";i:1;s:4:"name";s:3:"add";s:5:"label";s:3:"Add";s:4:"help";s:25:"Add a new remote instance";}}','size' => '','style' => '','modified' => '1195931282',);

$templ_data[] = array('name' => 'admin.remotes.rows','template' => '','lang' => '','group' => '0','version' => '1.5.001','data' => 'a:1:{i:0;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:3:{i:0;a:2:{s:2:"c1";s:2:"th";s:2:"c2";s:3:"row";}i:1;a:4:{s:1:"A";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:4:"Name";s:4:"name";s:11:"remote_name";}s:1:"B";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:3:"URL";s:4:"name";s:10:"remote_url";}s:1:"C";a:3:{s:4:"type";s:20:"nextmatch-sortheader";s:5:"label";s:8:"Instance";s:4:"name";s:13:"remote_domain";}s:1:"D";a:2:{s:4:"type";s:5:"label";s:5:"label";s:7:"Actions";}}i:2;a:4:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:4:"name";s:19:"${row}[remote_name]";}s:1:"B";a:3:{s:4:"type";s:5:"label";s:4:"size";s:64:",$row_cont[remote_url]/?domain=$row_cont[remote_domain],,,_blank";s:4:"name";s:18:"${row}[remote_url]";}s:1:"C";a:3:{s:4:"type";s:5:"label";s:4:"name";s:21:"${row}[remote_domain]";s:7:"no_lang";s:1:"1";}s:1:"D";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"1";i:1;a:5:{s:4:"type";s:6:"button";s:4:"size";s:4:"edit";s:5:"label";s:4:"Edit";s:4:"name";s:26:"edit[$row_cont[remote_id]]";i:1;a:1:{s:4:"type";s:4:"hbox";}}s:5:"align";s:6:"center";}}}s:4:"rows";i:2;s:4:"cols";i:4;}}','size' => '','style' => '','modified' => '1195925625',);

$templ_data[] = array('name' => 'admin.statistics','template' => '','lang' => '','group' => '0','version' => '1.7.001','data' => 'a:2:{i:0;a:9:{s:4:"type";s:8:"groupbox";s:4:"size";s:1:"5";s:4:"span";s:10:"all,bigger";s:5:"label";s:35:"Official EGroupware usage statistic";i:1;a:2:{s:4:"type";s:5:"label";s:5:"label";s:131:"We ask for the data to improve our profile in the press and to get a better understanding of EGroupware\'s user base and it\'s needs.";}i:2;a:4:{s:4:"type";s:4:"html";s:5:"label";s:63:"The cumulated and anonymised data will be publically available:";i:1;a:2:{s:4:"type";s:4:"vbox";s:5:"label";s:44:"The statistics will be publically available:";}s:4:"name";s:13:"statistic_url";}i:3;a:3:{s:4:"type";s:5:"label";s:5:"label";s:91:"We hope you understand the importance for this voluntary statistic and not deny it lightly.";s:4:"span";s:5:",bold";}i:4;a:3:{s:4:"type";s:5:"label";s:5:"label";s:61:"Only below displayed information is directly submitted to %s.";s:4:"name";s:11:"submit_host";}i:5;a:4:{s:4:"type";s:4:"text";s:5:"label";s:104:"To allow us to track the growth of your individual installation use this submit ID, otherwise delete it:";s:4:"name";s:9:"submit_id";s:4:"size";s:5:"40,40";}}i:1;a:4:{s:4:"type";s:4:"grid";s:4:"data";a:14:{i:0;a:4:{s:1:"A";s:3:"140";s:3:"c10";s:4:",top";s:3:"h11";s:17:",!@last_submitted";s:3:"h12";s:6:",!@msg";}i:1;a:2:{s:1:"A";a:1:{s:4:"type";s:5:"label";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:2;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:10:",,,country";s:5:"label";s:7:"Country";}s:1:"B";a:3:{s:4:"type";s:14:"select-country";s:4:"name";s:7:"country";s:4:"size";s:17:"International use";}}i:3;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:5:"label";s:5:"Usage";s:4:"size";s:13:",,,usage_type";}s:1:"B";a:2:{s:4:"type";s:6:"select";s:4:"name";s:10:"usage_type";}}i:4;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:5:"label";s:15:"Number of users";s:4:"size";s:8:",,,users";}s:1:"B";a:5:{s:4:"type";s:4:"text";s:4:"name";s:5:"users";s:4:"help";s:22:"number of active users";s:4:"size";s:2:"-8";s:8:"readonly";s:1:"1";}}i:5;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:11:",,,sessions";s:5:"label";s:21:"Sessions last 30 days";}s:1:"B";a:5:{s:4:"type";s:4:"text";s:4:"name";s:8:"sessions";s:4:"help";s:58:"Number of sessions / EGroupware logins in the last 30 days";s:4:"size";s:2:"-8";s:8:"readonly";s:1:"1";}}i:6;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:18:"EGroupware Version";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:7:"version";s:4:"size";s:2:"-8";s:8:"readonly";s:1:"1";}}i:7;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:16:"Operating System";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:2:"os";s:4:"size";s:3:"-40";s:8:"readonly";s:1:"1";}}i:8;a:2:{s:1:"A";a:3:{s:4:"type";s:5:"label";s:4:"size";s:6:",,,php";s:5:"label";s:11:"PHP Version";}s:1:"B";a:4:{s:4:"type";s:4:"text";s:4:"name";s:3:"php";s:4:"size";s:3:"-20";s:8:"readonly";s:1:"1";}}i:9;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:17:"Installation Type";}s:1:"B";a:2:{s:4:"type";s:6:"select";s:4:"name";s:12:"install_type";}}i:10;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:12:"Applications";}s:1:"B";a:4:{s:4:"type";s:8:"textarea";s:4:"size";s:5:"10,40";s:4:"name";s:4:"apps";s:4:"help";s:80:"Installed applications, percentage of allowed users and total number of entries.";}}i:11;a:2:{s:1:"A";a:2:{s:4:"type";s:5:"label";s:5:"label";s:16:"Last submission:";}s:1:"B";a:3:{s:4:"type";s:9:"date-time";s:8:"readonly";s:1:"1";s:4:"name";s:14:"last_submitted";}}i:12;a:2:{s:1:"A";a:4:{s:4:"type";s:5:"label";s:4:"span";s:13:"all,redItalic";s:5:"align";s:6:"center";s:4:"name";s:3:"msg";}s:1:"B";a:1:{s:4:"type";s:5:"label";}}i:13;a:2:{s:1:"A";a:5:{s:4:"type";s:6:"button";s:5:"label";s:6:"Submit";s:4:"help";s:24:"Submit to egroupware.org";s:7:"onclick";s:14:"$cont[onclick]";s:4:"name";s:6:"submit";}s:1:"B";a:4:{s:4:"type";s:4:"hbox";s:4:"size";s:1:"2";i:1;a:4:{s:4:"type";s:6:"select";s:4:"name";s:8:"postpone";s:4:"size";s:12:"Postpone for";s:8:"onchange";i:1;}i:2;a:5:{s:4:"type";s:6:"button";s:4:"name";s:6:"cancel";s:5:"label";s:6:"Cancel";s:4:"help";s:84:"Go directly to admin menu, returning here the next time you click on administration.";s:5:"align";s:5:"right";}}}}s:4:"rows";i:13;s:4:"cols";i:2;}}','size' => '','style' => '.bold { font-weight: bold; }
fieldset.bigger legend { 
  font-weight: bold; 
  font-size: 125%; 
  padding-left: 5px; 
  padding-right: 5px;
}','modified' => '1257091720',);

