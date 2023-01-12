<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8"> -->
    <?php echo $this->Html->charset(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php echo $this->Html->css('bootstrap.min.css'); ?>
    <?php echo $this->Html->script('bootstrap.min.js'); ?>
    <title>CAKE PHP</title>

</head>

<body>
    <?= $this->element('flash/nav') ?>

    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>




</body>

</html>