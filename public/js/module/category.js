$.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        return this.optional(element) || regexp.test(value);
    },
    "Note! invalid input"
);

$(function() {
    $("#category_form").validate({
      // Specify validation rules
      rules: {
        slug: {
            required: true,
            minlength: 3,
            maxlength: 40,
            regex: /^[a-z\s\-]+$/
        },
        name: {
            required: true,
            minlength: 3,
            maxlength: 200
        }
      },
      errorPlacement: function(error, element) {
        error.appendTo('#form_error');
      },
      // Specify validation error messages
      messages: {
        slug:{
            required: "Note! slug required",
            minlength:"Note! minlenngth is 3",
            maxlength: "Note! maxlenngth is 40",
            regex: 'Note! invalid slug'
        },
        name: {
            required: "Note! name required",
            minlength:"Note! minlenngth is 3",
            maxlength: "Note! maxlenngth is 200"
        }
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
});