<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER .  '/model/Database.php';

class EstudanteModel{
    private int $idade;
    private string $nome;
    private $database;
    // Gatters and setters
    public function __construct()
    {
        $this->database = new Database();
    }   
        public function listarModel(): array
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes");
        return $dadosArray;
    }
    public function salvarModel(string $nome, int $idade)
    {
        $sql = "INSERT INTO estudantes (nome, idade) values ('$nome', '$idade')";
        $this->database->insert($sql);
    }
    public function buscarPeloId($id)
    {
        $EstudanteArray = $this->database->executeSelect("SELECT * FROM estudantes WHERE id = '$id'");
        return $EstudanteArray[0];
    }

    public function atualizarModel(int $id, string $nome, int $idade)
    {
        $sql = "UPDATE estudantes set nome='$nome', idade='$idade' WHERE id='$id'";
        $this->database->insert($sql);
    }
    public function excluirModel(int $id)
    {
        $sql = "DELETE FROM estudantes WHERE id='$id'";
        $this->database->insert($sql);
    }
}