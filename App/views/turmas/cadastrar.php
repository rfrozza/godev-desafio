<div class="row container">
    <h5>Matricular Aluno</h5>
    <?php
    if (!empty($data['mensagem'])) :
        echo "<script>";
        foreach ($data['mensagem'] as $m) :
            echo $m;
        endforeach;
        echo "</script>";
    endif;
    ?>
    <form action="/turmas/cadastrar" method="GET">
        <label for="alunos">Aluno</label>
        <select name="aluno" id="dropdown" form="inserir_aluno">
            <?php foreach ($data as $aluno) : ?>
                <option value="<?php echo $aluno['id']; ?>"><?php echo $aluno['nome'] . ' ' . $aluno['sobrenome']; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="cursos">Escolha a Sala</label>
        <select name="curso" id="dropdown2" form="inserir_aluno">
            <?php foreach ($data2 as $sala) : ?>
                <option value="<?php echo $sala['id']; ?>"><?php echo $sala['nome']; ?></option>
            <?php endforeach; ?>
        </select><br><br>
        <button class="waves-effect waves-light btn green" name="inserir">Matricular</button>
    </form>
</div>
<script>
    document.getElementById("dropdown").selectedIndex = -1;
    document.getElementById("dropdown2").selectedIndex = -1;
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);
    });
</script>