@extends('layouts.layout');

@section('content')
<!--background image-->
    <div class="back-img w-100 vh-100 d-flex justify-content-center">
        <!--"shdower: a layer that is placed over the image to darken it"-->
        <div class="back-img-shadower opacity-50 w-50  bg-black  d-flex flex-column align-items-center justify-content-evenly h-50">

     <select class="select-box-item rounded-pill bg-transparent text-white text-center">
      <option value="" selected disabled>انتخاب تخصص</option>
      <option value="چشم">چشم</option>
      <option value="گوارش">گوارش</option>
      <option value="زنان و زایمان">زنان و زایمان</option>
    </select>
            <select class="select-box-item rounded-pill bg-transparent text-white text-center">
        <option value="" selected disabled>انتخاب پزشک</option>
        <option value="دکتر زهرا موسوی">دکتر زهرا موسوی</option>
        <option value="دکتر سمیه اصغری">دکتر سمیه اصغری</option>
        <option value="دکتر حمزه شمالی">دکتر مجتبی شمالی</option>
        <option value="دکتر ابراهیم حسینی">دکتر ابراهیم حسینی</option>
        <option value="دکتر طاهره مدنی">دکتر طاهره مدنی</option>
        <option value="دکتر مریم شفیعی">دکتر مریم شفیعی</option>
      </select>
            <select class="select-box-item rounded-pill bg-transparent text-white text-center">
      <option value="" selected disabled>بازه زمانی</option>
      <option value="یک هفته">یک هفته</option>
      <option value="دو هفته">دو هفته</option>
      <option value="یک ماه">یک ماه</option>
    </select>

            <button class="select-box-item rounded-pill bg-light text-center" type="button">جستجو</button>

        </div>
    </div>
    <!--Create a table-->
    <div class="d-flex justify-content-around">
        <table class="text-black fw-bold overflow-hidden">
            <thead>
                <tr>
                    <th></th>
                    <th>شیفت</th>
                    <th>دکتر</th>
                    <th>تخصص</th>
                    <th>تاریخ</th>
                    <th>ظرفیت</th>
                    <th>وضعیت</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>عصر</td>
                    <td> دکتر زهرا موسوی</td>
                    <td>گوارش</td>
                    <td>1403/10/20</td>
                    <td>0</td>
                    <td class="table-dark-gray">اتمام</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>صبح</td>
                    <td>دکتر طاهره مدنی</td>
                    <td>زنان و زایمان</td>
                    <td>1403/10/25</td>
                    <td>5</td>
                    <td class="table-light-gray"><a class="text-decoration-none" href="#">دریافت نوبت</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>عصر</td>
                    <td>دکتر ابراهیم حسینی</td>
                    <td>گوارش</td>
                    <td>1403/10/22</td>
                    <td>0</td>
                    <td class="table-dark-gray">اتمام</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>عصر</td>
                    <td>دکتر سمیه اصغری</td>
                    <td>زنان و زایمان</td>
                    <td>1403/11/04</td>
                    <td>10</td>
                    <td class="table-light-gray"><a class="text-decoration-none" href="#">دریافت نوبت</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>صبح</td>
                    <td>دکتر مجتبی شمالی</td>
                    <td>چشم</td>
                    <td>1403/10/26</td>
                    <td>8</td>
                    <td class="table-light-gray"><a class="text-decoration-none" href="#">دریافت نوبت</a></td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection