<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pizza'), ['action' => 'edit', $pizza->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pizza'), ['action' => 'delete', $pizza->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pizza->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pizza'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pizza'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pizza view large-9 medium-8 columns content">
    <h3><?= h($pizza->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= h($pizza->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Pizza Size') ?></th>
            <td><?= h($pizza->pizza_size) ?></td>
        </tr>
        <tr>
            <th><?= __('Crust Type') ?></th>
            <td><?= h($pizza->crust_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Toppings') ?></th>
            <td><?= h($pizza->toppings) ?></td>
        </tr>
        <tr>
            <th><?= __('Pickup Or Delivery') ?></th>
            <td><?= h($pizza->pickup_or_delivery) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($pizza->Address) ?></td>
        </tr>
        <tr>
            <th><?= __('Telephone') ?></th>
            <td><?= h($pizza->telephone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pizza->id) ?></td>
        </tr>
    </table>
</div>
