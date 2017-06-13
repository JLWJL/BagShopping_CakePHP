<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Bag[]|\Cake\Collection\CollectionInterface $bags
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bag'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bags index large-9 medium-8 columns content">
    <h3><?= __('Bags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bagID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bagName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplierID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoryID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagePath') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bags as $bag): ?>
            <tr>
                <td><?= $this->Number->format($bag->bagID) ?></td>
                <td><?= h($bag->bagName) ?></td>
                <td><?= $this->Number->format($bag->supplierID) ?></td>
                <td><?= $this->Number->format($bag->categoryID) ?></td>
                <td><?= $this->Number->format($bag->price) ?></td>
                <td><?= h($bag->description) ?></td>
                <td><?= h($bag->imagePath) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bag->bagID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bag->bagID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bag->bagID], ['confirm' => __('Are you sure you want to delete # {0}?', $bag->bagID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
