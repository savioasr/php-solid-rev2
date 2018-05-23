<?php

require __DIR__.'/vendor/autoload.php';

interface Db
{
    public function connect($servidor, $nome, $usuario, $senha);
}

class Mysql implements Db
{
    public function connect($servidor, $nome, $usuario, $senha)
    {
        echo "conecta mysql";
    }
}

class Connection
{
    public function __construct($servidor, $nome, $usuario, $senha)
    {
        $this->servidor = $servidor;
        $this->nome = $nome;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public function connect(Db $db)
    {
        $db->connect($this->servidor, $this->nome, $this->usuario, $this->senha);
    }
}

$conn = new Connection('localhost', 'curso_solid', 'root', '12347');
$conn->connect(new Mysql);