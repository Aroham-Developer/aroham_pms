<div class="panel">
    <div class="tab-title clearfix">
        <h4><?php echo lang('timesheets'); ?></h4>
        <div class="title-button-group">
            <?php echo modal_anchor(get_uri("projects/timelog_modal_form"), "<i class='fa fa-plus-circle'></i> " . lang('log_time'), array("class" => "btn btn-default", "title" => lang('log_time'), "data-post-project_id" => $project_id)); ?>
        </div>
    </div>

    <div class="table-responsive">
        <table id="project-timesheet-table" class="display" width="100%">  
            <tfoot>
                <tr>
                    <th colspan="7" class="text-right"><?php echo lang("total") ?>:</th>
                    <th class="text-left" data-current-page="7"></th>
                    <th colspan="2"> </th>
                </tr>
                <tr data-section="all_pages">
                    <th colspan="7" class="text-right"><?php echo lang("total_of_all_pages") ?>:</th>
                    <th class="text-left" data-all-page="7"></th>
                    <th colspan="2"> </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $("#project-timesheet-table").appTable({
            source: '<?php echo_uri("projects/timesheet_list_data/" . $project_id) ?>',
            order: [[3, "desc"]],
            filterDropdown: [{name: "user_id", class: "w200", options: <?php echo $project_members_dropdown; ?>}, {name: "task_id", class: "w200", options: <?php echo $tasks_dropdown; ?>}],
            rangeDatepicker: [{startDate: {name: "start_date", value: ""}, endDate: {name: "end_date", value: ""}, showClearButton: true}],
            columns: [
                {title: "<?php echo lang('member') ?>"},
                {visible: false, searchable: false},
                {title: "<?php echo lang('task') ?>"},
                {visible: false, searchable: false},
                {title: "<?php echo lang('start_time') ?>", "iDataShort": 3},
                {visible: false, searchable: false},
                {title: "<?php echo lang('end_time') ?>", "iDataShort": 5},
                {title: "<?php echo lang('total') ?>"},
                {title: '<i class="fa fa-comment"></i>', "class": "text-center w50"},
                {title: '<i class="fa fa-bars"></i>', "class": "text-center option w100"}
            ],
            printColumns: [0, 2, 4, 6, 7],
            xlsColumns: [0, 2, 4, 6, 7],
            summation: [{column: 7, dataType: 'time'}]
        });
    });
</script>