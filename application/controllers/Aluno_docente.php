<?php 
//if (! defined('BASEPATH')) exit('No direct script access allowed');
class Aluno_docente extends CI_Controller
{
	
	function __construct(){

		parent::__construct();
		//$this->load->model('Gerador_model');
	}

	function index(){
		$this->load->view('relacoes/aluno_docente');
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


		$docente_id = $_POST['input'][0];
		

		$query .= ", sm.descricao
FROM 	docente, aluno, docente_has_disciplina AS dhd,
		aluno_has_disciplina AS ahd,
        situacao_matricula AS sm
        WHERE   dhd.disciplina_id = ahd.disciplina_id
AND 	dhd.ano = ahd.ano
AND 	dhd.periodo = ahd.periodo
AND {$docente_id} = dhd.docente_id;";

	  
		$cmd = 'java -jar C:\Users\Gabriel\Documents\NetBeansProjects\SPE_redesneurais\dist\SPE_redesneurais.jar ';

		$cmd2 = 'java -jar C:\Users\Gabriel\Documents\NetBeansProjects\SAPE_j48\dist\SAPE_j48.jar ';
		$parametros = "";

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

		print_r($cmd2);
		//exec($cmd, $saida);
		exec($cmd2, $saida2);

		$data['resultado_mlp'] = $saida;
		$data['resultado_j48'] = $saida2;

        $data['_view'] = 'relacoes/resultado';
        $this->load->view('relacoes/resultado', $data);
		
	}

}
?>