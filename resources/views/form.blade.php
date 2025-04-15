@extends('layout.master')

@section('content')
    <div class="card ">
        <div class="card-header d-flex justify-content-between align-items-center ">
            <h5 class="">فرم اسکن مسیر روزانه</h5>
            {{-- <a href="{{route('todo.index')}}" class="btn btn-dark">back</a> --}}
              <a href="{{ route('form.index') }}" class="btn btn-dark">
                <i class="fas fa-plus"></i> لیست
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
               @csrf

                <div class="mb-3">
                    <label for="sales_expert" class="form-label">کارشناس فروش </label>
                    <input type="text" name="sales_expert" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="city_zone" class="form-label">منطقه شهری</label>
                    <div class="input-group">
                        <select name="city_zone" id="city_zone" class="form-select" required>
                            @for ($i = 1; $i <= 13; $i++)
                                <option value="{{ $i }}" {{ $i == 11 ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
           
                <div class="mb-3">
                    <label for="visit_route" class="form-label">مسیر ویزیت </label>
                    <input type="text" name="visit_route" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="supervisor" class="form-label">سرپرست  </label>
                    <input type="text" name="supervisor" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="purchase_manager_time" class="form-label"> تایم حضور مسول خرید</label>
                    <input type="text" name="purchase_manager_time" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="name_of_the_customer" class="form-label">نام و نام خانوادگی مشتری</label>
                    <input type="text" name="name_of_the_customer" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="activity">:صنف فعالیت</label>
                    <input type="text" name="activity" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="name_of_the_store">نام فروشگاه:</label>
                    <textarea name="name_of_the_store" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="phone_number">:شماره تماس </label>
                    <input type="text" name="phone_number" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="address">: ادرس دقیق</label>
                    <input type="text" name="address" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="explanation">: توضیحات</label>
                    <input type="text" name="explanation" class="form-control mb-2" required>

                    <select name="selected_option" id="options" class="form-select" required>
                        <option value="" disabled selected>انتخاب کنید</option>
                        <option value="عدم همکاری بدلیل کار با برند های دیگر"> عدم همکاری بدلیل کار با برند های دیگر</option>
                        <option value="عدم همکاری بدلیل عدم نقدینگی"> عدم همکاری بدلیل عدم نقدینگی</option>
                        <option value="قطع همکاری"> قطع همکاری</option>
                        <option value="عدم حضور مسول خرید">عدم حضور مسول خرید</option>
                        <option value="فروشگاه تعطیل است">فروشگاه تعطیل است</option>
                        <option value="عدم فروش کامل محصول از خرید قبلی">عدم فروش کامل محصول از خرید قبلی</option>
                        <option value="عدم رضایت از خروجی محصول و شرکت">عدم رضایت از خروجی محصول و شرکت</option>
                        <option value="مراجعه بعدی با سرپرست">مراجعه بعدی با سرپرست</option>
                        <option value="قول همکاری در مراجعه بعدی">قول همکاری در مراجعه بعدی</option>
                        <option value="ارسال کاتالوگ و احتمال سفارش بصورت تلفنی">ارسال کاتالوگ و احتمال سفارش بصورت تلفنی</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="checkbox" id="purchase_made" name="purchase_made" value="1">
                    <span>خرید انجام شد</span>
                </div>
            
                <button type="submit" class="btn btn-secondary">ذخیره اطلاعات</button>
            </form>
        </div>
    </div>
@endsection



{{-- <div class="container">
    <h1>فرم</h1>
    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name_of_the_customer">نام و نام خوانوادگی مشتری</label>
            <input type="text" name="name_of_the_customer" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="activity">:صنف فعالیت</label>
            <input type="text" name="activity" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name_of_the_store">نام فروشگاه:</label>
            <textarea name="name_of_the_store" class="form-control" required></textarea>
        </div>
          <div class="form-group">
            <label for="phone_number">:شماره تماس </label>
            <input type="text" name="phone_number" class="form-control" required>
        </div>
          <div class="form-group">
            <label for="address">: ادرس دقیق</label>
            <input type="text" name="address" class="form-control" required>
        </div>
          <div class="form-group">
            <label class="form-label" for="explanation">: توضیحات</label>
            <input type="text" name="explanation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">ذخیره</button>
    </form>
</div> --}}
