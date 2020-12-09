
<div class="products form large-9 medium-8 columns content" >
    <?= $this->Form->create($product) ?>

    <div class = "row">

        <div class="col-md-5">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-9">
                    <?= $this->Form->text('name', [ 'placeholder' => 'tên sản phẩm']); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label"></label> 
                <div class="col-sm-9">   
                    <?= $this->Form->control('categories_id', ['options' => $categories]); ?>
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
                <label class="col-sm-3 col-form-label"><span>Trạng thái</span></label>
                <div class="col-sm-9">
<<<<<<< HEAD

                    <!-- <select class="mdb-select md-form" >
                      <option value="0" disabled selected>Choose your option</option>
                      <option value="1">Sắp bán</option>
                      <option value="2">Khuyến mãi</option>
                      <option value="3">Slg nhiều</option>
                      <option value="4">Hết hàng</option>
                    </select> -->

                    <?= $this->Form->select('status', array(
                        '1' => 'Sắp bán',
                        '2' => 'Khuyến mãi',
                        '3' => 'Nhiều',
                        '4' => 'Done',
                        '5' => 'Oke',
                        '6' => 'Hết hàng',
                        '7' => 'public',
                        '8' => 'private'
                        ));
                    ?>
                    
                </div>

                
            </div>
=======
                    <?= $this->Form->text('price_commercial', ['class' => 'form-control', 'placeholder' => 'giảm giá']); ?>
                </div>
            </div>
 
            
>>>>>>> 003dad31cbcbdeb83c5df641e431e69c5294bf8e

            

        </div>  <!--end colum left-->
        

        <div class="col-md-6">

            <div class="form-group row">
        
                <div class="col-sm-9">
                    <?= $this->Form->control('created_at'); ?>
                </div>
            </div>

            <div class="form-group row">
                
                <div class="col-sm-9">
                    <?= $this->Form->control('updated_at');?>
                </div>
            </div>

            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Số lượng</label>
                <div class="col-sm-3">
                    <?= $this->Form->text('quantity', ['class' => 'form-control' ]); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">View</label>
                <div class="col-sm-3">
                    <?= $this->Form->text('count_views', ['class' => 'form-control' ]); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Hiện có</label>
                <div class="col-sm-3">
                    <?= $this->Form->text('quantity', ['class' => 'form-control' ]); ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">slug</label>
                <div class="col-sm-3">
                    <?= $this->Form->text('slug', ['class' => 'form-control' ]); ?>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-3 col-form-label">url</label>
                <div class="col-sm-3">
                    <?= $this->Form->text('url', ['class' => 'form-control' ]); ?>
                </div>
            </div>

            
            


        </div> <!--end colum right , 'disabled' => 'disabled'-->
            
        < <div class="col-md-8">
            <div class="form-group row">
                <label class="col-sm-1 col-form-label">Mô tả</label>
                <div class="col-sm-8">
                    <?= $this->Form->textarea('description', ['class' => 'tinymce' ]); ?>    
                </div>  
            </div>
        </div>
            

        <div class="form-group row">
            <div style="display: block">
                <label class="col-sm-2 col-form-label">Mô tả</label>
                <div class="col-sm-9">
                    <?= $this->Form->textarea('description', ['class' => 'tinymce' ]); ?>
                </div>
            </div>
                  
        </div>

    </div> <!--end row-->


    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

 
</div>
