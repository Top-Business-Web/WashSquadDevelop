@extends('admin.layouts.inc.app')
@section('content')



    <!-- breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"> <a href="{{route('getnotification')}}"> الاشعارات </a> </li>
            <li class="breadcrumb-item active"> <a href=""> جديد </a> </li>
        </ol>
        <button class="btn btn-dark" onclick="history.back()"> عودة </button>
    </div>
    <!-- end breadcrumb -->
    <!-- edit Service -->
    <section class="editService">
        <form action="{{route('adminsendnotification')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-5 p-2">
                    <div class="mb-3">
                        <label class="form-label"> تاريخ الاسال </label>
                        <input name="sending_date" class="form-control" type="date">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4 p-2">
                    <label class="form-label"> المستهدف </label>
                    <div class="form-check mb-2">
                        <input name="target[]"  class="form-check-input" type="checkbox" value="all_client" id="target1">
                        <label class="form-check-label" for="target1">
                            الكل
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input name="target[]" class="form-check-input" type="checkbox" value="client_not_ordered" id="target2">
                        <label class="form-check-label" for="target2">
                            عملاء جدد لم يطلب بعد
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input name="target[]" class="form-check-input" type="checkbox" value="cancel_client" id="target3">
                        <label class="form-check-label" for="target3">
                            عملاء تم الالغاء
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" name="target[]" type="checkbox" value="client_served" id="target4">
                        <label class="form-check-label"  for="target4">
                            عملاء تمت خدمتهم
                        </label>
                    </div>

                </div>
                <div class="col-md-6 p-2">
                    <label class="form-label"> تاريخ المستهدف </label>
                    <div class="row flex-wrap">
                        <div class="col p-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputFrom"> من </span>
                                <input type="date" name="target_date_start" class="form-control" aria-describedby="inputFrom">
                            </div>
                        </div>
                        <div class="col p-2">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputTo"> الي </span>
                                <input type="date" name="target_date_end" class="form-control" aria-describedby="inputTo">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="mb-3">
                <label class="form-label"> العنوان باللغة العربية </label>
                <input name="ar_title" class="form-control" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label"> النص باللغة العربية </label>
                <textarea name="ar_text" class="form-control" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label"> العنوان باللغة الانجليزية </label>
                <input name="en_title" class="form-control" type="text">
            </div>
            <div class="mb-3">
                <label class="form-label"> النص باللغة الانجليزية </label>
                <textarea name="en_text" class="form-control" rows="5"></textarea>
            </div>
            <div class="text-end py-2">
                <button type="submit" class="btn orangeBtn"> حفظ و إغلاق </button>
            </div>
        </form>
    </section>
    <!-- end edit Service -->









@endsection



@section('style')

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- jvectormap -->
    <link href="{{asset('assets/libs/jqvmap/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app-rtl.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('js')

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <!-- dropzone js -->
    <script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>
    <!-- apexcharts js -->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    <!-- jquery.vectormap map -->
    <script src="{{asset('assets/libs/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('assets/libs/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>


@endsection


