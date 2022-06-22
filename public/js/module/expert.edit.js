$(function() {
    $("#expert_form").validate({
      // Specify validation rules
      rules: {
        name: {
          required: true,
          minlength: 2,
          maxlength: 255
        },
        subject: {
          required: true,
          minlength: 2,
          maxlength: 255
        },
        rating: {
          required: true
        },
        orderfinish: {
          required: true
        },
        orderprogress: {
          required: true
        },
        country: {
          required: true
        },
        description: {
          required: true
        },
        imagealt: {
          required: true
        },
        qualification: {
          required: true
        }
      },
      errorPlacement: function(error, element) {
        error.appendTo('#form_error');
      },
      // Specify validation error messages
      messages: {
        name: {
          required: "Note! name required",
          minlength:"Note! minlenngth is 2",
          maxlength: "Note! maxlenngth is 255"
        },
        subject:{
          required: "Note! subject required",
          minlength:"Note! minlenngth is 2",
          maxlength: "Note! maxlenngth is 255",
        },
        rating: {
          required: "Note! rating required"
        },
        orderfinish: {
          required: "Note! order finish required"
        },
        orderprogress: {
          required: "Note! order progress required"
        },
        country: {
          required: "Note! country required"
        },
        description: {
          required: "Note! description required"
        },
        imagealt: {
          required: "Note! image alt required"
        },
        qualification: {
          required: "Note! qualification required"
        }
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });
});