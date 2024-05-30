<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Topic[]|\Cake\Collection\CollectionInterface $topics
 */
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->css('game') ?>
    <title>Queijinho Cibersegurança</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #659664;">

<h1 class="mint">Vidas: 4</h1>

<a href="lore3">
    <?= $this->Html->image('left-arrow.png', ['class' => 'Sair', 'role' => 'button']) ?>
</a>

<div class='speech-bubble'>Ajuda-me a reaver os meus Queijinhos!<br>Clica no botão e responde às diversas questões,<br>mas CUIDADO não erres na pergunta, pois posso perder o meu Queijo.</div>

<div>
    <?= $this->Html->image('ratoPC.png', ['class' => 'ratoPC']) ?>
</div>

<div>
    <?= $this->Html->image('triangulo.png', ['class' => 'triangulo']) ?>
</div>

<div class="grupo1">
    <ul class='pie' id="pie" style="transform: rotate(225deg);">
        <li id="1" class='slice-amarelo'>
            <div class='amarelo'></div>
        </li>
        <li id="2" class='slice-roxo'>
            <div class='roxo'></div>
        </li>
        <li id="3" class='slice-azul'>
            <div class='azul'></div>
        </li>
        <li id="4" class='slice-rosa'>
            <div class='rosa'></div>
        </li>
    </ul>
</div>

<div id="ontouchstart">
    <div class="button">
        <a onclick="rollDice()">Girar Roleta</a>
    </div>
</div>

<div>
    <?= $this->Html->image('roxopreso.png', ['class' => 'roxopreso']) ?>
</div>

<div>
    <?= $this->Html->image('rosapreso.png', ['class' => 'rosapreso']) ?>
</div>

<div>
    <?= $this->Html->image('azulpreso.png', ['class' => 'azulpreso']) ?>
</div>

<div>
    <?= $this->Html->image('amarelopreso.png', ['class' => 'amarelopreso']) ?>
</div>

<div class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="questionModalLabel">Pergunta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="questionText">Aqui vai a pergunta</p>
                <div class="d-flex flex-column">
                    <button type="button" class="btn btn-primary m-2" id="answer1" onclick="checkAnswer(1)">Resposta 1</button>
                    <button type="button" class="btn btn-primary m-2" id="answer2" onclick="checkAnswer(2)">Resposta 2</button>
                    <button type="button" class="btn btn-primary m-2" id="answer3" onclick="checkAnswer(3)">Resposta 3</button>
                    <button type="button" class="btn btn-primary m-2" id="answer4" onclick="checkAnswer(4)">Resposta 4</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Fechar</button>
            </div>
        </div>
    </div>
</div>

<script>
    let topics = <?= json_encode($topics) ?>;
    let askedQuestions = {};
    let currentPosition = 1;
    let lives = 4; // Initialize lives

    function updateLives() {
        document.querySelector('.mint').innerText = 'Vidas: ' + lives;
    }

    function rollDice() {
        var randomNumber = Math.floor(Math.random() * 4) + 1;
        var currentTransform = document.getElementById("pie").style.transform;
        var currentRotation = currentTransform ? parseInt(currentTransform.replace("rotate(", "").replace("deg)", "")) : 0;
        var newRotation = currentRotation - (randomNumber * 90);
        document.getElementById("pie").style.transform = "rotate(" + newRotation + "deg)";

        currentPosition = ((currentPosition + randomNumber - 1) % 4) + 1;

        // Show the modal after the rotation
        console.log(currentPosition);
        setTimeout(function() {
            showQuestion(currentPosition);
        }, 1000); // Adjust the timeout to match the duration of the spinning animation
    }

    function getColorByTopicNumber(topicNumber) {
        switch(topicNumber) {
            case 1: return '#F8E18E';
            case 2: return '#F88E8E';
            case 3: return '#49A4CA';
            case 4: return '#7C7BBA';
            default: return '#FFFFFF';
        }
    }

    function showQuestion(topicNumber) {
        let topic = topics[topicNumber - 1];
        let questions = topic.questions;

        if (!askedQuestions[topic.id]) {
            askedQuestions[topic.id] = [];
        }

        let filteredQuestions = questions.filter(q => !askedQuestions[topic.id].includes(q.id));
        if (filteredQuestions.length === 0) {
            askedQuestions[topic.id] = [];
            filteredQuestions = questions;
        }
        document.getElementById("questionModalLabel").innerText = topic.name;
        let question = filteredQuestions[Math.floor(Math.random() * filteredQuestions.length)];
        askedQuestions[topic.id].push(question.id);

        document.getElementById("questionText").innerText = question.name;
        let color = getColorByTopicNumber(topicNumber);
        question.options.forEach((option, index) => {
            let answerButton = document.getElementById("answer" + (index + 1));
            answerButton.innerText = option.name;
            answerButton.onclick = function() { checkAnswer(option.isCorrect) };
            answerButton.style.backgroundColor = color;
        });

        $('#questionModal').modal('show');
    }

    function checkAnswer(isCorrect) {
        if (isCorrect) {
            // Check if the question is related to topic 1
            let topicNumber = currentPosition;
            if (topicNumber === 1) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.amarelopreso').src = '<?= $this->Url->image("queijoamarelo.png",['class' => 'amarelopreso']) ?>';
            }
            if (topicNumber === 2) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.rosapreso').src = '<?= $this->Url->image("queijorosa.png",['class' => 'rosapreso']) ?>';
            }
            if (topicNumber === 3) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.azulpreso').src = '<?= $this->Url->image("queijoazul.png",['class' => 'azulpreso']) ?>';
            }
            if (topicNumber === 4) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.roxopreso').src = '<?= $this->Url->image("queijoroxo.png",['class' => 'roxopreso']) ?>';
            }
        } else {
            let topicNumber = currentPosition;
            if (topicNumber === 1) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.amarelopreso').src = '<?= $this->Url->image("amarelopreso.png",['class' => 'amarelopreso']) ?>';
            }
            if (topicNumber === 2) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.rosapreso').src = '<?= $this->Url->image("rosapreso.png",['class' => 'rosapreso']) ?>';
            }
            if (topicNumber === 3) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.azulpreso').src = '<?= $this->Url->image("azulpreso.png",['class' => 'azulpreso']) ?>';
            }
            if (topicNumber === 4) {
                // Unlock the cheese image related to topic 1
                document.querySelector('.roxopreso').src = '<?= $this->Url->image("roxopreso.png",['class' => 'roxopreso']) ?>';
            }
            lives--; // Decrement lives
            updateLives(); // Update the lives display
            if (lives <= 0) {
                console.log("perdeu")
                window.location.href = "defeat";
            }
        }

        // Check if all cheeses are unlocked
        if (document.querySelector('.amarelopreso').src.endsWith("queijoamarelo.png") &&
            document.querySelector('.rosapreso').src.endsWith("queijorosa.png") &&
            document.querySelector('.azulpreso').src.endsWith("queijoazul.png") &&
            document.querySelector('.roxopreso').src.endsWith("queijoroxo.png")) {
            window.location.href = "victory";
        }

        $('#questionModal').modal('hide');
    }

    function closeModal() {
        $('#questionModal').modal('hide');
    }

    // Initial call to display lives
    updateLives();

</script>

</body>

</html>
