@extends('layouts.layout');

@section('content')
  <div class="head-nav bg-dark-green w-100 d-flex justify-content-center align-items-center text-white fs-1">
    <div class="head-nav-text">پورتال جوابدهی آنلاین</div>
  </div>


<div class="card row justify-content-center flex-row">
  <div class="col-4">
  <div class="card-client" data-bs-toggle="modal" data-bs-target="#loginModal">
    <div class="bg-dark-green text-white">مراجعین</div>
    <div class="card-client-nav"></div>
    <div class="card-client-body">
      <div>برای ورود به سیستم، اطلاعات خود را وارد کنید.</div>
      <div></div>
    </div>
  </div>
</div>

<div class="col-4">
  <div class="card-staff" data-bs-toggle="modal" data-bs-target="#loginModal2">
    <div class="bg-dark-green text-white">همکاران آزمایشگاه</div>
    <div>
      <div>در صورت داشتن دسترسی، وارد سیستم شوید.</div>
      <div></div>
    </div>
  </div>
</div>
</div>


  
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content" action="/reports/user" method="POST">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="loginModalLabel">جوابدهی آنلاین ویژه مراجعین</h1>
       
        </div>
        <div class="modal-body">
            <div class="national-id-box-input d-flex flex-column" >
              @csrf 
              <label for="nationalid">کد ملی : </label>
                <input type="number" name="nationalid" >

                <label for="phonenumber">شماره تلفن : </label>
                <input type="number" name="phonenumber" >
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
          <button type="submit" class="btn btn-primary">
            ورود
          </button>
        </div>
      </form>
    </div>
  </div>



  
  <!-- Modal -->
  <div class="modal fade" id="loginModal2" tabindex="-1" aria-labelledby="loginModal2Label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="loginModal2Label">جوابدهی آنلاین ویژه کاربران</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="national-id-box-input d-flex flex-column">
            <label for="nationalid">کد ملی : </label>
            <input type="number" id="nationalid" >

            <label for="phonenumber">شماره تلفن : </label>
            <input type="number" id="phonenumber" >
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
          <button type="button" class="btn btn-primary">ورود</button>
        </div>
      </div>
    </div>
  </div>


@endsection