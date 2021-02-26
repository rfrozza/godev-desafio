<style>
    .awidth {
        width: 45%;
    }
</style>

<?php if (isset($_SESSION['logado'])) : ?>
    <div class="row container center">
        <div class="input-field">
            <a href="<?php URL_BASE; ?>/alunos/listar" class="awidth waves-effect waves-light btn-large orange"><i class="material-icons left">account_box</i>Listar Alunos</a>
        </div>
        <div class="input-field">
            <a href="<?php URL_BASE; ?>/salas_aula/listar" class="awidth waves-effect waves-light btn-large"><i class="material-icons left">laptop_windows</i>Listar Salas de Aula</a>
        </div>
        <div class="input-field">
            <a href="<?php URL_BASE; ?>/salas_cafe/listar" class="awidth waves-effect waves-light btn-large green"><i class="material-icons left">free_breakfast</i>Listar Salas de Café</a>
        </div>
        <div class="input-field">
            <a href="<?php URL_BASE; ?>/turmas/listar" class="awidth waves-effect waves-light btn-large blue"><i class="material-icons left">assignment</i>Verificar Turmas</a>
        </div>
        <div class="input-field">
            <a href="<?php URL_BASE; ?>/#" class="awidth waves-effect waves-light btn-large red"><i class="material-icons left">av_timer</i>Verificar Coffee Break</a>
        </div>
    </div>
<?php else : ?>
    <div class="row container center">
        <div class="input-field col s12">
            <a href="<?php URL_BASE; ?>/home/login" class="awidth waves-effect waves-light btn-large orange"><i class="material-icons left">verified_user</i>Login</a>
        </div>
    </div>
<?php endif; ?>

<script>
    M.AutoInit();
    $(".dropdown-trigger").dropdown({
        hover: true
    });
</script>
</body>

</html>