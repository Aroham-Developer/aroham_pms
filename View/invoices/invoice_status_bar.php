<div class="panel panel-default  p15 no-border m0" style="border:2px solid green;">
    <span><?php echo lang("status") . ": " . $invoice_status_label; ?></span>
    <?php if ($invoice_info->project_id) { ?>
        <span class="ml15"><?php echo lang("project") . ": " . anchor(get_uri("projects/view/" . $invoice_info->project_id), $invoice_info->project_title); ?></span>
    <?php }; ?>

    <span class="ml15"><?php
        echo lang("last_email_sent") . ": ";
        echo ($invoice_info->last_email_sent_date * 1) ? $invoice_info->last_email_sent_date : lang("never");
        ?>
    </span>
    <span class="ml15"><?php
        echo lang("client") . ": ";
        echo (anchor(get_uri("clients/view/" . $invoice_info->client_id), $invoice_info->company_name));
        ?>
    </span>
</div>