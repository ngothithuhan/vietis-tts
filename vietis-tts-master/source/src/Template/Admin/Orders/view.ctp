

<div class="orders view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row" width="300px"><?= __('Mã đơn hàng') ?></th>
            <td><?= h($order->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Khách hàng') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->username, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
          <tr>
            <th scope="row"><?= __('Ngày giao hàng') ?></th>
            <td><?= h($order->delivery_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Trạng thái') ?></th>
            <td><?= STATUS_ORDER[$order->status] ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Địa chỉ nhận') ?></th>
            <td><?= h($order->address) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Số điện thoại người nhận') ?></th>
            <td><?= $this->Number->format($order->phone_recipient) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Tên người nhận') ?></th>
            <td><?= h($order->name_recipient) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Thời gian đặt hàng') ?></th>
            <td><?= h($order->created_at) ?></td>
        </tr>
        
    </table>

<h3>Danh sách sản phẩm</h3>
<table>
    <thead>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
    </thead>

    
    <?php foreach ($order->orders_products as $item): ?>
        <tr>
            <td width="25%"><?= h($item->products_id) ?></td>
            <td><?=  $this->Html->link($item->products_name, ['controller' => 'Products', 'action' => 'view', $item->products_id])  ?></td>
            <td width="15%"><?= h($item->price) ?></td>
            <td width="15%"><?= h($item->quantity) ?></td>
            <td></td>
        </tr> 

    <?php endforeach; ?>
</table>

</div>
