<!-- Content Header -->
<section class="content-header">
    <h1><a href="inventory"> Inventory</a></h1>
    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="inventory"> Inventory</a></li>
        <li class="active"> Sales Return Preview</li>
    </ol>
</section>

<!-- Main content -->
<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header">
                <?php echo $this->session->company_name; ?>
                <small class="pull-right">Date: <?php echo date_to_ui($master[0]['sales_return_date']); ?></small>
            </h2>
            <h3 class="page-center">Sales Return Invoice</h3>
        </div>
        <!-- /.col -->
    </div>

    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-md-6 invoice-col">
            <strong>Sales Return #</strong> <?php echo $master[0]['sales_return_no']; ?><br>
            <strong>Date:</strong> <?php echo date_to_ui($master[0]['sales_return_date']); ?><br>
            <strong>Notes:</strong> <?php echo $master[0]['notes']; ?><br>
        </div>
        <!-- /.col -->
        <div class="col-md-6 invoice-col">
            <strong>Customer Details</strong>
            <address>
                Name: <?php echo $master[0]['customer_name']; ?><br>
                Address: <?php echo $master[0]['customer_address']; ?><br>
                Mobile : <?php echo $master[0]['customer_mobile']; ?><br>
            </address>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>SL#</th>
                        <th>ITEM DESCRIPTIONS</th>
                        <th>QTY</th>
                        <th>PRICE</th>
                        <th>TOTAL PRICE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $qty = 0;
                    $price = 0;
                    $i = 1;
                    foreach ($details as $detail) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $detail['item_name']; ?></td>
                            <td><?php echo $detail['quantity']; ?></td>
                            <td><?php echo number_format($detail['sale_price'], 2); ?></td>
                            <td><?php echo number_format($detail['quantity']*$detail['sale_price'], 2); ?></td>
                        </tr>
                        <?php
                        $qty += $detail['quantity'];
                        $price += $detail['quantity']*$detail['sale_price'];
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-md-6">
            &nbsp;
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th style="width:50%">Sub - Total:</th>
                    <td>
                        <?php if ($this->session->currency_symbol_position == 'Before') { echo $this->session->currency_symbol; } ?> <?php echo number_format($price, 2); ?> <?php if ($this->session->currency_symbol_position == 'After') { echo $this->session->currency_symbol; } ?>
                    </td>
                </tr>
                <tr>
                    <th>VAT/TAX:</th>
                    <td>
                        <?php if ($this->session->currency_symbol_position == 'Before') { echo $this->session->currency_symbol; } ?> <?php echo number_format($master[0]['tax_amount'], 2); ?> <?php if ($this->session->currency_symbol_position == 'After') { echo $this->session->currency_symbol; } ?>
                    </td>
                </tr>
                <?php $total_price = $price + $master[0]['tax_amount']; ?>
                <tr>
                    <th>Grand Total:</th>
                    <td>
                        <?php if ($this->session->currency_symbol_position == 'Before') { echo $this->session->currency_symbol; } ?> <?php echo number_format($total_price, 2); ?> <?php if ($this->session->currency_symbol_position == 'After') { echo $this->session->currency_symbol; } ?>
                    </td>
                </tr>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- This row will not appear when printing -->
    <div class="row no-print">
        <div class="col-md-12">
            <a href="inventory/sales-return-print/<?php echo $master[0]['sales_return_no']; ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
            <!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                <i class="fa fa-download"></i> Generate PDF
            </button> -->
        </div>
    </div>
</section>
<!-- /.content -->
<div class="clearfix"></div>