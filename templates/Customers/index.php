<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Customer> $customers
 */
?>
<div class="customers index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('CustomerID') ?></th>
                    <th><?= $this->Paginator->sort('CompanyName') ?></th>
                    <th><?= $this->Paginator->sort('ContactName') ?></th>
                    <th><?= $this->Paginator->sort('ContactTitle') ?></th>
                    <th><?= $this->Paginator->sort('Address') ?></th>
                    <th><?= $this->Paginator->sort('City') ?></th>
                    <th><?= $this->Paginator->sort('Region') ?></th>
                    <th><?= $this->Paginator->sort('PostalCode') ?></th>
                    <th><?= $this->Paginator->sort('Country') ?></th>
                    <th><?= $this->Paginator->sort('Phone') ?></th>
                    <th><?= $this->Paginator->sort('Fax') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= h($customer->CustomerID) ?></td>
                    <td><?= h($customer->CompanyName) ?></td>
                    <td><?= h($customer->ContactName) ?></td>
                    <td><?= h($customer->ContactTitle) ?></td>
                    <td><?= h($customer->Address) ?></td>
                    <td><?= h($customer->City) ?></td>
                    <td><?= h($customer->Region) ?></td>
                    <td><?= h($customer->PostalCode) ?></td>
                    <td><?= h($customer->Country) ?></td>
                    <td><?= h($customer->Phone) ?></td>
                    <td><?= h($customer->Fax) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->CustomerID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->CustomerID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->CustomerID], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerID)]) ?>
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
