<div class="row">
    <div class="col">
    <div class="card">
        <div class="card-header">
            Vessel List
        </div>
        <div class="card-body">
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal_vessel">Add</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_delete">Delete</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Export</button>
            </div><hr/>
            <table id="datatable_vessel" class="table table-bordered table-hover" style="width: 100%;">
                <thead>
                    <tr>
                        <th rowspan="2" scope="col">#</th>
                        <th rowspan="2" scope="col">Id</th>
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
        


        <!-- Modal Form-->
        <div class="modal fade" id="form_modal_vessel" tabindex="-1" role="dialog" aria-labelledby="form_modal_vessel_label"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="form_modal_vessel_label">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form_vessel" action="<?=site_url() ?>/vessel/create" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="form_id" name="id">
                            <div class="form-group row">
                                <label for="form_name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control" id="form_name"
                                        placeholder="Vessel Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_type" class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="type" id="form_type">
                                        <option value="">- Please select type -</option>
                                        <option value="Tug Boat">Tug Boat</option>
                                        <option value="Barge">Barge</option>
                                        <option value="Crane Barge">Crane Barge</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_owner" class="col-sm-2 col-form-label">Owner/Manager</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="form_owner"
                                        placeholder="Owner / Manager Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_built" class="col-sm-2 col-form-label">Built</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="built" id="form_built">
                                        <option value="">- Please select Built Year -</option>
                                        <?php 
                                            for($year = date('Y'); $year>1999; $year--){
                                                echo "<option value='{$year}'>{$year}</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_gt" class="col-sm-2 col-form-label">GT</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="gt" id="form_gt" placeholder="GT">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_flag" class="col-sm-2 col-form-label">Flag</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="flag" id="form_flag"
                                        placeholder="Flag">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_class" class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="class" id="form_class"
                                        placeholder="Class">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_period_start" class="col-sm-2 col-form-label">Start Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="period_start" class="form-control" id="form_period_start">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_period_finish" class="col-sm-2 col-form-label">End Date</label>
                                <div class="col-sm-10">
                                    <input type="date" name="period_finish" class="form-control"
                                        id="form_period_finish">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_tsi" class="col-sm-2 col-form-label">TSI</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">IDR</span>
                                        </div>
                                        <input type="text" name="tsi" class="form-control" id="form_tsi">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_banker_clause" class="col-sm-2 col-form-label">Banker Clause</label>
                                <div class="col-sm-10">
                                    <input type="text" name="banker_clause" class="form-control" id="form_banker_clause"
                                        placeholder="Banker Clause">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_exist_insurance" class="col-sm-2 col-form-label">Existing
                                    Insurance</label>
                                <div class="col-sm-10">
                                    <input type="text" name="exist_insurance" class="form-control"
                                        id="form_exist_insurance" placeholder="Existing Insurance">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_po" class="col-sm-2 col-form-label">PO</label>
                                <div class="col-sm-10">
                                    <input type="text" name="po" class="form-control" id="form_po" placeholder="PO">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_polis" class="col-sm-2 col-form-label">POLIS</label>
                                <div class="col-sm-10">
                                    <input type="text" name="polis" class="form-control" id="form_polis"
                                        placeholder="Polis">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-10">
                                    <textarea name="keterangan" class="form-control" id="form_keterangan"
                                        rows="3"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="submitFormAction()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Alert -->
        <div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="modal_delete"
            aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="form_modal_delete">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    Are you sure to delete this data?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="deleteAction()">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    var urls = {
        base: "<?=site_url()?>",
        data: "<?=site_url()?>/vessel/data",
        detail: "<?=site_url()?>/vessel/detail",
        create: "<?=site_url()?>/vessel/create",
        edit: "<?=site_url()?>/vessel/edit",
        delete: "<?=site_url()?>/vessel/delete",
    };

    var table = undefined;

    $(function () {
        reloadDt();
    });

    function reloadDt() {
        table = $('#datatable_vessel').DataTable({
            "processing": true,
            "ajax": urls.data,
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "type"
                },
                {
                    "data": "owner"
                },
                {
                    "data": "built"
                },
                {
                    "data": "gt"
                },
                {
                    "data": "flag"
                },
                {
                    "data": "class"
                },
                {
                    "data": "period_start"
                },
                {
                    "data": "period_finish"
                },
                {
                    "data": "tsi"
                },
                {
                    "data": "banker_clause"
                },
                {
                    "data": "exist_insurance"
                },
                {
                    "data": "po"
                },
                {
                    "data": "polis"
                },
                {
                    "data": "keterangan"
                },
            ],
            "columnDefs": [{
                    "targets": [0],
                    "visible": true,
                    "searchable": false,
                },
                {
                    "targets": [1],
                    "visible": false,
                    "orderable": false,
                    "searchable": false,
                }
            ],
            scrollY:        "280px",
            scrollX:        true,
            scrollCollapse: true,
            paging:         true,
            fixedColumns:   {
                leftColumns: 1,
                rightColumns: 1
            }
        });

        table.on('order.dt search.dt', function () {
            table.column(0, {
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

    function addAction() {

    }

    function detailAction() {

    }

    function editAction() {

    }

    function editAction() {

    }

    function submitFormAction() {
        console.log('sini');

        $("#form_vessel").submit(function( event ) {
        console.log('sini');
        alert( "Handler for .submit() called." );
        event.preventDefault();
        });

    }

    function deleteAction() {

    }
</script>