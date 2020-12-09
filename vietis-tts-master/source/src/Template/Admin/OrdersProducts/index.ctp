<div class="box">
    <div class="box-header">
        <h3 class="box-title">CHI TIẾT ĐƠN HÀNG</h3>
    </div> 
    <div class="box-body">
        <table class="table table-borderProducted table-responsive table-hover dataTable ">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('orders_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('products_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Price') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Hiện có') ?></th>
                 
                    <th scope="col"><?= $this->Paginator->sort('Giá nhập') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Sale') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Giá KM') ?>
                    </th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody >
               <?php foreach ($ordersProducts as $orderProduct): ?>
                <tr>
            
                    <td><?= $orderProduct->has('order') ? $this->Html->link($orderProduct->order->id, ['controller' => 'Orders', 'action' => 'view', $orderProduct->order->id]) : '' ?></td>

                    <td><?= $orderProduct->has('product') ? $this->Html->link($orderProduct->product->name, ['controller' => 'Products', 'action' => 'view', $orderProduct->product->id]) : '' ?></td>
                    <td><?= h($orderProduct->price) ?></td>
                    <td><?= h($orderProduct->quantity) ?></td>
                    
                    
                    <td><?= h($orderProduct->price_entered) ?></td>
                    <td><?= h($orderProduct->price_sale) ?></td>
                    
                    <td><?= h($orderProduct->price_comercial) ?></td>                   
                    <td class="actions">
                      <?= $this->Html->link(__('View'), ['action' => 'view', $orderProduct->id]) ?>
                      
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

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
