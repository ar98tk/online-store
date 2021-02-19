@extends('layouts.master')

    @section('title')
    عرض معاملة - ماسترز ستور
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">المصروفات و الإيرادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض
                معاملة ( {{ $account->name }} )</span>
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
                            <a class="btn btn-primary" href="{{ route('accounts.index') }}">رجوع</a>
                        </div>
                    </div><br>
                    {!! Form::model($account,['route' => ['accounts.show' , $account->id], 'method' => 'put']) !!}
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            {!! Html::decode(Form::label('username', 'اسم المستخدم : '))!!}
                            {!! Form::text('username', old('username', $account->username),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>

                        <div class="col-md-6">
                            {!! Html::decode(Form::label('type', 'نوع المعاملة : '))!!}
                            {!! Form::select('type',  ['ايرادات','مصروفات'],old('type',$account->type), array('placeholder' => 'من فضلك اختر نوع المعاملة',  'class' => 'form-control  nice-select  custom-select', 'readonly' )) !!}
                        </div>
                    </div>
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            {!! Html::decode(Form::label('name', 'وصف المعاملة : '))!!}
                            {!! Form::text('name', old('name', $account->name),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('money_amount', 'قيمة المعاملة : '))!!}
                            {!! Form::text('money_amount', old('money_amount',$account->money_amount),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>
                    </div>
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6" id="fnWrapper">
                            {!! Html::decode(Form::label('created_at', 'تاريخ إنشاء المعاملة : '))!!}
                            {!! Form::text('created_at', old('created_at', $account->created_at),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('updated_at', 'تاريخ تعديل المعاملة : '))!!}
                            {!! Form::text('updated_at', old('updated_at',$account->updated_at),['class'=>'form-control form-control-sm mg-b-20"
                                               data-parsley-class-handler="#lnWrapper', 'readonly' ]) !!}
                        </div>
                    </div>
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            {!! Html::decode(Form::label('notes', 'الملاحظات : '))!!}
                            {!! Form::textarea('notes', old('notes',$account->notes),['class'=>'form-control form-control-sm mg-b-20"
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
