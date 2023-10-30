<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';

class Admin extends CI_Controller
{

	protected function ov($filename, $data = "")
	{
		if (isset($_SESSION['admin_id'])) {
			$this->load->view('admin/nav');
			$this->load->view("admin/" . $filename, $data);
			$this->load->view('admin/footer');
		} else {
			$this->load->view('admin/login');
		}

	}
	public function index()
	{

		if (isset($_SESSION['admin_id'])) {
			$start_date = date("Y-m-d", strtotime('-1 month'));
			$arr[] = $start_date;
			$i = 1;

			while ($i < 30) {

				$day_date = date("Y-m-d", strtotime($start_date . " +$i days"));
				$arr[] = $day_date;
				if ($day_date == date('Y-m-d'))
					break;
				$i++;

			}

			$daygraph = [];
			for ($i = 0; $i < count($arr); $i++) {
				$daygraph[$i]['date'] = $arr[$i];
				$daygraph[$i]['orders'] = $this->db->query("SELECT COUNT(order_tbl_id) as ttl FROM order_tbl WHERE order_date='" . $arr[$i] . "'")->result_array()[0]['ttl'];

			}

			$data['daygraph'] = $daygraph;
			$data['admin']=$this->My_model->select("admin");
			$data['pending'] = $this->My_model->select_where("order_tbl", ['order_status' => "pending"]);
			$data['dispatch'] = $this->My_model->select_where("order_tbl", ['order_status' => "dispatch"]);
			$data['delivered'] = $this->My_model->select_where("order_tbl", ['order_status' => "delivered"]);
			$data['reject'] = $this->My_model->select_where("order_tbl", ['order_status' => "reject"]);
			$this->ov('index', $data);
		} else {
			$this->load->view('admin/login');
		}


	}
	public function category()
	{
		$data['category_list'] = $this->My_model->select("category");
		$this->ov('category', $data);
	}
	public function save_category()
	{

		$this->My_model->insert("category", $_POST);
		redirect(base_url() . "admin/category");
	}
	public function remove_category($category_id)
	{
		$cond = ['category_id' => $category_id];
		$this->My_model->delete("category", $cond);
		redirect(base_url() . "admin/category");

	}
	public function edit_category($category_id)
	{
		$cond = ['category_id' => $category_id];
		$data['category_list'] = $this->My_model->select_where("category", $cond);
		$this->ov('edit_category', $data);
	}
	public function update_category()
	{
		$cond = ['category_id' => $_POST['category_id']];
		$this->My_model->update("category", $cond, $_POST);
		redirect(base_url() . "admin/category");
	}
	public function add_product()
	{
		$data['category_list'] = $this->My_model->select("category");

		$this->ov("add_product", $data);
	}
	public function upload($key)
	{
		if ($_FILES[$key] != "") {
			//print_r($_FILES[$key]);
			echo $file_name = rand(1111, 9999) . time() . $_FILES[$key]['name'];
			move_uploaded_file($_FILES[$key]['tmp_name'], "uploads/" . $file_name);
			$_POST[$key] = $file_name;
		}

	}
	public function save_product()
	{

		// echo "<pre>";
		// print_r($_POST);
		// print_r($_FILES);
		$this->upload('product_image');
		$this->My_model->insert("product", $_POST);
		redirect(base_url() . "admin/add_product");
	}
	public function product_list()
	{
		//$data['products']=$this->My_model->select('product');
		$data['products'] = $this->db->query("SELECT * FROM product,category WHERE category.category_id=product.product_category")->result_array();
		// select *,category.category_name FROM product  JOIN category ON category.category_id=product.product_category
       
		$this->ov("product_list", $data);
	}
	public function edit_product($product_id)
	{
		$data['category_list'] = $this->My_model->select("category");
		$cond = ['product_id' => $product_id];
		$data['products'] = $this->My_model->select_where("product", $cond);
		$this->ov('edit_product', $data);

	}
	public function update_product()
	{
		$cond = ['product_id' => $_POST['product_id']];

		$this->upload('product_image');

		$this->My_model->update('product', $cond, $_POST);

		print_r($_POST);



		redirect(base_url() . "admin/product_list");

	}
	public function remove_product($product_id)
	{
		$cond = ['product_id' => $product_id];
		$this->My_model->delete("product", $cond);
		redirect(base_url() . "admin/product_list");

	}
	public function pending_orders()
	{

		$data['orders'] = $this->My_model->select_where("order_tbl", ['order_status' => "pending"]);
		$this->ov("pending_orders", $data);
	}
	public function order_details($order_tbl_id)
	{
		$data['order_det'] = $this->My_model->select_where('order_tbl', ["order_tbl_id" => $order_tbl_id]);
		$data['order_product_det'] = $this->My_model->select_where('order_product_tbl', ["order_tbl_id" => $order_tbl_id]);

		$this->ov("order_details", $data);
	}
	public function send_to_dispatch($order_tbl_id)
	{
		//echo $order_tbl_id;

		$data['dispatch_date'] = date('Y-m-d');
		$data['dispatch_time'] = date('H:ia');
		$data['order_status'] = "dispatch";
		$cond['order_tbl_id'] = $order_tbl_id;
		$this->My_model->update("order_tbl", $cond, $data);

		redirect(base_url() . "admin/pending_orders");
	}
	public function send_to_delivered($order_tbl_id)
	{
		$data['delivered_date'] = date('Y-m-d');
		$data['delivered_time'] = date('H:ia');
		$data['order_status'] = "delivered";
		$cond['order_tbl_id'] = $order_tbl_id;
		$this->My_model->update("order_tbl", $cond, $data);

		redirect(base_url() . "admin/dispatch_orders");

	}
	public function dispatch_orders()
	{
		$data['orders'] = $this->My_model->select_where("order_tbl", ['order_status' => "dispatch"]);
		$this->ov("dispatch_orders", $data);
	}
	public function delivered_orders()
	{
		$data['orders'] = $this->My_model->select_where("order_tbl", ['order_status' => "delivered"]);
		$this->ov("delivered_orders", $data);
	}
	public function send_to_reject($order_tbl_id)
	{
		$data['rejected_date'] = date('Y-m-d');
		$data['order_status'] = "rejected";
		$cond['order_tbl_id'] = $order_tbl_id;
		$this->My_model->update("order_tbl", $cond, $data);

		redirect(base_url() . "admin/reject_orders");

	}
	public function reject_orders()
	{
		$data['orders'] = $this->My_model->select_where("order_tbl", ['order_status' => "rejected"]);
		$this->ov("reject_orders", $data);
	}
	public function delete_order($order_tbl_id)
	{
		$cond = ['order_tbl_id' => $order_tbl_id];
		$this->My_model->delete("order_tbl",$cond);
		redirect(base_url() . "admin/product_list");

	}
	public function login()
	{
		$this->load->view('admin/login');
	}

