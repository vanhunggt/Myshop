
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/main_page.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/tab.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>application/template/css/stickytooltip.css"/>	
<script type="text/javascript" src="<?php echo base_url();?>application/template/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/template/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/template/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>application/template/js/stickytooltip.js"></script>
</head>
<body>
<div id="wrapper">
	<?php include('template/header.php'); ?>
	<div id="content">
		<div id="nav_content">
			<input type="button" name="" value="Sản phẩm khuyến mãi" class='item_content' id='tab1'>
			<input type="button" name="" value="Sản phẩm bán mới" class='item_content' id='tab2'>
			<input type="button" name="" value="Sản phẩm bán chạy" class='item_content' id='tab3'>
		<div id="tab1_content" class="tab_content">
			<?php 	
			//Hiện sản phẩm khuyến mãi

				$i=0;
				$sale="";
				while($i< count($product_discount))
				{
					echo "<div id='product".$product_discount[$i]['product_id']."' class='product'>
					<a class='name_product' href='".base_url()."Product/view_product/".$product_discount[$i]['product_id']."' data-tooltip='sticky".$i."'>".$product_discount[$i]['name']."</a>
					<a class='img_product'  href='".base_url()."Product/view_product/".$product_discount[$i]['product_id']."' data-tooltip='sticky".$i."'><img src='".base_url()."application/upload/image/data/".$product_discount[$i]['image']."' alt='".$product_discount[$i]['name']."'></a>";
					$sale=$product_discount[$i]['detail'];
					if(strlen($product_discount[$i]['detail'])>50) {
							$sale=substr($product_discount[$i]['detail'],0,49);
							$pos=strripos($sale," ");
							$sale=substr($sale,0,$pos)."...";
						}	
					echo "<h4 id='sale'>Khuyến mãi: <span style='font-size:12px'> ".$sale."</span></h4>";
					echo "<a class='add_cart' href='#' title='Đặt mua ".$product_discount[$i]['name']."'> Thêm vào giỏ</a>
					<br><span class='price_product'>Giá : ".$product_discount[$i]['price']." VNĐ</span>

					</div><!-- / -->";
					
					$i++;	
				}
			 ?>
			
		</div>
		<div id="tab2_content" class="tab_content">
				<?php 
				// Hiện sản phẩm nổi bật

				$i==0;
				while($i< count($product_new))
				{
					echo "<div id='product".$product_new[$i]['product_id']."' class='product'>
					<a class='name_product' href='".base_url()."Product/view_product/".$product_new[$i]['product_id']."' data-tooltip='sticky".(count($product_discount)+$i)."'>".$product_new[$i]['name']."</a>
					<a class='img_product'  href='".base_url()."Product/view_product/".$product_new[$i]['product_id']."' data-tooltip='sticky".(count($product_discount)+$i)."'><img src='".base_url()."application/upload/image/data/".$product_new[$i]['image']."' alt='".$product_new[$i]['name']."'></a>";
					if(strlen($product_new[$i]['detail'])>0) {
						if(strlen($product_new[$i]['detail'])>50) {
							$sale=substr($product_new[$i]['detail'],0,49);
							$pos=strripos($sale," ");
							$sale=substr($sale,0,$pos)."...";
							
						}	
						echo "<h4 id='sale'>Khuyến mãi: <span style='font-size:12px'> ".$sale."</span></h4>";
					}
					
					echo "<a class='add_cart' href='#' title='Đặt mua ".$product_new[$i]['name']."'> Thêm vào giỏ</a>
					<br><span class='price_product'>Giá bán : ".$product_new[$i]['price']." VNĐ</span>

					</div><!-- / -->";

					$i++;	
				}
			 ?>
		</div>
		<div id="tab3_content" class="tab_content">
				
		</div>


		<?php 
		//Show tooltip 

			echo "<!-- / tooltip --> <div id='mystickytooltip' class='stickytooltip'>";
			$i=0;
			While($i<(count($product_discount)+count($product_new))){
				if($i<count($product_discount)) {	
					echo "<div id='sticky".$i."' class='atip'><h3>".$product_discount[$i]['name']."</h3> <img src='".base_url()."application/upload/image/data/".$product_discount[$i]['image']."'>";
						echo "<br><span style='font-size:12px; color:#ff0000'> <span style='font-weight:bold'>Khuyến mãi: </span>".$product_discount[$i]['detail']."</span> ";
						echo " <br><span class='title' style='font-weight:bold;'>Mô tả :</span> ".$product_discount[$i]['description']."</div> ";
				}
				else {
					echo "<div id='sticky".$i."' class='atip'><h3>".$product_new[$i-1]['name']."</h3> <img src='".base_url()."application/upload/image/data/".$product_new[$i-1]['image']."'>";
					if(is_null($product_new[$i-1]['detail'])==false) {
						echo "<br><span style='font-size:12px; color:#ff0000'> <span style='font-weight:bold'>Khuyến mãi: </span>".$product_new[$i-1]['detail']."</span> ";
					}
					echo " <br><span class='title' style='font-weight:bold;'>Mô tả :</span> ".$product_new[$i-1]['description']."</div> ";
				}
				$i++;				
			}	
			echo "</div> <!-- / end tooltip -->";

		 ?>

	</div>
</div>

</body>

</html>