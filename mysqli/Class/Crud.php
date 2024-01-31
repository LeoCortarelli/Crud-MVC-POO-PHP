<?php

class Crud extends Conexao{
    private $crud;
    private $contador;
    private $resultado;

    # Preparação das declarativas
    private function preparedStatements($query, $tipos, $parametros){
        $this->countParametros($parametros);

        $conn = $this->conexaoBD();
        $this->crud->prepare($query);

        if($this->contador > 0){
            $callParametros = array();
            foreach($parametros as $key => $parametro){
                $callParametros[$key] = &$parametro[$key];
            }
            array_unshift($callParametros, $tipos);
            call_user_func_array(array($this->crud,'bind_param'), $callParametros);
        }
        $this->crud->execute();
        $this->resultado = $this->crud->get_result();
    }

    # Contador de parametros
    private function countParametros($parametros){
        $this->contador = count($parametros);
    }
}

?>