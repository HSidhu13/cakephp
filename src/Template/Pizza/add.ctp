<html><head>
</head>
<body>
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
            echo $this->Form->input('pizza_size', [
            'options' => ['Small' => 'Small', 'Medium' => 'Medium','Large' => 'Large', 'XLarge' => 'XLarge']
        ]) ;
            echo $this->Form->input('crust_type', [
            'options' => ['Hand Tossed' => 'Hand Tossed', 'Pan' => 'Pan','Stuffed' => 'Stuffed', 'Thin' => 'Thin']
        ]) ;
            echo $this->Form->input('toppings');
            echo $this->Form->input('pickup_or_delivery', [
            'options' => ['PickUp' => 'PickUp', 'Delivery' => 'Delivery']
        ]) ;
            echo $this->Form->input('Address');
            echo $this->Form->input('telephone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</body>
</html>
