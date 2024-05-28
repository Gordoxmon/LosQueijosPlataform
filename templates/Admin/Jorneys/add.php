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
            <?= $this->Html->link(__('List Jorneys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jorneys form content">
            <?= $this->Form->create($jorney) ?>
            <fieldset>
                <legend><?= __('Add Jorney') ?></legend>
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
