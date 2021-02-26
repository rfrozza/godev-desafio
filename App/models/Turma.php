<?php

use App\Core\Model;

class Turma extends Model
{

    public function getAll()
    {
        $sql = "SELECT alunos.nome AS aluno_nome, alunos.sobrenome AS aluno_sobrenome, salas_aula.nome AS sala_nome FROM alunos, salas_aula, matricula_aluno WHERE matricula_aluno.id_aluno = alunos.id AND matricula_aluno.id_sala = salas_aula.id";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) :
            /*count($stmt);*/
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else :
            return [];
        endif;
    }

    public function getAluno()
    {
        $sql = "SELECT * FROM alunos";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) :
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else :
            return [];
        endif;
    }

        
    public function getSalaAula()
    {
        $sql = "SELECT * FROM salas_aula";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) :
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else :
            return [];
        endif;
    }

    public function save()
    {
        $sql = "INSERT INTO alunos_saula (id_aluno, id_saula) VALUES (?, ?);";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->id);
        $stmt->bindValue(2, $this->id);
        if ($stmt->execute()) :
            return "M.toast({html: 'Aluno cadastrado com sucesso!', classes: 'rounded, green'});";
        else :
            return "M.toast({html: 'Erro ao cadastrar aluno!', classes: 'rounded, red'});";
        endif;
    }
}
