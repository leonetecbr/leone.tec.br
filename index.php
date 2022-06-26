<?php $url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
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
                <li class="nav-item"><a class="nav-link" href="#blog"><i>Blog</i></a></li>
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
        <div class="text-center mt-5"><a href="#apps">
                <button class="btn btn-outline-dark btn-lg">Conhecer meus <i>apps</i>/jogos</button>
            </a></div>
    </div>
    <div class="product-device shadow-sm d-none d-lg-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-lg-block"></div>
</div>
<div class="text-center p-md-4 bg-dark text-light p-3" id="apps">
    <h2 class="fs-2">Meus jogos e apps </h2>
</div>
<div class="d-md-flex flex-md-equal w-100 pl-md-3">
    <div class="bg-dark mr-md-3 px-3 px-md-5 text-center text-light overflow-hidden" id="ofertas">
        <div class="bg-light shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/img/ofertas.png" alt="Leone Promos">
        </div>
        <h2 class="display-5">Leone Promos</h2>
        <div class="mt-3 py-3">
            <p class="lead">O Leone Promos é um <i>site</i> que reúne as melhores ofertas das lojas mais seguras da <i>internet</i>,
                temos uma seleção de melhores promoções escolhidas a dedo por mim, além disso, é possível ativar
                notificações, pesquisar pelo produto desejado, navegar por uma seleção de promoções por lojas e por
                categorias e até mesmo rastrear seu pedido se ele tiver sido enviado pelos Correios.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div><a href="https://ofertas.leone.tec.br/">
                    <button class="btn btn-outline-light bg-lg">Acessar agora</button>
                </a></div>
            <div><a href="https://github.com/leonetecbr/leone-promos">
                    <button class="btn btn-outline-light bg-lg">Ver código</button>
                </a></div>
        </div>
    </div>
    <div class="bg-light mr-md-3 px-3 px-md-5 text-center overflow-hidden" id="federal">
        <div class="bg-dark shadow-sm mx-auto p-3 mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/img/federal_skill.png" alt="Resultado da Federal">
        </div>
        <h2 class="display-5">Resultado da Federal</h2>
        <div class="my-3 p-3">
            <p class="lead">Essa Skill para Alexa fornece o resultado da Loteria Federal com 6, 4 ou 2 dígitos, além do
                resultado do último concurso, ela informa o que foi sorteado em qualquer concurso anterior e ainda pode
                gerar um palpite caso o
                usuário deseje.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div><a href="https://www.amazon.com.br/dp/B099X7D5NC">
                    <button class="btn btn-outline-dark bg-lg">Ativar skill</button>
                </a></div>
            <div><a href="https://github.com/leonetecbr/leone-promos">
                    <button class="btn btn-outline-dark bg-lg">Ver código</button>
                </a></div>
        </div>
    </div>
</div>
<div class="d-md-flex flex-md-equal w-100 pl-md-3">
    <div class="bg-light mr-md-3 px-3 px-md-5 text-center overflow-hidden" id="megasena">
        <div class="bg-dark shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/apps/megasena/icons/192.png" alt="Mega-Sena">
        </div>
        <h2 class="display-5">Números da Mega-Sena</h2>
        <div class="mt-3 py-3">
            <p class="lead">Com grande parte das pessoas querendo apostar na Mega-sena da virada e diante da
                impossibilidade de geração dos números diretamente pelo sistema da CAIXA, criei esse pequeno sistema que
                gera os números para quem quiser apostar na Mega-Sena, além disso, há opções de personalização do modo
                de
                geração dos números.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div><a href="https://leone.tec.br/apps/megasena/">
                    <button class="btn btn-outline-dark bg-lg">Acessar agora</button>
                </a></div>
            <div><a href="https://github.com/leonetecbr/gera-numeros-mega-sena">
                    <button class="btn btn-outline-dark bg-lg">Ver código</button>
                </a></div>
        </div>
    </div>
    <div class="bg-dark mr-md-3 px-3 px-md-5 text-center text-light overflow-hidden" id="snake">
        <div class="bg-light shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/games/snake/img/192.png" alt="Jogo da cobrinha">
        </div>
        <h2 class="display-5">Jogo da cobrinha</h2>
        <div class="mt-3 py-3">
            <p class="lead">O clássico jogo da cobrinha recriado para o curso de HTML Web Developer que fiz na Digital
                Innovation One. Fiz algumas adições ao jogo original como adição das bombas que fazem perder pontuação e
                o teclado virtual para dispositivos mobile.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div><a href="https://leone.tec.br/games/snake">
                    <button class="btn btn-outline-light bg-lg">Jogar agora</button>
                </a></div>
            <div><a href="https://github.com/leonetecbr/tic-tac-toe">
                    <button class="btn btn-outline-light bg-lg">Ver código</button>
                </a></div>
        </div>
    </div>
