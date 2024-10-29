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
            url: "{{ url('users-contact') }}",
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
    $('#cg-contactForm-js').on('submit', function(e) {
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