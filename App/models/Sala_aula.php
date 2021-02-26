<?php

use App\Core\Model;

class Sala_aula extends Model
{

    public function getAll()
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
        $sql = "INSERT INTO salas_aula (nome, lotacao) VALUES (?, ?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->lotacao);
        if ($stmt->execute()) :
            return "M.toast({html: 'Sala cadastrada com sucesso!', classes: 'rounded, green'});";
        else :
            return "M.toast({html: 'Erro ao cadastrar sala!', classes: 'rounded, red'});";
        endif;
    }
}
