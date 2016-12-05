<?php
class Form extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('form_model');
        $this->load->helper('url');
    }
 
    public function index()
    {
        $data['form'] = $this->form_model->get_form();

		$this->load->view('templates/header', $data);
		$this->load->view('form/index', $data);
		$this->load->view('templates/footer');
		
    }
 
    public function view($nickname = NULL)
    {
        $data['form_item'] = $this->form_model->get_form($nickname);
        
        if (empty($data['form_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['form_item'];
 
		$this->load->view('templates/header', $data);
		$this->load->view('form/view', $data);
		$this->load->view('templates/footer');
    }

    
    public function create()
    {
        $this->load->helper('form');
		$this->load->library('form_validation');
 
        $data['title'] = 'Fill in the form';
 
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');

 
        if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('form/create');
			$this->load->view('templates/footer');
 
        }
        else
        {
            $this->form_model->set_form();
			$this->load->view('templates/header', $data);
			$this->load->view('form/success');
			$this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $user_id = $this->uri->segment(3);
        
        if (empty($user_id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit an item';        
        $data['form_item'] = $this->form_model->get_form_by_id($user_id);
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('number', 'Number', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
			$this->load->view('templates/header', $data);
            $this->load->view('form/edit', $data);
			$this->load->view('templates/footer');
 
        }
        else
        {
            $this->form_model->set_form($user_id);
            //$this->load->view('form/success');
            redirect( base_url() . 'index.php/form');
        }
    }
    
    public function delete()
    {
        $user_id = $this->uri->segment(3);
        
        if (empty($user_id))
        {
            show_404();
        }
                
        $form_item = $this->form_model->get_form_by_id($user_id);
        
        $this->form_model->delete_form($user_id);        
        redirect( base_url() . 'index.php/form');        
    }
	
	public function Exercise6_Brillantes()
    {
     
        $this->load->helper('url');
        $this->load->view('Exercise6_Brillantes');
    }

	public function personalinfo()
    {
     
        $this->load->helper('url');
        $this->load->view('personalinfo');
    }


     public function info()
    {
		
        $this->load->helper('url');
        $this->load->view('info');
    }
     public function family()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('family');
    }

     public function educ()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('educ');
    }
	
	public function hobbies()
    {
     
        $this->load->helper('url');
        $this->load->view('hobbies');
    }
	
	public function favorites()
    {
     
        $this->load->helper('url');
        $this->load->view('favorites');
    }
	
	public function trivias()
    {
     
        $this->load->helper('url');
        $this->load->view('trivias');
    }
	
	public function contact()
    {
     
       
        //load view and pass the data
        $this->load->helper('url');
        $this->load->view('contact');
    }
}