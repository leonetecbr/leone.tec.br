<?php
$url = !empty($_SERVER['REQUEST_SCHEME'])?
    $_SERVER['REQUEST_SCHEME'] :
    'http'
    . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <title>Portfólio | Leone Oliveira</title>
    <meta property="og:title" content="Portfólio | Leone Oliveira">
    <meta name="twitter:title" content="Portfólio | Leone Oliveira">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/product.css" rel="stylesheet">
    <meta name="description"
          content="Quem é Leone Oliveira ? Venha conhecer um pouco mais sobre mim e sobre meus projetos pessoais.">
    <meta name="twitter:description"
          content="Quem é Leone Oliveira ? Venha conhecer um pouco mais sobre mim e sobre meus projetos pessoais.">
    <meta property="og:description"
          content="Quem é Leone Oliveira ? Venha conhecer um pouco mais sobre mim e sobre meus projetos pessoais.">
    <meta property="og:site_name" content="Leone Oliveira">
    <meta name="author" content="Leone Oliveira">
    <meta name="publisher" content="Leone Oliveira">
    <meta name="creator" content="Leone Oliveira">
    <meta name="keywords" content="Desenvolvedor, Programador, Estudante, Leone Oliveira, Jovem, Dedicado">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta name="twitter:url" content="<?php echo $url; ?>">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index, follow">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Leone Oliveira</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#apps"><i>Web Apps</i> e Jogos</a></li>
                <li class="nav-item"><a class="nav-link" href="#social">Redes sociais</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="position-relative overflow-hidden p-3 p-lg-5 text-center bg-light" id="sobre">
    <div class="col-md-6 p-md-3 p-lg-4 mx-auto my-5">
        <h2 class="display-6">Oi, eu sou Leone!</h2>
        <p class="lead font-weight-normal mt-4">Desde pequeno sempre gostei muito de tecnologia e tentava entender o que
            estava por trás dos aplicativos e <i>sites</i> que usava, sempre tentei usar a tecnologia para facilitar e
            melhorar
            a minha vida e das pessoas ao meu redor. O tempo passou e só cresceu junto comigo essa vontade de entender a
            tecnologia e usá-la para simplificar a vida das pessoas, o caminho que eu encontrei para cumprir minha
            missão de ajudar as pessoas através da tecnologia foi me tornando desenvolvedor.</p>
        <div class="text-center mt-5">
            <a href="#apps" class="btn btn-outline-dark btn-lg">Conhecer meus <i>apps</i>/jogos</a>
        </div>
    </div>
    <div class="product-device shadow-sm d-none d-lg-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-lg-block"></div>
</div>
<div class="text-center p-md-4 bg-dark text-light p-3" id="apps">
    <h2 class="fs-2">Meus apps e jogos</h2>
</div>
<div class="d-md-flex flex-md-equal w-100 pl-md-3">
    <div class="bg-dark mr-md-3 px-3 px-md-5 text-center text-light overflow-hidden" id="ofertas">
        <div class="bg-light shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/img/ofertas.png" alt="Leone Promos">
        </div>
        <h2 class="display-5">Leone Promos</h2>
        <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/>
        <img src="https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white" alt="Jquery"/>
        <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"/>
        <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
        <div class="mt-3 py-3">
            <p class="lead">O Leone Promos é um <i>site</i> que reúne as melhores ofertas das lojas mais seguras da <i>internet</i>,
                temos uma seleção de melhores promoções escolhidas a dedo por mim, além disso, é possível ativar
                notificações, pesquisar pelo produto desejado, navegar por uma seleção de promoções por lojas e por
                categorias e até mesmo rastrear seu pedido se ele tiver sido enviado pelos Correios.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div>
                <a href="https://ofertas.leone.tec.br/" class="btn btn-outline-light bg-lg">Acessar agora</a>
            </div>
            <div>
                <a href="https://github.com/leonetecbr/leone-promos" class="btn btn-outline-light bg-lg">Ver código</a>
            </div>
        </div>
    </div>
    <div class="bg-light mr-md-3 px-3 px-md-5 text-center overflow-hidden" id="federal">
        <div class="bg-dark shadow-sm mx-auto p-3 mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/img/bot_alert.png" alt="Bot de alerta">
        </div>
        <h2 class="display-5">Bot de Alerta</h2>
        <img src="https://img.shields.io/badge/Node.js-43853D?style=for-the-badge&logo=node.js&logoColor=white" alt="Node.js">
        <img src="https://img.shields.io/badge/WhatsApp-25D366?style=for-the-badge&logo=whatsapp&logoColor=white" alt="WhatsApp">
        <div class="my-3 p-3">
            <p class="lead">Esse bot permite aos usuários gerenciarem quais tópicos querem ser alertados a qualquer
                momento, permite que qualquer usuário lance um alerta para avisar a todos quando algo importante
                acontecer no grupo do WhatsApp, além disso, os tópicos são facilmente customizáveis.</p>
        </div>
        <div class="d-grid mb-3 p-3">
            <a href="https://github.com/leonetecbr/bot-alert-group-whatsapp/" class="btn btn-outline-dark bg-lg btn-block">
                Ver código
            </a>
        </div>
    </div>
