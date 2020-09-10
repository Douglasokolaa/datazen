$(function () {
  AOS.init();

  //  Email Script

  var form_id = 'jquery_form';
  var sendButton = $('#' + form_id + " [name='send']");

  function send() {
    var message = $('#' + form_id + " [name='emailDetails']").val();
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (re.test(String(message).toLowerCase())) {
      $('.loaderspinner').css('display', 'inline'); // Show spinner
      document.getElementById('disableBtn').disabled = true; // Disable btn
      Email.send({
        SecureToken: '22cd8047-9118-49ec-b896-da6521307f93',
        To: 'info@datazen.online',
        From: 'Datazen Website Subscription<info@datazen.online>',
        Subject: 'Datazen Newsletter Subscription Request',
        Body: `<b>Hello Sir/Ma</b>
                    </p>
                    <p> A newsletter subscription has been made by ${message} from the website - Datazen.online </p> 
                    <p> Warm Regards, <br />
                       Website Administrator
                    </p>`,
      }).then((message) => {
        if (message === 'OK') {
          $('.email-confirm-msg').css('display', 'flex');
          $('#' + form_id + " [name='emailDetails']").val('');
          setTimeout(() => {
            $('.email-confirm-msg').css('display', 'none');
          }, 3000);
        } else {
          console.log(message, 'message');
          $('.email-err-msg').css('display', 'flex');
          setTimeout(() => {
            $('.email-err-msg').css('display', 'none');
          }, 3000);
        }
        $('.loaderspinner').css('display', 'none'); // Hid spinner
        document.getElementById('disableBtn').disabled = false; // Enable Btn
      });
      return false;
    }
  }

  sendButton.on('click', send);

  var $form = $('#' + form_id);
  $form.submit(function (event) {
    event.preventDefault();
  });
});
