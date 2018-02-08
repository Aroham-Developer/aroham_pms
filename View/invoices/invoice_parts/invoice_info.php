<span style="font-size:20px; font-weight: bold;background-color: <?php echo $color; ?>; color: #fff;">&nbsp;<?php echo get_invoice_id($invoice_info->id); ?>&nbsp;</span>
<div style="line-height: 10px;"></div>
<span><?php echo lang("bill_date") . ": " . format_to_date($invoice_info->bill_date, false); ?></span><br />
<span><?php echo lang("due_date") . ": " . format_to_date($invoice_info->due_date, false); ?></span>