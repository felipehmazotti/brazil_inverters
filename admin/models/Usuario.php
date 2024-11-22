<?php

require_once './models/ConexaoBanco.php';

class  UsuarioModel extends ConexaoBanco
{
    function __construct()
    {
        parent::__construct();
    }
    function login($data)
    {
        $sql = $this->conBD->prepare("SELECT * FROM usuario WHERE email=:email AND senha=:senha");
        $sql->bindParam(":email", $data['email']);
        $sql->bindParam(":senha", $data['senha']);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $result = $sql->fetch();

            $_SESSION['usuario_id'] = $result['id'];
            $_SESSION['usuario_nome'] = $result['nome'];


            return true;
        } else {
            return false;
        }
    }

    function criarConta($data)
    {
        $sql = $this->conBD->prepare("INSERT INTO usuario (email, nome, senha, nome_exibicao, sobrenome) VALUES (:email, :nome, :senha, :nome_exibicao, :sobrenome)");
        $sql->bindParam(':email', $data['email']);
        $sql->bindParam(':nome', $data['nome']);
        $sql->bindParam(':senha', $data['senha']);
        $sql->bindParam(':nome_exibicao', $data['nome_exibicao']);
        $sql->bindParam(':sobrenome', $data['sobrenome']);
        $sql->execute();
        return $sql->rowCount();
    }
}
