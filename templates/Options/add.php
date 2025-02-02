<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Option $option
 * @var \Cake\Collection\CollectionInterface|string[] $questions
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Options'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="options form content">
            <?= $this->Form->create($option) ?>
            <fieldset>
                <legend><?= __('Add Option') ?></legend>
                <?php
                    echo $this->Form->control('question_id', ['options' => $questions]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('isCorrect');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
