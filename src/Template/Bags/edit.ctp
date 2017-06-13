<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $bag->bagID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $bag->bagID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Bags'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="bags form large-9 medium-8 columns content">
    <?= $this->Form->create($bag) ?>
    <fieldset>
        <legend><?= __('Edit Bag') ?></legend>
        <?php
            echo $this->Form->control('bagName');
            echo $this->Form->control('supplierID');
            echo $this->Form->control('categoryID');
            echo $this->Form->control('price');
            echo $this->Form->control('description');
            echo $this->Form->control('imagePath');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
