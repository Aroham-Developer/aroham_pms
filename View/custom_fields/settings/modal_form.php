<div class="modal-body clearfix">

    <?php echo form_open(get_uri("custom_fields/save"), array("id" => "custom-field-form", "class" => "general-form", "role" => "form")); ?>

    <input type="hidden" name="related_to" value="<?php echo $related_to; ?>" />
    <?php $this->load->view("custom_fields/form/input_fields"); ?>

    <div class="row">
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
            <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
        </div>
    </div>

    <?php echo form_close(); ?>

</div>



<script type="text/javascript">
    $(document).ready(function () {

        $("#custom-field-form").appForm({
            onSuccess: function (result) {
                window.location = "<?php echo get_uri("custom_fields/view/" . $related_to); ?>";
            }
        });

    });
</script>