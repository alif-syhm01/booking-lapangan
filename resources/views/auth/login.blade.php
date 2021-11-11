@extends('auth/core')

@section('title', $title)

@section('page-body')
    <h5 class="card-title text-center">Halaman <span class="purple-text">Login</span></h5>
    <hr>
    <form action="javascript:;" autocomplete="off">
        <div class="form-group">
            <label class="font-weight-normal form-label">Email</label>
            <div class="input-group">
                <input type="email" class="form-control" name="email" placeholder="user@mail.com">
                <span class="input-group-text">
                    <i class="icon-envelope"></i>
                </span>
            </div>
        </div>
        <div class="form-group mt-3">
            <label class="font-weight-normal form-label">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="********">
                <span class="input-group-text">
                    <i class="icon-eye-open icon-click"></i>
                </span>
            </div>
        </div>
        <div class="form-group mt-4">
            <div class="d-grid">
                <button type="submit" id="login-process" class="btn button-purple">Masuk</button>
            </div>
        </div>
        <p class="text-center mt-4">Belum mempunyai akun? Yuk daftar <a href="{{ url('register-page') }}" class="purple-text">Disini</a></p>
    </form>
@endsection

@section('footer-asset')
    <script src="{{ mix('js/login.js') }}"></script>
@endsection