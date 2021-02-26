<?php

use App\core\Controller;
use App\Auth;

class Turmas extends Controller
{

    public function index()
    {
        Auth::checkLogin();

        $turma = $this->model('Turma');
        $dados = $turma->getAll();

        $this->view('turmas/listar', $dados);
    }

    public function cadastrar()
    {
        Auth::checkLogin();

        $turma = $this->model('Turma');
        $dados = $turma->getAluno();
        $dados2 = $turma->getSalaAula();
        $this->view('turmas/cadastrar', $dados, $dados2);
    }

    public function inserir()
    {
        Auth::checkLogin();

        $mensagem = array();
        if (isset($_POST['inserir'])) :
            if (empty($_POST['aluno'])) :
                $mensagem[] = "O campo aluno não pode ser em branco!";
            elseif (empty($_POST['curso'])) :
                $mensagem[] = "O campo sala não pode ser em branco!";
            else :
                $inserir = $this->model('Turma');
                $inserir->nome = $_POST['aluno'];
                $inserir->email = $_POST['curso'];
                $mensagem[] = $inserir->save();
            endif;
        endif;
        $this->view('turmas/cadastrar', $dados = ['mensagem' => $mensagem]);
    }
}
