<?php

use App\core\Controller;
use App\Auth;

class Salas_aula extends Controller
{

    public function index()
    {
        Auth::checkLogin();

        $sala_aula = $this->model('Sala_aula');
        $dados = $sala_aula->getAll();

        $this->view('salas_aula/listar', $dados);
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
                $sala_aula = $this->model('Sala_aula');
                $sala_aula->nome = $_POST['nome'];
                $sala_aula->lotacao = $_POST['lotacao'];
                $mensagem[] = $sala_aula->save();
            endif;
        endif;
        $this->view('salas_aula/cadastrar', $dados = ['mensagem' => $mensagem]);
    }
}
