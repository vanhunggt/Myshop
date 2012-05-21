<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/main_page.css"/>
	<script type="text/javascript" src="<?php echo base_url();?>application/template/js/jquery.js"></script>
	<style type="text/css" media="screen">
	#content {
		position:absolute;
		top:475px;
		border:1px solid;
		height:820px;
		width:100%;
		float: left;
   	}
 	#img_product {
 		width=250px;
 		float: left;
 		padding: 20px;
 	}
 	#img_product img {
 		width:300px;
 		height:200px;
 	}
 	a.add_cart {
		background-color: #006dcc;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		font-size:12px;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
		color: #ffffff;
		background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
		background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
		background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
		background-image: -o-linear-gradient(top, #0088cc, #0044cc);
		background-image: linear-gradient(top, #0088cc, #0044cc);
		background-repeat: repeat-x;
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
		border-color: #0044cc #0044cc #002a80;
		border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
		padding: 10px 10px 10px 10px ;
		margin: auto;

 	}
 	table#property {
 		width:500px;
 	}
 	#view_product {
 		width:100%;
 		height:250px;
 	}
 	#nav_tab {
 		width:95%;
 		float: left;
 		margin: 20px 20px -1px 20px;

 	
 	}
 	#nav_tab  input {
 		position: relative;
 		width:200px;
 		height:40px;
 		 background-color: #006dcc;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
		border-radius: 5px 5px 0px 0px;
		font-size:15px;
		text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  		color: #ffffff;
  		background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
 		background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
  		background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
  		background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
  		background-image: -o-linear-gradient(top, #0088cc, #0044cc);
  		background-image: linear-gradient(top, #0088cc, #0044cc);
  		background-repeat: repeat-x;
  		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
  		border-color: #0044cc #0044cc #002a80;
	  	border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
	  	filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
 		z-index:1999;
 		cursor: pointer;
 	}
 	#tab {
 		position: absolute;
 		width:100%;
 	}
 	#tab_property,#tab_description {
 		position: absolute;
 		top:60px;
 		width:92%;
 		margin: 0px 20px auto;
 		padding: 20px;
 		z-index:2000;
 		border:1px solid;
 		height:400px;
 		border-radius: 0px 10px 10px 10px;

 		
 	}
 	#tab_property table {
 		width:100%;
 		-webkit-box-shadow: 0px 0px 5px 5px;
		-webkit-border-radius: 5px;
		-moz-border-radius: 5px;
 	}


 	#category_tree a {
	color: #ff0000;
	}

	</style>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function(e) { 
			$("#tab_description").css("display","block");
			$("#tab_property").css("display","none");
			show_tab("#nav_tab_description");
			show_tab("#nav_tab_property");
		});
		function show_tab(elem) {
			$(elem).click(function(e) {
			if(elem=="#nav_tab_description")
			{
				$("#tab_description").css("display","block");
				$("#tab_property").css("display","none");
				}	
			if(elem=="#nav_tab_property")
			{
				$("#tab_description").css("display","none");
				$("#tab_property").css("display","block");
			}	
		});
		}
	</script>
</head>
	
<body>
	<div id="wrapper">
		<?php include('template/header.php'); ?>
		<div id="content">
			<?php include("template/nav_tree.php")?>
			<div id="view_product" >
				<div id="img_product">
					<img src="<?php
					 echo base_url()."application/upload/image/data/".$detail_product[0]['image']; ?>" alt="<?php echo $detail_product[0]['name'];?>">
				</div><!-- End img_product/ -->
				<div id="detail_product">
					 <h3><?php echo $detail_product[0]['name'];?></h3>
					 <h4>Giá:  <?php echo $detail_product[0]['price'];?> VNĐ</h4>
					 <p> Khuyến mãi: <span style='color:#ff0000'> <?php
					 	if(strlen($detail_product[0]['detail'])==0) {
							$detail_product[0]['detail']="Hiện tại không có ";
						}
						 echo $detail_product[0]['detail']; ?> </span></p> 
						 <a class='add_cart' href='#' title='Đặt mua <?php echo $detail_product[0]['name']; ?>'> Thêm vào giỏ</a>
					
				</div><!-- / -->
			</div><!-- End detail_product/ -->

			<div id="tab">
				<div id="nav_tab">
					<input type="button" id='nav_tab_description' name="description" value="Mô tả">
					<input type="button" id='nav_tab_property'name="property" value="Thông số kỹ thuật">
				</div><!-- / -->
			
				<div id="tab_description">
					<?php echo $detail_product[0]['description'];?>
				</div><!-- / -->
				<div id="tab_property">
					<?php 
						if( count($property_product)!=0) {
							echo "<table id='property' cellspacing='5px' cellpadding='5px'>";
							$i=0;
							while ( $i < count($property_product)) {
							echo "<tr>
								<td width='15%' style='text-align:center'>".$property_product[$i]['name_property']."</td>
								<td>".$property_product[$i]['text']."</td>
							</tr>";
							$i++;
						}
						echo "</table>";

					}
				 ?>
				</div><!-- End tab_property/ -->
			</div><!-- END tab / -->
			
		</div><!--End content -->
	</div><!-- End wraper/ -->
	
</body>
</html>