<section class="content-header">
    <h1><a href="inventory"> Inventory</a></h1>
    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="inventory"> Inventory</a></li>
        <li class="active"> <?php if (count($item) > 0) : ?>Edit<?php  else : ?>Add New<?php endif; ?> Item
        </li>
    </ol>
</section>
<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?php if (count($item) > 0) : ?>Edit<?php  else : ?>Add New<?php endif; ?> Item</h3>
            <div class="box-tools">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                    <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <form id="frmItem" action="inventory/item-save" method="post">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="code">Item Code<span style="color:red">*</span></label>
                                <input type="text" name="code" id="code" class="form-control" placeholder="Give your Custom Item/Product Code" value="<?php if (count($item) > 0) : echo $item['code'];  else : echo set_value('code'); endif; ?>" <?php if (count($item) > 0) : echo 'readonly'; endif; ?>>
                                <?php echo form_error('code',"<div style='color:red'>","</div>");?>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="name">Item Name<span style="color:red">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Item Name" value="<?php if (count($item) > 0) : echo $item['name'];  else : echo set_value('name'); endif; ?>">
                                <?php echo form_error('name',"<div style='color:red'>","</div>");?>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="brand_name">Brand Name<span style="color:red">*</span></label>
                                <input type="text" name="brand_name" id="brand_name" class="form-control" required="required" placeholder="Brand Name" value="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="model_no">Model No<span style="color:red">*</span></label>
                                <input type="text" name="model_no" id="model_no" class="form-control" required="required" placeholder="Model No" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="min_sale_price">Min. Sale Price <span style="color:red">*</span></label>
                                <input type="text" name="min_sale_price" id="min_sale_price" class="form-control" placeholder="Min. Sale Price" value="<?php if (count($item) > 0) : echo $item['min_sale_price'];  else : echo set_value('min_sale_price'); endif; ?>">
                                <?php echo form_error('min_sale_price',"<div style='color:red'>","</div>");?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="item_size">Select Item Size</label>
                                <select name="item_size" id="item_size" class="form-control select2" data-placeholder="Select Item Size">
                                    <option value="" disabled selected>------Select Item Size------</option>
                                    <option value="Kg">Kg</option>
                                    <option value="Large">Large</option>
                                    <option value="XXL">XXL</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Small">Small</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="country">Select Country</label>
                                <select name="country" id="country" class="form-control select2" data-placeholder="Select Country">
                                    <option value="" disabled selected>------Select Country------</option>
                                    <option value="China">China</option>
                                    <option value="USA">USA</option>
                                    <option value="India">India</option>
                                    <option value="UK">UK</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <hr class="break_line">
                    </div>
                    <div class="col-md-12">
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="re_order">Re-Order Level</label>
                                <input type="text" name="re_order" id="re_order" class="form-control" placeholder="Re-Order Level" value="<?php if (count($item) > 0) : echo $item['re_order'];  else : echo set_value('re_order'); endif; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status">Select Status</label>
                                <select name="status" id="status" class="form-control select2" data-placeholder="Select Status">
                                    <option value="Active" <?php if (count($item) > 0 && $item['status'] == 'Active') : echo 'selected'; endif; ?>>Active</option>
                                    <option value="Inactive" <?php if (count($item) > 0 && $item['status'] == 'Inactive') : echo 'selected'; endif; ?>>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="3" placeholder="Description" class="form-control"><?php if (count($item) > 0) : echo $item['description'];  else : echo set_value('description'); endif ?></textarea>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.box-body -->
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <?php if (count($item) > 0) : ?>
            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
            <?php endif; ?>
            <div class="box-footer">
                <a href="inventory/item-list">
                    <input class="btn btn-warning" value="Back" style="width:70px">
                </a>
                <input type="reset" class="btn btn-danger" value="Cancel">
                <input type="submit" class="btn btn-primary pull-right" value="Save Changes">
            </div>
        </form>
    </div>
</section>