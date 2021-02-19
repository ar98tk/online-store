@extends('layouts.master')
@section('css')
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }
    </style>
@endsection
@section('title')
    فاتورة رقم {{$orders->order_uid}}
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الفواتير</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    طباعة </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <div class="card card-invoice">
                    <div class="card-body">

                            <h1 class="invoice-title content-title mb-0 my-auto text-center" style="color: #0a47ff">فاتورة تحصيل</h1>
                        <br><br>
                        <div class="row mg-t-20">
                            <div class="col-6">
                                <label class="tx-gray-600">معلومات الفاتورة</label>
                                <p class="invoice-info-row"><span>رقم الفاتورة</span>
                                    <span>{{ $orders->order_uid }}</span></p>
                                <p class="invoice-info-row"><span>اسم العميل</span>
                                    <span>{{ $orders->customer_name }}</span></p>
                                <p class="invoice-info-row"><span>رقم العميل</span>
                                    <span>{{ $orders->customer_mobile }}</span></p>
                                <p class="invoice-info-row"><span>عنوان العميل</span>
                                    <span>{{ $orders->customer_address }}</span></p>
                            </div>
                        </div>
                        <div class="table-responsive mg-t-40">
                            <table class="table table-invoice border text-md-nowrap mb-0">
                                <thead>
                                <tr>
                                    <th class="wd-20p">#</th>
                                    <th class="wd-30p">المنتج</th>
                                    <th class="tx-center">سعر القطعة</th>
                                    <th class="text-xl-center">الكمية</th>
                                    <th class="tx-center">الاجمالي</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="tx-12">{{ $orders->item_1 }}</td>
                                    <td class="tx-center">{{ number_format($orders->item_1_price, 2) }}</td>
                                    <td class="tx-center">{{ $orders->item_1_amount }}</td>
                                    <td class="tx-center">{{ number_format($orders->item_1_total, 2) }}</td>
                                </tr>
                                @if($orders->item_2 != null)
                                    <tr>
                                        <td>2</td>
                                        <td class="tx-12">{{ $orders->item_2 }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_2_price, 2) }}</td>
                                        <td class="tx-center">{{ $orders->item_2_amount }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_2_total, 2) }}</td>
                                    </tr>
                                @endif
                                @if($orders->item_3 != null)
                                    <tr>
                                        <td>3</td>
                                        <td class="tx-12">{{ $orders->item_3 }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_3_price, 2) }}</td>
                                        <td class="tx-center">{{ $orders->item_3_amount }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_3_total, 2) }}</td>
                                    </tr>
                                @endif
                                @if($orders->item_4 != null)
                                    <tr>
                                        <td>4</td>
                                        <td class="tx-12">{{ $orders->item_4 }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_4_price, 2) }}</td>
                                        <td class="tx-center">{{ $orders->item_4_amount }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_4_total, 2) }}</td>
                                    </tr>
                                @endif
                                @if($orders->item_5 != null)
                                    <tr>
                                        <td>5</td>
                                        <td class="tx-12">{{ $orders->item_5 }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_5_price, 2) }}</td>
                                        <td class="tx-center">{{ $orders->item_5_amount }}</td>
                                        <td class="tx-center">{{ number_format($orders->item_5_total, 2) }}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td></td>
                                    <td class="tx-12"></td>
                                    <td class="tx-center"></td>
                                    <td class="tx-center">إجمالي المبلغ</td>
                                    <td class="tx-center">{{ number_format($orders->total_price, 2) }}</td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <hr class="mg-b-40">



                        <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>طباعة</button>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>


    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }

    </script>

@endsection
