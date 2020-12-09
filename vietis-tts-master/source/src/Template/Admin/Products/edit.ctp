
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>


<div class="products form large-9 medium-8 columns content" , style="width: 100%; style="float: left">
    <?= $this->Form->create($product) ?>

    <div class = "row">

        <div class="col-md-5">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <?= $this->Form->text('name', ['class' => 'form-control', 'placeholder' => 'tên sản phẩm']); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <?= $this->Form->control('categories_id',  ['options' => $categories],['class' => 'form-control'],['empty' => '(choose one)']); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"> <span> Giá nhập ₫ </span> </label>
                <div class="col-sm-9"> 
                    <?= $this->Form->text('price_entered', ['class' => 'form-control', 'placeholder' => 'giá nhập']); ?>
                </div>
            </div>



            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><span> Giá bán ₫ </span> </label>
                <div class="col-sm-9">
                    <?= $this->Form->text('price_sale', ['class' => 'form-control', 'placeholder' => 'giá nhập']); ?>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-3 col-form-label"><span> Discount % </span></label>
                <div class="col-sm-9">
                    <?= $this->Form->text('price_commercial', ['class' => 'form-control', 'placeholder' => 'giảm giá']); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mô tả</label>
                <div class="col-sm-9">
                    <?= $this->Form->textarea('description', ['class' => 'form-control', 'placeholder' => 'mô tả' ]); ?>
                    <!-- <textarea name="description" placeholder=Nhập mô tả" class="form-control" required="required" maxlength="255" id="description" rows="5">
                </textarea> , required = 'required', maxlength = '255', rows ='5' -->
                </div>  
            </div>

        </div>  <!--end colum left-->
        

         <div class="col-md-6">

            <div class="form-group row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <?= $this->Form->control('updated_at'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-3">
                    <?= $this->Form->control('count_views', ['class' => 'form-control' , 'readonly' => 'readonly']); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label"></label>
                <div class="col-sm-3">
                    <?= $this->Form->control('quantity', ['class' => 'form-control' , 'readonly' => 'readonly']); ?>
                </div>
            </div>
    

        </div> <!--end colum right , 'disabled' => 'disabled'-->

    </div> <!--end row-->


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

 


   
    
</div>
