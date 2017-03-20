<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// ===========================================================================
//            - Produto_model.php (1a vers�o)
//            - Guardar em models/
//            - Modelo de dados para o produto
// ===========================================================================

class Insert_info_model extends CI_Model {

  //obtem os produtos com determinada designacao
   function create_user($fields)
   {
	
	$id = $this->dx_auth->get_user_id();
	$retVal = ($fields['fotografia'] == NULL) ? 'http://www.dockitapp.com/aaditi/Dockit/default_user_image.jpg' : $fields['fotografia'] ;
 	
    $data = array(
       'DISTRITO' => $fields['distrito'],
       'CONCELHO' => $fields['concelho'],
       'FOTOGRAFIA' => $retVal,
       'DESCRICAO' => $fields['descricao'],
       'TELEFONE' => $fields['telefone']
			);

	$this->db->where('id', $id);
	$this->db->update('users', $data);
   	
	$data2 = array(
       'ID' => $id,
       'GENERO' => $fields['genero'],
       'PROFISSAO' => $fields['profissao'],
       'CV' => $fields['cv'],
       'DATANASCIMENTO' => $fields['datanascimento']
		);
	
	$this->db->insert('VOLUNTARIO', $data2);
	
	$areas = array($fields['myareas']);
	
	foreach ($areas as $i ) {
		foreach ($i as $k => $a) {
			if($a != null){
				$data3 = array('ID' => $id, 'AREAID' => $a);
				$this->db->insert('AREASINTERESSE', $data3);
				unset($data3);
			}
		}
	}
	
	$grupos = array($fields['mygrupos']);
	
	foreach ($grupos as $i ) {
		foreach ($i as $k => $a) {
			if($a != null){
				$data3 = array('ID' => $id, 'GRUPOID' => $a);
				$this->db->insert('GRUPOALVO', $data3);
				unset($data3);
			}
		}
	}
    
    return ;
   }
   
   //obtem os produtos com determinada designacao
   function update_user_info($fields)
   {
   	$this->load->model('get_info_model');
	
	$id = $this->dx_auth->get_user_id();
	$retVal = ($fields['fotografia'] == NULL) ? 'http://www.dockitapp.com/aaditi/Dockit/default_user_image.jpg' : $fields['fotografia'] ;
 	
    $data = array(
    	'username' => $fields['username'],
       'FOTOGRAFIA' => $retVal,
       'DESCRICAO' => $fields['descricao'],
       'TELEFONE' => $fields['telefone'],
       'email' => $fields['email']
       
			);
		if($fields['distrito'] != NULL)
		$data = array('DISTRITO' => $fields['distrito'],
       					'CONCELHO' => $fields['concelho']);	

	$this->db->where('id', $id);
	$this->db->update('users', $data);
   	
	$data2 = array(
       'CV' => $fields['cv'],
       'DATANASCIMENTO' => $fields['datanascimento']
			);
	if($fields['genero'] != NULL)
		$data2 = array('GENERO' => $fields['genero']);		
	if($fields['profissao'] != NULL)
		$data2 = array('PROFISSAO' => $fields['profissao']);
	
	$this->db->where('ID', $id);
	$this->db->update('VOLUNTARIO', $data2);
	
	
	
	$areasdel = $this->get_info_model->get_User_areas($id)->result_array();;
	if($areasdel!= null){
		foreach ($areasdel as $i) {
			foreach ($i as $k => $a) {
				$data3 = array($k => $a);
				$this->db->where('ID', $id);
				$this->db->delete('AREASINTERESSE', $data3);
				unset($data3);
			}
		}
	}
	
	$gruposdel = $this->get_info_model->get_User_grupos($id)->result_array();
	
	
	if($gruposdel != null){
		foreach ($gruposdel as $i) {
			foreach ($i as $k => $a) {
				$data3 = array($k => $a);
				$this->db->where('ID', $id);
				$this->db->delete('GRUPOALVO', $data3);
				unset($data3);
			}
		}
	}

	$areas = array($fields['myareas']);
	
	foreach ($areas as $i ) {
		foreach ($i as $k => $a) {
			if($a != null){
				$data3 = array('ID' => $id, 'AREAID' => $a);
				$this->db->insert('AREASINTERESSE', $data3);
				unset($data3);
			}
		}
	}
	
	$grupos = array($fields['mygruposalvo']);
	
	foreach ($grupos as $i ) {
		foreach ($i as $k => $a) {
			if($a != null){
				$data3 = array('ID' => $id, 'GRUPOID' => $a);
				$this->db->insert('GRUPOALVO', $data3);
				unset($data3);
			}
		}
	}
	
    return ;
   }
}
?>