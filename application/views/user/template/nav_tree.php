<?php 
	echo "<div id='category_tree' style='width:100%; margin:10px 5px 30px 10px;'>";
		echo "<a href='".base_url()."Product/list_product/1' title=''>Trang chủ &gt;&gt; </a> ";
	if($parent_current_category!=false) {
		echo "<a href='".base_url()."Product/list_product/".$parent_current_category[0]['category_id']."' title=''>".$parent_current_category[0]['name']." &gt;&gt; </a> ";

	}
	if ($detail_product==false) {
		echo "<a href='".base_url()."Product/list_product/".$current_category[0]['category_id']."' title=''>".$current_category[0]['name']."</a> ";
	}
	else {
		echo "<a href='".base_url()."Product/list_product/".$current_category[0]['category_id']."' title=''>".$current_category[0]['name']." &gt;&gt; </a> ";
		echo "<a href='".base_url()."Product/view_product/".$detail_product[0]['product_id']."' title=''>".$detail_product[0]['name']."</a> ";
	}
	echo "</div><!-- / -->";
 ?>