<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $title; ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/style.css">

<script type="text/javascript" src="<?php echo base_url();?>application/template/js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {  
	 $("[id=key]").focusin(function(e) {
         $("div#status").slideDown(500);
    });	
	   $("[id=key]").focusout(function(e) {
		    $("div#status").slideUp(500);
    });
    
});

</script>
</head>


<body>
<button class="btn1">Change color of animated element</button>
<br /><br />
<div style="background:blue;">Div 1</div>
<div id="1"> hello world</div>
<div id="23322.org">hung zom</div>
<img id="img1" src="<?php echo base_url();?>application/image/3444549322_c2a61f78f5_o.jpg" alt="image"/>
<br />
<div><input id="key" height="100px" type="text" width="200px">
<div id="status"> Hay nhap vao gia tri </div></div>
</body></html>