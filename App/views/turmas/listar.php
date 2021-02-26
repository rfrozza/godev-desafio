<div class="row container">
    <blockquote>
        <h5>Alunos por Turma</h5>
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
                <th>Código</th>
                <th>Aluno</th>
                <th>Sala</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $registro) : ?>
                <tr>
                    <td><?php print_r($i); ?></td>
                    <td><?php echo $registro['aluno_nome'] . ' ' . $registro['aluno_sobrenome']; ?></td>
                    <td><?php echo $registro['sala_nome']; ?></td>
                    <?php $i++; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="input-field">
        <a href="<?php URL_BASE; ?>/turmas/cadastrar" class="awidth waves-effect waves-light btn-large green"><i class="material-icons left">assignment_turned_in</i>Matricular Aluno</a>
    </div>
</div>