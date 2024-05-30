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
            <?= $this->Html->link(__('Edit Leaderboard'), ['action' => 'edit', $leaderboard->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Leaderboard'), ['action' => 'delete', $leaderboard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaderboard->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Leaderboards'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Leaderboard'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="leaderboards view content">
            <h3><?= h($leaderboard->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($leaderboard->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($leaderboard->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Score') ?></th>
                    <td><?= $this->Number->format($leaderboard->score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($leaderboard->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($leaderboard->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
