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
            <?= $this->Html->link(__('Edit Jorney'), ['action' => 'edit', $jorney->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Jorney'), ['action' => 'delete', $jorney->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jorney->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Jorneys'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Jorney'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="jorneys view content">
            <h3><?= h($jorney->ip) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ip') ?></th>
                    <td><?= h($jorney->ip) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($jorney->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($jorney->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($jorney->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Path') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($jorney->path)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
