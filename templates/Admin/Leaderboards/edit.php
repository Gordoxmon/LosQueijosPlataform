<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Leaderboard $leaderboard
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $leaderboard->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $leaderboard->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Leaderboards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaderboards form content">
            <?= $this->Form->create($leaderboard) ?>
            <fieldset>
                <legend><?= __('Edit Leaderboard') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('score');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
