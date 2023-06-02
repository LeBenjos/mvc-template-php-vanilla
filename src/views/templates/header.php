<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC Template | <?= $this->_request->_url ?></title>
    <link rel="stylesheet" href="../src/Views/styles/style.css">
    <?php foreach($this->_styles as $style): ?>
    <link rel="stylesheet" href="../src/Views/styles/<?= $style ?>">
    <?php endforeach; ?>
</head>
<body>
    