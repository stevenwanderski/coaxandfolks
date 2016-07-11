$(function(){

  $('.contact-form').on('submit', function(e){
    e.preventDefault();
    var $this = $(this);

    $this.request('onSend', {
      success: function(data){
        if(data.success){
          window.location = '/contact?success=true';
        }else{
          alert('Fill out all the fields correctly please and thank you :)');
        }
      },

      error: function(data){
        alert('Aw snap, the message couldn\'t be sent. Nerds have been alerted.');
      },

      beforeSend: function(){
        $this.find('button').prop('disabled', true).html('Sending...');
      },

      complete: function(){
        $this.find('button').prop('disabled', false).html('Submit');
      }
    });
  });

});