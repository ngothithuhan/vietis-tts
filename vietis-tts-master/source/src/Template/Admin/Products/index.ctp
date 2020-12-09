
<div class="box">
    <div class="box-header">
        <h3 class="box-title">THÔNG TIN SẢN PHẨM</h3>
    </div> 
    <div class="box-body">
        <table class="table table-bordered table-responsive table-hover dataTable ">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('giá_Nhập') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('giá_Bán') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('trạng thái') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('Hiện có') ?></th>
                    
                    <th scope="col"><?= $this->Paginator->sort('image_url') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('categories_id') ?></th>
                    
                    <th scope="col"><?= $this->Paginator->sort('Views') ?></th>
                    
                    <th scope="col"><?= $this->Paginator->sort('Mô tả') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>

                

                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody >
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= h($product->name) ?></td>
                        <td><?= h($product->price_entered) ?></td>
                        <td><?= h($product->price_sale) ?></td>
                        <td><?= $this->Number->format($product->status) ?></td> 
                        <td><?= h($product->quantity) ?></td>
                     <td>     
                            <?php
                            $target_dir = "../../../../webroot/img";
                            $target_file = $target_dir.basename($_FILES["avatar.png"]["R"]);
                            $uploadOk = 1;
                            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                            // Check if image file is a actual image or fake image
                            if(isset($_POST["submit"])) {
                                $check = getimagesize($_FILES["avatar.png"]["R"]);
                                if($check !== false) {
                                    echo "File is an image - ".$check["mime"].".";
                                    $uploadOk = 1;
                                } else {
                                    echo "File is not an image.";
                                    $uploadOk = 0;
                                }
                            }
                            // Check if file already exists
                            if (file_exists($target_file)) {
                                echo "Sorry, file already exists.";
                                $uploadOk = 0;
                            }
                            // Check file size
                            if ($_FILES["avatar.png"]["size"] > 500000) {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                            // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["avatar.png"]["R"], $target_file)) {
                                    echo "The file ". basename( $_FILES["avatar.png"]["R"])." has been uploaded.";
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                                }
                            }
                            ?>

                        </td>

                        <td><?= h($product->categories_id) ?></td>
                        
                        <td><?= h($product->count_views) ?></td>

                     
                        <td><?= h($product->description) ?></td>

                        <td><?= $this->Number->format($product->status) ?></td> 
                        <td><?= h($product->created_at) ?></td>

                        <td><?= h($product->updated_at) ?></td>  
                       
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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