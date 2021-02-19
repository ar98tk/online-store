@extends('layouts.master')
@section('title')
    لوحة التحكم - برنامج الفواتير
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div><br>
                <h2 class="main-content-title tx-60 mg-b-1 mg-b-lg-1">مرحبا بعودتك</h2><br>
            </div>
        </div>
        <div class="main-dashboard-header-right">

        </div>
    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row--lg justify-content-center">
        <div class="col-xl-4 col-lg-6 col-lg-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-primary-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-30 text-white">عدد المنتجات</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h3 class="tx-50 font-weight-bold mb-1 text-white justify-content-center">
                                {{ \App\Product::count() }}
                                </h3>
                                <p class="mb-0 tx-12 text-white op-7"></p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-danger-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-30 text-white">إجمالي عدد الطلبات</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h3 class="tx-50 font-weight-bold mb-1 text-white">
                                    {{ \App\Order::count() }}
                                </h3>
                                <p class="mb-0 tx-12 text-white op-7">
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
        </div>

    </div>
    <div class="row row--lg justify-content-center">
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-success-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-30 text-white">إجمالي الإيرادات</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h3 class="tx-50 font-weight-bold mb-1 text-white">
                                    {{ number_format(\App\Account::where('type', '=' , '0')->sum('money_amount'), 2) }}
                                </h3>
                                <p class="mb-0 tx-12 text-white op-7">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
            <div class="card overflow-hidden sales-card bg-warning-gradient">
                <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
                    <div class="">
                        <h6 class="mb-3 tx-30 text-white">إجمالي المصروفات</h6>
                    </div>
                    <div class="pb-0 mt-0">
                        <div class="d-flex">
                            <div class="">
                                <h3 class="tx-50 font-weight-bold mb-1 text-white">
                                {{ number_format(\App\Account::where('type', '=' , '1')->sum('money_amount'), 2) }}

                                </h3>
                                <p class="mb-0 tx-12 text-white op-7">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

@endsection
