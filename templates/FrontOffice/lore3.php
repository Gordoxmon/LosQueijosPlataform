<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css('lore1') ?>
    <link rel="icon" type="image/x-icon" href="../../webroot/img/queijo.png">
    <title>Queijinho Cibersegurança</title>
</head>

<body style="background-color: #659664;">

    <div class="imgbox">
        <?= $this->Html->image('FUNDO.png', ['class' => 'center-fit']) ?>
    </div>

    <div>
        <?= $this->Html->image('mouse seguro 1.png', ['class' => 'img-rato']) ?>
    </div>



    <div class="typewriter">
        <h1>Consegues ajudar o Rato Rufus a aprender sobre Cibersegurança? </h1>
        <h1 class="delayed">Ajuda-o nesta aventura!</h1>
        <h1 class="delayed">Um pela Cibersegurança e Todos pelos Queijinhos! </h1>

    </div>

    <div ontouchstart="">
        <div class="button1">
            <?= $this->Html->link("Anterior", ["action"=>"lore2","class" => "btn btn-primary","required"=>true]) ?>
        </div>

        <div class="button">
            <?= $this->Html->link("Continuar", ["action"=>"game","class" => "btn btn-primary","required"=>true]) ?>
        </div>
    </div>

</body>

</html>
