<div class="row">
    <div class="col-md-4">
        <form method="post">
        <div class="col-md-12">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Action</label>
                <div class="col-sm-9">
                    <?= $this->Form->text('action', ['class' => 'form-control', 'placeholder' => 'Nhập Action']); ?>
                </div>
            </div>   
        </div>
        <div class="col-md-12"> 
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">description</label>
                <div class="col-sm-9">
                    <?= $this->Form->textarea('description', ['class' => 'form-control', 'placeholder' => 'Nhập Miêu tả']); ?>
                </div>
            </div>
        </div>
         <div class="col-md-12">
             <div class="form-group row">
                <div class="col-sm-9">
                    <div class="list-checkbox">
                    <?php if(isset($groups) && !empty($groups)): ?>
                        <?php foreach ($groups as $key => $group): ?>
                             <div class="form-group row">
                <label class="col-sm-9 col-form-label"><span ><?= $group; ?></span></label>
                <div class="col-sm-3">
                    <?= $this->Form->checkbox('groups_id', [ 'value' => $key ]); ?>
                   </div>
                            
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
          </form>

    </div>

    <div class="col-md-8">
        <div class="box">
            <div class="box-body">
                <div class="table-responsive">
                         <h3><?= __('List Permissions') ?></h3>
        <table class="table table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Name Permission') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Description') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPermissions as $listPermission): ?>
                <tr>
                    <td><?= $this->Number->format($listPermission->id) ?></td>
                    <td><?= h($listPermission->action) ?></td>
                    <td><?= h($listPermission->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Edit'), ['action' => 'index', $listPermission->id], ['class'=>'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listPermission->id], ['class'=>'btn btn-danger'] ,['confirm' => __('Are you sure you want to delete # {0}?', $listPermission->id)]) ?>
                    </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

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


                  </div>
             </div>
        </div>
    </div>
