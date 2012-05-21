<?php
	$category= array();
	for($i=0;$i<count($result_category);$i++)
		{
			if($result_category[$i]['farther_category_id']==0 || is_null($result_category[$i]['farther_category_id'])==true)
			{

				$category[count($category)] =$result_category[$i];
			}
		}
?>

<div id="header">
		<div id="logo">
	
		</div>
		<div id="nav_main">
			<ul id="nav_top">
				<?php 
					$i=0;
					while($i<count($category)){
						echo "<li class='menu_item' id='".$category[$i]['category_id']."'><a href='".base_url()."Product/list_product/".$category[$i]['category_id']."'>".$category[$i]['name']."</a> <ul class='dropdown_menu_hoz'>";
						$j=0;
						while ($j<count($result_category)) {
							if($result_category[$j]['farther_category_id']==$category[$i]['category_id'])
								{
									echo "<li><a href=".base_url()."Product/list_product/".$result_category[$j]['category_id'].">".$result_category[$j]['name']."</a></li>";
								}
							$j++;
						}
						echo "</ul></li>";
						$i++;
					}
				 ?>
			</ul>
			<div id="search">
				<?php echo form_open('#',array('method'=>'get','id'=>'form_search'));?>
				<input type="text" placeholder="Nhập vào thông tin cần tìm kiếm..." id="key" name="key"/>
				<input type="submit" value="" id="btn_search"/>
			</div>
		</div>
		<div id="banner_top">

		</div>
	</div>