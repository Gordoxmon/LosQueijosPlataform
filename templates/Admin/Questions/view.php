<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Questions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Question'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="questions view content">
            <h3><?= h($question->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Topic') ?></th>
                    <td><?= $question->has('topic') ? $this->Html->link($question->topic->name, ['controller' => 'Topics', 'action' => 'view', $question->topic->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($question->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($question->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($question->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($question->name)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Options') ?></h4>
                <?php if (!empty($question->options)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Question Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('IsCorrect') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($question->options as $options) : ?>
                        <tr>
                            <td><?= h($options->id) ?></td>
                            <td><?= h($options->question_id) ?></td>
                            <td><?= h($options->name) ?></td>
                            <td><?= h($options->isCorrect) ?></td>
                            <td><?= h($options->created) ?></td>
                            <td><?= h($options->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Options', 'action' => 'view', $options->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Options', 'action' => 'edit', $options->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Options', 'action' => 'delete', $options->id], ['confirm' => __('Are you sure you want to delete # {0}?', $options->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