</div>
<div class="d-md-flex flex-md-equal w-100 pl-md-3">
    <div class="bg-light mr-md-3 px-3 px-md-5 text-center overflow-hidden" id="federal">
        <div class="bg-dark shadow-sm mx-auto p-3 mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/img/federal_skill.png" alt="Resultado da Federal">
        </div>
        <h2 class="display-5">Resultado da Federal</h2>
        <img src="https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white" alt="Python">
        <img src="https://img.shields.io/badge/Amazon_AWS-232F3E?style=for-the-badge&logo=amazon-aws&logoColor=white" alt="AWSD">
        <div class="my-3 p-3">
            <p class="lead">Essa Skill para Alexa fornece o resultado da Loteria Federal com 6, 4 ou 2 dígitos, além do
                resultado do último concurso, ela informa o que foi sorteado em qualquer concurso anterior e ainda pode
                gerar um palpite caso o usuário deseje.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div>
                <a href="https://www.amazon.com.br/dp/B099X7D5NC" class="btn btn-outline-dark bg-lg">Ativar skill</a>
            </div>
            <div>
                <a href="https://github.com/leonetecbr/alexa-resultado-federal/" class="btn btn-outline-dark bg-lg">Ver código</a>
            </div>
        </div>
    </div>

    <div class="bg-dark text-light mr-md-3 px-3 px-md-5 text-center overflow-hidden" id="megasena">
        <div class="bg-light shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/apps/megasena/icons/192.png" alt="Mega-Sena">
        </div>
        <h2 class="display-5">Números da Mega-Sena</h2>
        <img src="https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB" alt="React">
        <div class="mt-3 py-3">
            <p class="lead">Com grande parte das pessoas querendo apostar na Mega-sena da virada e diante da
                impossibilidade de geração dos números diretamente pelo sistema da CAIXA, criei esse pequeno sistema que
                gera os números para quem quiser apostar na Mega-Sena, além disso, há opções de personalização do modo
                de geração dos números.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div>
                <a href="https://leone.tec.br/apps/megasena/" class="btn btn-outline-light bg-lg">Acessar agora</a>
            </div>
            <div>
                <a href="https://github.com/leonetecbr/gera-numeros-mega-sena" class="btn btn-outline-light bg-lg">
                    Ver código
                </a>
            </div>
        </div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 pl-md-3">
    <div class="bg-dark mr-md-3 px-3 px-md-5 text-center text-light overflow-hidden" id="snake">
        <div class="bg-light shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/games/snake/img/192.png" alt="Jogo da cobrinha">
        </div>
        <h2 class="display-5">Jogo da Cobrinha</h2>
        <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
        <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
        <div class="mt-3 py-3">
            <p class="lead">O clássico jogo da cobrinha recriado para o curso de HTML Web Developer que fiz na Digital
                Innovation One. Fiz algumas adições ao jogo original como adição das bombas que fazem perder pontuação e
                o teclado virtual para dispositivos mobile.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div>
                <a href="https://leone.tec.br/games/snake" class="btn btn-outline-light bg-lg">Jogar agora</a>
            </div>
            <div>
                <a href="https://github.com/leonetecbr/snake-dio" class="btn btn-outline-light bg-lg">Ver código</a>
            </div>
        </div>
    </div>
    <div class="bg-light mr-md-3 px-3 px-md-5 text-center overflow-hidden" id="tictactoe">
        <div class="bg-dark shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/img/tictactoe.png" alt="Jogo da velha">
        </div>
        <h2 class="display-5">Jogo da Velha</h2>
        <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
        <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
        <img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"/>
        <img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
        <div class="my-3 p-3">
            <p class="lead">O bastante conhecido jogo da velha agora pode ser jogado sem você precisar instalar
                nenhum aplicativo! Tudo pelo navegador, mas ainda sim, você poderá chamar seu amigo para jogar contra
                você ou qualquer pessoa do mundo conectada a <i>internet</i>.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div>
                <a href="https://leone.tec.br/games/tic-tac-toe" class="btn btn-outline-dark bg-lg">Jogar agora</a>
            </div>
            <div>
                <a href="https://github.com/leonetecbr/tic-tac-toe" class="btn btn-outline-dark bg-lg">Ver código</a>
            </div>
        </div>
    </div>
</div>
<!--div class="bg-dark mr-md-3 px-3 px-md-5 text-center text-light overflow-hidden" id="resgate">
    <div class="bg-light shadow-sm mx-auto p-3 mb-3"
         style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
        <img src="/games/rescue/imgs/icons/192.png" alt="Jogo de resgate">
    </div>
    <h2 class="display-5">Jogo de Resgate</h2>
    <div class="my-3 p-3">
        <p class="lead">Seguindo as orientações do professor da Digital Innovation One, construir esse jogo onde o
            objetivo é regatar o amigo e eliminar a maior quantidade de inimigos possíveis. A dificuldade aumenta
            sempre que o jogador consegue mais pontos até ele perder todas suas energias, além disso, é possível
            jogar <i>offline</i>.
        </p>
    </div>
    <div class="d-flex flex-row mb-3 p-3 justify-content-around">
        <div>
            <a href="https://leone.tec.br/games/rescue" class="btn btn-outline-light bg-lg">Jogar agora</a>
        </div>
        <div>
            <a href="https://github.com/leonetecbr/rescue-dio" class="btn btn-outline-light bg-lg">Ver código</a>
        </div>
    </div>
</div-->
<footer class="container-fluid bg-dark text-light fw-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-6 col-lg">
                <small class="d-block mb-3">&copy; 2020-<?php echo date('Y'); ?></small>
                <small class="d-block mb-3">Todos os direitos reservados</small>
            </div>
            <div class="col-6 col-lg" id="social">
                <h5>Redes sociais</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://www.linkedin.com/in/leonetecbr/">Linkedin</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://github.com/leonetecbr">GitHub</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://leone.tec.br/email">E-mail</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://twitter.com/leonetecbr">Twitter</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://www.instagram.com/leone.tec.br/">Instagram</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://www.facebook.com/leonetecbr">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="/js/jquery-slim.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>