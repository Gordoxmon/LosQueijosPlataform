<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Topic[]|\Cake\Collection\CollectionInterface $topics
 */
?>

<div class="container">
    <?php foreach ($topics as $topic) : ?>
        <div class="row">
            <div class="col-12">
                <h2><?= h($topic->name) ?></h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($topic->questions as $question) : ?>
                <div class="col-12">
                    <h3><?= h($question->name) ?></h3>
                    <ul>
                        <?php foreach ($question->options as $option) : ?>
                            <li class="btn  <?= $option->isCorrect ? 'btn-success' : 'btn-danger' ?>"><?= h($option->name) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
<?=  "asjiofbnhsweo" ?>
<?php echo"ola"?>
<script>
    const topics= <?= json_encode($topics) ?>;
    console.log(topics);
</script>
