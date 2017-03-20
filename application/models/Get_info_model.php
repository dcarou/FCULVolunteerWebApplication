<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Get_info_model extends CI_Model {

	function get_user_info_by_id($id){
    $interrogacao_sql = "SELECT \"username\", \"email\" FROM \"users\"";
    if (strlen($id) > 0) {
        $interrogacao_sql = $interrogacao_sql . " WHERE \"id\" LIKE '%" .
                      strtolower($id) . "%'";
    }

    $query = $this->db->query($interrogacao_sql);
    return $query;
   }
	
	function get_LoggedUser_info(){
		
    $id = $this->dx_auth->get_user_id();	
	
    $interrogacao_sql = "SELECT \"username\", \"email\", \"FOTOGRAFIA\", \"DESCRICAO\", \"DISTRITO\", \"CONCELHO\"
    , \"TELEFONE\" FROM \"users\"";
	$interrogacao_sqlO = "SELECT \"GENERO\", \"PROFISSAO\", \"CV\", \"DATANASCIMENTO\" FROM \"VOLUNTARIO\"";
	
	
	
	
	
    if (strlen($id) > 0) {
        $interrogacao_sql = $interrogacao_sql . " WHERE \"id\" LIKE '%" .
                      strtolower($id) . "%'";
    	$interrogacao_sqlO = $interrogacao_sqlO . " WHERE \"ID\" LIKE '%" .
                      strtolower($id) . "%'";
		
	}
 
    $query['a'] = $this->db->query($interrogacao_sql); // interrogacao dx_auth
	$query['b'] = $this->db->query($interrogacao_sqlO); // interrogacao oracle
	$query['c'] = $this->get_User_grupos($id);// interrogacao grupos
	$query['d'] = $this->get_User_areas($id);// interrogacao areas
	
    return $query;
   }

	function get_User_grupos($id){
		$interrogacao_sql2 = "SELECT \"GRUPOID\" FROM \"GRUPOALVO\"";
		$interrogacao_sql2 = $interrogacao_sql2 . " WHERE \"ID\" LIKE '%" . strtolower($id) . "%'";
		return $this->db->query($interrogacao_sql2);
	}
	
	function get_User_areas($id){
		$interrogacao_sql2 = "SELECT \"AREAID\" FROM \"AREASINTERESSE\"";
		$interrogacao_sql2 = $interrogacao_sql2 . " WHERE \"ID\" LIKE '%" . strtolower($id) . "%'";
		return $this->db->query($interrogacao_sql2);
	}
	
	function get_all_areas(){
		$interrogacao_sql1 = "SELECT \"TIPO\" FROM \"CAMPOSAREAINTERESSE\"";
		return $this->db->query($interrogacao_sql1);
	}
	
	function get_all_grupos(){
		$interrogacao_sql1 = "SELECT \"TIPO\" FROM \"CAMPOSGRUPOALVO\"";
		return $this->db->query($interrogacao_sql1);
	}

}
?>