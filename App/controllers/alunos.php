<?php

use App\core\Controller;
use App\Auth;

class Alunos extends Controller
{

    public function index()
    {
        Auth::checkLogin();

        $aluno = $this->model('Aluno');
        $dados = $aluno->getAll();

        $this->view('alunos/listar', $dados);
    }

    public function cadastrar()
    {
        Auth::checkLogin();

        $mensagem = array();
        if (isset($_POST['cadastrar'])) :
            if (empty($_POST['nome'])) :
                $mensagem[] = "O campo nome não pode ser em branco!";
            elseif (empty($_POST['sobrenome'])) :
                $mensagem[] = "O campo senha não pode ser em branco!";
            else :
                $aluno = $this->model('Aluno');
                $aluno->nome = $_POST['nome'];
                $aluno->sobrenome = $_POST['sobrenome'];
                $mensagem[] = $aluno->save();
            endif;
        endif;
        $this->view('alunos/cadastrar', $dados = ['mensagem' => $mensagem]);
    }
}
