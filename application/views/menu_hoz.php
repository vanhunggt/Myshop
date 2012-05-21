<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
ul,li {list-style-type:none;}
a { text-decoration:none}
li:hover {text-decoration:underline}
div#menu {width:300px;}
div#menu ul li {float:left; border:1px solid; margin-left:0px;padding-left:0px; }

div#menu_sub_dt_vt,div#menu_sub_dt,div#menu_sub_vt {
	display:none;}
div#menu_sub_dt_vt  {
	width:150px;
}	
div#menu_sub_dt_vt ul { float:left; clear:left; padding:0px;}
div#menu_sub_dt_vt ul li {}
div#menu_sub_dt { position:absolute;margin-left:150px; top:-1px; }
div#menu_sub_dt ul {}
div#menu_sub_dt ul li {float:left; clear:left;width:150px;}

div#menu_vt {}
div#menu_sub_vt {position:absolute;margin-left:150px;}
div#menu_sub_vt ul {position:relative;}
div#menu_sub_vt ul li {float:left; clear:left}

</style>
<script type="text/javascript">	
function show_child_menu(elem)
{
	//document.getElementById(elem).style.display='block';
	//var c =document.getElementById(elem).childNodes;
	//c[0].style.display='block';
	document.getElementById(elem).style.backgroundColor='#999999';
	document.getElementById(elem).childNodes.item(2).style.display='block';
	}
function noshow_child_menu(elem)
{
	//document.getElementById(elem).lastChild.style.display='none';
	document.getElementById(elem).style.backgroundColor='#FFFFFF';
	document.getElementById(elem).childNodes.item(2).style.display='none';
	}
</script> 
</head>

<body>
<div id="menu">
	<ul>
    	<li style="width:50px;"><a href="#">Home</a></li>
        <li id='menu_dt_vt' style="width:150px;" onmouseover="show_child_menu(this.id)" onmouseout="noshow_child_menu(this.id)"><a href="#">Điện thoại, viễn thông</a>
        	<div id='menu_sub_dt_vt' style="width:100%; left:0px;">
            	<ul>
                	<li id='menu_dt' onmouseover="show_child_menu(this.id)" onmouseout="noshow_child_menu(this.id)" ><a href="#">Phụ kiện điện thoại</a>
                    	<div id="menu_sub_dt">
                        	<ul>
                            	<li><a href="#">Bao da</a></li>
                                <li><a href="#">Ốp lưng</a></li>
                                <li><a href="#">Pin điện thoại</a></li>
                            </ul>
                        </div>
                    </li>
                    <li id='menu_vt' onmouseover="show_child_menu(this.id)" onmouseout="noshow_child_menu(this.id)"><a href="#">Viễn Thông</a>
                    	<div id='menu_sub_vt'>
                        	<ul>
                            	<li><a href="#">Dịch vụ 3G</a></li>
                                <li><a href="#">Dịch vụ Ringtone</a></li>
                            </ul>
                        </div>
                     </li>   
                </ul>
            </div>
        </li>    
    </ul>
</div>

</body>
</html>