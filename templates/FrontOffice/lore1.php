
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css('lore1') ?>
    <title>Queijinho Cibersegurança</title>
</head>

<body style="background: #442222">

<div class="imgbox">
    <?= $this->Html->image('CENA_1.png', ['class' => 'center-fit']) ?>
</div>

<div class="typewriter">
    <h1>Era uma vez um pequeno rato chamado Rufus.</h1>
    <h1 class="delayed">Ele gosta muito de comer queijo, especialmente os mal cheirosos.</h1>
</div>

<div class="ontouchstart">
    <div class="button1">


            <?= $this->Html->link("Anterior", ["action"=>"index","class" => "btn btn-primary","required"=>true]) ?>

    </div>

    <div class="button">

        <?= $this->Html->link("Continuar", ["action"=>"lore2","class" => "btn btn-primary","required"=>true]) ?>

    </div>
</div>

</body>

</html>
