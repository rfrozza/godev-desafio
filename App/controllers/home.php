<?php

use App\Auth;
use App\core\Controller;


class Home extends Controller
{

    public function index()
    {
        $this->view('home/index');
    }

    public function login()
    {
        $mensagem = array();
        if (isset($_POST['entrar'])) :
            if ((empty($_POST['email'])) || (empty($_POST['senha']))) :
                $mensagem[] = "O Campo e-mail e senha são obrigatórios!";
            else :
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $mensagem[] = Auth::Login($email, $senha);
            endif;
        endif;
        $this->view('home/login', $dados = ['mensagem' => $mensagem]);
    }

    public function logout()
    {
        Auth::Logout();
    }
}
