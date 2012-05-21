<?php 
class Category extends CI_Model {
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function getcategory() {
		$this->db->select('category_id,farther_category_id,status,sort,status,name');
		$this->db->order_by("sort asc"); 
		$this->db->where('status','1'); 
		$query=$this->db->get('category');
		return $query->result_array();		
	}

	public function getcategory_id($col,$value) {
		$this->db->select('category_id,name,farther_category_id');
		$this->db->where("$col","$value");
		$query=$this->db->get('category');
		return $query->result_array();	
	}
	public function getcategory_product($id) {
		$result=$this->db->query("SELECT product.product_id,category_id FROM product_category INNER JOIN product ON product_category.product_id=product.product_id WHERE product.product_id=".$id);
		return $result->result_array();
	}

}
 ?>