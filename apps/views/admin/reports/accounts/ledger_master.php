<section class="content-header">
    <h1><a href="report"> Reports</a></h1>
    <ol class="breadcrumb">
        <li><a href="dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="report"> Reports</a></li>
        <li class="active"> Ledger</li>
    </ol>
</section>

<section class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Ledger</h3>
            <div class="box-tools">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /.box-header -->

        <form id="frmLedger" action="report/ledger" method="post" target="_blank">
            <div class="box-body">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="text" name="start_date" id="start_date" class="form-control datepicker" value="<?php echo date('01/m/Y'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="chart_id">Select A/C Head</label>
                        <select name="chart_id" id="chart_id" class="form-control select2"data-placeholder="Select A/C Head">
                            <option value=""></option>
                            <?php echo $charts; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="text" name="end_date" id="end_date" class="form-control datepicker" value="<?php echo date('t/m/Y'); ?>">
                    </div>
                    <div class="form-group">
                        <label for="report_type">Select Report Type</label>
                        <select name="report_type" id="report_type" class="form-control select2">
                            <option value="general">General HTML</option>
                            <option value="pdf">PDF</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->

            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <div class="box-footer">
                <input type="reset" class="btn btn-danger" value="Cancel">
                <input type="submit" class="btn btn-primary pull-right" value="View Report">
            </div>
        </form>
    </div>
</section>