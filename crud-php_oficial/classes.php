<?php
class Database {
    //Atributos privados
    private $connection;
    //dados de conexão com o banco
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "desafio";

    //Executa o bloco a seguir quando a classe for instanciada
    public function __construct(){
        try{
            //cria conexão com o banco
            $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);
        } catch (Exception $e){
            die("Erro ao conectar ao banco de dados: " . $e);

        }

    }
    public function getConn(){
        return $this->connection;
    }
}

class Pessoa {
    function addPessoa($nome, $observacao, $telefone){
        $conn = new Database;
        $telId = "";
        $query = "INSERT INTO cliente (nome, obeservacao, cliente_telefone_id_cliente_telefone) VALUES ('$nome', '$observacao', '$telId')";
        $query2= "INSERT INTO cliente_telefone (telefone) VALUES ('$telefone')";
        
        if($conn->getConn()->query($query2) === TRUE){
            $telId = $conn->getConn()->insert_id;
            $conn->getConn()->query($query);
                echo "<script>alert('Inserido com sucesso!')</script>";
        }else{
            echo "falha ao inserir";
        }
       

    }
    function getPessoa(){
        $conn = new Database();

        $dados = array();

        
        $query = "SELECT * FROM cliente";
        $result = $conn->getConn()->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dados[] = $row;
            }
        }

        return $dados;
    }

}
?>