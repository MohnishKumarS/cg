@extends('layouts.main')

@section('title', 'portfolio | Collegiate Graphix')

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
                            <button class="filter-btn {{ $loop->first ? 'active' : '' }}"
                                data-filter="{{ $val->cname }}">{{ $val->cname }}</button>
                        @endforeach
                    </div>

                    <div class="row">
                        @if ($cat_port->count())
                            @foreach ($cat_port as $val)
                                <div class="gallery_product col-lg-4 col-md-6 col-12 filter {{ $val->category->cname }}">
                                    <img src="{{ asset('image/gallery/' . $val->image) }}" class="img-fluid"
                                        alt="gallery-image" loading="lazy" title="view image">
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endif


            </div>
        </div>
        <div id="image-viewer">
            <span class="close">&times;</span>
            <img class="modal-content" id="full-image">
        </div>
    </section>

@endsection

@push('styles')
    <style>
        .filter img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .filter img:hover {
            opacity: 0.9;
        }

        /* The Modal (background) */
        #image-viewer {
            display: none;
            position: fixed;
            z-index: 1001;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 90%;
        }

        .modal-content {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        #image-viewer .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        #image-viewer .close:hover,
        #image-viewer .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {

            $(".filter-btn").click(function() {
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

            // image view
            $(".filter img").click(function() {
                $("#full-image").attr("src", $(this).attr("src"));
                $('#image-viewer').show();
            });

            $("#image-viewer .close").click(function() {
                $('#image-viewer').hide();
            });

        });
    </script>
@endpush
