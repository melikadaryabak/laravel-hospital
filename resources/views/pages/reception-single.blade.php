@extends('layouts.layout');

@section('content')
    <div class="national-id-box d-flex justify-content-start">
       
        <div class="national-id-box-info d-flex flex-column">
            <div class="">تخصص : گوارش</div>
            <div class="">نام پزشک : دکتر زهرا موسوی</div>
            <div class=""> تاریخ نوبت : 1403/11/26</div>
        </div>

        <img class="doctor-icon" src="img/doctor.png"  alt="The image was not uploaded">
        
        <form class="national-id-box-input d-flex flex-column">
            <label for="nationalid">کد ملی :</label>
            <input type="number">
        </form>
        
    </div><hr>

    <form class="form-info d-flex justify-content-start">
        <div class="form-info-fname d-flex flex-column">
        <label for="fname">نام بیمار :</label>
        <input type="text" value="ملیکا" disabled>
    </div>
    <div class="form-info-lname d-flex flex-column">
        <label for="lname">نام خانوادگی :</label>
        <input type="text" value="دریابک" disabled>
    </div>
        <input class="form-info-submit" type="submit" value="پذیرش">
      </form> 


      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="loginModalLabel">کاربر عزیز ! نوبت شما با موفقیت ذخیره گردید. </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p> لطفا در ساعت اعلام شده در مرکز حضور داشته باشید.  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


  @endsection