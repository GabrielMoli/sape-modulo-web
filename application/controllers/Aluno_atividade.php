<?php 
if (! defined('BASEPATH')) exit('No direct script access allowed');
class Aluno_atividade extends CI_Controller
{
	
	function __construct(){

		parent::__construct();
		$this->load->model('Gerador_model');
	}

	function index(){
		$this->load->view('relacoes/aluno_atividade');
	}

	

	function chamarWeka(){
		
		$a=0;
		while($a<count($_POST['checked'])){
			$arrayChecked = $_POST['checked'];
			$a++;
		}
		
		# Valores inseridos pelo usuário #
		$b=0;
		while($b<count($_POST['input'])){
			$arrayInput = $_POST['input'];
			$b++;
		}

		# Criando query para passar #
		$query = "SELECT ";
		for ($i=0; $i < count($arrayChecked); $i++) { 
			
			if ($i+1 != count($arrayChecked)) {
				$query .= $arrayChecked[$i];
				$query .= ",";
			}else{
				$query .= $arrayChecked[$i];
			}					
		}

		$query .= ", situacao_matricula.descricao FROM atividade_extraclasse_has_aluno INNER JOIN aluno ON aluno.id = atividade_extraclasse_has_aluno.id_aluno INNER JOIN atividade_extraclasse ON atividade_extraclasse.id = atividade_extraclasse_has_aluno.id INNER JOIN situacao_matricula ON situacao_matricula.id = aluno.situacao_matricula_id";
		
		$cmd = 'java -jar C:\Users\Gabriel\Documents\NetBeansProjects\SPE_redesneurais\dist\SPE_redesneurais.jar ';
		$parametros = "";

		/*for($i = 0; $i < count($arrayChecked); $i++){
			$parametros.= $arrayChecked[$i]." ";
		} 
		$cmd.= $parametros; */
		$cmd .= $query;

		$cmd .= " flag ";

		$parametros = "";
		for($i = 0; $i < count($arrayInput); $i++){
			$parametros.= $arrayInput[$i]." ";
		} 
		$cmd.= $parametros;

		//print_r($cmd);
		exec($cmd, $saida);
		
		$saida = implode("", $saida);

		$arraySession = array('saida' => $saida );
		$this->load->library('session');
        $this->session->set_userdata($arraySession);

        $data['_view'] = 'relacoes/aluno';
        $this->load->view('relacoes/aluno', $data);
		
		
	}

}
?>