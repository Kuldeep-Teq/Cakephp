//------------------------------------- Client Side Validation---------------------------------
$(document).ready(function () {
    // $("#loginForm").submit(function (e) {
    //     e.preventDefault();
    //     return false;
    // });
    $("#loginForm").validate({
        rules: {
            created_date: { step: false },
            modified_date: { step: false },
            first_name: {
                required: true,
                lettersonly: true,
            },
            last_name: {
                required: true,
                lettersonly: true,
            },
            email: {
                required: true,
                email: true,
            },
            phone_number: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10,
            },
            password: {
                required: true,
                minlength: 8,
            },
            gender: {
                required: true,
            },
        },
        messages: {
            first_name: {
                required: "Please Enter First Name",
                lettersonly: "Numeric values are not allowed",
            },
            last_name: {
                required: "Please Enter Last Name",
                lettersonly: "Numeric values are not allowed",
            },
            email: {
                required: "Please Enter Your Email",
                email: "Please Enter Valid Email",
            },
            phone_number: {
                required: "Please Enter Number",
                number: "Not Allowed",
                maxlength: "Number must be 10 digit",
                minlength: "Number must be 10 digit",
            },
            password: {
                required: "Please Enter Your password",
                minlength: "password should be atleast 8 characters in length",
            },
            gender: {
                required: "Please Select Your Gender",
            },
        },
        submitHandler: function (form) {
            form.submit();
        },
        errorPlacement: function (error, element) {
            if (element.is(":radio")) {
                // custom error placement
                error.appendTo("#gender_error");
            } else {
                error.insertAfter(element);
            }
        },
    });

    jQuery.validator.addMethod(
        "lettersonly",
        function (value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
        },
        "Letters only please"
    );
});
