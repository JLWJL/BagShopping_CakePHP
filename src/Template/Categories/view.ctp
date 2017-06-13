<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Category $category
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->categoryId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->categoryId], ['confirm' => __('Are you sure you want to delete # {0}?', $category->categoryId)]) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categories view large-9 medium-8 columns content">
    <h3><?= h($category->categoryId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CategoryName') ?></th>
            <td><?= h($category->categoryName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CategoryId') ?></th>
            <td><?= $this->Number->format($category->categoryId) ?></td>
        </tr>
    </table>
</div>
