<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pizza form large-9 medium-8 columns content">
    <?= $this->Form->create($pizza) ?>
    <fieldset>
        <legend><?= __('Add Pizza') ?></legend>
        <?php
            echo $this->Form->input('quantity');
            echo $this->Form->input('pizza_size');
            echo $this->Form->input('crust_type');
            echo $this->Form->input('toppings');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->button(__('Reset')) ?>
    <?= $this->Form->end() ?>
</div>
