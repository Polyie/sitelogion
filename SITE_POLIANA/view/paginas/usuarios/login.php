<main>
    <form form action="<?php echo HOME_URI;?>usuario/autenticar" method="POST">
        <legend>Login (Usuário: candido@gmail.com || Senha: 12345)</legend>
        <div class="form-group">
            <label for="inputEmail">Endereço de Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputSenha">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputSenha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</main>