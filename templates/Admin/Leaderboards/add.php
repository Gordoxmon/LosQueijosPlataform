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
            <?= $this->Html->link(__('List Leaderboards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaderboards form content">
            <?= $this->Form->create($leaderboard) ?>
            <fieldset>
                <legend><?= __('Add Leaderboard') ?></legend>
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
