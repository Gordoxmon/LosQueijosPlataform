<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Leaderboard> $leaderboards
 */
?>
<div class="leaderboards index content">
    <?= $this->Html->link(__('New Leaderboard'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Leaderboards') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('score') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($leaderboards as $leaderboard): ?>
                <tr>
                    <td><?= $this->Number->format($leaderboard->id) ?></td>
                    <td><?= h($leaderboard->name) ?></td>
                    <td><?= $this->Number->format($leaderboard->score) ?></td>
                    <td><?= h($leaderboard->created) ?></td>
                    <td><?= h($leaderboard->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $leaderboard->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leaderboard->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leaderboard->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leaderboard->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
