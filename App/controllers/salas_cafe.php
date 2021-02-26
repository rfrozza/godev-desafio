<?php

use App\core\Controller;
use App\Auth;

class Salas_cafe extends Controller
{

    public function index()
    {
        Auth::checkLogin();

        $sala_cafe = $this->model('Sala_cafe');
        $dados = $sala_cafe->getAll();

        $this->view('salas_cafe/listar', $dados);
    }

    public function cadastrar()
    {
        Auth::checkLogin();

        $mensagem = array();
        if (isset($_POST['cadastrar'])) :
            if (empty($_POST['nome'])) :
                $mensagem[] = "O nome da sala não pode ser em branco!";
            elseif (empty($_POST['lotacao'])) :
                $mensagem[] = "A capacidade da sala não pode ser em branco!";
            else :
                $sala_cafe = $this->model('Sala_cafe');
                $sala_cafe->nome = $_POST['nome'];
                $sala_cafe->lotacao = $_POST['lotacao'];
                $mensagem[] = $sala_cafe->save();
            endif;
        endif;
        $this->view('salas_cafe/cadastrar', $dados = ['mensagem' => $mensagem]);
    }
}
