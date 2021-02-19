@extends('layouts.master')

    @section('title')
    عرض عميل - ماسترز ستور
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">العملاء</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض
                عميل ( {{ $customer->name }} )</span>
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
                            <a class="btn btn-primary" href="{{ route('customers.index') }}">رجوع</a>
                        </div>
                    </div><br>
                    {!! Form::model($customer,['route' => ['customers.show' , $customer->id], 'method' => 'put']) !!}
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                        {!! Html::decode(Form::label('name', 'اسم العميل : '))!!}
                        {!! Form::text('name', old('name', $customer->name),['class'=>'form-control form-control-sm mg-b-20"
                                           data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('mobile', 'رقم الهاتف : '))!!}
                            {!! Form::text('mobile', old('mobile',$customer->mobile),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>
                    </div>
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            {!! Html::decode(Form::label('address', 'العنوان : '))!!}
                            {!! Form::text('address', old('address', $customer->address),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>

                    </div>
                    <br>
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('notes', 'الملاحظات : '))!!}
                            {!! Form::textarea('notes', old('notes',$customer->notes),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>
                    </div>

                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>

    <!-- main-content closed -->
@endsection
