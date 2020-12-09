

<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($ordersProduct) ?>
    <fieldset>
        <legend><?= __('Edit Chi tiết Đơn') ?></legend>
        <?php
            echo $this->Form->control('orders._ids', ['options' => $orders]);

            echo $this->Form->control('products._ids', ['options' => $products]);
            echo $this->Form->control('price');
            echo $this->Form->control('quantity');
            echo $this->Form->control('products_name');
            echo $this->Form->control('price_entered');  
            echo $this->Form->control('price_sale');
            echo $this->Form->control('price_comercial');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
