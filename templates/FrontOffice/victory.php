<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css('victory') ?>
    <link rel="icon" type="image/x-icon" href="<?= $this->Url->image('queijo.png') ?>">
    <title>Queijinho Cibersegurança</title>
</head>

<body style="background-color: #659664;">

<h1 class="mint2">Vitória!</h1>

<div class="imgbox">
    <?= $this->Html->image('FUNDO.png', ['class' => 'center-fit']) ?>
</div>

<div>
    <?= $this->Html->image('mouse seguro 1.png', ['class' => 'img-rato']) ?>
</div>

<div ontouchstart="">
    <div class="button6">
        <?= $this->Html->link("Continuar", ["action"=>"index","class" => "btn btn-primary","required"=>true]) ?>
    </div>
</div>

<div>
    <?= $this->Html->image('queijoamarelo.png', ['class' => 'amarelo1']) ?>
</div>
<div>
    <?= $this->Html->image('queijoamarelo.png', ['class' => 'amarelo2']) ?>
</div>

<div>
    <?= $this->Html->image('queijorosa.png', ['class' => 'rosa1']) ?>
</div>
<div>
    <?= $this->Html->image('queijorosa.png', ['class' => 'rosa2']) ?>
</div>

<div>
    <?= $this->Html->image('queijoazul.png', ['class' => 'azul1']) ?>
</div>
<div>
    <?= $this->Html->image('queijoazul.png', ['class' => 'azul2']) ?>
</div>

<div>
    <?= $this->Html->image('queijoroxo.png', ['class' => 'roxo1']) ?>
</div>
<div>
    <?= $this->Html->image('queijoroxo.png', ['class' => 'roxo2']) ?>
</div>

</body>

</html>
