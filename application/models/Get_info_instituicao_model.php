<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Get_info_instituicao_model extends CI_Model {

	function get_user_info_by_id_inst($id){
    $interrogacao_sql = "SELECT \"username\", \"email\" FROM \"users\"";
    if (strlen($id) > 0) {
        $interrogacao_sql = $interrogacao_sql . " WHERE \"id\" LIKE '%" .
                      strtolower($id) . "%'";
    }

    $query = $this->db->query($interrogacao_sql);
    return $query;
   }
	
	function get_LoggedUser_info_inst(){
		
    $id = $this->dx_auth->get_user_id();	
	
    $interrogacao_sql = "SELECT \"username\", \"email\", \"FOTOGRAFIA\", \"DESCRICAO\", \"DISTRITO\", \"CONCELHO\"
    , \"TELEFONE\", \"MORADA\" FROM \"users\"";
	
	$interrogacao_sql1 = "SELECT \"WEBSITE\" FROM \"INSTITUICAO\"";
	
	$interrogacao_sql2 = "SELECT \"NOME\", \"EMAIL\" FROM \"REPRESENTANTE\"";
    
    if (strlen($id) > 0) {
        $interrogacao_sql = $interrogacao_sql . " WHERE \"id\" LIKE '%" .
                      strtolower($id) . "%'";
    	$interrogacao_sql1 = $interrogacao_sql1 . " WHERE \"ID\" LIKE '%" .
                      strtolower($id) . "%'";
		$interrogacao_sql2 = $interrogacao_sql2 . " WHERE \"ID\" LIKE '%" .
					  strtolower($id) . "%'";
    }
 
    $query['a'] = $this->db->query($interrogacao_sql); // interrogacao dx_auth
	$query['b'] = $this->db->query($interrogacao_sql1); // interrogacao instituicao
	$query['c'] = $this->db->query($interrogacao_sql2); // interrogacao representante
    return $query;
   }
}
?>