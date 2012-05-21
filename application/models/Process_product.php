<?php 
class Process_product extends CI_Model {
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}
	/**
	*Return mảng 2 chiều(bảng) tất cả các sản phẩm
	*/

	public function getallproduct() {
		$result=$this->db->query('SELECT * FROM product');
		return $result->result_array();
	}

	/**
	*Lấy thông tin sản phẩm 
	*Return mảng chứa thông tin sản phẩm và thông tin khuyến mãi của sản phẩm
	*/

	public function getproduct($id) {
		$result=$this->db->query("SELECT product.product_id,image,status,date_available,price,rent_id,date_added,date_modifile,viewed,sort,quantity,name,serial,description,meta_keyword,product_discount_id,quantity_discount,date_start,date_and,detail FROM product LEFT JOIN product_discount  ON product.product_id=product_discount.product_id WHERE (product.product_id=".$id.") AND (product.status=1)");
		return $result->result_array();
	}

	/**
	*@param start vị trí bắt đầu lấy bản ghi
	*@param display số lượng bản ghi lấy
	*Lấy sản phẩm từ vị trí $start số lượng $display
	*/
	public function getproduct_limit($start,$display) {
		$result=$this->db->query("SELECT product.product_id,image,status,date_available,price,rent_id,date_added,date_modifile,viewed,sort,quantity,name,serial,description,meta_keyword,date_start,date_and,detail FROM product LEFT JOIN product_discount ON product.product_id=product_discount.product_id WHERE product.status=1 LIMIT ".$start.",".$display);
		return $result->result_array();
	}

	/**
	*Lấy sản phẩm theo mã sản phẩm
	*@param id mã san phẩm cần lấy 
	*/	
	public function getproduct_category($id) {
		$result=$this->db->query("SELECT product.product_id,category_id,image,status,date_available,price,rent_id,date_added,date_modifile,viewed,sort,quantity,name,serial,description,meta_keyword FROM product_category INNER JOIN product ON product_category.product_id=product.product_id WHERE (product_category.category_id=".$id.") AND (product.status=1)");
		return $result->result_array();
	}

	/**
	*@param start vị trí bắt đầu lấy bản ghi
	*@param display số lượng bản ghi lấy
	*Lấy sản phẩm và thể loại sản phẩm từ vị trí $start số lượng $display
	*/

	public function getproduct_category_limit($id,$start,$display) {
		$result=$this->db->query("SELECT product.product_id,category_id,image,status,date_available,price,rent_id,date_added,date_modifile,viewed,sort,quantity,name,serial,description,meta_keyword,product_discount_id,quantity_discount	date_start,date_and,detail FROM product_category INNER JOIN product ON product_category.product_id=product.product_id LEFT JOIN product_discount ON product.product_id=product_discount.product_id WHERE (product_category.category_id=".$id.") AND (product.status=1) LIMIT ".$start.",".$display);
		return $result->result_array();
	}

	/**
	*Lấy thuộc tính của sản phẩm theo mã sản phẩm
	*@param id mã sản phẩm cần lấy 
	*/	

	public function getproperty($id) {
		$result=$this->db->query("SELECT * FROM product_property INNER JOIN property ON product_property.property_id=property.property_id WHERE product_id=".$id." ORDER BY property.sort asc");
		return $result->result_array();
	}

	/**
	*Lấy sản phẩm giảm giá
	*/	

	public function getproduct_discount()
	{
		$result=$this->db->query("SELECT product.product_id,image,status,date_available,price,rent_id,date_added,date_modifile,viewed,sort,quantity,name,serial,description,meta_keyword,date_start,date_and,detail FROM product INNER JOIN product_discount ON product.product_id=product_discount.product_id WHERE product.status=1");
		return $result->result_array();	
	}

	/**
	*@param start vị trí bắt đầu lấy bản ghi
	*@param display số lượng bản ghi lấy
	*Lấy sản phẩm giảm giá từ vị trí $start số lượng $display
	*/

	public function getproduct_discount_limit($start,$display)
	{
		$result=$this->db->query("SELECT product.product_id,image,status,date_available,price,rent_id,date_added,date_modifile,viewed,sort,quantity,name,serial,description,meta_keyword,date_start,date_and,detail FROM product INNER JOIN product_discount ON product.product_id=product_discount.product_id LIMIT ".$start.",".$display);
		return $result->result_array();	
	}
}