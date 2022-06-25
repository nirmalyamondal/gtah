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
        image: {
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
        image: {
          required: "Note! image required"
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

$(document).ready(function() {
  $('#testimonials').multiselect({
      afterMoveToRight: function(Multiselect, $options, event, silent, skipStack) {
        $('#testimonials_to option').prop('selected', true);
      },
      afterMoveToLeft: function(Multiselect, $options, event, silent, skipStack) {
        $('#testimonials_to option').prop('selected', true);
      }
  });
  $('#testimonials_to option').prop('selected', true);
});

  $(document).ready(function() {
    //AJAX Call for Sub-category
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
    //AJAX Call for Testimonial filter
    $('#testimonials_filter').on('click', function() {
      const countryt  = $('#countryt').val();
      const category  = $('#category').val();
      const sub_category  = $('#sub_category').val();
      var params = countryt+'/'+category+'/'+sub_category;
      fetch(baseUrl+'expert/'+params, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json',
        },
        //body: JSON.stringify(data),
      })
      .then(response => response.json())
      .then(data => {
        if(data.status){
          $('#testimonials').html(data.data);
        }
      })
      .catch((error) => {
        console.error('Error:', error);
      });
    });
  });