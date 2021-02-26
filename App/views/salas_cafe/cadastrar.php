<div class="row container">
    <h5>Cadastrar Sala de Café</h5>

    <?php
    if (!empty($data['mensagem'])) :
        echo "<script>";
        foreach ($data['mensagem'] as $m) :
            echo $m;
        endforeach;
        echo "</script>";
    endif;
    ?>
    <form class="col s12" action="/salas_cafe/cadastrar" method="POST">
        <div class="input-field">
            <input id="nome" type="text" class="validate" name="nome">
            <label for="nome">Nome da Sala</label>
        </div>
        <div class="input-field">
            <input id="lotacao" type="text" class="validate" name="lotacao">
            <label for="lotacao">Capacidade</label>
        </div>

        <button class="waves-effect waves-light btn blue" name="cadastrar">Cadastrar</button>
    </form>
</div>