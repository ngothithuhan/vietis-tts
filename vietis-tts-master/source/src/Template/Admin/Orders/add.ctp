

<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('products_id', ['options' => $products]);
            echo $this->Form->control('delivery_at');
            echo $this->Form->control('code');
            echo $this->Form->control('status');
            echo $this->Form->control('address');
            echo $this->Form->control('phone_recipient');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('name_recipient');
            //echo $this->Form->control('products._ids', ['options' => $products]);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
