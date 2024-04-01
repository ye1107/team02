@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('驗證您的電子郵件地址') }}</h2>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('在繼續之前，請檢查您的電子郵件以獲取驗證連結。') }}</p>
                    <p>{{ __('如果您沒有收到電子郵件') }},</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __('點擊這裡重新發送') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
