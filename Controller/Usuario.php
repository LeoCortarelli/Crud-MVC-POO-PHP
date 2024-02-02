<?php
require '../Conexao/conexao.php';

class Usuario{
    private $conn; 

    public function __construct(){
        $this->conn = new Conexao();
    }

    public function cadastrarUsuario($nome, $email, $fone, $dataNasc){
        $query = $this->conn->getConexao()->prepare("INSERT INTO usuarios(nome,email,fone,data_nascimento) VALUE(?,?,?,?)");
        $query->bind_param("ssss",$nome,$email,$fone,$dataNasc);

        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function listarUsuario(){
        $result = $this->conn->getConexao()->query("SELECT * FROM usuarios");
        $usuario = [];

        while($row = $result->fetch_assoc()){
            $usuario = $row;
        }
        return $usuario;
    }


    public function editarUsuario($id, $nome, $email, $fone, $dataNasc){
        $query = $this->conn->getConexao()->prepare("UPDATE usuarios SET nome = ?, fone = ?, data_nascimento = ? WHERE id_usuario = ?");
        $query->bind_param("ssssi", $nome,$email,$fone,$dataNasc,$id);

        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }


    public function excluirUsuario($id){
        $query = $this->conn->getConexao()->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
        $query->bind_param("i", $id);

        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }
}

?>