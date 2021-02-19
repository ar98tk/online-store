@extends('layouts.master')
@section('css')

    <link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
@section('title')
    اضافة منتج - ماسترز ستور
@stop

@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المنتجات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ اضافة
                منتج</span>
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
                            <a class="btn btn-primary" href="{{ route('products.index') }}">رجوع</a>
                        </div>
                    </div><br>
                    {{ Form::open(['route' => 'products.create', 'class' => 'parsley-style-1']) }}
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                        {!! Html::decode(Form::label('product_name_ar', 'اسم المنتج باللغة العربية : <span class="tx-danger">*</span>'))!!}
                        {!! Form::text('product_name_ar', old('product_name_ar'),['class'=>'form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                        </div>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('product_name_en', 'اسم المنتج باللغة الأنجليزية : <span class="tx-danger">*</span>'))!!}
                            {!! Form::text('product_name_en', old('product_name_en'),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper' ]) !!}
                        </div>
                    </div>
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('price', 'السعر : <span class="tx-danger">*</span>'))!!}
                            {!! Form::text('price', old('price'),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper' ]) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Html::decode(Form::label('category_id', 'القسم : <span class="tx-danger">*</span>'))!!}
                            {!! Form::select('category_id',  App\Category::pluck('name_ar', 'id'),old('category_id'), array('placeholder' => 'من فضلك اختر قسم',  'class' => 'form-control  nice-select  custom-select', 'tabindex' => '2',)) !!}
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
@section('js')
    <!-- Internal Nice-select js-->
    <script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

    <!--Internal  Parsley.min js -->
    <script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
    <!-- Internal Form-validation js -->
    <script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection
