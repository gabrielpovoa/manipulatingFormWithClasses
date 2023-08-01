<?php
class FormHandler {
    private $nome;
    private $idade;
    private $preferencias;

    public function __construct()
    {
        $this -> nome='';
        $this -> idade = 0;
        $this -> preferencias = array();
    }

    public function processFormData()
    {
        if($_SERVER["REQUEST_METHOD"]== "GET") {
            if(isset($_GET["nome"])) {
                $this ->nome = $_GET["nome"];
            }
            if(isset($_GET["idade"])) {
                $this ->idade = $_GET["idade"];
            }
            if(isset($_GET["preferencias"])) {
                $this ->preferencias = explode(",", $_GET["preferencias"]);
            }
        }
    }

    public function getNome() {
        return $this ->nome;

    }

    public function getIdade() {
        return $this ->idade;

    }
    
    public function getPreferencia() {
        return $this ->preferencias;
    }
}
?>