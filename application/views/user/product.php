
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/main_page.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/listproduct.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/stickytooltip.css"/>	
<script type="text/javascript" src="<?php echo base_url();?>application/template/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/template/js/stickytooltip.js"></script>
</style>
</head>
<body>
	<div id="wrapper">
		<?php include('template/header.php'); ?>

		<div id="content">
					<?php include('template/nav_tree.php');?>
			<div id="list_product">
				<?php 

				//in ra danh sách sản phẩm
				$i=0;
				while ($i<count($product)) {
					$sale="";
					if(strlen($product[$i]['detail'])!=0) {
						if(strlen($product[$i]['detail'])<=50) {
				 			$sale=$product[$i]['detail'];
						}
						else {
						$sale=substr($product[$i]['detail'],0,49);
						$pos=strripos($sale," ");
						$sale=substr($sale,0,$pos)."...";
						}
					}	
					else {
						$sale="No";
						$product[$i]['detail']="No";
					}
					echo "
						<div class='product_view'>
						<a class='name_product' href='".base_url()."Product/view_product/".$product[$i]['product_id']."' data-tooltip='sticky".$i."'>".$product[$i]['name']."</a>
							<a href='".base_url()."Product/view_product/".$product[$i]['product_id']."'><img src='".base_url()."application/upload/image/data/".$product[$i]['image']."' data-tooltip='sticky".$i."' alt='".$product[$i]['name']."'></a>
							<div class='detail_view'>";
							if($sale!="No"){
									echo "<h4 id='sale'>Khuyến mãi: <span style='font-size:12px'> ".$sale."</span></h4>";
							}
							echo "
							</div><!-- end div hien thi thong tin mo ta san pham/ -->
							<div class='order_product'>
								<h4 id='price_product'>Giá:".$product[$i]['price']." VNĐ</h4>
								<a class='add_cart' href='".base_url()."Product/shopping_cart/".$product[$i]['product_id']."' title='Đặt mua ".$product[$i]['name']."'> Thêm vào giỏ</a>
							</div><!-- / -->
						</div><!-- / end div hien thi san pham-->";
						$i++;
					}
				echo "<!-- / tooltip -->
							<div id='mystickytooltip' class='stickytooltip'>";

				//Thiết lập tooltip			
				$i=0;
				while ($i<count($product)) {
					echo "<div id='sticky".$i."' class='atip'><h3>".$product[$i]['name']."</h3> <img src='".base_url()."application/upload/image/data/".$product[$i]['image']."'>";
					if($product[$i]['detail']!="No") {
						echo "<br><span style='font-size:12px; color:#ff0000'> <span style='font-weight:bold'>Khuyến mãi: </span>".$product[$i]['detail']."</span> ";
					}
					echo " <br><span class='title' style='font-weight:bold;'>Mô tả :</span> ".$product[$i]['description']."</div> ";
					$i++;
				}
				echo "</div> <!-- / end tooltip -->";				
		 ?>
			</div><!-- End list_product/ -->
			<div id="nav_page">
				<?php include('paging.php');?>
			</div><!-- End nav_page/ -->
		</div><!-- End content/ -->
	</div><!-- End wraprer-->
</body>
</html>