<?php 
#if (! defined('BASEPATH')) exit('No direct script access allowed');
class Logado extends CI_Controller
{
	
	function __construct(){

		parent::__construct();
		#$this->load->model('Gerador_model');
	}

	function index(){
		$this->load->view('usuario/logado');
	}

	function cadastrar(){
		$this->load->view('usuario/cadastros');
	}

	function resultado(){
		$this->load->view('relacoes/resultado');	
	}
	


}
?>