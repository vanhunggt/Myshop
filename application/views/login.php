<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/style.css"/>
</head>

<body>
<div id='login'>
<?php echo form_open(base_url().'index.php/hello/login1',array('id'=>'form_login','name'=>'form_login'));?>
	<p>
		<label>Username</label>
		<?php echo form_input(array('id'=>'username','name'=>'username'));?>
		
	</p>
	<p> 
		<label>Password</label>
		<?php echo form_password(array('id'=>'password','name'=>'password'));?></p>
	<p> <?php echo form_submit(array('id'=>'submit','name'=>'submit','value'=>'Login'))?></p>
</div>

</body>
</html>