</div>

<div class="d-md-flex flex-md-equal w-100 pl-md-3">
    <div class="bg-dark mr-md-3 px-3 px-md-5 text-center text-light overflow-hidden" id="resgate">
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
            <div><a href="https://leone.tec.br/games/rescue">
                    <button class="btn btn-outline-light bg-lg">Jogar agora</button>
                </a></div>
            <div><a href="https://github.com/leonetecbr/rescue-dio">
                    <button class="btn btn-outline-light bg-lg">Ver código</button>
                </a></div>
        </div>
    </div>
    <div class="bg-light mr-md-3 px-3 px-md-5 text-center overflow-hidden" id="tictactoe">
        <div class="bg-dark shadow-sm mx-auto mb-3"
             style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
            <img src="/img/tictactoe.png" alt="Jogo da velha">
        </div>
        <h2 class="display-5">Jogo da velha</h2>
        <div class="my-3 p-3">
            <p class="lead">O bastante conhecido jogo da velha agora pode ser jogado sem você precisar instalar
                nenhum aplicativo! Tudo pelo navegador, mas ainda sim, você poderá chamar seu amigo para jogar contra
                você ou qualquer pessoa do mundo conectada a <i>internet</i>.</p>
        </div>
        <div class="d-flex flex-row mb-3 p-3 justify-content-around">
            <div><a href="https://leone.tec.br/games/tic-tac-toe">
                    <button class="btn btn-outline-dark bg-lg">Jogar agora</button>
                </a></div>
            <div><a href="https://github.com/leonetecbr/tic-tac-toe">
                    <button class="btn btn-outline-dark bg-lg">Ver código</button>
                </a></div>
        </div>
    </div>
</div>
<div class="text-center p-md-4 bg-dark text-light mb-3 p-3" id="blog">
    <h2 class="fs-2">Meu <i>Blog</i></h2>
</div>
<div class="lead py-3 px-md-5 px-3">
    <p>Sempre gostei muito de escrever e no final de 2021 eu resolvi criar um <i>blog</i> para auxiliar a pessoas em
        assuntos
        relacionados a tecnologia, lá eu ensino a como não cair em golpes, como escolher bem produtos de tecnologia,
        entre outras dicas.</p>
    <p>Usei a criação do <i>blog</i> para aprender tecnologias que até então não tinha familiaridade, uma delas foi o
        WordPress
        que eu conhecia bem pouco, acabei aprendendo para poder desenvolver meu próprio tema.</p>
    <p>Ultimamente dei uma pausa nas postagens porque estou um pouco sem tempo de escrever, mas pretendo retornar em
        breve</p>
    <div class="text-center"><a href="/blog" target="_blank">
            <button class="btn btn-outline-dark btn-lg">Conhecer o meu <i>blog</i></button>
        </a></div>
</div>
<hr>
<footer class="container py-5">
    <div class="row">
        <div class="col-6 col-lg">
            <small class="d-block mb-3 text-muted">&copy; 2020-<?php echo date('Y'); ?></small>
            <small class="d-block mb-3 text-muted">Todos os direitos reservados</small>
        </div>
        <div class="col-6 col-lg" id="social">
            <h5>Redes sociais</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="https://www.linkedin.com/in/leonetecbr/">Linkedin</a></li>
                <li><a class="text-muted" href="https://github.com/leonetecbr">GitHub</a></li>
                <li><a class="text-muted" href="https://leone.tec.br/email">E-mail</a></li>
                <li><a class="text-muted" href="https://twitter.com/leonetecbr">Twitter</a></li>
                <li><a class="text-muted" href="https://www.instagram.com/leone.tec.br/">Instagram</a></li>
                <li><a class="text-muted" href="https://www.facebook.com/leonetecbr">Facebook</a></li>
            </ul>
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