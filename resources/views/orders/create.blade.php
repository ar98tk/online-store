@extends('layouts.master')

    @section('title')
    اضافة طلب - ماسترز ستور
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الطلبات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة
                طلب</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>خطا</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('orders.index') }}">رجوع</a>
                        </div>
                    </div><br>
                    {{ Form::open(['route' => 'orders.create', 'class' => 'parsley-style-1']) }}
                    <div class="row row-sm">

                        <div class="col-lg-12 col-xl-6">
                            <div class="card card-dashboard-map-one">
                                <label class="main-content-label">بيانات المنتج الأول</label>
                                <div class="" style="width: 100%">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_1_category', 'القسم : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_1_category',  App\Category::pluck('name_ar', 'name_ar'),old('item_1_category'), array('placeholder' => 'اختر قسم',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_1', 'المنتج : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_1',  App\Product::pluck('product_name_ar', 'product_name_ar'),old('item_1'), array('placeholder' => 'اختر المنتج',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_1_amount', 'الكمية : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_1_amount',  array(1,2,3,4,5,6,7,8,9),old('item_1_amount'), array('placeholder' => 'اختر الكمية',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_1_price', 'سعر القطعة : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('item_1_price', old('item_1_price'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="card card-dashboard-map-one">
                                <label class="main-content-label">بيانات المنتج الثاني</label>
                                <div class="" style="width: 100%">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_2_category', 'القسم : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_2_category',  App\Category::pluck('name_ar', 'name_ar'),old('item_2_category'), array('placeholder' => 'اختر قسم',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_2', 'المنتج : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_2',  App\Product::pluck('product_name_ar', 'product_name_ar'),old('item_2'), array('placeholder' => 'اختر المنتج',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_2_amount', 'الكمية : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_2_amount',  array(1,2,3,4,5,6,7,8,9),old('item_2_amount'), array('placeholder' => 'اختر الكمية',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_2_price', 'سعر القطعة : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('item_2_price', old('item_2_price'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="card card-dashboard-map-one">
                                <label class="main-content-label">بيانات المنتج الثالث</label>
                                <div class="" style="width: 100%">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_3_category', 'القسم : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_3_category',  App\Category::pluck('name_ar', 'name_ar'),old('item_3_category'), array('placeholder' => 'اختر قسم',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_3', 'المنتج : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_3',  App\Product::pluck('product_name_ar', 'product_name_ar'),old('item_3'), array('placeholder' => 'اختر المنتج',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_3_amount', 'الكمية : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_3_amount',  array(1,2,3,4,5,6,7,8,9),old('item_3_amount'), array('placeholder' => 'اختر الكمية',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_3_price', 'سعر القطعة : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('item_3_price', old('item_3_price'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="card card-dashboard-map-one">
                                <label class="main-content-label">بيانات المنتج الرابع</label>
                                <div class="" style="width: 100%">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_4_category', 'القسم : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_4_category',  App\Category::pluck('name_ar', 'name_ar'),old('item_4_category'), array('placeholder' => 'اختر قسم',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_4', 'المنتج : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_4',  App\Product::pluck('product_name_ar', 'product_name_ar'),old('item_4'), array('placeholder' => 'اختر المنتج',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_4_amount', 'الكمية : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_4_amount',  array(1,2,3,4,5,6,7,8,9),old('item_4_amount'), array('placeholder' => 'اختر الكمية',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_4_price', 'سعر القطعة : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('item_4_price', old('item_4_price'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                </div>
                            </div>

                            <div class="card card-dashboard-map-one">
                                <label class="main-content-label">بيانات المنتج الخامس</label>
                                <div class="" style="width: 100%">

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_5_category', 'القسم : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_5_category',  App\Category::pluck('name_ar', 'name_ar'),old('item_5_category'), array('placeholder' => 'اختر قسم',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_5', 'المنتج : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_5',  App\Product::pluck('product_name_ar', 'product_name_ar'),old('item_5'), array('placeholder' => 'اختر المنتج',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_5_amount', 'الكمية : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('item_5_amount',  array(1,2,3,4,5,6,7,8,9),old('item_5_amount'), array('placeholder' => 'اختر الكمية',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Html::decode(Form::label('item_5_price', 'سعر القطعة : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('item_5_price', old('item_5_price'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="col-md-12 col-lg-12 col-xl-6">
                            <div class="card">
                                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-0">بيانات العميل</h4>
                                    </div>
                                    <br>
                                    <div>
                                        {!! Html::decode(Form::label('customer_name', 'اسم العميل : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('customer_name', old('customer_name'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                    <br>
                                    <div>
                                        {!! Html::decode(Form::label('customer_mobile', 'رقم الهاتف : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('customer_mobile', old('customer_mobile'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                    <br>
                                    <div>
                                        {!! Html::decode(Form::label('customer_address', 'العنوان : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::text('customer_address', old('customer_address'),['class'=>'form-control form-control-sm mg-b-20"
                                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                                    </div>
                                    <br>
                                    <div>

                                        {!! Html::decode(Form::label('status', 'حالة الطلب : <span class="tx-danger">*</span>'))!!}
                                        {!! Form::select('status',  array('في انتظار تحديد موعد للتوصيل', 'تم تحديد موعد التوصيل', 'تم التسليم'),old('status'), array('placeholder' => 'من فضلك اختر حالة الطلب',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
                                    </div>
                                </div>
                                <div class="card-body" style="width: 70%">


                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        {!! Form::submit('إضافة', ['class' => 'btn btn-main-primary pd-x-20']) !!}
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

    <!-- main-content closed -->
@endsection

