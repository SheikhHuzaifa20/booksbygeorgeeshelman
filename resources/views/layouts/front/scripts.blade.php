<!-- ============================================================== -->
<!-- George T. Eshelman - All SCRIPTS AND JS LINKS BELOW  -->
<!-- ============================================================== -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Bootstrap 5 Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- WOW.js -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<!-- Custom Site Script -->
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('plugins/vendors/sweetalert/sweetalert.min.js') }}"></script>

<script>
    // WOW Animation Init
    new WOW().init();

    // Testimonials Owl Carousel Init
    if ($(".testimonials.owl-carousel").length) {
        $(".testimonials.owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 4000,
            responsive: {
                0:    { items: 1 },
                600:  { items: 1 },
                1000: { items: 1 }
            }
        });
    }

    function showSubmissionAlert(title, message, type) {
        if (typeof swal === 'function') {
            swal({
                title: title,
                text: message,
                type: type,
                confirmButtonText: 'OK',
                confirmButtonColor: type === 'success' ? '#287a55' : '#b84b43'
            });
        } else {
            window.alert(title + '\n' + message);
        }
    }

    function setSubmitButtonState(button, isLoading) {
        if (isLoading) {
            button.data('original-html', button.html());
            button.addClass('is-submitting').attr('aria-busy', 'true').prop('disabled', true).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span>Sending</span>');
        } else {
            button.removeClass('is-submitting').removeAttr('aria-busy').prop('disabled', false).html(button.data('original-html'));
        }
    }

    $('#newForm').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const button = form.find('[type="submit"]');
        if (button.prop('disabled')) return;

        setSubmitButtonState(button, true);
        $.ajax({
            url: "{{ route('newsletter.submit') }}",
            type: 'POST',
            data: {
                '_token': "{{ csrf_token() }}",
                newsletter_email: $('#newemail').val()
            },
            success: function(response) {
                if (response.status) {
                    form[0].reset();
                    showSubmissionAlert(response.emails_sent ? 'Subscribed' : 'Saved, email unavailable', response.message, response.emails_sent ? 'success' : 'warning');
                } else {
                    showSubmissionAlert('Unable to subscribe', response.message, 'warning');
                }
            },
            error: function(xhr) {
                const response = xhr.responseJSON || {};
                const message = response.message || (response.errors && Object.values(response.errors)[0][0]) || 'Please check your email and try again.';
                showSubmissionAlert('Submission failed', message, 'error');
            },
            complete: function() {
                setSubmitButtonState(button, false);
            }
        });
    });

    $('#contactform').on('submit', function(e) {
        e.preventDefault();
        const form = $(this);
        const button = form.find('[type="submit"]');
        if (button.prop('disabled')) return;

        setSubmitButtonState(button, true);
        $.ajax({
            url: "{{ route('contactUsSubmit') }}",
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.status) {
                    form[0].reset();
                    showSubmissionAlert(response.emails_sent ? 'Message received' : 'Saved, email unavailable', response.message, response.emails_sent ? 'success' : 'warning');
                } else {
                    showSubmissionAlert('Unable to send', response.message, 'warning');
                }
            },
            error: function(xhr) {
                const response = xhr.responseJSON || {};
                const message = response.message || (response.errors && Object.values(response.errors)[0][0]) || 'Please check your details and try again.';
                showSubmissionAlert('Submission failed', message, 'error');
            },
            complete: function() {
                setSubmitButtonState(button, false);
            }
        });
    });
</script>

@if(Session::has('message'))
<script type="text/javascript">
    alert("{{ Session::get('message') }}");
</script>
@endif

@yield('js')
