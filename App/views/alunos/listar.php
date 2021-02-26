<nav>
    <div class="nav-wrapper light-blue">
        <form method="POST" action="<?php URL_BASE; ?>/home/buscar">
            <div class="input-field">
                <input id="search" name="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>
<div class="row container">

    <blockquote>
        <h5>Alunos Cadastrados</h5>
    </blockquote>
    <?php
    if (!empty($data['mensagem'])) :
        echo "<script>";
        foreach ($data['mensagem'] as $m) :
            echo $m;
        endforeach;
        echo "</script>";
    endif;
    ?>

    <table class="highlight">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $registro) : ?>
                <tr>
                    <td><?php echo $registro['nome']; ?></td>
                    <td><?php echo $registro['sobrenome']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>