<?php 

 
class Gerador_model extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }
    
	function get_aluno_disciplina($checked, $input){
        $i=0;
        while($i<count($checked)){
        
            $resultadoArrayFiltrado = ($this->db->
            select($checked)->from('aluno')->from('disciplina')->get()->result_array());
            $i++;
        
        }
        print_r($resultadoArrayFiltrado);

        #Select dos dois campos com where 
        #Futuramente fazer um join de disciplina e docente
        
        #Eu estou pegando os dois, pois eu não sei como diferenciar os checkeds das tabelas, então vou fundir eles e fazer uma busca usando for com base no array checked que eu tenho.
        
        #Está gerando um array geral e com sub arrays para cada aluno, quando chega ao fim dos alunos retorna arrays de disciplinas.
        
        #$key_resultados = array_keys($resultados);
        #$g = 0;

/*        for ($i=0; $i < count($checked); $i++) { 
        	for ($j=0; $j < count($key_resultados); $j++) { 
        		if ($checked[$i] == $key_resultados[$j]) {
        			$valores_selecionados[$g] = $resultados[$j];
        			$g++;
        		}
        	}
        } return $valores_selecionados;    
	} */
}
}
?>