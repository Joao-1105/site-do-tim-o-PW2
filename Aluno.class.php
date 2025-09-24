<?php
class Aluno{
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;

    public function conectar(){
        $dns    = "mysql:dbname=EtimPwiiAluno;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getId(){
        return $this->id;
    }
    public function getRm(){
        return $this->rm;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }

    public function setRm($rm){
        $this->rm = $rm ;
    }
    public function setNome($nome){
        $this->nome = $nome ;
    }
    public function setEmail($email){
        $this->email = $email ;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf ;
    }

    public function cadastrar(){
        $sql = "INSERT INTO aluno (rm, nome, email, cpf) 
                VALUES (:r, :n, :e, :c)";
        
        $sql = $this->pdo->prepare($sql);
    
        $sql->bindValue(":r", $this->rm);
        $sql->bindValue(":n", $this->nome);
        $sql->bindValue(":e", $this->email);
        $sql->bindValue(":c", $this->cpf);
    
        return $sql->execute();
    }

    public function consultar($email){
        $sql = "SELECT *FROM aluno WHERE email = :e";
        $sql = $this->pdo->prepare($sql);
        $sql-> bindValue(":e", $email);
        $sql->execute();

        return $sql->rowCount() > 0;
        
    }


}
