$(document).ready(function() {
    //AJAX Call for Assignment Type
    $('#qid').on('change', function() {
      const qid  = $(this).val();
      //const data = { };
      fetch(baseUrl+'scategory_qid/'+qid, {
        method: 'GET',
        headers: {
          'Content-Type': 'application/json',
        },
        //body: JSON.stringify(data),
      })
      .then(response => response.json())
      .then(data => {
        if(data.status){
          $('#aid').html(data.data);
        }
      })
      .catch((error) => {
        console.error('Error:', error);
      });
    });
});