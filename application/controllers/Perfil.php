<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller
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
		$this->paginaPerfil();
	}
	
	function paginaPerfil()
	{
		$this->load->model('get_info_model');
		
		$data = array('user' =>  $this->mostrar_resultados(), 'grupos' =>  $this->todos_grupos(), 'areas' =>  $this->todos_areas());
      	$this->load->view('view_perfil_voluntario', $data);
	}
	
	function paginaEditarPerfil()
	{
		$this->load->model('get_info_model');
		$data = array('user' =>  $this->mostrar_resultados(), 'grupos' =>  $this->todos_grupos(), 'areas' =>  $this->todos_areas());
		$this->load->view('view_editar_voluntario', $data);
	}
	
	function mostrar_resultados() {

      //faz o load do modelo de dados necess�rio
      $this->load->model('get_info_model');

      //vai buscar o resultado da pesquisa  
      $query = $this->get_info_model->get_LoggedUser_info();
 
      //obtem o resultado em forma de array bidimensional
      $data['auth'] = $query['a']->result_array();
	  $data['oracle'] = $query['b']->result_array();
	  $data['mygrupos'] = $query['c']->result_array();
	  $data['myareas'] = $query['d']->result_array();
	  return $data;
	}
	
	function update_user_info(){
		
		$this->load->model('insert_info_model');
		
		$fields['username'] = $this->input->post('username');	  
		$fields['distrito'] = $this->input->post('distrito');
		$fields['concelho'] = $this->input->post('concelho');
		$fields['fotografia'] = $this->input->post('fotografia');
		$fields['descricao'] = $this->input->post('descricao');
		$fields['telefone'] = $this->input->post('telefone');
		$fields['genero'] = $this->input->post('genero');
		$fields['profissao'] = $this->input->post('profissao');
		$fields['cv'] = $this->input->post('cv');
		$fields['email'] = $this->input->post('email');
		$fields['datanascimento'] = $this->input->post('datanascimento');
		$fields['mygruposalvo'] = $this->input->post('grupos');
		$fields['myareas'] = $this->input->post('areas');
		
		
		$query = $this->insert_info_model->update_user_info($fields);
		$data = array('user' =>  $this->mostrar_resultados(), 'grupos' =>  $this->todos_grupos(), 'areas' =>  $this->todos_areas());
      	$this->load->view('view_perfil_voluntario', $data);

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
	
}

