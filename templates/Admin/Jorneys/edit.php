<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jorney $jorney
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jorney->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jorney->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Jorneys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jorneys form content">
            <?= $this->Form->create($jorney) ?>
            <fieldset>
                <legend><?= __('Edit Jorney') ?></legend>
                <?php
                    echo $this->Form->control('path');
                    echo $this->Form->control('ip');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
