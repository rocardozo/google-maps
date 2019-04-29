<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos_model extends CI_Model {

	
	public function __construct()
	{
		parent::__construct();
		
	}

	/*Consulta si existe el nombre de la novedad*/
	public function consultar_vehiculos_act()
	{
		$this->db->select('*');
		$this->db->from('vehiculo_Act');
		$this->db->where('licencia_t not in (Select licencia_t from AlertaBoton)');
		$consulta = $this->db->get();
		$resultado = $consulta->result();
		
		return $resultado;
	}

}