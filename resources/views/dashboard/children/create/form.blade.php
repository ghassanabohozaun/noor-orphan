@push('style')
    <style>
        .step {
            /* border: 1px solid #ccc; */
            padding: 20px;
            margin-bottom: 20px;
        }

        .progress-bar {
            width: 100%;
            background-color: #f3f3f3;
            height: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .progress-bar-fill {
            height: 100%;
            background-color: #4CAF50;
            width: 0%;
            /* Initial width */
            border-radius: 5px;
        }

        label.error {
            color: #FF4961;
            padding-top: 5px;
            /* font-size: 0.8rem; */

        }

        .text-danger {
            color: #FF4961;
            font-size: 0.9rem;
            padding-top: 5px;
        }

        input.error,
        input.invalid {
            border-color: #FF4961;
        }
    </style>
@endpush

<form action="{!! route('dashboard.children.store') !!}" method="POST" enctype="multipart/form-data" id="child_create_form">
    @csrf

    <div class="progress-bar mb-2" style="height: 2px;">
        <div class="progress-bar-fill">
            <div id="progressText">
            </div>
        </div>
    </div>

    <div class="step" id="step1">
        @include('dashboard.children.create.child-info')
    </div>

    <div class="step" id="step2" style="display: none;">
        @include('dashboard.children.create.child-parents')
    </div>

    <div class="step" id="step3" style="display: none;">
        @include('dashboard.children.create.child-guardian')
    </div>

    <div class="step" id="step4" style="display: none;">
        @include('dashboard.children.create.child-file')
    </div>

    <div class="step" id="step5" style="display: none;">
        @include('dashboard.children.create.confirmations')
    </div>

</form>


@push('scripts')
    <script src="{!! asset('assets/dashbaord/js/jquery.validate.min.js') !!}"></script>

    <script>
        $(document).ready(function() {

            // ... (previous jQuery code for navigation) ...

            let currentStep = 0;
            const steps = $('.step');
            const progressBarFill = $('.progress-bar-fill');
            $('#progressText').html("<span>" + 0 + "  % </span>");

            // update p rogress bar
            function updateProgressBar() {
                const progress = (currentStep / (steps.length - 1)) * 100;
                progressBarFill.css('width', progress + '%');

                let percentage = (currentStep / (steps.length - 1)) * 100;
                $('#progressText').html("<span>" + percentage + "  % </span>");
            }


            // validate
            $('#child_create_form').validate({
                rules: {
                    first_name_ar: {
                        required: true,
                        minlength: 3,
                    },
                    father_name_ar: {
                        required: true,
                        minlength: 3,
                    },
                    grand_father_name_ar: {
                        required: true,
                        minlength: 3,
                    },
                    family_name_ar: {
                        required: true,
                        minlength: 3,
                    },
                    first_name_en: {
                        required: true,
                        minlength: 3,
                    },
                    father_name_en: {
                        required: true,
                        minlength: 3,
                    },
                    grand_father_name_en: {
                        required: true,
                        minlength: 3,
                    },
                    family_name_en: {
                        required: true,
                        minlength: 3,
                    },
                    personal_id: {
                        required: true,
                        digits: true,
                        minlength: 9,
                        maxlength: 9,
                        remote: {
                            url: "{!! route('dashboard.children.check.email.unique') !!}", // Laravel route for uniqueness check
                            type: "post",
                            data: {
                                personal_id: function() {
                                    return $("#personal_id").val();
                                },
                                _token: $('meta[name="csrf-token"]').attr(
                                    'content') // For Laravel CSRF protection
                            }
                        }
                    },

                    birthday: {
                        required: true,
                        date: true,
                    },

                    classification: {
                        required: true
                    },
                    gender: {
                        required: true,
                    },
                    password: {
                        required: true,
                        minlength: 3,
                    },
                    password_confirm: {
                        required: true,
                        minlength: 3,
                        equalTo: "#password"
                    },
                    class: {
                        required: true,
                    },
                    health_status: {
                        required: true,
                    },
                    disease_clarification: {
                        required: true,
                    },
                    authorized_contact_number: {
                        required: true,
                    },
                    backup_contact_number: {
                        required: true,
                    },
                    whatsApp_number: {
                        required: true,
                    },
                    governoate_id: {
                        required: true,
                    },
                    city_id: {
                        required: true,
                    },
                    address_details: {
                        required: true,
                    },
                    // family
                    number_of_people_including_mother: {
                        required: true,
                        digits: true,
                    },
                    male_number: {
                        required: true,
                        digits: true,
                    },
                    female_number: {
                        required: true,
                        digits: true,
                    },
                    // father
                    father_full_name_ar: {
                        required: true,
                    },
                    father_full_name_en: {
                        required: true,
                    },
                    father_personal_id: {
                        required: true,
                        digits: true,
                    },
                    father_date_of_death: {
                        required: true,
                        date: true,
                    },
                    father_respon_of_death: {
                        required: true,
                    },

                    // mother
                    mother_full_name_ar: {
                        required: true,
                    },
                    mother_full_name_en: {
                        required: true,
                    },
                    mother_personal_id: {
                        required: true,
                        digits: true,
                    },
                    mother_date_of_death: {
                        required: true,
                        date: true,
                    },
                    is_mother_alive: {
                        required: true,
                    },
                    is_mother_the_guardian: {
                        required: true,
                    },

                    //guardian
                    guardian_full_name_ar: {
                        required: true,
                    },
                    guardian_full_name_en: {
                        required: true,
                    },
                    guardian_personal_id: {
                        required: true,
                        digits: true,
                    },
                    guardian_birthday: {
                        required: true,
                        date: true,
                    },
                    why_not_the_mother_is_guardian: {
                        required: true,
                    },
                    guardian_relationship_with_the_child: {
                        required: true,
                    },

                    //files
                    picture_of_the_orphan_child: {
                        required: true,
                    },
                    orphan_child_birth_certificate: {
                        required: true,
                    },
                    father_death_certificate: {
                        required: true,
                    },
                    guardian_personal_id_photo: {
                        required: true,
                    },

                },
                messages: {
                    first_name_ar: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    father_name_ar: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    grand_father_name_ar: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    family_name_ar: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    first_name_en: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    father_name_en: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },

                    grand_father_name_en: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    family_name_en: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    personal_id: {
                        required: "{!! __('children.required') !!}",
                        digits: "{!! __('children.digits') !!}",
                        remote: "{!! __('children.child_exists') !!}",
                        minlength: "{!! __('children.max_length_9') !!}",
                        maxlength: "{!! __('children.min_lenght_9') !!}",
                    },
                    birthday: {
                        required: "{!! __('children.required') !!}",
                        date: "{!! __('children.date') !!}",
                    },
                    classification: {
                        required: "{!! __('children.required') !!}",
                    },
                    gender: {
                        required: "{!! __('children.required') !!}",
                    },
                    password: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                    },
                    password_confirm: {
                        required: "{!! __('children.required') !!}",
                        minlength: "{!! __('children.min_lenght_3') !!}",
                        equalTo: "{!! __('children.equal_to') !!}",
                    },
                    class: {
                        required: "{!! __('children.required') !!}",
                    },
                    health_status: {
                        required: "{!! __('children.required') !!}",
                    },
                    disease_clarification: {
                        required: "{!! __('children.required') !!}",
                    },
                    authorized_contact_number: {
                        required: "{!! __('children.required') !!}",
                    },
                    backup_contact_number: {
                        required: "{!! __('children.required') !!}",
                    },
                    whatsApp_number: {
                        required: "{!! __('children.required') !!}",
                    },
                    governoate_id: {
                        required: "{!! __('children.required') !!}",
                    },
                    city_id: {
                        required: "{!! __('children.required') !!}",
                    },
                    address_details: {
                        required: "{!! __('children.required') !!}",
                    },
                    // parents
                    number_of_people_including_mother: {
                        required: "{!! __('children.required') !!}",
                        digits: "{!! __('children.digits') !!}",
                    },
                    male_number: {
                        required: "{!! __('children.required') !!}",
                        digits: "{!! __('children.digits') !!}",
                    },
                    female_number: {
                        required: "{!! __('children.required') !!}",
                        digits: "{!! __('children.digits') !!}",
                    },
                    // father
                    father_full_name_ar: {
                        required: "{!! __('children.required') !!}",
                    },
                    father_full_name_en: {
                        required: "{!! __('children.required') !!}",
                    },
                    father_personal_id: {
                        required: "{!! __('children.required') !!}",
                        digits: "{!! __('children.digits') !!}",
                    },
                    father_date_of_death: {
                        required: "{!! __('children.required') !!}",
                        date: "{!! __('children.date') !!}",
                    },
                    father_respon_of_death: {
                        required: "{!! __('children.required') !!}",
                    },
                    // mother
                    mother_full_name_ar: {
                        required: "{!! __('children.required') !!}",
                    },
                    mother_full_name_en: {
                        required: "{!! __('children.required') !!}",
                    },
                    mother_personal_id: {
                        required: "{!! __('children.required') !!}",
                        digits: "{!! __('children.digits') !!}",
                    },
                    mother_date_of_death: {
                        required: "{!! __('children.required') !!}",
                        date: "{!! __('children.date') !!}",
                    },
                    is_mother_alive: {
                        required: "{!! __('children.required') !!}",
                    },
                    is_mother_the_guardian: {
                        required: "{!! __('children.required') !!}",
                    },

                    //guardian
                    guardian_full_name_ar: {
                        required: "{!! __('children.required') !!}",
                    },
                    guardian_full_name_en: {
                        required: "{!! __('children.required') !!}",
                    },
                    guardian_personal_id: {
                        required: "{!! __('children.required') !!}",
                        digits: "{!! __('children.digits') !!}",
                    },
                    guardian_birthday: {
                        required: "{!! __('children.required') !!}",
                        date: "{!! __('children.date') !!}",
                    },
                    why_not_the_mother_is_guardian: {
                        required: "{!! __('children.required') !!}",
                    },
                    guardian_relationship_with_the_child: {
                        required: "{!! __('children.required') !!}",
                    },

                    //files
                    picture_of_the_orphan_child: {
                        required: "{!! __('children.required') !!}",
                    },
                    orphan_child_birth_certificate: {
                        required: "{!! __('children.required') !!}",
                    },
                    father_death_certificate: {
                        required: "{!! __('children.required') !!}",
                    },
                    guardian_personal_id_photo: {
                        required: "{!! __('children.required') !!}",
                    },

                },

                // Add a handler to check validation before moving to the next step
                // submitHandler: function(form) {
                //     // This will be called when the form is fully valid and submitted
                //     // You can use AJAX here to send the form data
                //     alert('Form submitted successfully!');
                //     form.submit(); // Or use AJAX
                // }
            });

            //next-step
            $('.next-step').click(function() {
                console.log('dfdf');
                if ($(this).closest('.step').find('input').valid()) { // Validate inputs in current step
                    if (currentStep < steps.length - 1) {
                        $(steps[currentStep]).hide();
                        currentStep++;
                        $(steps[currentStep]).show();
                        updateProgressBar();
                    }
                    getInputValues();

                }
            });

            // get inputs value
            function getInputValues() {

                // child info
                $('#full_name_ar_view').text($('#first_name_ar').val() + ' ' + $('#father_name_ar').val() + ' ' + $(
                    '#grand_father_name_ar').val() + ' ' + $('#family_name_ar').val());

                $('#full_name_en_view').text($('#first_name_en').val() + ' ' + $('#father_name_en').val() + ' ' + $(
                    '#grand_father_name_en').val() + ' ' + $('#family_name_en').val());

                $('#personal_id_view').text($('#personal_id').val());
                $('#birthday_view').text($('#birthday').val());
                $('#classification_view').text($('select[name="classification"] option:selected').text());
                $('#gender_view').text($('select[name="gender"] option:selected').text());
                $('#class_view').text($('select[name="class"] option:selected').text());
                $('#health_status_view').text($('select[name="health_status"] option:selected').text());
                $('#disease_clarification_view').text($('#disease_clarification').val());
                $('#authorized_contact_number_view').text($('#authorized_contact_number').val());
                $('#backup_contact_number_view').text($('#backup_contact_number').val());
                $('#whatsApp_number_view').text($('#whatsApp_number').val());
                $('#governoate_id_view').text($('select[name="governoate_id"] option:selected').text());
                $('#city_id_view').text($('select[name="city_id"] option:selected').text());
                $('#address_details_view').text($('#address_details').val());

                // family info
                $('#number_of_people_including_mother_view').text($('#number_of_people_including_mother').val());
                $('#male_number_view').text($('#male_number').val());
                $('#female_number_view').text($('#female_number').val());

                // father info
                $('#father_full_name_ar_view').text($('#father_full_name_ar').val());
                $('#father_full_name_en_view').text($('#father_full_name_en').val());
                $('#father_personal_id_view').text($('#father_personal_id').val());
                $('#father_date_of_death_view').text($('#father_date_of_death').val());
                $('#father_respon_of_death_view').text($('select[name="father_respon_of_death"] option:selected')
                    .text());

                // mother info
                $('#mother_full_name_ar_view').text($('#mother_full_name_ar').val());
                $('#mother_full_name_en_view').text($('#mother_full_name_en').val());
                $('#mother_personal_id_view').text($('#mother_personal_id').val());
                $('#mother_date_of_death_view').text($('#mother_date_of_death').val());
                $('#is_mother_alive_view').text($('select[name="is_mother_alive"] option:selected')
                    .text());
                $('#is_mother_the_guardian_view').text($('select[name="is_mother_the_guardian"] option:selected')
                    .text());

                // guardian info
                $('#guardian_full_name_ar_view').text($('#guardian_full_name_ar').val());
                $('#guardian_full_name_en_view').text($('#guardian_full_name_en').val());
                $('#guardian_personal_id_view').text($('#guardian_personal_id').val());
                $('#guardian_birthday_view').text($('#guardian_birthday').val());
                $('#why_not_the_mother_is_guardian_view').text($(
                        'select[name="why_not_the_mother_is_guardian"] option:selected')
                    .text());
                $('#guardian_relationship_with_the_child_view').text($(
                        'select[name="guardian_relationship_with_the_child"] option:selected')
                    .text());

            }

            // prev-step
            $('.prev-step').click(function() {
                if (currentStep > 0) {
                    $(steps[currentStep]).hide();
                    currentStep--;
                    $(steps[currentStep]).show();
                    updateProgressBar();
                }
            });

            // Initialize progress bar
            updateProgressBar();

            // address dependency
            $('#governoate_id').on('change', function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: '{!! route('dashboard.children.get.cities', ':id') !!}'.replace(':id', id),
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#city_id').empty().append(
                                '<option value="">Select City</option>');
                            $.each(data, function(key, value) {
                                $('#city_id').append('<option value="' + key +
                                    '">' + value + '</option>');
                            });
                            $('#city_id').prop('disabled', false);
                        }
                    });
                } else {
                    $('#city_id').empty().append('<option value="">Select City</option>').prop(
                        'disabled', true);
                }
            });

            // images preview
            $("#picture_of_the_orphan_child").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $(".picture_of_the_orphan_child_preview")
                            .attr("src", e.target.result)
                            .css("display", "block");
                    };
                    reader.readAsDataURL(file);
                }
            });

            $("#orphan_child_birth_certificate").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $(".orphan_child_birth_certificate_preview")
                            .attr("src", e.target.result)
                            .css("display", "block");
                    };
                    reader.readAsDataURL(file);
                }
            });

            $("#father_death_certificate").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $(".father_death_certificate_preview")
                            .attr("src", e.target.result)
                            .css("display", "block");
                    };
                    reader.readAsDataURL(file);
                }
            });

            $("#guardian_personal_id_photo").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $(".guardian_personal_id_photo_preview")
                            .attr("src", e.target.result)
                            .css("display", "block");
                    };
                    reader.readAsDataURL(file);
                }
            });

        });


        // reset
        function resetCreateForm() {

            // child
            $('#first_name_ar').css('border-color', '');
            $('#father_name_ar').css('border-color', '');
            $('#grand_father_name_ar').css('border-color', '');
            $('#family_name_ar').css('border-color', '');
            $('#first_name_en').css('border-color', '');
            $('#father_name_en').css('border-color', '');
            $('#grand_father_name_en').css('border-color', '');
            $('#family_name_en').css('border-color', '');
            $('#personal_id').css('border-color', '');
            $('#birthday').css('border-color', '');
            $('#classification').css('border-color', '');
            $('#gender').css('border-color', '');
            $('#password').css('border-color', '');
            $('#password_confirm').css('border-color', '');
            $('#class').css('border-color', '');
            $('#health_status').css('border-color', '');
            $('#disease_clarification').css('border-color', '');
            $('#governoate_id').css('border-color', '');
            $('#city_id').css('border-color', '');
            $('#address_details').css('border-color', '');
            $('#authorized_contact_number').css('border-color', '');
            $('#backup_contact_number').css('border-color', '');
            $('#whatsApp_number').css('border-color', '');


            // family
            $('#number_of_people_including_mother').css('border-color', '');
            $('#male_number').css('border-color', '');
            $('#female_number').css('border-color', '');

            // father
            $('#father_full_name_ar').css('border-color', '');
            $('#father_full_name_en').css('border-color', '');
            $('#father_personal_id').css('border-color', '');
            $('#father_date_of_death').css('border-color', '');
            $('#father_respon_of_death').css('border-color', '');

            // mother
            $('#mother_full_name_ar').css('border-color', '');
            $('#mother_full_name_en').css('border-color', '');
            $('#mother_personal_id').css('border-color', '');
            $('#mother_date_of_death').css('border-color', '');
            $('#is_mother_alive').css('border-color', '');
            $('#is_mother_the_guardian').css('border-color', '');

            // guardain
            $('#guardian_full_name_ar').css('border-color', '');
            $('#guardian_full_name_en').css('border-color', '');
            $('#guardian_personal_id').css('border-color', '');
            $('#guardian_birthday').css('border-color', '');
            $('#why_not_the_mother_is_guardian').css('border-color', '');
            $('#guardian_relationship_with_the_child').css('border-color', '');


            // files
            $('#picture_of_the_orphan_child').css('border-color', '');
            $('#orphan_child_birth_certificate').css('border-color', '');
            $('#father_death_certificate').css('border-color', '');
            $('#guardian_personal_id_photo').css('border-color', '');


            // child
            $('#first_name_ar_error').text('');
            $('#father_name_ar_error').text('');
            $('#grand_father_name_ar_error').text('');
            $('#family_name_ar_error').text('');
            $('#first_name_en_error').text('');
            $('#father_name_en_error').text('');
            $('#grand_father_name_en_error').text('');
            $('#family_name_en_error').text('');
            $('#personal_id_error').text('');
            $('#birthday_error').text('');
            $('#classification_error').text('');
            $('#gender_error').text('');
            $('#password_error').text('');
            $('#password_confirm_error').text('');
            $('#class_error').text('');
            $('#health_status_error').text('');
            $('#disease_clarification_error').text('');
            $('#governoate_id_error').text('');
            $('#city_id_error').text('');
            $('#address_details_error').text('');
            $('#authorized_contact_number_error').text('');
            $('#backup_contact_number_error').text('');
            $('#whatsApp_number_error').text('');

            // family
            $('#number_of_people_including_mother_error').text('');
            $('#male_number_error').text('');
            $('#female_number_error').text('');

            // father
            $('#father_full_name_ar_error').text('');
            $('#father_full_name_en_error').text('');
            $('#father_personal_id_error').text('');
            $('#father_date_of_death_error').text('');
            $('#father_respon_of_death_error').text('');

            // mother
            $('#mother_full_name_ar_error').text('');
            $('#mother_full_name_en_error').text('');
            $('#mother_personal_id_error').text('');
            $('#mother_date_of_death_error').text('');
            $('#is_mother_alive_error').text('');
            $('#is_mother_the_guardian_error').text('');

            // guardain
            $('#guardian_full_name_ar_error').text('');
            $('#guardian_full_name_en_error').text('');
            $('#guardian_personal_id_error').text('');
            $('#guardian_birthday_error').text('');
            $('#why_not_the_mother_is_guardian_error').text('');
            $('#guardian_relationship_with_the_child_error').text('');

            // files
            $('#picture_of_the_orphan_child_error').text('');
            $('#orphan_child_birth_certificate_error').text('');
            $('#father_death_certificate_error').text('');
            $('#guardian_personal_id_photo_error').text('');
        }


        // submit
        $('#child_create_form').on('submit', function(e) {
            e.preventDefault();

            resetCreateForm();
            var data = new FormData(this);
            var type = $(this).attr('method');
            var url = $(this).attr('action');

            $.ajax({
                url: url,
                type: type,
                data: data,
                dataType: false,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {

                },
                success: function(data) {
                    if (data.status == true) {
                        console.log(data);

                        flasher.success("{!! __('general.add_success_message') !!}");
                        setInterval(function() {
                            location.reload();
                        }, 2000)

                    } else {
                        flasher.error("{!! __('general.add_error_message') !!}");
                    }
                },

                error: function(reject) {
                    var response = $.parseJSON(reject.responseText);
                    $.each(response.errors, function(key, value) {
                        $('#' + key + '_error').text(value[0]);
                        $('#' + key).css('border-color', 'red');
                    });
                    chilCreatePrintErrors(response.errors)
                },
                complete: function() {},
            })

        }); //end submit

        function chilCreatePrintErrors(msg) {

            $('.alert_errors').find('ul').empty();
            $('.alert_errors').removeClass('d-none');
            $('.alert_success').addClass('d-none');
            $('.loading_save_continue').addClass('d-none');
            $.each(msg, function(key, value) {
                $('.alert_errors').find('ul').append("<li>" + value + "</li>");
            });
        }
    </script>
@endpush
