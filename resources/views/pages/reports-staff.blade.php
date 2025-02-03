@extends('layouts.layout');

@section('content')
    <header class="dark-green text-white text-center py-3">
        <h1>ارسال نتایج تشخیصی</h1>
    </header>
    <main class="py-4">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title h4 mb-4">بارگذاری نتایج تشخیصی</h1>
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="patient-id" class="form-label">کد ملی بیمار :</label>
                            <input type="text" id="patient-id" name="nationalid" class="form-control" placeholder="کد ملی بیمار را وارد کنید." required>
                        </div>

                        <div class="mb-3">
                            <select class="form-control" name="type-test">
                                <option value="" selected disabled>نوع آزمایش</option>
                                <option value="MRI">MRI</option>
                                <option value="CT scan">CT scan</option>
                                <option value="laboratory">laboratory</option>
                              </select>
                        </div>

                        <div class="mb-3">
                            <label for="test-name" class="form-label">نام آزمایش:</label>
                            <input type="text" id="test-name" name="test-name" class="form-control" placeholder="نام آزمایش را وارد کنید." required>
                        </div>
                        <div class="mb-3">
                            <label for="file-upload" class="form-label">بارگذاری فایل :</label>
                            <input type="file" id="file-upload" name="file-upload" class="form-control" accept=".pdf,.jpg,.png,.jpeg,.docx" required>
                        </div>

                        <button type="submit" class="btn text-white bg-dark-green w-100">بارگذاری</button>
                    </form>
                </div>
            </div>
            <p>{{ session('save_file') }}</p>
        </div>
    </main>
    @endsection
