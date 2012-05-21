<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php 

class Product extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
    $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    $this->load->library('cart');
	}

   public function index() {
   	}

  /**
  *Hiện Hiện thị danh sách sản phảm
  * @param  id mã sản phảm
  * @param start vị trí sản phẩm 
  * @param display số lượng sản phẩm trong 1 trang
  */
   public function list_product($id,$start=0,$display=12) {
    $data['post_display']=$display;
    $data['post_start']=$start;
    $data['id']=$id;
    $this->load->Model('Category');
    $this->load->Model('Process_product');
    $data['result_category']=$this->Category->getcategory();
    $data['current_category']=$this->Category->getcategory_id("category_id",$id);
     $data['parent_current_category']=false;
     $data['detail_product']=false;
    if($data['current_category'][0]['farther_category_id']!="0" || is_null($data['current_category'][0]['farther_category_id'])==false) {
      $data['parent_current_category']=$this->Category->getcategory_id("category_id",$data['current_category'][0]['farther_category_id']);
    }
    if($id==1)
    {
    $data['product_new']=$this->Process_product->getproduct_limit(0,9);
    $data['product_discount']=$this->Process_product->getproduct_discount();
     $this->load->view('user/homepage',$data);

    }
   	else {
      $data['num_product']=count($this->Process_product->getproduct_category($id));
      $data['product']=$this->Process_product->getproduct_category_limit($id,$start,$display);
      $this->load->view('user/product',$data);
    }  		
  }

  /**
  * Hiện thị chi tiết sản phẩm
  * @param int id mã sản phẩm
  */
  public function view_product($id) {
    $this->load->Model('Category');
    $this->load->Model('Process_product');
    $data['result_category']=$this->Category->getcategory();
    $category_id=$this->Category->getcategory_product($id);
    $data['current_category_demo'][0]=$this->Category->getcategory_id("category_id", $category_id[0]['category_id']);
    $data['current_category_demo'][1]=$this->Category->getcategory_id("category_id", $category_id[1]['category_id']);
    $data['current_category']= $data['current_category']= $data['current_category_demo'][1][0];
    $data['parent_current_category']=false;
    for ($i=0; $i < 2; $i++) { 
      # code...
       if($data['current_category_demo'][$i][0]['farther_category_id']!="0" || is_null($data['current_category_demo'][$i][0]['farther_category_id'])==false) {
          $data['parent_current_category']=$this->Category->getcategory_id("category_id",$data['current_category_demo'][$i][0]['farther_category_id']);
          $data['current_category']= $data['current_category_demo'][$i];
       }
    }   
    $data['detail_product']=$this->Process_product->getproduct($id);
    $data['property_product']=$this->Process_product->getproperty($id);
    $this->load->view('user/detail_product',$data);
  }

  /**
  *
  */
  public function shopping_cart($product_id) {

    $this->load->Model('Process_product');
    $data['product_order']=$this->Process_product->getproduct($product_id);
  // var_dump($data['product_order']);
   $this->cart->insert($data['product_order']);
   $this->load->view('user/demoshopping');
   var_dump($this->cart->contents());
  }
}

/* End of file Controllername.php */
/* Location: ./application/controllers/Controllername.php */




 ?>