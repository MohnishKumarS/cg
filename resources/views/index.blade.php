@extends('layouts.main')

@section('title', 'Collegiate Graphix')

@section('content')
    <!-- slider hero -->
    <section class="mb-0">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="image/slider/s1.jpg" class="d-block w-100" alt="Collegiate Graphix slider">
                    <div class="carousel-content container">
                        <h2 class="carousel-txt">Bringing Your College Spirit to Life with Precision And Creativity</h2>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="image/slider/s2.jpg" class="d-block w-100" alt="Collegiate Graphix slider">
                    <div class="carousel-content container">
                        <h2 class="carousel-txt">Turning Ideas into Iconic Apparel & Promotional Product</h2>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="image/slider/s3.jpg" class="d-block w-100" alt="Collegiate Graphix slider">
                    <div class="carousel-content container">
                        <h2 class="carousel-txt">Customized Creations for Collegiate & Corporate Success</h2>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="image/slider/s4.jpg" class="d-block w-100" alt="Collegiate Graphix slider">
                    <div class="carousel-content container">
                        <h2 class="carousel-txt">Crafting Excellence in Collegiate & Custom Apparel Design</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- about us -->
    <section id="about">
        <div class="cg-about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="cg-about__content">
                            <h2 class="cg-title">Our Story</h2>
                            <h3 class="cg-head mb-4">Tailored Designs for Colleges, Schools, & Custom Apparel</h3>
                            <p class="cg-about__desc">
                                Collegiate Graphix is a dedicated team of professionals passionate about transforming your
                                ideas into
                                stunning visual designs. Our mission is to provide universities and schools with
                                premium-quality custom
                                artwork and embroidery services that reflect their unique identity.
                            </p>
                            <p class="cg-about__desc">
                                With years of expertise, our designers and digitizing specialists understand the importance
                                of
                                precision, creativity, and speed. We work closely with educational institutions to create
                                eye-catching
                                designs that resonate with their audiences, whether for branded apparel, promotional
                                materials, or
                                event-specific merchandise.
                            </p>
                            <div class="cg-btn-link mt-4">
                                <a href="{{ url('services') }}" class="btn-main">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cg-about__media ps-lg-4">
                            <img src="image/story.jpg" class="img-fluid" alt="our_story" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- service -->
    <section id="service">
        <div class="cg-service">
            <div class="container">
                <h2 class="cg-title text-center">Services</h2>
                <h3 class="cg-head text-center">What We Do?</h3>
                <div class="row cg-service__items">
                    <div class="cg-bg-dot d-none d-md-block"></div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="cg-service__item">
                            <img src="image/service/s2.svg" alt="Custom Artwork" class="cg-service__icon" loading="lazy">
                            <h4 class="cg-service__head">Custom Artwork & Creative Services</h4>
                            <p class="cg-service__desc">
                                Our creative team is skilled in crafting one-of-a-kind designs that capture your school’s
                                spirit and
                                values. Whether you need artwork for apparel, promotional products, or digital platforms, we
                                bring
                                originality and professionalism to every project.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="cg-service__item centered">
                            <img src="image/service/s1.svg" alt="Embroidery Design" class="cg-service__icon" loading="lazy">
                            <h4 class="cg-service__head">Embroidery Design Services</h4>
                            <p class="cg-service__desc">
                                We offer detailed and high-quality embroidery design services that bring logos and images to
                                life with
                                texture and style. Our digitizing process ensures that each design is stitch-perfect,
                                whether for
                                uniforms, sports gear, or branded merchandise.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="cg-service__item">
                            <img src="image/service/s2.svg" alt="Artwork Vector" class="cg-service__icon" loading="lazy">
                            <h4 class="cg-service__head">Artwork Vector Conversion</h4>
                            <p class="cg-service__desc">
                                Convert your images into sharp, scalable vector files, ideal for various applications like
                                screen
                                printing, embroidery, and promotional materials. We ensure that your designs maintain their
                                clarity and
                                impact across all formats.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- why choose -->
    <section>
        <div class="cg-whyc">
            <div class="container">
                <div class="row  align-items-center">
                    <div class="col-lg-6">
                        <div class="cg-whyc__media pe-lg-4">
                            <img src="image/why-choose.jpg" alt="why choose us" class="cg-whyc__pic img-fluid"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5">
                        <div class="cg-whyc__body">
                            <h2 class="cg-title">why choose us</h2>
                            <h3 class="cg-head">Bring Your Ideas to Life with Collegiate Graphix
                            </h3>
                            <div class="cg-whyc__items row">
                                <div class="col-lg-6 col-md-6 col-12 mb-4 cg-item">
                                    <div class="cg-whyc__card">
                                        <div class="cg-whyc__content">
                                            <div class="cg-whyc__icon">
                                                <img width="96" height="96"
                                                    src="https://img.icons8.com/nolan/96/service.png" alt="service"
                                                    loading="lazy" />
                                            </div>
                                            <h4 class="cg-whyc__head">Expert Designers</h4>
                                            <p class="cg-whyc__desc">
                                                Our team of skilled designers and digitizers are experts in understanding
                                                the branding and
                                                design needs of educational institutions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-4 cg-item">
                                    <div class="cg-whyc__card">
                                        <div class="cg-whyc__content">
                                            <div class="cg-whyc__icon">
                                                <img width="96" height="96"
                                                    src="https://img.icons8.com/nolan/96/fast-forward.png"
                                                    alt="fast-forward" loading="lazy" />
                                            </div>
                                            <h4 class="cg-whyc__head">Fast Turnaround</h4>
                                            <p class="cg-whyc__desc">
                                                We respect your deadlines and deliver high-quality results quickly.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-4 cg-item">
                                    <div class="cg-whyc__card">
                                        <div class="cg-whyc__content">
                                            <div class="cg-whyc__icon">
                                                <img width="96" height="96"
                                                    src="https://img.icons8.com/nolan/96/school.png" alt="school"
                                                    loading="lazy" />
                                            </div>
                                            <h4 class="cg-whyc__head">Tailored for Schools & Universities</h4>
                                            <p class="cg-whyc__desc">
                                                With extensive experience working with schools across the USA, we know how
                                                to create designs
                                                that reflect school spirit, professionalism, and pride.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-4 cg-item">
                                    <div class="cg-whyc__card">
                                        <div class="cg-whyc__content">
                                            <div class="cg-whyc__icon">
                                                <img width="96" height="96"
                                                    src="https://img.icons8.com/nolan/96/cost.png" alt="cost"
                                                    loading="lazy" />
                                            </div>
                                            <h4 class="cg-whyc__head">Cost-Effective Solutions</h4>
                                            <p class="cg-whyc__desc">
                                                Receive premium services at competitive prices, ensuring value without
                                                compromising on quality.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- serve -->
    <section>
        <div class="cg-serve">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cg-serve__head">
                            <h2 class="cg-title text-white">Whom We Serve</h2>
                            <h3 class="cg-head text-white mb-0">We Create Beautiful Design, that makes Difference.</h3>
                        </div>
                    </div>
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <div class="cg-serve__body">
                            <div class="row">
                                <div class="col-lg-3 col-6 mb-4">
                                    <div class="cg-serve__card">
                                        <div class="cg-serve__icon">
                                            <img width="128" height="128"
                                                src="https://img.icons8.com/arcade/128/university-campus.png"
                                                alt="university-campus" />

                                        </div>
                                        <h4 class="cg-serve__head">Schools</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 mb-4">
                                    <div class="cg-serve__card">
                                        <div class="cg-serve__icon">
                                            <img width="128" height="128"
                                                src="https://img.icons8.com/arcade/128/graduation-cap.png"
                                                alt="graduation-cap" />
                                        </div>
                                        <h4 class="cg-serve__head">Universities</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 mb-4">
                                    <div class="cg-serve__card">
                                        <div class="cg-serve__icon">
                                            <img width="128" height="128"
                                                src="https://img.icons8.com/arcade/128/teams.png" alt="teams" />
                                        </div>
                                        <h4 class="cg-serve__head">Sports Teams & Resorts</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6 mb-4">
                                    <div class="cg-serve__card">
                                        <div class="cg-serve__icon">
                                            <img width="100" height="100" src="image/p4.png"
                                                alt="group-of-companies" />
                                        </div>
                                        <h4 class="cg-serve__head">Promotional Product Companies</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- contact us -->
    <section>
        <div class="cg-contact">
            <div class="container">
                <h2 class="cg-title text-center">Drop Us a Line</h2>
                <h3 class="cg-head text-center">Contact us today to learn more about our services</h3>
                <div class="cg-msg py-0">
                    <div class="cg-bg-lined d-none d-md-block"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="cg-msg__media">
                                <img src="image/contact-us.jpg" class="img-fluid" alt="contact-us">
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="cg-msg__form">
                                <h2 class="cg-title mb-3">Contact Now</h2>
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

    <style>
        .cg-contact {
            & .cg-msg {
                & .cg-bg-lined {
                    top: -3rem;
                }
            }
        }
    </style>

    <!-- faq -->
    <section>
        <div class="cg-faq">
            <div class="container">
                <h2 class="cg-title text-center">any doubts</h2>
                <h3 class="cg-head text-center">Frequently Asked Questions </h3>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                How can I test your services?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Simply send us an art file, and we'll demonstrate our capabilities
                                by
                                completing the artwork and sending it back to you within 24 hours. This way, you can
                                evaluate our
                                quality, turnaround time, invoicing process, payment options, and customer service.
                                Experience the
                                entire workflow and build your trust in us.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                What is your usual turnaround time?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Our rush service can have your artwork ready within 2-4 hours. For
                                standard
                                jobs, we deliver within 24 hours. If you need an urgent job done, just mention "Rush" in the
                                subject
                                line, and we'll meet your specific requirements.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                How much do you charge for artwork?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">To get our current price list, please send an email to
                                sales@collegiategraphix.com, including your name, company details, and contact information.
                                If you're
                                planning to submit more than 10 jobs daily, we offer special pricing plans. Feel free to
                                contact us for
                                more information.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">We accept payments via PayPal, Credit/Debit cards and wire
                                transfers. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                How can I track the progress of my job?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can reach out to our client coordinators by emailing
                                cc@collegiategraphix.com.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                How do I create an account with Collegiate Graphix?
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">To set up an account, contact our Sales Department at 0000000000 or
                                email us
                                at sales@collegiategraphix.com.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Will the same designers work on all my orders?
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, we assign the same team of designers to work on your orders to
                                ensure
                                consistency.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseEight">
                                How will I receive my completed artwork?
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">You can choose to receive your files via email or FTP, whichever is
                                more
                                convenient for you.</div>
                        </div>
                    </div>
                    <!-- End accordion-item -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        // Scroll  navbar 
        window.addEventListener('scroll', function() {
            var navbar = document.querySelector('#header .navbar');

            if (window.scrollY > 850) {
                navbar.classList.add('navfixed');
            } else {
                navbar.classList.remove('navfixed');
            }
        });

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
