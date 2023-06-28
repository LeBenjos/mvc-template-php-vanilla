<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexagonal Template | <?= $data["route"]->getTitle() ?></title>
    <link rel="stylesheet" href="<?= __ROOT_FILE__ ?>/styles/style.css">
    <?php foreach($styles as $style): ?>
    <link rel="stylesheet" href="<?= __ROOT_FILE__ ?>/styles/<?= $style ?>">
    <?php endforeach; ?>
</head>
<body>

<?= $content ?>

<?php foreach($scripts as $script): ?>
    <script src="<?= __ROOT_FILE__ ?>/scripts/<?= $script ?>"></script>
<?php endforeach; ?>
</body>
</html>
