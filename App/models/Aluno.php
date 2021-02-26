<?php

use App\Core\Model;

class Aluno extends Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM alunos";
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

    public function save()
    {
        $sql = "INSERT INTO alunos (nome, sobrenome) VALUES (?, ?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->sobrenome);
        if ($stmt->execute()) :
            return "M.toast({html: 'Aluno cadastrado com sucesso!', classes: 'rounded, green'});";
        else :
            return "M.toast({html: 'Erro ao cadastrar aluno!', classes: 'rounded, red'});";
        endif;
    }
}
