<?php
class Mlogin extends CI_Model {
	public function  __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function process($user){
		$this->db->select('user_group_id,user_id,pass_user');
		$this->db->where('name_submit',$user);
		$query=$this->db->get('user');
		return $query->result_array();		
	}
}