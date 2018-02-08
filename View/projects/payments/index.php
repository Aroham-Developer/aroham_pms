<div class="panel">
    <div class="tab-title clearfix">
        <h4><?php echo lang('payments'); ?></h4>
    </div>

    <div class="table-responsive">
        <table id="invoice-payment-table" class="display" width="100%">
            <tfoot>
                <tr>
                    <th colspan="4" class="text-right"><?php echo lang("total") ?>:</th>
                    <th class="text-right" data-current-page="4"></th>
					<th class="text-right" data-current-page="5"></th>
					<th class="text-right" data-current-page="6"></th>
					<th class="text-right" data-current-page="7"></th>
					<th class="text-right" data-current-page="8"></th>
                </tr>
                <tr data-section="all_pages">
                    <th colspan="4" class="text-right"><?php echo lang("total_of_all_pages") ?>:</th>
                    <th class="text-right" data-all-page="4"></th>
					<th class="text-right" data-all-page="5"></th>
					<th class="text-right" data-all-page="6"></th>
					<th class="text-right" data-all-page="7"></th>
					<th class="text-right" data-all-page="8"></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        var currencySymbol = "<?php echo $project_info->currency_symbol; ?>";
        $("#invoice-payment-table").appTable({
            source: '<?php echo_uri("invoice_payments/payment_list_data_of_project/" . $project_id) ?>',
            order: [[0, "asc"]],
            columns: [
                {title: '<?php echo lang("invoice_id") ?> ', "class": "w10p"},
                {title: '<?php echo lang("payment_date") ?> ', "class": "w15p"},
                {title: '<?php echo lang("payment_method") ?>', "class": "w15p"},
                {title: '<?php echo lang("note") ?>'},
                {title: '<?php echo lang("amount") ?>', "class": "text-right w15p"},
				{title: '<?php echo lang("amount_inr") ?>', "class": "text-right w15p"},
				{title: '<?php echo lang("fee") ?>', "class": "text-right w15p"},
				{title: '<?php echo lang("fee_inr") ?>', "class": "text-right w15p"},
				{title: '<?php echo lang("gst") ?>', "class": "text-right w15p"},
            ],
            printColumns: [0, 1, 2, 3, 4,5,6,7,8],
            xlsColumns: [0, 1, 2, 3, 4,5,6,7,8],
            summation: [{column: 4, dataType: 'currency', currencySymbol: currencySymbol},
						{column: 5, dataType: 'currency', currencySymbol: "none"},
						{column: 6, dataType: 'currency', currencySymbol: currencySymbol},
						{column: 7, dataType: 'currency', currencySymbol: "none"},
						{column: 8, dataType: 'currency', currencySymbol: "none"}]
        });

    });
</script>