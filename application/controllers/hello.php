<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

class Hello extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->helper("url");
	}
	public function index() {
	//	$this->login();
	$this->load->helper(array('form', 'url'));
	$this->mainpage();
	 
	//$this->load->view("user/homepage",$data);
			}
	public function login() {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['title']="Demo codeIgniter";
			$this->load->view("login",$data);  				
		}
		else{
			$this->login1();
		}
	}
	public function login1(){
		$this->load->Model('Mlogin');
		$data=$this->Mlogin->process($this->input->post('username'));
		if(count($data)==0)
		{
		 ?>
				<script type="text/javascript">
					window.alert('Tài khoản không tồn tại!')
					window.location="<?php echo base_url();?>index.php/hello";
				</script><?php 
		}
		else{
			print_r($data);
			if($data[0]['user_group_id']!=1)
			{
				?>
				<script type="text/javascript">
					window.alert('Bạn không có quyền truy cập vào trang này. Hãy thử tài khoản khác')
					window.location="<?php echo base_url();?>index.php/hello";
				</script><?php 
			}
			else if($data[0]['pass_user']==$this->input->post('password')) {
				echo "Bạn đã đăng nhập thành công!";
			}
			else {?>
				<script type="text/javascript">
					window.alert('Tài khoản hoặc password không chính xác! hãy thử lại.')
					window.location="<?php echo base_url();?>/index.php/hello";
				</script>
			<?php }
			
			}
	}
	
	// xử lý data cho vào view
	public function mainpage () {	
		$this->load->Model('Category');
		$this->load->Model('Process_product');

		$data['result_category']=$this->Category->getcategory();
		$data['product_new']=$this->Process_product->getproduct_limit(0,9);
		$data['product_discount']=$this->Process_product->getproduct_discount_limit(0,9);
		$this->load->view('user/homepage',$data);
	}

}
