@extends('admin.inc.app')


@section('page_content')

<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Home</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active"></li>
                            </ol>
                        </div><!--end col-->

                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->




    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; {{date('Y')}} RAS
    </footer><!--end footer-->
</div>

@endsection
