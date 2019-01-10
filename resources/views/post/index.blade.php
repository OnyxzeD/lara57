@extends('layouts.master')
@section('content')

    <section class="content-header">
        <h1>
            Troubleshooting
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Troubleshooting</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">List Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div style="margin-bottom: 10px">
                    <button type="button" class="btn btn-info"
                            data-toggle="modal" data-target="#modal-create">
                        <i class="fa fa-plus"></i> &nbsp; Tambah
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th width="50px">NO</th>
                            <th>Tanggal Lapor</th>
                            <th>Start</th>
                            <th>Done</th>
                            <th>Elapsed</th>
                            <th>Contact Person</th>
                            <th>Product</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Topic</th>
                            <th>Issue Description</th>
                            <th>Problem Solving</th>
                            <th>Technician</th>
                            <th class="text-center" width="100px">

                            </th>
                        </tr>

                        </thead>
                        <tbody id="row">
                        <?php $no = 1; ?>
                        @foreach($post as $key => $value)
                            <tr class="post{{ $value->id }}">
                                <td>{{ $no++ }}</td>
                                <td>{{ $value->tanggal_lapor }}</td>
                                <td>{{ $value->w_mulai }}</td>
                                <td>{{ $value->w_selesai }}</td>
                                <td>{{ $value->w_pakai }}</td>
                                <td>{{ $value->cp }}</td>
                                <td>{{ $value->product }}</td>
                                <td>{{ $value->priority }}</td>
                                <td>{{ $value->status }}</td>
                                <td>{{ $value->topic }}</td>
                                <td>{{ $value->issue_desc }}</td>
                                <td>{{ $value->prob_solv }}</td>
                                <td>{{ $value->tech }}</td>
                                <td>
                                    <a href="#" class="edit-modal btn btn-warning btn-sm"
                                       onclick="Edit({{$value->id}})">
                                        <i class="glyphicon glyphicon-pencil"></i>
                                    </a> &nbsp;
                                    <a href="#" class="delete-modal btn btn-danger btn-sm"
                                       onclick="Hapus({{$value->id}})">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                {{$post->links()}}
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Report Troubleshooting</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" id="addForm">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="tanggal">Tanggal Lapor :</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="tanggal" name="w_tanggal"
                                       placeholder="" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="mulai">Start :</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="mulai" name="w_mulai"
                                       placeholder="" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="selesai">Done :</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="selesai" name="w_selesai"
                                       placeholder="" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="pakai">Elapsed :</label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="pakai" name="w_pakai"
                                       placeholder="" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="cp">Contact Person :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="cp" name="cp"
                                       placeholder="Place some text here .." required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="product">Product :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="product" name="product"
                                       placeholder="Place some text here .." required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="priority">Priority :</label>
                            <div class="col-sm-6">
                                <select name="priority" class="form-control">
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="status">Status :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="status" name="status"
                                       placeholder="Place some text here .." required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="topic">Topic :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="topic" name="topic" rows="3"
                                          placeholder="Place some text here .." required></textarea>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="issue">Issue Description :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="issue" name="issue_desc" rows="6"
                                          placeholder="Place some text here .." required></textarea>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="problem">Problem Solving :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="problem" name="prob_solv" rows="6"
                                          placeholder="Place some text here .." required></textarea>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="tech">Technician :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="tech" name="tech"
                                       placeholder="Place some text here .." required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit" id="addTroubleshoot">
                        <span class="glyphicon glyphicon-plus"></span> &nbsp;Save Post
                    </button>
                    <button class="btn btn-default" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> &nbsp;Close
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Report</h4>
                </div>
                <div class="modal-body" id="editBody">
                    {{--dynamic content from ajax--}}
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="submit" id="editTroubleshoot">
                        <span class="glyphicon glyphicon-plus"></span> &nbsp;Update
                    </button>
                    <button class="btn btn-default" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> &nbsp;Close
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <script src="{!! asset('AdminLTE-2.4.3/bower_components/jquery/dist/jquery.min.js') !!}"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            // Simpan Nilai
            $("#addTroubleshoot").click(function (event) {
                event.preventDefault();
                var $form = $("#addForm"),
                    w_tanggal = $form.find("input[name='w_tanggal']").val(),
                    w_mulai = $form.find("input[name='w_mulai']").val(),
                    w_selesai = $form.find("input[name='w_selesai']").val(),
                    w_pakai = $form.find("input[name='w_pakai']").val(),
                    cp = $form.find("input[name='cp']").val(),
                    product = $form.find("input[name='product']").val(),
                    priority = $form.find("select[name='priority']").val(),
                    status = $form.find("input[name='status']").val(),
                    topic = $form.find("textarea[name='topic']").val(),
                    issue_desc = $form.find("textarea[name='issue_desc']").val(),
                    prob_solv = $form.find("textarea[name='prob_solv']").val(),
                    tech = $form.find("input[name='tech']").val();

                $.ajax({
                    method: "POST",
                    url: '/addPost',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        tanggal: w_tanggal,
                        mulai: w_mulai,
                        selesai: w_selesai,
                        pakai: w_pakai,
                        cp: cp,
                        product: product,
                        priority: priority,
                        status: status,
                        topic: topic,
                        issue_desc: issue_desc,
                        prob_solv: prob_solv,
                        tech: tech
                    },
                    success: function (data) {
                        if (data.errors) {
                            window.alert(data.message);
                        } else {
                            window.alert(data.message);
                            $('#modal-create').modal('toggle');
                            getList();
                        }
                        // $("#Alert").children().remove();
                        // $("#Alert").append("<div class='alert alert-success' role='alert'>" +
                        //     "<button type='button' class='close' data-dismiss='alert'>" +
                        //     "<span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>" +
                        //     "Data Berhasil Disimpan </div>"
                        // );
                    },
                    error: function (data) {

                    }
                });
            });

            $("#editTroubleshoot").click(function (event) {
                event.preventDefault();
                var $form = $("#editForm"),
                    id = $form.find("input[name='id']").val(),
                    w_tanggal = $form.find("input[name='w_tanggal']").val(),
                    w_mulai = $form.find("input[name='w_mulai']").val(),
                    w_selesai = $form.find("input[name='w_selesai']").val(),
                    w_pakai = $form.find("input[name='w_pakai']").val(),
                    cp = $form.find("input[name='cp']").val(),
                    product = $form.find("input[name='product']").val(),
                    priority = $form.find("select[name='priority']").val(),
                    status = $form.find("input[name='status']").val(),
                    topic = $form.find("textarea[name='topic']").val(),
                    issue_desc = $form.find("textarea[name='issue_desc']").val(),
                    prob_solv = $form.find("textarea[name='prob_solv']").val(),
                    tech = $form.find("input[name='tech']").val();

                $.ajax({
                    method: "POST",
                    url: '/editPost',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: id,
                        tanggal: w_tanggal,
                        mulai: w_mulai,
                        selesai: w_selesai,
                        pakai: w_pakai,
                        cp: cp,
                        product: product,
                        priority: priority,
                        status: status,
                        topic: topic,
                        issue_desc: issue_desc,
                        prob_solv: prob_solv,
                        tech: tech
                    },
                    success: function (data) {
                        if (data.errors) {
                            window.alert(data.message);
                        } else {
                            window.alert(data.message);
                            $('#modal-edit').modal('toggle');
                            getList();
                        }
                    },
                    error: function (data) {

                    }
                });
            });
        });

        function getList() {
            $("#row").children().remove();
            // $("#loader2").delay(2000).animate({
            //     opacity: 0,
            //     width: 0,
            //     height: 0
            // }, 500);
            setTimeout(function () {
                $.getJSON("/post-list", function (data) {
                    var jumlah = data.length;

                    // Init pagination
                    // $("#pagination-guru").append("<ul class='pagination pagination-sm'><li class='disabled'><a href='#'>&laquo;</a></li></ul>");

                    $.each(data.slice(0, jumlah), function (i, row) {
                        $("#row").append("<tr><td>" + (i + 1) + "</td>" +
                            "<td>" + row.tanggal_lapor + "</td>" +
                            "<td>" + row.w_mulai + "</td>" +
                            "<td>" + row.w_selesai + "</td>" +
                            "<td>" + row.w_pakai + "</td>" +
                            "<td>" + row.cp + "</td>" +
                            "<td>" + row.product + "</td>" +
                            "<td>" + row.priority + "</td>" +
                            "<td>" + row.status + "</td>" +
                            "<td>" + row.topic + "</td>" +
                            "<td>" + row.issue_desc + "</td>" +
                            "<td>" + row.prob_solv + "</td>" +
                            "<td>" + row.tech + "</td>" +
                            "<td>" +
                            "<a href='#' class='btn btn-warning btn-sm' onclick='Edit(\"" + row.id + "\")'><i class='glyphicon glyphicon-pencil'></i></a> &nbsp;" +
                            "<a href='#' class='btn btn-danger btn-sm' onclick='Hapus(\"" + row.id + "\")'><i class='glyphicon glyphicon-trash'></i></a>" +
                            "</td></tr>");
                    })
                });
            }, 2200);
        }

        function Edit(id) {

            $.ajax({
                method: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/post-modal-edit/' + id,
                data: {}
            })
                .done(function (data) {
                    // console.log(data)
                    $("#editBody").html(data);
                    $("#modal-edit").modal('show');
                });


        }

        function Hapus(id) {
            var result = confirm("Apakah Anda Yakin Ingin Menghapus ?");
            if (result) {
                $.ajax({
                    method: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/deletePost/' + id,
                    data: {}
                })
                    .done(function (data) {
                        window.alert(data.message);
                        if (data.errors == false) {
                            getList();
                        }
                    });

            }
        }
    </script>
@endsection