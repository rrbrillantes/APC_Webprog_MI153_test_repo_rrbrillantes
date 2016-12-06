<?php
class Page extends CI_Controller {
 
	public function index()
    {
        $this->load->view('templates/headerpage');
        $this->load->view('page/Exercise6_Brillantes');
		
    }
	public function Exercise6_Brillantes()
    {
		
		$this->load->view('templates/headerpage');
        $this->load->view('page/Exercise6_Brillantes');
		
    }

	public function personalinfo()
    {
		
		$this->load->view('templates/header');
        $this->load->view('page/personalinfo');
		$this->load->view('templates/footer');
    }


     public function info()
    {
		
		
		$this->load->view('templates/header');
        $this->load->view('page/info');
		$this->load->view('templates/footer');
    }
     public function family()
    {
     
		$this->load->view('templates/header');
        $this->load->view('page/family');
		$this->load->view('templates/footer');
    }

     public function educ()
    {
     
		
		$this->load->view('templates/header');
        $this->load->view('page/educ');
		$this->load->view('templates/footer');
    }
	
	public function hobbies()
    {
     
		$this->load->view('templates/header');
        $this->load->view('page/hobbies');
		$this->load->view('templates/footer');
    }
	
	public function favorites()
    {
     
		$this->load->view('templates/header');
        $this->load->view('page/favorites');
		$this->load->view('templates/footer');
    }
	
	public function trivias()
    {
		
		$this->load->view('templates/header');
        $this->load->view('page/trivias');
		$this->load->view('templates/footer');
    }
	
	public function contact()
    {
     
		
		$this->load->view('templates/header');
        $this->load->view('page/contact');
		$this->load->view('templates/footer');
    }
}