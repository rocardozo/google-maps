<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('mapa_simple_view');
		$this->load->view('footer_view');
	}

	public function mapa_marcador()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('mapa_marcador_view');
		$this->load->view('footer_view');
	}

	public function mapa_marcadores()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('mapa_marcadores_view');
		$this->load->view('footer_view');
	}

	public function mapa_agrupamiento()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('mapa_agrupamiento_view');
		$this->load->view('footer_view');
	}

	public function mapa_vehiculos_act()
	{
		$this->load->model('vehiculos_model');
		$resultado = $this->vehiculos_model->consultar_vehiculos_act();
		$data = array(
			'resultado' => $resultado );
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('mapa_vehiculos_act_view', $data);
		$this->load->view('footer_view');
	}

	public function trazar_camino()
	{
		//$this->load->view('head_view');
		//$this->load->view('menu_view');
		$this->load->view('trazar_camino_view');
		//$this->load->view('footer_view');
	}

	public function trazar_poligono()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('trazar_poligono_view');
		$this->load->view('footer_view');
	}

	public function zona_exclusion()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('zona_exclusion_view');
		//$this->load->view('footer_view');
	}

	public function libreria_dibujo()
	{
		$this->load->view('head_view');
		$this->load->view('menu_view');
		$this->load->view('libreria_dibujo_view');
		$this->load->view('footer_view');
	}
	
}
