<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<?php echo $cell = $this->cell('Inbox'); ?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <?= $this->Html->link(__('Logout'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone_number') ?></th>
                    <th><?= $this->Paginator->sort('gender') ?></th>
                    <th><?= $this->Paginator->sort('created_date') ?></th>
                    <th><?= $this->Paginator->sort('modified_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sno = $this->Paginator->counter('{{start}}');
                foreach ($users as $user) :
                ?>
                    <tr>
                        <!-- <td><?= $this->Number->format($user->id) ?></td> -->
                        <td><?= $sno++ ?></td>
                        <td><?= $this->Html->image(h($user->image), array('width' => '80px')) ?></td>
                        <td><?= h($user->first_name) ?></td>
                        <td><?= h($user->last_name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->phone_number) ?></td>
                        <td><?= h($user->gender) ?></td>
                        <td><?= h($user->created_date) ?></td>
                        <td><?= h($user->modified_date) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
<?php $this->Html->css('style', ['block' => 'css']); ?>