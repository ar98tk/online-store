@extends('layouts.master')

    @section('title')
    تعديل قسم - ماسترز ستور
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الأقسام</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل
                قسم ( {{ $category->name_ar }} )</span>
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
                            <a class="btn btn-primary" href="{{ route('categories.index') }}">رجوع</a>
                        </div>
                    </div><br>
                    {!! Form::model($category,['route' => ['categories.update' , $category->id], 'method' => 'put']) !!}
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                        {!! Html::decode(Form::label('name_ar', 'اسم القسم باللغة العربية : <span class="tx-danger">*</span>'))!!}
                        {!! Form::text('name_ar', old('name_ar', $category->name_ar),['class'=>'form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper' ]) !!}
                        </div>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('name_en', 'اسم القسم باللغة الإنجليزية : <span class="tx-danger">*</span>'))!!}
                            {!! Form::text('name_en', old('name_en',$category->name_en),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper' ]) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        {!! Form::submit('تعديل', ['class' => 'btn btn-main-primary pd-x-20']) !!}
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

    <!-- main-content closed -->
@endsection
