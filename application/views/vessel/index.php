<style>
    .table thead tr th {
        text-align: center !important;
    }

    .table tbody tr:hover td{
        background: #eee;
    }

    .table tbody tr.selected{
        background: #eee;
        color: black;
    }

    .hidden {
        display: none !important;
    }

    .my-red{
        background: #eb4d4b!important;
        color:white;
    }

    .my-yellow{
        background: #ffd32a!important;
    }

    .my-green{
        background: #05c46b!important;
        color:white;
    }

    .btn-paid{
        padding: 0px 10px;
        box-shadow: 2px 3px 6px -1px #585858;
        font-weight:bold;        
    }

    .btn-paid.disabled{
        background: #ddd;
        border-color: #ddd;
        color: #616161;
        font-weight:bold;
    }
</style>

<div class="row">
    <div class="col">
        <!-- Toast Alert -->
        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-delay="3000" data-autohide="true"
            style="position: fixed; z-index: 1; right: 10px; top: 60px;">
            <div class="toast-header">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Master Vessel List
            </div>
            <div class="card-body">
                <div>
                    <button type="button" class="btn btn-primary" onclick="addAction()" style="
                        border: none;
                        background: white;
                        color: #383838;
                        font-weight: bold;
                        box-shadow: 0px 1px 5px 0px #848484;
                    "><i class="fa fa-plus"></i></button>
                    <button type="button" class="btn btn-primary" onclick="detailAction()" style="
                        border: none;
                        background: white;
                        color: #383838;
                        font-weight: bold;
                        box-shadow: 0px 1px 5px 0px #848484;
                        margin-left: 10px
                    "><i class="fa fa-list-alt"></i></button>
                    <button type="button" class="btn btn-primary" onclick="editAction()" style="
                        border: none;
                        background: white;
                        color: #383838;
                        font-weight: bold;
                        box-shadow: 0px 1px 5px 0px #848484;
                        margin-left: 10px
                    "><i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-primary" onclick="deleteModal()" style="
                        border: none;
                        background: #d63031; 
                        font-weight: bold;
                        box-shadow: 0px 1px 5px 0px #848484;
                        margin-left: 10px
                    "><i class="fa fa-trash"></i></button>
                </div>
                <hr />
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
                            <th rowspan="2" scope="col">Status</th>
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
        <div class="modal fade" id="form_modal_vessel" tabindex="-1" role="dialog"
            aria-labelledby="form_modal_vessel_label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="form_modal_vessel_label">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="padding: 25px 40px;">
                        <form id="form_vessel" action="" method="post" enctype="multipart/form-data">
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
                                <div class="col-sm-5">
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
                                <div class="col-sm-9">
                                    <input type="text" name="owner" class="form-control" id="form_owner"
                                        placeholder="Owner / Manager Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_built" class="col-sm-2 col-form-label">Built</label>
                                <div class="col-sm-5">
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
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="gt" id="form_gt" placeholder="GT">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_flag" class="col-sm-2 col-form-label">Flag</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="flag" id="form_flag"
                                        placeholder="Flag">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_class" class="col-sm-2 col-form-label">Class</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="class" id="form_class"
                                        placeholder="Class">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_period_start" class="col-sm-2 col-form-label">Period</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="date" name="period_start" class="form-control"
                                                id="form_period_start">
                                        </div>
                                        <span style="font-weight: bold; font-size: 20px;">-</span>
                                        <div class="col-sm-4">
                                            <input type="date" name="period_finish" class="form-control"
                                                id="form_period_finish">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_tsi" class="col-sm-2 col-form-label">TSI</label>
                                <div class="col-sm-9">
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
                                <div class="col-sm-9">
                                    <input type="text" name="banker_clause" class="form-control" id="form_banker_clause"
                                        placeholder="Banker Clause">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_exist_insurance" class="col-sm-2 col-form-label">Existing
                                    Insurance</label>
                                <div class="col-sm-9">
                                    <input type="text" name="exist_insurance" class="form-control"
                                        id="form_exist_insurance" placeholder="Existing Insurance">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_po" class="col-sm-2 col-form-label">PO</label>
                                <div class="col-sm-9">
                                    <input type="text" name="po" class="form-control" id="form_po" placeholder="PO">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_polis" class="col-sm-2 col-form-label">POLIS</label>
                                <div class="col-sm-9">
                                    <input type="text" name="polis" class="form-control" id="form_polis"
                                        placeholder="Polis">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="form_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <textarea name="keterangan" class="form-control" id="form_keterangan"
                                        rows="3"></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn_form_save">Save changes</button>
                        <button type="button" class="btn btn-primary" id="btn_form_edit">Edit</button>
                    </div>
                    </form>
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

        <div class="modal fade" id="modal_paid" tabindex="-1" role="dialog" aria-labelledby="modal_paid"
            aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="form_modal_delete">Paid Modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span>Are you sure to paid this data?</span><br/>
                        <span style="font-size:12px;">*If you want to paid the data, You can go to <b style="font-size:12px;">Vessel List by Paid</b>.</span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="paidAction()">OK</button>
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
        paid: "<?=site_url()?>/vessel/paid",
    };

    var table = undefined;
    var selected_id = undefined;

    var today = new Date();

    $(function () {
        reloadDt();

        $("#form_vessel").submit(function () {
            $.ajax({
                url: $(this).attr("action"),
                data: $(this).serialize(),
                type: $(this).attr("method"),
                dataType: 'html',
                // beforeSend: function () {
                //     alert('loading');
                //     return false;
                // },
                success: function (result) {
                    result = JSON.parse(result); 
                    if (result.success) {
                        alert(result.message);
                        $('#form_vessel')[0].reset();
                        $('#form_modal_vessel').modal('hide');
                        table.ajax.reload();
                    } else {
                        alert(result.message);
                    }
                }
            });

            return false;
        });
    });

    function reloadDt() {
        table = $('#datatable_vessel').DataTable({
            "processing": true,
            "ajax": urls.data,
            "columns": [{
                    "data": "id",
                    "visible": true,
                    "orderable": false,
                    "searchable": false,
                    "className": "hidden",
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
                    "data": "status",
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
            // scrollY:        screen.height - 490 + 'px',
            scrollY: '500px',
            scrollX: true,
            scrollCollapse: true,
            paging: true,
            createdRow: function( row, data, dataIndex ) {
                let this_date = new Date(data['period_finish']); 
                if ( this_date != "Invalid Date" && data['status'] != 'paid') {

                    const oneDay = 24 * 60 * 60 * 1000;
                    const diff = Math.round(Math.abs((this_date - today) / oneDay));
                    if(today > this_date){
                        $(row).addClass( 'my-red' );
                    }else{
                        if(diff<=7){
                            $(row).addClass( 'my-yellow' );
                        }else if(diff<=30){
                            $(row).addClass( 'my-green' );
                        }
                    }
                }

                if(data['status'] != 'paid'){
                    $(row).find('td')[9].innerHTML = `<button onclick="paidModal(${data['id']})" class="btn btn-primary btn-paid">Paid</button>`;
                }else{
                    $(row).find('td')[9].innerHTML = `<button onclick="paidModal(${data['id']})" class="btn btn-primary btn-paid disabled" disabled>Paid</button>`;
                }
            }, 
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
                selected_id = undefined;
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                selected_id = $(this).find('td')[0].innerText;
            }
        });
    }

    function addAction() {
        $('#form_modal_vessel').modal('show');
        $('#form_vessel').attr('action', urls.create);
        $('#form_vessel')[0].reset();
        enableForm();
    }

    function detailAction() {
        if (selected_id != undefined) {
            $('#form_modal_vessel').modal('show');
            $('#form_vessel').attr('action', urls.edit);
            $.getJSON(urls.detail+'/'+selected_id, function(data){
                setFormInfo(data.data);
                disableForm();
            });
        } else {
            alert('Please select a row first');
        }
    }

    function editAction() {
        if (selected_id != undefined) {
            $('#form_modal_vessel').modal('show');
            $('#form_vessel').attr('action', urls.edit);
            $.getJSON(urls.detail+'/'+selected_id, function(data){
                setFormInfo(data.data);
                enableForm();
            });
        } else {
            alert('Please select a row first');
        }
    }

    function deleteModal() {
        if (selected_id != undefined) {
            $('#modal_delete').modal('show');
        } else {
            alert('Please select a row first');
        }
    }

    function deleteAction() {
        $.get(urls.delete + '/' + selected_id, function (result) {
            result = JSON.parse(result);
            $('#modal_delete').modal('hide');
            if (result.success) {
                alert(result.message);
                table.ajax.reload();
            } else {
                alert(result.message);
            }
        });
    }

    function paidModal(id) {
        selected_id = id;
        if (selected_id != undefined) {
            $('#modal_paid').modal('show');
        } else {
            alert('Please select a row first');
        }
    }

    function paidAction() {
        $.get(urls.paid + '/' + selected_id, function (result) {
            result = JSON.parse(result);
            $('#modal_paid').modal('hide');
            if (result.success) {
                alert(result.message);
                table.ajax.reload();
            } else {
                alert(result.message);
            }
        });
    }

    function setFormInfo(data){
        $.each(data, function(i, r){
            $('#form_vessel input[name="'+i+'"]').val(r);
            $('#form_vessel select[name="'+i+'"]').val(r);
        });
    }

    function enableForm(){
        $('#form_vessel input').attr('disabled', false);
        $('#form_vessel select').attr('disabled', false);
        $('#btn_form_save').show();
        $('#btn_form_edit').hide();
    }

    function disableForm(){
        $('#form_vessel input').attr('disabled', true);
        $('#form_vessel select').attr('disabled', true);
        $('#btn_form_save').hide();
        $('#btn_form_edit').show();
    }
</script>