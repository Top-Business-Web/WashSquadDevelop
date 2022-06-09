@extends('admin.layouts.inc.app')

@section('content')

    <div class="d-flex justify-content-end align-items-center mb-4">

        <a href="{{route('createregion')}}" class="btn mainBtn"> اضافة مجموعة <i
                class="fas fa-plus-circle ms-2"></i> </a>
    </div>
    <!-- end breadcrumb -->

    <!-- Regions -->
    <section class="regions ">
        <!-- regions -->
        <div class="allRegions">

            <!-- end single Region -->
            <!-- single Region -->
              @foreach($groups as $group)
            <div class="singleRegion">
                <h5>{{$group->name}} </h5>
                <a href="{{route('editregion',$group->id)}}" class="edit"> <i
                        class="fas fa-edit"></i> </a>
                <a href="{{route('getregiondetails',$group->id)}}"> <i class="fas fa-plus-circle"></i> </a>
            </div>
              @endforeach
            <!-- end single Region -->
        </div>
        <!-- end regions -->

        <!-- table -->
        <div class="table-responsive mb-0 rounded" data-pattern="priority-columns">
            <table id="datatable" class="table dt-responsive table-striped nowrap">
                <thead>
                <tr>
                    <th> اسم الحي </th>
                    <th> المجموعة </th>
                    <th> الحد الادنى </th>
                    <th> تكلفة اضافية </th>
                    <th> الدفع </th>
                    <th> الحالة </th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                  @foreach($places as $place)
                <tr id="{{$place->id}}" class="serv-border">
                    <td> {{$place->ar_name}} </td>
                    <td> {{$place->group->name}} </td>
                    <td> {{$place->minimum_order}}SR </td>
                    <td> {{$place->maximum_order}} SR </td>
                    <td> @foreach($place->payments as $payment) {{$payment->type}}- @endforeach </td>
                    <td> <span placeid="{{$place->id}}" @if( $place->status==1) class="active changestatus" @else class="closed changestatus" @endif > @if( $place->status==1)  مفعل @else  مغلق  @endif </span> </td>
                    <td>
                        <div class="actionsIcons">
                            <a href="{{route('editplace',$place->id)}}"  class="edit "> <i
                                    class="fas fa-edit"></i> </a>
                            <a href="" placeid="{{$place->id}}" class="delete deletesub"> <i class="fas fa-trash-alt"></i> </a>
                        </div>
                    </td>
                </tr>
                  @endforeach
                </tbody>
            </table>
        </div>

    </section>

@endsection


@section('style')

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- jvectormap -->
    <link href="{{asset('assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- DataTables -->
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css" />
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app-rtl.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('js')

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

    <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>

    <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>

    <script src="{{asset('assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>




    <script>
        $(document).on("click",".deletesub", function (e) {
            e.preventDefault();
            var id= $(this).attr('placeid');
            $.ajax({
                type:'GET',
                url:"{{route('deleteplace')}}",
                data:{
                    id:id,
                },

                success:function(res){
                    if(res['status']==true)
                    {

                        $(`#${id}`).remove();
                    }
                    else if(res['status']==false)
                        alert('false');

                    else
                        alert('fff');

                },
                error: function(data){

                }
            });

        });



        $(document).on("click",".changestatus", function (e) {
           e.preventDefault();
            var id= $(this).attr('placeid');
            $.ajax({
                type:'GET',
                url:"{{route('placechangestatus')}}",
                data:{
                    id:id,
                },

                success:function(res){
                    if(res['status']==true)
                    {

                        location.reload();

                    }
                    else if(res['status']==false)
                        alert('false');

                    else
                        alert('fff');

                },
                error: function(data){

                }
            });

        });
    </script>














@endsection


