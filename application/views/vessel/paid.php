<style>
    .table thead tr th{
        text-align: center!important;
    }
</style>

<div class="row">
    <div class="col">
    <div class="card">
        <div class="card-header">
           Vessel List by Paid
        </div>
        <div class="card-body">
            <!-- <div style="width: 100%;height: 30px;"></div><hr/> -->
            <table id="datatable_vessel" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th rowspan="2" scope="col">Id</th>
                        <th rowspan="2" scope="col">#</th>
                        <th rowspan="2" scope="col">Vessel Name</th>
                        <th rowspan="2" scope="col">Type</th>
                        <th rowspan="2" scope="col">Owner / Manager</th>
                        <th rowspan="2" scope="col">Built</th>
                        <th rowspan="2" scope="col">GT</th>
                        <th rowspan="2" scope="col">Flag</th>
                        <th rowspan="2" scope="col">Class</th>
                        <th colspan="2" scope="col">Period</th>
                        <th rowspan="2" scope="col">TSI</th>
                        <th rowspan="2" scope="col">Banker Clause</th>
                        <th rowspan="2" scope="col">Existing Insurance</th>
                        <th rowspan="2" scope="col">PO</th>
                        <th rowspan="2" scope="col">Polis</th>
                        <th rowspan="2" scope="col">Keterangan</th>
                    </tr>
                    <tr>
                        <th>Start</th>
                        <th>Finish</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    </div>
</div>

<script>
    var urls = {
        base: "<?=site_url()?>",
        data: "<?=site_url()?>/vessel/data",
        export: "<?=site_url()?>/vessel/data",
    };

    var table = undefined;

    $(function () {
        var data = {
            status: 'paid'
        };

        reloadDt(data);
    });

    function reloadDt(filter) {
        table = $('#datatable_vessel').DataTable({
            "processing": true,
            "ajax": urls.data +'?'+ $.param(filter),
            "columns": [{
                    "data": "id",
                    "visible": false,
                    "orderable": false,
                    "searchable": false,
                },
                {
                    "data": "id",
                    "orderable": false,
                    "searchable": false,
                    "width": "10px"
                },
                {
                    "data": "name",
                    "width": "200px"
                },
                {
                    "data": "type",
                    "width": "70px",
                    "className": "text-center",
                },
                {
                    "data": "owner",
                    "width": "180px"
                },
                {
                    "data": "built",
                    "width": "50px",
                    "className": "text-center",
                },
                {
                    "data": "gt",
                    "width": "50px",
                    "className": "text-center",
                },
                {
                    "data": "flag",
                    "width": "70px"
                },
                {
                    "data": "class",
                    "width": "50px",
                    "className": "text-center",
                },
                {
                    "data": "period_start",
                    "width": "100px",
                    "className": "text-center",
                },
                {
                    "data": "period_finish",
                    "width": "100px",
                    "className": "text-center",
                },
                {
                    "data": "tsi",
                    "width": "120px",
                    "className": "text-center",
                },
                {
                    "data": "banker_clause",
                    "width": "200px",
                },
                {
                    "data": "exist_insurance",
                    "width": "100px",
                    "className": "text-center",
                },
                {
                    "data": "po",
                    "width": "100px",
                    "className": "text-center",
                },
                {
                    "data": "polis",
                    "width": "120px",
                    "className": "text-center",
                },
                {
                    "data": "keterangan",
                    "width": "350px"
                },
            ],
            scrollY:        "500px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
        });

        table.on('order.dt search.dt', function () {
            table.column(1, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();


        $('#datatable_vessel tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
    }

</script>