<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css('lore1') ?>

    <link rel="icon" type="image/x-icon" href="../../webroot/img/queijo.png">
    <title>Queijinho Cibersegurança</title>
</head>

<body style='background-color: #442222'>

    <div class="imgbox">
        <?= $this->Html->image('CENA_3.png', ['class' => 'center-fit']) ?>
    </div>

    <div class="typewriter">
        <h1>Um dia os seus queijinhos desapareceram... </h1>
        <h1>O Rufus ficou muito triste...</h1>
        <h1 class="delayed">A pessoa que roubou os queijinhos, disse-lhe para ele aprender  </h1>
        <h1 class="delayed">sobre Cibersegurança para os reaver. </h1>

    </div>

    <div ontouchstart="">
        <div class="button1">
            <?= $this->Html->link("Anterior", ["action"=>"lore1","class" => "btn btn-primary","required"=>true]) ?>
        </div>

        <div class="button">
            <?= $this->Html->link("Continuar", ["action"=>"lore3","class" => "btn btn-primary","required"=>true]) ?>
        </div>
    </div>

</body>

</html>
