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
    <?php $this->loadViewInTemplate($viewName); ?>
</main>

<script type="text/javascript" src="assets/js/libs/require/require.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<!-- Carregar js assets-->
<?php foreach ($this->js as $js): ?>
    <script type="text/javascript" src="<?= $js ?>"></script>
<?php endforeach; ?>
</body>

</html>