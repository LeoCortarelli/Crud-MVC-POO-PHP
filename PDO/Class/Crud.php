<?php
    include('conexao.php');
    class Crud extends Conexao{ 
        # Atributos
        private $crud;
        private $contador;


        # Preparação das declativas
        private function preparedStatements($query, $parametros){
            $this->countParametros($parametros);
            $this->crud=$this->conexaoBD()->prepare($query);

            if($this->contador > 0){
                for($i = 1; $i <= $this->contador; $i++){
                    $this->crud->bindValue($i,$parametros[$i-1]);
                }
            }
            $this->crud->execute();
        }


        # Contador de Parametros
        private function countParametros($parametros){
            $this->contador=count($parametros);
        }


        # Inserindo no banco de dados
        public function insertBD($tabela, $condicao, $parametros){
            $sql = "INSERT INTO {$tabela} VALUE({$condicao})";
            $this->preparedStatements($sql, $parametros);
        }

    }
?>