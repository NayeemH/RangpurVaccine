$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nid: {
                validators: {
                     stringLength: {
                        min: 11,
                    },
                    notEmpty: {
                        message: 'Please enter valid NID'
                    }
                }
            },
            mobile_no: {
                validators: {
                     stringLength: {
                        min: 11,
                    },
                    notEmpty: {
                        message: 'Please enter valid Number'
                    }
                }
            },
			emer_contact_no: {
                validators: {
                     stringLength: {
                        min: 11,
                    },
                    notEmpty: {
                        message: 'Please enter valid Number'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                  stringLength: {
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            },
                }
            }
        })
        // .on('success.form.bv', function(e) {
        //     $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
        //         $('#contact_form').data('bootstrapValidator').resetForm();

        //     // Prevent form submission
        //     e.preventDefault();

        //     // Get the form instance
        //     var $form = $(e.target);

        //     // Get the BootstrapValidator instance
        //     var bv = $form.data('bootstrapValidator');

        //     // Use Ajax to submit form data
        //     $.post($form.attr('action'), $form.serialize(), function(result) {
        //         console.log(result);
        //     }, 'json');
        // });
});