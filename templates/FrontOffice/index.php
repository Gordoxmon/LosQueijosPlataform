<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css('home1') ?>
    <title>Queijinho Cibersegurança</title>
</head>

<body style="background-color: #659664;">

<h1 class="mint4">Queijinho</h1>
<h1 class="mint5">Cibersegurança</h1>

<h2 id="debug">YEAH THIS IS A DEV MODE!</h2>

<div class="imgbox">

    <?= $this->Html->image('FUNDO.png', ['class' => 'center-fit']) ?>
</div>

<div>
    <?= $this->Html->image('mouse seguro 1.png', ['class' => 'img-rato']) ?>
</div>

<div ontouchstart="">
    <div class="button">
        <?= $this->Html->link("Começar!", ["action"=>"lore1","class" => "btn btn-primary","required"=>true]) ?>
    </div>

    <div class="button2">
        <?= $this->Html->link("Créditos!", ["action"=>"creditos","class" => "btn btn-primary","required"=>true]) ?>
    </div>

</div>

</body>

</html>
<script>
    const debugButton=$("#debug");
    // make the colors change like a raimbow radiant
    setInterval(()=>{
        let r = Math.floor(Math.random() * 256);
        let g = Math.floor(Math.random() * 256);
        let b = Math.floor(Math.random() * 256);
        debugButton.css("color",`rgb(${r},${g},${b})`);
    },1000);

</script>