<?php
class Form_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_form($nickname = FALSE)
    {
        if ($nickname === FALSE)
        {
            $query = $this->db->get('form');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('form', array('nickname' => $nickname));
        return $query->row_array();
    }
    
    public function get_form_by_id($user_id = 0)
    {
        if ($user_id === 0)
        {
            $query = $this->db->get('form');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('form', array('user_id' => $user_id));
        return $query->row_array();
    }
    
    public function set_form($user_id = 0)
    {
        $this->load->helper('url');
 
        $nickname = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'name' => $this->input->post('name'),
            'nickname' => $this->input->post('nickname'),
			'email' => $this->input->post('email'),
			'home' => $this->input->post('home'),
			'gender' => $this->input->post('gender'),
			'number' => $this->input->post('number'),
			'comment' => $this->input->post('comment')
        );
        
        if ($user_id == 0) {
            return $this->db->insert('form', $data);
        } else {
            $this->db->where('user_id', $user_id);
            return $this->db->update('form', $data);
        }
    }
    
    public function delete_form($user_id)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->delete('form');
    }
}