<html>
<head>
    <meta charset="UTF-8">
    <title>Site institucional</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/template.css"/>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
</head>
<body>
<header>
    <div class="topo">
        <div class="topo1"></div>
        <div class="banner"></div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>/portfolio">Portfolio</a></li>
            <li><a href="<?php echo BASE_URL; ?>/sobre">Sobre</a></li>
            <li><a href="<?php echo BASE_URL; ?>/servicos">Serviços</a></li>
            <li><a href="<?php echo BASE_URL; ?>/contato">Contato</a></li>
        </ul>
    </div>
</header>
<main class="container">
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</main>
<footer>

</footer>
</body>
</html>
