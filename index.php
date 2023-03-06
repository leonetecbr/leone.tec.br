<?php
$url = !empty($_SERVER['REQUEST_SCHEME'])?
    $_SERVER['REQUEST_SCHEME'] : 'http'
    . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$projects = json_decode(file_get_contents('projects.json'), true);
$dark = true;
$i = 0;
?>
<!doctype html>
<html lang="pt-br">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RYVJMV5QYW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-RYVJMV5QYW');
    </script>
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
    <?php
        foreach ($projects as $project):
            $i++;
            if ($i % 2 !== 0) echo '<div class="d-md-flex flex-md-equal w-100 pl-md-3">';
    ?>
        <div class="bg-<?php echo ($dark) ? 'dark' : 'light'; ?> mr-md-3 px-3 px-md-5 text-center text-<?php echo ($dark) ? 'light' : 'dark'; ?> overflow-hidden">
            <div class="bg-light shadow-sm mx-auto mb-3"
                 style="width: 80%; max-width: 230px; height: 230px; border-radius: 0 0 21px 21px;">
                <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['name']; ?>">
            </div>
            <h2 class="display-5"><?php echo $project['name']; ?></h2>
            <?php foreach ($project['badges'] as $badge): ?>
                <img src="<?php echo $badge['image']; ?>" alt="<?php echo $badge['name']; ?>"/>
            <?php endforeach; ?>
            <div class="mt-3 py-3">
                <p class="lead">
                    <?php echo $project['description']; ?>
                </p>
            </div>
            <div class="mb-3 p-3 <?php echo (count($project['links']) > 1) ? 'd-flex flex-row justify-content-around' : 'd-grid' ?>">
                <?php
                    foreach ($project['links'] as $link):
                        if (count($project['links']) > 1) echo "<div>";
                ?>

                    <a href="<?php echo $link['href']; ?>" class="btn btn-outline-<?php echo ($dark) ? 'light' : 'dark'; ?> bg-lg">
                        <?php echo $link['title']; ?>
                    </a>
                <?php
                        if (count($project['links']) > 1) echo "</div>";
                    endforeach;
                ?>
            </div>
        </div>
    <?php
        if ($i % 2 !== 0) $dark = !$dark;
        else echo "</div>";
        endforeach;
    ?>
<footer class="container-fluid bg-dark text-light fw-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-6 col-lg">
                <small class="d-block mb-3">&copy; Copyright 2020-<?php echo date('Y'); ?></small>
                <small class="d-block mb-3">Leone Oliveira</small>
            </div>
            <div class="col-6 col-lg" id="social">
                <h5>Redes sociais</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://www.linkedin.com/in/leonetecbr/">Linkedin</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://github.com/leonetecbr">GitHub</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://leone.tec.br/email">E-mail</a></li>
                    <li><a class="text-reset text-decoration-none opacity-75" href="https://www.instagram.com/leone.tec.br/">Instagram</a></li>
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