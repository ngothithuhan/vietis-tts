
<div class="box">
    <div class="box-header">
        <h3 class="box-title">THÔNG TIN ĐƠN HÀNG</h3>
    </div> 
    <div class="box-body">
        <table class="table table-bordered table-responsive table-hover dataTable ">
            <thead>
                <tr>

                    <th scope="col"><?= $this->Paginator->sort('Mã đơn hàng') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Khách hàng') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Ngày giao hàng') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Trạng thái') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Người nhận') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
               <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= h($order->code) ?></td>
                    <td><?= $order->has('user') ? $this->Html->link($order->user->username, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
                    <td><?= h($order->delivery_at) ?></td>
                    <td><?= STATUS_ORDER[$order->status] ?></td>
                    <td><?= h($order->name_recipient) ?></td>
                    <td><?= h($order->created_at) ?></td>
                    <td><?= h($order->updated_at) ?></td>                   
                    <td class="actions">

                      <?= $this->Html->link(__('Chi tiết'), ['action' => 'view', $order->id]) ?>
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
