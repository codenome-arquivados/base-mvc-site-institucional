<h1>Contato</h1>
<form method="post" class="contato">

    <?php if (!empty($aviso)): ?>
        <h4 class="alert-warning"><?php $aviso ?></h4>
    <?php endif; ?>

    <div class="formulario-space">
        <div>Nome:</div>
        <div><input type="text" name="nome" placeholder="Digite seu nome"></div>
    </div>
    <div class="formulario-space">
        <div>E-mail</div>
        <div><input type="email" name="email" placeholder="Digite seu email"></div>
    </div>
    <div class="formulario-space">
        <div>Mensagem</div>
        <div><textarea name="mensagem"></textarea></div>
    </div>
    <div class="formulario-space">
        <input type="submit" value="Enviar">
    </div>
</form>