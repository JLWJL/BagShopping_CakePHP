<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Bag $bag
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bag'), ['action' => 'edit', $bag->bagID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bag'), ['action' => 'delete', $bag->bagID], ['confirm' => __('Are you sure you want to delete # {0}?', $bag->bagID)]) ?> </li>
        <li><?= $this->Html->link(__('List Bags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bag'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bags view large-9 medium-8 columns content">
    <h3><?= h($bag->bagID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('BagName') ?></th>
            <td><?= h($bag->bagName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($bag->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ImagePath') ?></th>
            <td><?= h($bag->imagePath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BagID') ?></th>
            <td><?= $this->Number->format($bag->bagID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SupplierID') ?></th>
            <td><?= $this->Number->format($bag->supplierID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CategoryID') ?></th>
            <td><?= $this->Number->format($bag->categoryID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($bag->price) ?></td>
        </tr>
    </table>
</div>
