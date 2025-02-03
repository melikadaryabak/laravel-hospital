@extends('layouts.layout');

@section('content')
    
<div class="d-flex justify-content-around">
  <img class="logo-img" src="img/mkmjlk.png"  alt="The image was not uploaded">
    <nav class="navbar navbar-expand-lg bg-white p-3" style="width: 100%; max-width: 800px;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link text-primary fs-4" href="/">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary fs-4" href="/login">خدمات تشخیص درمانی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary fs-4" href="/aboutus">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-primary fs-4" href="/reception">نوبت دهی</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="logo-img"></div>
    

</div>
<!-- end nav--> 
<!-- main-->
   <img class="main-img w-100" src="img/slider-1.jpg"  alt="The image was not uploaded">
   

   <!--professor box-->
  <div class="prof-box-parent d-flex justify-content-around flex-row-reverse align-items-center">
    
    <div class="prof-box-child-img d-flex justify-content-between flex-row-reverse">
      <img src="img/professor-1.jpg"  alt="The image was not uploaded">
      <img src="img/professor-1.jpg"  alt="The image was not uploaded">
    </div>
    
    <div class="prof-box-child-text d-flex justify-content-start flex-column">
     <h2 class="text-primary"> بنیانگذاران</h2>
     <div> درمانگاه تخصصی رازی</div>

     {{-- <div> name : {{$testi[0]->name}}</div> --}}

     {{-- <div>name : {{$id->name}}</div>
      <div>email : {{$id->email}}</div> --}}

      {{-- <form action="/" method="POST">
      @csrf
      <label for="name">name :</label>
        <input type="text" name="name"><br>
        <label for="name">email :</label>
        <input type="text" name="email">
        <input type="submit">
    </form>
<p>{{ session('mssg') }}</p> --}}
    </div>

  </div>
  
<!--footer-->
  <div class="foot-box w-100 text-white">
    <div class="foot-box-child w-100 d-flex justify-content-around flex-row-reverse align-items-center">
  
      <div class="li-3 d-flex flex-column ">
        <div>مرکز تماس و نوبت دهی</div>
       <ul class="list-unstyled m-0"> 
          <li><a class="" href="">*****</a></li>
          <li><a class="" href=""> تلفن انتقادات و پیشنهادات</a></li>
          <li><a class="" href=""> *****</a></li>
        </ul>
      </div>
        
      <div class="li-2 d-flex flex-column ">
        <div>ارتباط با ما</div>
       <ul class="list-unstyled m-0"> 
          <li><a class="" href="">تماس با ما</a></li>
          <li><a class="" href="">آدرس بیمارستان</a></li>
        </ul>
      </div>

      <div class="li-3 d-flex flex-column ">
        <div>بیمه‌های طرف قرارداد</div>
       <ul class="list-unstyled m-0"> 
          <li><a class="" href="">تامین اجتماعی</a></li>
          <li><a class="" href=""> سلامت</a></li>
        </ul>
      </div>
      <img class="logo-img-footer" src="img/mkmjlk.png"  alt="The image was not uploaded">
    </div>
  </div>
  @endsection

