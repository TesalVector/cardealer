console.log('Hello World');

$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});

$(document).ready(function() {
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 4000); // Change image every 2 seconds
    }
   
});

/*Payment*/
$(function() {
    var $tabButtonItem = $('#tab-button li'),
        $tabSelect = $('#tab-select'),
        $tabContents = $('.tab-contents'),
        activeClass = 'is-active';
  
    $tabButtonItem.first().addClass(activeClass);
    $tabContents.not(':first').hide();
  
    $tabButtonItem.find('a').on('click', function(e) {
      var target = $(this).attr('href');
  
      $tabButtonItem.removeClass(activeClass);
      $(this).parent().addClass(activeClass);
      $tabSelect.val(target);
      $tabContents.hide();
      $(target).show();
      e.preventDefault();
    });
  
    $tabSelect.on('change', function() {
      var target = $(this).val(),
          targetSelectNum = $(this).prop('selectedIndex');
  
      $tabButtonItem.removeClass(activeClass);
      $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
      $tabContents.hide();
      $(target).show();
    });
  });


  $(function() {
    $('form.require-validation').bind('submit', function(e) {
      var $form         = $(e.target).closest('form'),
          inputSelector = ['input[type=email]', 'input[type=password]',
                           'input[type=text]', 'input[type=file]',
                           'textarea'].join(', '),
          $inputs       = $form.find('.required').find(inputSelector),
          $errorMessage = $form.find('div.error'),
          valid         = true;
  
      $errorMessage.addClass('hide');
      $('.has-error').removeClass('has-error');
      $inputs.each(function(i, el) {
        var $input = $(el);
        if ($input.val() === '') {
          $input.parent().addClass('has-error');
          $errorMessage.removeClass('hide');
          e.preventDefault(); // cancel on first error
        }
      });
    });
  });
  
  $(function() {
    var $form = $("#payment-form");
  
    $form.on('submit', function(e) {
      if (!$form.data('cc-on-file')) {
        e.preventDefault();
        Stripe.setPublishableKey($form.data('stripe-publishable-key'));
        Stripe.createToken({
          number: $('.card-number').val(),
          cvc: $('.card-cvc').val(),
          exp_month: $('.card-expiry-month').val(),
          exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
      }
    });
  
    function stripeResponseHandler(status, response) {
      if (response.error) {
        $('.error')
          .removeClass('hide')
          .find('.alert')
          .text(response.error.message);
      } else {
        // token contains id, last4, and card type
        var token = response['id'];
        // insert the token into the form so it gets submitted to the server
        $form.find('input[type=text]').empty();
        $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
        $form.get(0).submit();
      }
        }
    })
  /*End*/



