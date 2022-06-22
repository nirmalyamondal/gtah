$(function() {
  $("#testimonial_form").validate({
    // Specify validation rules
    rules: {
      author: {
        required: true,
        minlength: 2,
        maxlength: 255
      },
      country: {
        required: true
      },
      category: {
        required: true
      },
      description: {
        required: true
      },
      gender: {
        required: true
      },
      stream: {
        required: true
      },
      status: {
        required: true
      },
      rating: {
        required: true
      }
    },
    errorPlacement: function(error, element) {
      error.appendTo('#form_error');
    },
    // Specify validation error messages
    messages: {
      author: {
        required: "Note! name required",
        minlength:"Note! minlenngth is 2",
        maxlength: "Note! maxlenngth is 255"
      },
      country:{
        required: "Note! country required"
      },
      category: {
        required: "Note! category required"
      },
      description: {
        required: "Note! description required"
      },
      gender: {
        required: "Note! gender required"
      },
      stream: {
        required: "Note! stream required"
      },
      status: {
        required: "Note! status required"
      },
      rating: {
        required: "Note! rating required"
      }
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

  $('#category').on('change', function() {
    const cat_id  = $(this).val();
    //const data = { };
  
    fetch(baseUrl+'sub_category/'+cat_id, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
      },
      //body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(data => {
      if(data.status){
        $('#sub_category').html(data.data);
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
  });

});