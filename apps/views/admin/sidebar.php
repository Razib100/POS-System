<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="assets/images/avatar-mini.png" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $this->session->user_name; ?></p>
			</div>
		</div>
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="<?php if ($menu == 'dashboard') : ?>active<?php endif; ?>">
				<a href="dashboard">
					<i class="fa fa-dashboard"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<?php if ($privileges['inventory_menu'] == 1) : ?>
			<li class="<?php if ($menu == 'inventory') : ?>active collapsed<?php endif; ?>" data-toggle="collapse" data-target="#inventory">
				<!-- <a href="inventory" class="">
						<i class="fa fa-balance-scale"></i>
						<span>Inventory</span>
				</a> -->
				<a class="">
					<i class="fa fa-calculator"></i>
					<span>Inventory</span>
					<i class="fa fa-angle-down" style="margin-left:50%"></i>
				</a>
				<ul class="sub-menu collapse" id="inventory">
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="inventory/item-list">Item</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="inventory/supplier-list">Supplier</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="inventory/purchase-list">Purchase</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="inventory/purchase-return-list">Purchase Return</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="inventory/customer-list">Customer</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="inventory/sales-list">Sales</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="inventory/sales-return-list">Sales Return</a>
					</li>
					
					
					
					
				</ul>
			</li>
			<?php endif; ?>
			<?php if ($privileges['accounts_menu'] == 1) : ?>
			<li class="<?php if ($menu == 'accounts') : ?>active collapsed<?php endif; ?>" data-toggle="collapse" data-target="#accounts">
				<!-- <a href="accounts" class="">
						<i class="fa fa-calculator"></i>
						<span>Accounts</span>
				</a> -->
				<a class="">
					<i class="fa fa-calculator"></i>
					<span>Accounts</span>
					<i class="fa fa-angle-down" style="margin-left:50%"></i>
				</a>
				<ul class="sub-menu collapse" id="accounts">
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="accounts/journal-list">Journal</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="accounts/chart-list">A/C Head</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="accounts/mr-list">Money Payment</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="accounts/payment-list">Payment Receipt</a>
					</li>
				</ul>
			</li>
			<?php endif; ?>
			<?php if ($privileges['hr_menu'] == 1) : ?>
			<li class="<?php if ($menu == 'hr') : ?>active<?php endif; ?>">
				<a href="hr/emp-list" class="">
					<i class="fa fa-users"></i>
					<span>H R</span>
				</a>
			</li>
			<?php endif; ?>
			<?php if ($privileges['report_menu'] == 1) : ?>
			<li class="<?php if ($menu == 'report') : ?>active collapsed<?php endif; ?>" data-toggle="collapse" data-target="#reports">
				<!-- <a href="report" class="">
						<i class="fa fa-columns"></i>
						<span>Reports</span>
				</a> -->
				<a class="">
					<i class="fa fa-calculator"></i>
					<span>Reports</span>
					<i class="fa fa-angle-down" style="margin-left:50%"></i>
				</a>
				<ul class="sub-menu collapse" id="reports">
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/item">Item Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/purchase">Purchase Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/purchase-return">Purchase Return Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/sales">Sales Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/sales-return">Sales Return Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/inventory">Inventory Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/ledger">Ledger Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/trial-balance">Trail Balance Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/balance-sheet">Balance Sheet Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/income-statement">Income Statement Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/bills-receivable">Bills Receviable Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/bills-payable">Bills Payable Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/cash-book">Cash Book Report</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="report/bank-book">Bank Book Report</a>
					</li>
				</ul>
			</li>
			<?php endif ?>
			<?php if ($privileges['settings_menu'] == 1) : ?>
			<li class="<?php if ($menu == 'settings') : ?>active collapsed<?php endif; ?>" data-toggle="collapse" data-target="#settings">
				<!-- <a href="settings" class="">
						<i class="fa fa-gear"></i>
						<span>Settings</span>
				</a> -->
				<a class="">
					<i class="fa fa-calculator"></i>
					<span>Settings</span>
					<i class="fa fa-angle-down" style="margin-left:50%"></i>
				</a>
				<ul class="sub-menu collapse" id="settings">
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="settings/basic">Basic Settings</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="settings/currency-list">Currency</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="settings/cmp-list">Company</a>
					</li>
					<li>
						<i class="fa fa-caret-right" style="color:red"></i>
						<a href="settings/chart-list">Default A/C Head</a>
					</li>
				</ul>
			</li>
			<?php endif ?>
			<?php if ($privileges['user_menu'] == 1) : ?>
			<li class="<?php if ($menu == 'user') : ?>active<?php endif; ?>">
				<a href="user/list-all" class="">
					<i class="fa fa-user"></i>
					<span>Users</span>
				</a>
			</li>
			<?php endif; ?>
		</ul>
		<!-- END SIDEBAR MENU -->
	</section>
</aside>