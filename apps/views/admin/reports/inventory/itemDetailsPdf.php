<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title; ?></title>
    <base href="<?php echo base_url(); ?>" />
    <meta charset="utf-8">
    <meta name="author" content="Devs Palace">
    <meta name="description" content="">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- styles -->
    <link href="assets/backend/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/backend/css/stilearn.css" rel="stylesheet" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
        @media print{
            p.muted{
                font-weight: bold;
            }
            small.small{
                font-weight: normal;
            }
        }
        .content {
            background: none !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- content -->
        <div class="content" style="border: 1px solid #d7d7d7; float: left;">
            <!-- content-body -->
            <div class="content-body">
                <!-- invoice -->
                <div class="invoice-container">
                    <div class="page-header">
                        <div class="pull-right">
                            <img src="<?php echo $this->session->company_logo; ?>" width="115" class="img" style="width: 115px;">
                        </div>
                        <h3>Item Stock Report <small class="small"><?php echo $company['name']; ?></small></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <p class="muted">Purchase Date From</p>
                            <p><?php echo date('jS M, Y ', strtotime(date_to_db($start_date))); ?></p>
                        </div>
                        <div class="span4">
                            <p class="muted">Purchase Date To</p>
                            <p><?php echo date('jS M, Y ', strtotime(date_to_db($end_date))); ?></p>
                        </div>
                    </div>
                    <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL #</th>
                                <th>Date</th>
                                <th>Opening Balance</th>
                                <th>Item Name</th>
                                <th>Available Quantity</th>
                            </tr>
                        </thead>
                        <?php
                        if (count($reports['inv']) > 0)
                        {
                            $item = array();
                            ?>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($reports['inv'] as $report)
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td class="left"><?php echo date_to_ui($report['date']); ?></td>
                                        <td class="left">
                                            <?php
                                            foreach ($report['details'] as $details)
                                            {
                                                echo $details['item_name'] . ' : ' . $details['open_qty'] . '<br>';
                                            }
                                            ?>
                                        </td>
                                       
                                        <td>
                                            <?php
                                            foreach ($report['details'] as $details)
                                            {
                                                echo $details['item_name']. '<br>';
                                            }
                                            ?>
                                        </td>
                                        <td class="left">
                                            <?php
                                            foreach ($report['details'] as $details)
                                            {
                                                echo $details['item_name'] . ' : ' . $details['close_qty'] . '<br>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td align="center" colspan="8">&nbsp;</td>
                                </tr>
                            </tfoot>
                            <?php
                        }
                        else
                        {
                            ?>
                            <tbody>
                                <tr>
                                    <td align="center" colspan="8">&nbsp;</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td align="center" colspan="8">&nbsp;</td>
                                </tr>
                            </tfoot>
                            <?php
                        }
                        ?>
                    </table>
                    </div>
                </div>
                <!-- /.col -->
            </div>
                </div>
                <!--/invoice-->
            </div><!--/content-body -->
        </div><!-- /content -->

    </div><!-- /container -->
</body>
</html>