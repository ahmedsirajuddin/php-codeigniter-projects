<?php
class Blogs extends CI_Controller {

    public function __construct()
    {
	parent::__construct();
	$this->load->model('blogs_model');
        $this->data['active_menu'] = 'blogs';
    }

    public function index()
    {
	$data = $this->data;
	$data['blogs'] = $this->blogs_model->get_blogs();
	$data['title'] = 'Blogs archive';

	$this->load->view('templates/header', $data);
	$this->load->view('blogs/index', $data);
	$this->load->view('templates/footer');
	
    }

    public function view($slug = NULL)
    {
	$data = $this->data;
	$data['blogs_item'] = $this->blogs_model->get_blogs($slug);

	if (empty($data['blogs_item']))
	{
	    show_404();
	}

	$data['title'] = $data['blogs_item']['title'];

	$this->load->view('templates/header', $data);
	$this->load->view('blogs/view', $data);
	$this->load->view('templates/footer');
    }

    public function create() 
    {
	$data['active_menu'] = 'create';
	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'Create a blog';


	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');

	if ($this->form_validation->run() === FALSE)
	{
	    $this->load->view('templates/header', $data);
	    $this->load->view('blogs/create');
	    $this->load->view('templates/footer');

	}
	else
	{
	    $this->blogs_model->set_blogs();
	    $this->load->view('templates/header', $data);
	    $this->load->view('blogs/success');
	    $this->load->view('templates/footer', $data);
	}
    }
}
