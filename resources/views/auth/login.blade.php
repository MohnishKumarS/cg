@extends('layouts.main')

@section('content')

<section>
    <div class="page-login my-5">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row align-items-lg-center">
                <div class="col-lg-6">
                    <div>
                        <img src="{{url('image/story.jpg')}}" alt="login-image" class="img-fluid object-fit-cover" loading="lazy" >
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="px-xxl-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h2>Login</h2>
    
                            <div class="mt-4">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        placeholder="Enter your Email">
                                    <label for="floatingInput">Enter your Email</label>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password"
                                        value="{{ old('password') }}" placeholder="Enter your Password">
                                    <label for="floatingInput">Enter your Password</label>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
    
                                <div class="mt-4 pt-1">
                                    <button class="btn-main w-100" type="submit">Login</button>
                                </div>
                   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