	public function login_process()
	{
		$cond = ["admin" => $_POST['admin'], "password" => $_POST['password']];
		$login = $this->My_model->select_where("admin", $cond);

		if (isset($login[0])) {

			$_SESSION['admin_id'] = $login[0]['admin_id'];
			$_SESSION['admin'] = $login[0]['admin'];
			redirect(base_url() . "admin/index");
		} else {
			//echo "login failed";
			redirect(base_url() . "admin/login");
		}
	}
	public function resister_user()
	{
		//print_r($_POST);
		$this->My_model->insert("admin", $_POST);
		echo "Only Admin can access details";
		redirect(base_url() . "admin/login");

	}
	public function logout()
	{
		session_destroy();
		redirect(base_url() . 'admin/login');

	}
	public function contact()
	{
		$this->ov("contact");
	}
	// public function save_contact()
	// {
	// 	print_r($_POST);
	// 	$this->upload('contact_image');
	// 	$this->My_model->insert("contact",$_POST);
	// }
	public function edit_contact()
	{
        // $this->upload('contact_image');
		$data['contact']=$this->My_model->select('contact');
		$this->ov("edit_contact",$data);
	}
	public function save_edited_contact()
	{
		$this->upload('contact_image');
		$cond=['contact_id'=>$_POST['contact_id']];
		$this->My_model->update('contact',$cond,$_POST);
		redirect(base_url().'admin/edit_contact');
	}
	
	public function print($order_tbl_id)
	{
		$data['order_det'] = $this->My_model->select_where('order_tbl', ["order_tbl_id" => $order_tbl_id]);
		$data['order_product_det'] = $this->My_model->select_where('order_product_tbl', ["order_tbl_id" => $order_tbl_id]);

		$this->ov("order_details", $data);

		// $data["order"]=My_model->select('order_details');
		// $this->ov('printview');
	}
//     function __construct()
//    {
//      parent::__construct();
//    }  

//    function print()
//    {
//     $html=$this->load->view('admin/order','',true);
//     $mpdf = new \Mpdf\Mpdf();
//     $mpdf->WriteHTML($html);
//     $mpdf->Output();
//    }

}