$(document).ready(function() {

  // script to change the landing page background images using fadeOut effect
  $(".main-header-section").backgroundCycle({
      imageUrls: [
        'assets/img/carousel/slide1.jpg',
        'assets/img/carousel/slide2.jpg',
        'assets/img/carousel/slide3.jpg'
      ],
      fadeSpeed: 1000,
      duration: 4000,
      backgroundSize: SCALING_MODE_COVER
  });

  // load bootstrap dateandtime pickcer
  $('#selectDate').click(function(){
    $('#selectDate').datetimepicker({
      format:'d M Y H:i',
    });
  });

  // loads location json into state and city
  $.ajax({
    url: 'assets/js/locations.json',
    type: 'GET',
    dataType: 'json'
  })
  .done(function(error) {
    mydata = error;
    for (var state in mydata.States) {
        $('.state').append('<option value="' + String(state) + '">' + String(state) + ' </option>');
    }
  })
  $('.state').change(function(event) {
      var selectedState = $(this).val();
      $('.city').empty();
      //Get cities for selectedState
      var cities = mydata.States[String(selectedState)];
      $('.city').append('<option value="" selected disabled>Please select</option>');

      for (var i = 0; i < cities.length; i++) {
          $('.city').append('<option value="' + String(cities[i]) + '">' + String(cities[i]) + ' </option>');
      }
  });

  // display login modal on clicking login button
  $('#login').click(function (){
    $('#modalSelect').hide();
    $('#artisanLogin').show();
  });

  // display registration modal on clicking registration button
  $('#register').click(function (){
    $('#modalSelect').hide();
    $('#artisanReg').show();
  });

  // display select option modal
  $('#back1').click(function (){
    $('#modalSelect').show();
    $('#artisanReg').hide();
    $('#artisanLogin').hide();
    $('#artisanLogin .form-control').val('');
    $('.error').text('');
  });

  // display select option modal
  $('#back2').click(function (){
    $('#modalSelect').show();
    $('#artisanReg').hide();
    $('#artisanLogin').hide();
    $('#artisanReg .form-control').val('');
    $('.error').text('');
  });

  // gets a confirmation of account closure before actually deleting the account
  $('#apply .delBtn').click(function(){
    $('#apply').hide();
    $('#delAcct').show();
  });

  // terminates the closure of account process on button click
  $('.cancel').click(function(){
    $('#delAcct').hide();
    $('.email').val('');
    $('#apply').show();
  });

  // hides login form and displays forgot password form
  $('#check').click(function (){
    $('#artisanLogin').css("display","none");
    $('#fpassForm').css("display","block");
  });

  // shows the login form and hides the forgot password form
  $('#back3').click(function (){
    $('#fpassForm').css("display","none");
    $('#artisanLogin').css("display","block");
    $('#fpassForm .form-control').val('');
    $('#message').text('');
    $('.error').text('');
  });

});
