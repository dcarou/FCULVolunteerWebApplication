<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticacao extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		
		$this->load->library('Form_validation');
		$this->load->library('DX_Auth');
		
		$this->load->helper('url');

		$this->load->helper('form');
		date_default_timezone_set("Europe/Lisbon");	
	}
	
	function index()
	{
      	if (!$this->dx_auth->is_logged_in())
		{
			//$this->login();
      		$this->load->view("view_inicio");
		
		}
			else
		{
			
			//faz o load do modelo de dados necessario
      		$this->load->model('get_info_model');

      		//vai buscar o resultado da pesquisa  
      		$query = $this->get_info_model->get_LoggedUser_info();
 
      		//obtem o resultado em forma de array bidimensional
			$data['auth'] = $query['a']->result_array();
			$data['oracle'] = $query['b']->result_array();
			$data['mygrupos'] = $query['c']->result_array();
			$data['myareas'] = $query['d']->result_array();
		
	
			$this->load->view('view_pagina_voluntario', $data);
		}
	}	
   

	function login()
	{
		
		
			$val = $this->form_validation;
			
			// Set form validation rules
			$val->set_rules('username', 'Username', 'trim|required');
			$val->set_rules('password', 'Password', 'trim|required');
			$val->set_rules('remember', 'Manter sessão iniciada', 'integer');

				
			if ($val->run() AND $this->dx_auth->login($val->set_value('username'), $val->set_value('password'), $val->set_value('remember')))
			{
				
				
				//faz o load do modelo de dados necess�rio
      			$this->load->model('get_info_model');

      			//vai buscar o resultado da pesquisa  
      			$query = $this->get_info_model->get_LoggedUser_info();
 
      			//obtem o resultado em forma de array bidimensional
			     $data['auth'] = $query['a']->result_array();
				 $data['oracle'] = $query['b']->result_array();
				 $data['mygrupos'] = $query['c']->result_array();
				 $data['myareas'] = $query['d']->result_array();
		
			    $this->load->view('view_pagina_voluntario', $data);
				
			}
			else
			{		
				// Load login page view
				redirect(base_url());
				//$this->load->view("view_inicio");
			}
		}
		
	
	function logout()
	{
		$this->dx_auth->logout();	
		$this->load->view('logout');
	}
	


	// Used for registering and changing password form validation
	var $min_username = 4;
	var $max_username = 20;
	var $min_password = 4;
	var $max_password = 20;

	
	function registo()
	{
		if ( ! $this->dx_auth->is_logged_in())
		{	
			$val = $this->form_validation;
			
			// Set form validation rules
			$val->set_rules('username', 'Username', 'trim|required|min_length['.$this->min_username.']|max_length['.$this->max_username.']|callback_username_check|alpha_dash');
			$val->set_rules('password', 'Password', 'trim|required|min_length['.$this->min_password.']|max_length['.$this->max_password.']|matches[confirm_password]');
			$val->set_rules('confirm_password', 'Confirme a Password', 'trim|required');
			$val->set_rules('email', 'Email', 'trim|required|valid_email|callback_email_check');

			// Run form validation and register user if it's pass the validation
			if ($val->run() AND $this->dx_auth->register($val->set_value('username'), 
			$val->set_value('password'), $val->set_value('email')))
			{

			$this->dx_auth->login($val->set_value('username'), $val->set_value('password'), $val->set_value('remember'));

		    $this->load->model('insert_info_model');
			  
			$fields['distrito'] = $this->input->post('distrito');
			$fields['concelho'] = $this->input->post('concelho');
			$fields['fotografia'] = $this->input->post('fotografia');
			$fields['descricao'] = $this->input->post('descricao');
			$fields['telefone'] = $this->input->post('telefone');
			$fields['genero'] = $this->input->post('genero');
			$fields['profissao'] = $this->input->post('profissao');
			$fields['cv'] = $this->input->post('cv');
			$fields['datanascimento'] = $this->input->post('datanascimento');
			$fields['myareas'] = $this->input->post('areas');
			$fields['mygrupos'] = $this->input->post('grupos');
			
		    $query = $this->insert_info_model->create_user($fields);
			  
		    //faz o load do modelo de dados necess�rio
      		$this->load->model('get_info_model');

      		//vai buscar o resultado da pesquisa  
      		$query = $this->get_info_model->get_LoggedUser_info();
 
      		//obtem o resultado em forma de array bidimensional
			$data['auth'] = $query['a']->result_array();
			$data['oracle'] = $query['b']->result_array();
			$data['mygrupos'] = $query['c']->result_array();
			$data['myareas'] = $query['d']->result_array();
		
			$this->load->view('view_pagina_voluntario', $data);
			
			}
			else
			{
				// Load registration page
				
				$data = array('grupos' =>  $this->todos_grupos(), 'areas' =>  $this->todos_areas());
				$this->load->view('registo_voluntario', $data);
			}
		}
		else
		{
			$this->load->view('view_pagina_voluntario');
		}
	}
	


	/* Callback function */
	
	function username_check($username)
	{
		$result = $this->dx_auth->is_username_available($username);
		if ( ! $result)
		{
			$this->form_validation->set_message('username_check', 'O username já está registado. Por favor escolha outro username.');
		}
				
		return $result;
	}

	function email_check($email)
	{
		$result = $this->dx_auth->is_email_available($email);
		if ( ! $result)
		{
			$this->form_validation->set_message('email_check', 'O email já está registado. Por favor escolha outro endereço!');
		}
				
		return $result;
	}
	
	function todos_grupos(){
		$this->load->model('get_info_model');
		$query = $this->get_info_model->get_all_grupos();
		$grupos =  $query ->result_array();	
		return $grupos;
	}
	
	function todos_areas(){
		$this->load->model('get_info_model');
		$query = $this->get_info_model->get_all_areas();
		$areas =  $query ->result_array();	
		return $areas;
	}

	/* End of Callback function */

}