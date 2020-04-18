$(document).ready(function(){

  $('#newsletter').submit(function(event) {

    event.preventDefault();
    var $form = $(this);

    $.ajax({
      url: $form.attr('action'),
      type: $form.attr('method'),
      dataType: 'json',
      data: $form.serialize(),
      
      success: function(result, textStatus, xhr) {
          
          if(result.code == 200) $('#newsletter-response').css('color', 'blue');
          $('#newsletter-response').text(result.message);

      }
    });

  });

})
