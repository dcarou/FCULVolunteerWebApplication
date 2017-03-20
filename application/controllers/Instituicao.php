<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instituicao extends CI_Controller
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
		// $this->paginaPerfil(); 
	}
	
	function paginaPerfil()
	{
		$data = $this->mostrar_resultados();		
      	$this->load->view('view_perfil_instituicao', $data);
	}
	
	function paginaInicial()
	{
		$data = $this->mostrar_resultados();		
      	$this->load->view('view_pagina_instituicao', $data);
	}
	
	function paginaEditarPerfil()
	{
		$data = $this->mostrar_resultados(); 
		$this->load->view('view_editar_instituicao', $data);
	}
	
	function mostrar_resultados() {

      //faz o load do modelo de dados necess�rio
      $this->load->model('get_info_instituicao_model');

      //vai buscar o resultado da pesquisa  
      $query = $this->get_info_instituicao_model->get_LoggedUser_info_inst();
 
      //obtem o resultado em forma de array bidimensional
      $data['auth'] = $query['a']->result_array();
	  $data['instituicao'] = $query['b']->result_array();
	  $data['representante'] = $query['c']->result_array();
	
	  return $data;
	}
	
	function update_user_info(){
		
		$this->load->model('insert_info_instituicao_model');
		
		$fields['username'] = $this->input->post('username');
		$fields['email'] = $this->input->post('email');
		$fields['website'] = $this->input->post('website');
		$fields['representante'] = $this->input->post('representante');
		$fields['emailrepresentante'] = $this->input->post('emailrepresentante');
		$fields['distrito'] = $this->input->post('distrito');
		$fields['concelho'] = $this->input->post('concelho');
		$fields['fotografia'] = $this->input->post('fotografia');
		$fields['descricao'] = $this->input->post('descricao');
		$fields['telefone'] = $this->input->post('telefone');
		$fields['morada'] = $this->input->post('morada');
		
		$query = $this->insert_info_instituicao_model->update_user_info($fields);
		  
		$this->load->view('view_perfil_instituicao', $this->mostrar_resultados());

	}
}

