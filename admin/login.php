<?php 
if (isset($_SESSION) == false) {
    session_start();
}

if (isset($_SESSION['usuario_id'])) {
    header('Location: index.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>
    
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    
    <style>
        /* Oculta a seção de inscrição por padrão */
        #signupSection {
            display: none;
        }

        /* Estilo principal da seção de criação de conta */
    #signupSection {
        display: none; /* Começa oculto */
        max-width: 400px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #121212;
        border-radius: 8px;
        color: #ffffff;
    }

    /* Cabeçalho */
    .signup-header h6 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #ffffff;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    /* Estilização dos campos de entrada */
    .textbox {
        position: relative;
        margin-bottom: 1.2rem;
    }

    .textbox input[type="text"],
    .textbox input[type="password"],
    .textbox select {
        width: 100%;
        padding: 14px;
        font-size: 1rem;
        color: #ffffff;
        background-color: #1e1e1e;
        border: 1px solid #333333;
        border-radius: 4px;
        outline: none;
        transition: border-color 0.3s ease;
    }

    .textbox input[type="text"]:focus,
    .textbox input[type="password"]:focus,
    .textbox select:focus {
        border-color: #0073e6;
    }

    /* Campos Nome e Sobrenome em uma linha */
    .name-fields {
        display: flex;
        gap: 1rem;
    }

    .name-fields .textbox {
        flex: 1;
    }

    /* Estilo do botão "Continuar" */
    .login-btn {
        width: 100%;
        padding: 12px;
        font-size: 1rem;
        font-weight: 600;
        color: #ffffff;
        background-color: #0073e6;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-align: center;
        margin-top: 1rem;
    }

    .login-btn:hover {
        background-color: #005bb5;
    }

    /* Estilo dos checkboxes e links */
    .checkbox {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        color: #b0b0b0;
        margin-bottom: 0.8rem;
    }

    .checkbox input[type="checkbox"] {
        margin-right: 8px;
    }

    .checkbox label {
        display: flex;
        align-items: center;
        font-size: 0.9rem;
        color: #b0b0b0;
    }

    .checkbox label a {
        color: #0073e6;
        text-decoration: none;
        margin-left: 4px;
    }

    .checkbox label a:hover {
        text-decoration: underline;
    }

    /* Link para retornar ao login */
    .dont-have-account {
        text-align: center;
        font-size: 0.9rem;
        color: #b0b0b0;
        margin-top: 1.5rem;
    }

    .dont-have-account a {
        color: #0073e6;
        text-decoration: none;
    }

    .dont-have-account a:hover {
        text-decoration: underline;
    }

    /* Contêiner para cada checkbox e label */
.checkbox-container {
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* Ajuste o espaçamento entre as opções */
    font-size: 0.9rem;
    color: #b0b0b0;
}

/* Checkbox e label espaçados */
.checkbox-container input[type="checkbox"] {
    margin-right: 8px; /* Espaço entre o checkbox e o texto */
}

/* Link para termos de serviço */
.checkbox-container label a {
    color: #0073e6;
    text-decoration: none;
}

.checkbox-container label a:hover {
    text-decoration: underline;
}

    </style>
</head>

<body>

<!-- SECTION LOGIN -->
<section id="loginSection" class="login-form">
    <div class="logo"><img src="./img/logo.png" alt=""></div>
    <div class="social-media">
        <button class="fb"><img src="https://i.imgur.com/hkgcpVJ.png" alt=""></button>
        <button class="google"><img src="https://i.imgur.com/b6Q8ttB.png" alt=""></button>
        <button class="ps"><img src="https://i.imgur.com/RqHeGB9.png" alt=""></button>
        <button class="xbox"><img src="https://i.imgur.com/NzQuyGX.png" alt=""></button>
        <button class="switch"><img src="https://i.imgur.com/gCwPl9K.png" alt=""></button>
    </div>
    
    <h6>Sign In</h6>
    
    <form action="">
        <div class="textbox">
            <input type="text" placeholder="Username or Email">
            <span class="check-message hidden">Required</span>
        </div>
        <div class="textbox">
            <input type="password" placeholder="Password">
            <span class="check-message hidden">Required</span>
        </div>
        <div class="options">
            <label class="remember-me">
                <span class="checkbox">
                    <input type="checkbox">
                    <span class="checked"></span>
                </span>
                Remember me
            </label>
            <a href="#">Forgot Your Password</a>
        </div>
        
        <input type="submit" value="Log In Now" class="login-btn" disabled>
        <div class="privacy-link">
            <a href="#">Privacy Policy</a>
        </div>
    </form>
    
    <div class="dont-have-account">
        Don't have an Epic Games account?
        <a href="#" id="signupLink">Sign Up</a>
    </div>
</section>

<!-- CRIAR CONTA (SEGUNDA SECTION) -->
<section id="signupSection" class="login-form">
    <div class="logo"><img src="./img/logo.png" alt="Epic Games Logo" style="display: block; margin: 0 auto 1rem;"></div>
    
    <h6>Criar Conta</h6>
    
    <form action="">
        <!-- Campo País -->
        <div class="textbox">
            <select>
                <option value="" disabled selected>País</option>
                <option value="BR">Brasil</option>
                <option value="US">Estados Unidos</option>
                <option value="CA">Canadá</option>
                <option value="GB">Reino Unido</option>
                <option value="FR">França</option>
                <!-- Adicione mais países conforme necessário -->
            </select>
            <span class="check-message hidden">Required</span>
        </div>

        <!-- Campo Endereço de E-mail -->
        <div class="textbox">
            <input type="text" placeholder="Endereço de E-mail">
            <span class="check-message hidden">Required</span>
        </div>

        <!-- Campo Nome e Sobrenome -->
        <div class="name-fields">
            <div class="textbox">
                <input type="text" placeholder="Nome">
                <span class="check-message hidden">Required</span>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Sobrenome">
                <span class="check-message hidden">Required</span>
            </div>
        </div>

        <!-- Campo Nome de Exibição -->
        <div class="textbox">
            <input type="text" placeholder="Nome de exibição">
            <span class="check-message hidden">Required</span>
        </div>

        <!-- Campo Senha -->
        <div class="textbox">
            <input type="password" placeholder="Senha">
            <span class="check-message hidden">Required</span>
        </div>

        <!-- Opções adicionais com checkboxes -->
        <!-- Opções adicionais com checkboxes -->
<div class="checkbox-container">
    <input type="checkbox" id="news">
    <label for="news">Enviem-me notícias, pesquisas e ofertas especiais da Epic Games</label>
</div>
<div class="checkbox-container">
    <input type="checkbox" id="terms" required>
    <label for="terms">Eu li e concordo com os <a href="#">termos de serviço</a>.</label>
</div>

        <!-- Botão para Criar Conta -->
        <input type="submit" value="Continuar" class="login-btn">
    </form>

    <!-- Link para retornar ao login -->
    <div class="already-have-account">
    Já tem uma conta? <a href="#">Entrar</a>
    </div>

</section>

<script src="js/login.js"></script>

<script>
    document.querySelector('.dont-have-account a').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('signupSection').style.display = 'block';
        document.getElementById('loginSection').style.display = 'none';
    });

    document.querySelector('.already-have-account a').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('signupSection').style.display = 'none';
        document.getElementById('loginSection').style.display = 'block';
    });
</script>

</body>

</html>
