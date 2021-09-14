<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root'); // User Database
define('BD_SENHA',''); // Password Database
define('BD_BANCO','agendamentos'); // Name Database
    
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setAgendamentos($nome,$telefone,$origem,$data_contato,$observacao){
        $stmt = $this->mysqli->prepare("INSERT INTO agendamentos_2021 (`nome`, `telefone`, `origem`, `data_contato`, `observacao`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$telefone,$origem,$data_contato,$observacao);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }
}    
?>
