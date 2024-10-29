@extends('layouts.main')

@section('title','page not found | Collegiate Graphix')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="empty text-center">
                <img src="{{ asset('image/error/oops.svg') }}" class="img-fuild" alt="empty-page"
                    width="300">
                <h2 class="head">uh-oh Page  <span class="text-main">Not Found...</span></h2>
                <p class="sub-desc">We're sorry, the page you are trying to reach doesn't exist....</p>
                <div class="">
                    <a href="{{ url('/') }}" class="btn-main">Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts')
    <script>
            // Scroll  navbar 
    window.addEventListener('scroll', function () {
      var navbar = document.querySelector('#header .navbar');

      if (window.scrollY > 100) {
        navbar.classList.add('navfixed');
      } else {
        navbar.classList.remove('navfixed');
      }
    });
    </script>
@endpush




