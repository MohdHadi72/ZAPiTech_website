@include('common.header')

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @include('common.leftSideBar')
    <!-- Left Sidebar End -->
    <!-- Topbar start -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @include('common.topbar')
            <!-- Topbar End-->

            <!-- Start right Content here -->

            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item">
                                            <a href="{{url('/home')}}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            Dashboard
                                        </li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    
                            
                    <!--</div>-->
                  
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container -->
            </div>
            <!-- End Right content here -->
        </div>
    </div>
</div>
@include('common.footer')
