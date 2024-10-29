@extends('layouts.main')

@section('title','contact | Collegiate Graphix')

@section('content')
        <!-- feature -->
        <section>
            <div class="cg-feature">
                <div class="container">
                    <h1 class="cg-feature__head">Contact</h1>
                </div>
            </div>
        </section>
    
    
        <!-- contact us -->
        <section>
            <div class="cg-contact">
                <div class="container">
                    <div class="cg-info">
                        <div class="cg-info__items row">
                            <div class="col-lg-4 col-md-6 col-12 mb-4 cg-item">
                                <div class="cg-info__card">
                                    <div class="cg-info__content">
                                        <div class="cg-info__icon">
                                            <img width="64" height="64"
                                                src="https://img.icons8.com/arcade/64/ringing-phone.png"
                                                alt="ringing-phone" />
                                        </div>
                                        <h4 class="cg-info__head">+91 7358196112</h4>
    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-4 cg-item">
                                <div class="cg-info__card centered">
                                    <div class="cg-info__content">
                                        <div class="cg-info__icon">
                                            <img width="64" height="64"
                                                src="https://img.icons8.com/arcade/64/apple-mail.png" alt="apple-mail" />
                                        </div>
                                        <h4 class="cg-info__head">collegiategraphix@gmail.com</h4>
    
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12 mb-4 cg-item">
                                <div class="cg-info__card">
                                    <div class="cg-info__content">
                                        <div class="cg-info__icon">
    
                                            <img width="64" height="64"
                                                src="https://img.icons8.com/arcade/64/map-marker.png" alt="map-marker" />
                                        </div>
                                        <h4 class="cg-info__head">242 Catherine Drive, Linton, North Dakota - 58552, United States.</h4>
    
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
    
                    <div class="cg-msg">
                        <div class="cg-bg-lined d-none d-md-block"></div>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="cg-msg__media">
                                    <img src="image/contact-us.jpg" class="img-fluid" alt="contact-us">
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="cg-msg__form">
                                    <h2 class="cg-title">Drop Us a Line</h2>
                                    <h3 class="cg-head">Contact us today to learn more about our services</h3>
                                    <form method="post" id="cg-contact-js">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="name" placeholder="name">
                                            <label>Name*</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="email" placeholder="email">
                                            <label>Email*</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="phone" placeholder="phone">
                                            <label>Phone*</label>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" name="message" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Message</label>
                                        </div>
                                        <div class="cg-msg__btn mt-4">
                                            <button type="submit" class="btn-main">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>

@endsection

@push('scripts')
    
<script>
    $(document).ready(function() {
        $('#cg-contact-js').on('submit', function(e) {
            e.preventDefault();

            // Clear previous errors
            $('.text-danger').remove();

            // Get form data
            var formData = {
                name: $('input[name="name"]').val(),
                email: $('input[name="email"]').val(),
                phone: $('input[name="phone"]').val(),
                message: $('textarea[name="message"]').val(),
                _token: '{{ csrf_token() }}'
            };

            // Submit form via AJAX
            $.ajax({
                url: "{{ route('contact.store') }}",
                method: 'POST',
                data: formData,
                dataType: 'json',
                success: function(res) {
                    console.log(res);

                    if (res.status == 'success') {
                        Swal.fire({
                            title: res.title,
                            text: '',
                            icon: res.status,
                            confirmButtonText: 'Cool'
                        }).then(() => {
                            // Clear all input fields after alert confirmation
                            $('#cg-contact-js')[0].reset();
                        });
                    }

                    // alert(response.success);  // Show success message
                },
                error: function(xhr) {
                    // Show validation errors
                    var errors = xhr.responseJSON.errors;
                    if (errors.name) {
                        $('input[name="name"]').after('<span class="text-danger">' + errors
                            .name[0] + '</span>');
                    }
                    if (errors.email) {
                        $('input[name="email"]').after('<span class="text-danger">' + errors
                            .email[0] + '</span>');
                    }
                    if (errors.phone) {
                        $('input[name="phone"]').after('<span class="text-danger">' + errors
                            .phone[0] + '</span>');
                    }
                    if (errors.message) {
                        $('textarea[name="message"]').after('<span class="text-danger">' +
                            errors.message[0] + '</span>');
                    }
                }
            });
        });
    });
</script>
@endpush