<?php 
//if (! defined('BASEPATH')) exit('No direct script access allowed');
class Aluno_aluno extends CI_Controller
{
	
	function __construct(){

		parent::__construct();
		//$this->load->model('Gerador_model');
	}

	function index(){
		$this->load->view('relacoes/aluno');
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
		$query = "select ";
		for ($i=0; $i < count($arrayChecked); $i++) { 
			
			if ($i+1 != count($arrayChecked)) {
				$query .= $arrayChecked[$i];
				$query .= ",";
			}else{
				$query .= $arrayChecked[$i];
			}					
		}
		#$query .= " from disciplina, aluno";
		$query .= ",situacao_matricula.descricao from aluno, situacao_matricula where aluno.situacao_matricula_id=situacao_matricula.id";
		
		$cmd = 'java -jar C:\Users\Gabriel\Documents\NetBeansProjects\SPE_redesneurais\dist\SPE_redesneurais.jar ';

		$cmd2 = 'java -jar C:\Users\Gabriel\Documents\NetBeansProjects\SAPE_j48\dist\SAPE_j48.jar ';
		$parametros = "";

		/*for($i = 0; $i < count($arrayChecked); $i++){
			$parametros.= $arrayChecked[$i]." ";
		} 
		$cmd.= $parametros; */
		$cmd .= $query;
		$cmd2 .= $query;

		$cmd .= " flag ";
		$cmd2 .= " flag ";

		$parametros = "";
		for($i = 0; $i < count($arrayInput); $i++){
			$parametros.= $arrayInput[$i]." ";
		} 
		$cmd.= $parametros;
		$cmd2.= $parametros;

		//print_r($cmd);
		exec($cmd, $saida);
		exec($cmd2, $saida2);

		$data['resultado_mlp'] = $saida;
		$data['resultado_j48'] = $saida2;

        $this->load->view('relacoes/resultado', $data);
		
	}

}
?>