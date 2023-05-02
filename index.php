<?php
  session_start();

  if(isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
    echo "<script>window.location = '../dashboard.php'</script>";
  }
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Login com hierarquia</title>
        <link rel="stylesheet" href="style/acesso.css">
        <script type="text/javascript" src="script/jquey.js"></script>
        <script type="text/javascript" src="script/acesso.js"></script>
    </head>
    <body>

        <header>Banco de questões</header>
        
        <div id="mensagem"></div>
        <!-- FORMULÁRIO DE LOGIN -->
        <div id="formulario">
        <form id="formularioLogin">
            <span class="title">Acesse sua conta</span>

        <div id="linha">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
        </div>

        <div id="linha">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" />
        </div>

        <div id="button">
            <button id="btnEntrar">Entrar</button>
        </div>
        </form>
            <!-- FORMULÁRIO DE CADASTRO -->
         <form id="formularioCadastro">
            <span class="title">Crie sua conta</span>

            <div id="linha">
        <label for="nomeCadastro">Nome</label>
        <input type="text" name="nomeCadastro" id="nomeCadastro" />
            </div>

        <div id="linha">
            <label for="emailCadastro">Email</label>
            <input type="text" name="emailCadastro" id="emailCadastro" />
        </div>

        <div id="linha">
            <label for="senhaCadastro">Senha</label>
            <input type="password" name="senhaCadastro" id="senhaCadastro" />
        </div>


        <div id="button">
            <button id="btnCadastro">Cadastrar</button>
        </div>
        </form>

        <div id="textoCadastro">
            <span class="title">Não possui uma conta?</span>
            <span class="subtitle">Crie uma agora para acessar todas as ferramentas. É de graça!</span>
            <button id="btnCadastrar" class="change">Cadastrar</button>
         </div>

        <div id="textoLogin">
            <span class="title">Já possui uma conta?</span>
            <span class="subtitle">Entre na sua conta agora!</span>
            <button id="btnLogin" class="change">Entrar</button>
         </div>

        </div>
    </body>
</html>