<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Carregar css assets-->
    <?php foreach ($this->css as $css): ?>
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL . $css ?>">
    <?php endforeach; ?>
</head>

<body>
<main>
    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
</main>

<script data-main="<?= BASE_URL ?>assets/js/app" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.20/require.min.js"></script>
<!-- Carregar js assets-->
<?php foreach ($this->js as $js): ?>
    <script type="text/javascript" src="<?= BASE_URL . $js ?>"></script>
<?php endforeach; ?>
</body>

</html>