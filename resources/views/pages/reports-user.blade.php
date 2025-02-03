@extends('layouts.layout');

@section('content')

    <div class="head-text">
        <div>نمایش نتایج تشخیصی</div>
    </div>

<div class="table-box">
    <!--Create a table-->
    <div class="d-flex justify-content-around">
        <table class="text-black fw-bold overflow-hidden">
            <thead>
                <tr>
                    <th></th>
                    <th>نوع تشخیص</th>
                    <th>نام‌آزمایش / تشخیص</th>
                    <th>تاریخ انجام</th>
                    <th>وضعیت</th>
                    <th>نتیجه / گزارش</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $report)
                    
                    <tr>
                        <td>{{$report->id}}</td>
                        <td>{{$report->type_test}}</td>
                        <td>{{$report->test_name}}</td>
                        <td>{{$report->test_name}}</td>
                        <td>آماده</td>
                        <td class="table-light-gray"><a class="text-decoration-none" href="{{$report->file_path}}">دانلود</a></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
    
@endsection