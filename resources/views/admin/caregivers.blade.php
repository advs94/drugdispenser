@extends('adminlte::page')

@section('title', 'Drug Dispenser')

@section('content_header')
    <h1>Caregivers Page</h1>
@stop

@section('content')
    <!-- DATA TABLES -->
    <link href="../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript"
            src="http://ff.kis.v2.scr.kaspersky-labs.com/8CA69AF0-4EAA-064A-B6F7-93A063625C49/main.js"
            charset="UTF-8"></script></head>
    <body class="skin-black">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Caregivers Data</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            use Illuminate\Support\Facades\DB;

                            $caregiver_id = DB::table('caregivers')->get(['id']);
                            $profileinformation_id = DB::table('caregivers')->get(['profileinformation_id']);

                            for($i = 0; $i < count($caregiver_id); $i++)
                            {
                                $caregivers = DB::table('profileinformations')->where(
                                    'id', '=', $profileinformation_id[$i]->profileinformation_id
                                    )->get();
                                ?>
                                <tr>
                                    <td> <?php echo $caregiver_id[$i]->id ?> </td>
                                    <td> <?php echo $caregivers[0]->name ?> </td>
                                    <td> <?php echo $caregivers[0]->age ?> </td>
                                    <td> <?php echo $caregivers[0]->address ?> </td>
                                    <td> <?php echo $caregivers[0]->phoneNumber ?> </td>
                                    <td> <?php echo $caregivers[0]->email ?> </td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

    <!-- page script -->
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": false,
                "bSort": true,
                "bInfo": true,
                "bAutoWidth": false
            });
        });
    </script>
    </body>
    </html>
@stop