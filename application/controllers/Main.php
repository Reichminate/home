<?php 
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Main extends ReichminateController {

	protected $asides = [
		'topscript'   	=> 'asides/topscript',
		'topbar' 		=> 'asides/topbar',
		'navbar' 		=> 'asides/navbar',
		'footer' 		=> 'asides/footer',
		'bottomscript'	=> 'asides/bottomscript',
	];

	public function __construct()
    {
		parent::__construct();
		$this->load->database();
	}
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
		// $this->load->view('controllers/main/reach.php');
	}

	public function reach()
	{

	}

	public function get_base_url()
	{
		echo base_url();
		exit;
	}

	public function get_assets_url()
	{
		echo assets_url('video/singapore.mp4');
		exit;
	}

	public function reach_post()
	{
		$this->load->model([
			'lead_model',
		]);

		$post = $this->input->post();

		$lead_id = $this->lead_model->insert([
			'first_name'     => $post['first_name'],
			'last_name'      => $post['last_name'],
			'job_title'      => $post['job_title'],
			'company_name'   => $post['company_name'],
			'contact_number' => $post['contact_number'],
			'email'		     => $post['email'],
			'message'        => $post['message'],
		]);

		redirect(site_url('/reach'), 'refresh');
	}

	public function announcement()
	{
		$this->view = false;
		$this->load->view('controllers/main/announcement.php');
	}

	public function page_not_found()
	{
		$this->view = false;
		$this->data['announcement_type'] = 'page_not_found';
		$this->load->view('controllers/main/announcement.php', $this->data);
	}

	public function request_saved()
	{
		$this->view = false;
		$this->data['announcement_type'] = 'lead_saved';
		$this->load->view('controllers/main/announcement.php', $this->data);
	}

	public function database_migrated()
	{
		$this->view = false;
		$this->data['announcement_type'] = 'database_migrated';
		$this->load->view('controllers/main/announcement.php', $this->data);
	}

	public function database_reset()
	{
		$this->view = false;
		$this->data['announcement_type'] = 'database_reset';
		$this->load->view('controllers/main/announcement.php', $this->data);
	}

	public function under_maintenance()
	{
		$this->view = false;
		$this->data['announcement_type'] = 'under_maintenance';
		$this->load->view('controllers/main/announcement.php', $this->data);
	}

	public function test()
	{
		$this->load->view('controllers/main/test');
	}

	public function reach_test()
	{
		echo "hahahahahahah";
		exit;
	}

	public function reach2()
	{
		$this->load->view('controllers/main/reach2');
	}

	public function mytest()
	{
		echo "We are testing this system";
	}
}
