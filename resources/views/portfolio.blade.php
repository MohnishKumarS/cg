@extends('layouts.main')

@section('title','portfolio | Collegiate Graphix')

@section('content')
    
        <!-- feature -->
        <section>
            <div class="cg-feature">
                <div class="container">
                    <h1 class="cg-feature__head">Portfolio</h1>
                </div>
            </div>
        </section>



    <!-- portfolio -->
    <section>
        <div class="cg-gallery">
            <div class="container">

                @if ($cat->count())
                <div class="cg-gallery__btns">
                    @foreach ($cat as $val)
                    <button class="filter-btn {{ $loop->first ? 'active' : '' }}" data-filter="{{$val->cname}}">{{$val->cname}}</button>
                    @endforeach
                </div>

                <div class="row">
                    @if ($cat_port->count())
                        @foreach ($cat_port as $val)
                        <div class="gallery_product col-lg-4 col-md-6 col-12 filter {{$val->category->cname}}">
                            <img src="{{asset('image/gallery/'.$val->image)}}" class="img-fluid" alt="gallery-image">
                        </div>
                        @endforeach
                    @endif
                </div>
                @endif
             

           

            </div>
        </div>
    </section>
@endsection


@push('scripts')
<script>
    $(document).ready(function () {

        $(".filter-btn").click(function () {
            var value = $(this).attr('data-filter');

            if (value == "All") {
                $('.filter').show('1000');
            } else {
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }

            if ($(".filter-btn").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");
        });

    });
</script>
@endpush