<div class="row container">
    <?php
    if (!empty($data['mensagem'])) :
        echo "<script>";
        foreach ($data['mensagem'] as $m) :
            echo $m;
        endforeach;
        echo "</script>";
    endif;
    ?>

    <h5>Fazer Login</h5><br>

    <form class="col s12" action="/home/login" method="POST">
        <div class="input-field">
            <input id="email" type="email" class="validate" name="email">
            <label for="email">E-mail</label>
        </div>
        <div class="input-field">
            <input id="senha" type="password" class="validate" name="senha">
            <label for="senha">Senha</label>
        </div>
        <button class="waves-effect waves-light btn blue" name="entrar">Entrar</button>
    </form>
</div>