<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('FoodModel');
		$food = $this->FoodModel->getfood();
		$data['food'] = $food;

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login2');
	}
	public function food()
	{
		$this->load->model('FoodModel');
		$food = $this->FoodModel->getfood();
		$data['food'] = $food;

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('food', $data);
		$this->load->view('footer');
	}
	public function drink()
	{
		$this->load->model('FoodModel');
		$drink = $this->FoodModel->getdrink();
		$data['drink'] = $drink;

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('drink', $data);
		$this->load->view('footer');
	}

	public function checkLogin(){
		$id  = isset($_POST['id'])?$_POST['id']:"";
		$pass = isset($_POST['password'])?$_POST['password']:"";
		$this->load->model('FoodModel');
		$result = $this->FoodModel->checkLogin($id,$pass);
		if($result){
			echo '<script>alert("Login Success")</script>';
			redirect('welcome/');

		}else{
			echo "<script>alert('username หรือ password ไม่ถูกต้อง');
				window.location.href='login';
				</script>";
		}
			
	}
	public function test()
	{
		$this->load->view('menu');
	}
}
