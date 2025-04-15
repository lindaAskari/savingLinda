@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>dashboard page</title>

    </head>
    {{-- <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col"> --}}
        {{-- <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden"> --}}
            {{-- @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                    <div class="card-header d-flex justify-content-between align-items-center ">
                    <h5 class=""> شما از قبل وارد شده اید</h5>
                    </div>
                      <a
                            href="{{ route('form.create') }}"
                           class="btn btn-dark"
                        >
                         برای استفاده از برنامه کلیک کنید  
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                           class="btn btn-dark"
                        >
                        وارد شوید 
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                             
                                ثبت نام کنید
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif --}}
        {{-- </header> --}}
                  {{-- <div class=" card-header d-flex justify-content-between align-items-center ">
            <h5 class="">خوش امدید </h5>
          
        </div> --}}

    
    {{-- </body> --}}

    <div class="card-header d-flex justify-content-between align-items-center ">
                    <h5 class="">  خوش امدید</h5>
                    </div>
                      <a
                            href="{{ route('form.create') }}"
                           class="btn btn-dark"
                        >
                         برای استفاده از برنامه کلیک کنید  
                        </a>
</html>
@endsection

