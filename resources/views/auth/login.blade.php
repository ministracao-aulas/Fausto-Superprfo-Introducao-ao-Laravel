@extends('layouts.app')

@section('content')
    <div class="container-box p-4">
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="row mb-3">
                <div class="col-12">
                    <label for="">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" class="form-control" value="admin@mail.com" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password" class="form-control" value="power@123" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-md btn-success">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
