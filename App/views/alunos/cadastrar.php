<div class="row container">
    <h5>Cadastrar Alunos</h5>

    <?php
    if (!empty($data['mensagem'])) :
        echo "<script>";
        foreach ($data['mensagem'] as $m) :
            echo $m;
        endforeach;
        echo "</script>";
    endif;
    ?>
    <form class="col s12" action="/alunos/cadastrar" method="POST">
        <div class="input-field">
            <input id="nome" type="text" class="validate" name="nome">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field">
            <input id="sobrenome" type="text" class="validate" name="sobrenome">
            <label for="sobrenome">Sobrenome</label>
        </div>

        <button class="waves-effect waves-light btn blue" name="cadastrar">Cadastrar</button>
    </form>
</div>