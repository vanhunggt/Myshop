<?php 
	$display=$post_display;
	if( $num_product> $display)
	{
		$page=ceil($num_product/$display);
	}
	else {
		$page=1;
	}
	$start= (isset($post_start) &&  (int)$post_start>=0)? $post_start : 0;
	if($page > 1) {
		$next=$start+$display;
		$prev=$start-$display;
		$current=ceil($start/$display)+1;
		//Hiện thị trang previous
		echo "<li><a href='".base_url()."Product/list_product/".$id."/0'>Đầu</a></li>";
		if($current!=1) {
			echo "<li><a href='".base_url()."Product/list_product/".$id."/".$prev."'>Trước</a></li>";
		}
		
		//Hiện thị  trang hiện tại
		echo "<li style='font-weight:bold'><< ".$current." >></li>";
			
		//Hiện thị next
		if($current!=$page) {
			echo "<li><a href='".base_url()."Product/list_product/".$id."/".$next."'>Sau</a></li>";
		}
		echo "<li><a href='".base_url()."Product/list_product/".$id."/".($page-1)."'>Cuối</a></li>";
		echo "<span id='go_page'>Tới trang  ";
		echo "<select id='select_page' name='select_page' onchange='selectpage(this.value)'>";
		for($i=1;$i<=$page;$i++) {
			echo "<option value='".$i."'>".$i."</option>";
		}	
		echo "</select></span>";
		
	}
 ?>
 <script type="text/javascript">
	 document.getElementById("select_page").value = <?php echo $current?>;
 	function selectpage(num_page) {

		window.location="http://localhost/Myshop/index.php/Product/list_product/<?php echo $id.'/';?>"+((num_page-1)*12);
		//document.getElementById("select_page").option[<?php echo $current?>].selected=true;

	}
 </script>
