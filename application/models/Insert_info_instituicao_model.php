<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Insert_info_instituicao_model extends CI_Model {

  //obtem os produtos com determinada designacao (Criacao)
   function create_user($fields)
   {
	
	$id = $this->dx_auth->get_user_id();
	$retVal = ($fields['fotografia'] == NULL) ? 'http://www.dockitapp.com/aaditi/Dockit/default_user_image.jpg' : $fields['fotografia'] ;
 	
    $data = array(
        'DISTRITO' => $fields['distrito'],
        'CONCELHO' => $fields['concelho'],
        'FOTOGRAFIA' => $retVal,
        'DESCRICAO' => $fields['descricao'],
        'TELEFONE' => $fields['telefone'],
		);

	$this->db->where('id', $id);
	$this->db->update('users', $data);
   	
	$data2 = array(
       'ID' => $id,
       'NOME' => $fields['representante'],
       'EMAIL' => $fields['emailrepresentante']
			);
	
	$this->db->insert('REPRESENTANTE', $data2);
	
	$data3 = array(
       'ID' => $id,
       'WEBSITE' => $fields['website']
		);
	
	$this->db->insert('INSTITUICAO', $data3);
    
    return ;
   } 
   
   //obtem os produtos com determinada designacao (Edicao)
   function update_user_info($fields)
   {
	
	$id = $this->dx_auth->get_user_id();
	$retVal = ($fields['fotografia'] == NULL) ? 'http://www.dockitapp.com/aaditi/Dockit/default_user_image.jpg' : $fields['fotografia'] ;
 	
    $data = array(
    	'username' => $fields['username'],
       'FOTOGRAFIA' => $retVal,
       'DESCRICAO' => $fields['descricao'],
       'TELEFONE' => $fields['telefone'],
       'email' => $fields['email'],
       'MORADA' => $fields['morada']
       
			);
			
	if($fields['distrito'] != NULL)
		$data = array('DISTRITO' => $fields['distrito'],
    					'CONCELHO' => $fields['concelho']);	

	$this->db->where('id', $id);
	$this->db->update('users', $data);
   	
	$data2 = array();
	if($fields['representante'] != NULL)
		$data2 = array('NOME' => $fields['representante']);		
	if($fields['emailrepresentante'] != NULL)
		$data2 = array('EMAIL' => $fields['emailrepresentante']);
	
	if($fields['representante'] != NULL && $fields['emailrepresentante'] != NULL){
		$this->db->where('ID', $id);
		$this->db->update('REPRESENTANTE', $data2);
	}
	
	$data3 = array();
	if($fields['website'] != NULL)
		$data3 = array(
       		'WEBSITE' => $fields['website']
		);
	
	if($fields['website'] != NULL){
		$this->db->where('ID', $id);
		$this->db->update('INSTITUICAO', $data2);
	}
	
    
    return ;
   }

	//obtem os produtos com determinada designacao (Criacao)
   function create_oportunity($fields)
   {
	
	$id = $this->dx_auth->get_user_id();
	
    $data = array(
        'FUNCAO' => $fields['funcao'],
        'DATAINICIO' => $fields['datainicio'],
        'DATAFIM' => $fields['datainicio'],
	);

	$this->db->where('id', $id);
	$this->db->update('users', $data);
   	
	$data2 = array(
       'ID' => $id,
       'NOME' => $fields['representante'],
       'EMAIL' => $fields['emailrepresentante']
			);
	
	$this->db->insert('REPRESENTANTE', $data2);
	
	$data3 = array(
       'ID' => $id,
       'WEBSITE' => $fields['website']
		);
	
	$this->db->insert('INSTITUICAO', $data3);
    
    return ;
   } 
}
?>