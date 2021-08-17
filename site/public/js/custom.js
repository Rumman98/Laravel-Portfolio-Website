// Owl Carousel Start..................



$(document).ready(function() {
    var one = $("#one");
    var two = $("#two");

    $('#customNextBtn').click(function() {
        one.trigger('next.owl.carousel');
    })
    $('#customPrevBtn').click(function() {
        one.trigger('prev.owl.carousel');
    })
    one.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });

    two.owlCarousel({
        autoplay:true,
        loop:true,
        dot:true,
        autoplayHoverPause:true,
        autoplaySpeed:100,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

});








// Owl Carousel End..................

//ContactSend

function SendContact(contactName, contactMobile,contactEmail,contactMsg){
    if(contactName.length==0){
        $('#contactSendBtnID').html('Write Your Name');
        setTimeout(function(){
            $('#contactSendBtnID').html('Send Now');
        },2000)
    }
    
    else if(contactMobile.length==0){
        $('#contactSendBtnID').html('Write Your Mobile Number');
        setTimeout(function(){
            $('#contactSendBtnID').html('Send Now');
        },2000)
    
    }
    
    else if(contactEmail.length==0){
        $('#contactSendBtnID').html('Write Your Email');
        setTimeout(function(){
            $('#contactSendBtnID').html('Send Now');
        },2000)
    
    }

    else if(contactMsg.length==0){
        $('#contactSendBtnID').html('Write Your Message');
        setTimeout(function(){
            $('#contactSendBtnID').html('Send Now');
        },2000)
    
    }
    else{
        axios.post('/contactSend', {
            contact_name:contactName,
            contact_mobile:contactMobile,
            contact_email:contactEmail,
            contact_message:contactMsg,
         

        })
        .then(function(response) {
            if (response.status == 200){
                if (response.data == 1) {
                    $('#contactSendBtnID').html('Massage Send Successfully');
                    setTimeout(function(){
                        $('#contactSendBtnID').html('Send Now');
                    },2000)
            
                } else {
                    $('#contactSendBtnID').html('Message Sending Failed');
                    setTimeout(function(){
                        $('#contactSendBtnID').html('Send Now');
                    },2000)
          
                }
            }
    
            else{
        
                $('#contactSendBtnID').html('Message Sending Failed');
                setTimeout(function(){
                    $('#contactSendBtnID').html('Send Now');
                },2000)
              
            }
          
        })
        .catch(function(error) {
            $('#contactSendBtnID').html('Message Sending Failed');
            setTimeout(function(){
                $('#contactSendBtnID').html('Send Now');
            },2000)
    });
    }
    
}

$('#contactSendBtnID').click(function(){

    var contactName=  $('#contactNameID').val();
    var contactMobile=  $('#contactMobileID').val();
    var contactEmail=  $('#contactEmailID').val();
    var contactMsg=  $('#contactMsgID').val();
    SendContact(contactName, contactMobile,contactEmail,contactMsg);
  });


  $(document).ready(function () {

    'use strict';

    var slide  = $('.slide'),
        slideAelements = $('.slide-a-child'),
        slideBelements = $('.slide-b-child'),
        slideCelements = $('.slide-c-child'),
        slideDelements = $('.slide-d-child'),
        replay = $('button.replay');



    slide.each(function (i) {
        if (i < 3) {
            setTimeout(function () {
                slide.eq(i).fadeOut();
            }, 5000 * (i + 1));
        }
    });


    function animateSlideA() {
      slideAelements.each(function (i) {
          setTimeout(function () {
              slideAelements.eq(i).addClass('is-visible');
          }, 300 * (i + 1));
      });
    }

    function animateSlideB() {
      slideBelements.each(function (i) {
          setTimeout(function () {
              slideBelements.eq(i).addClass('is-visible');
          }, 300 * (i + 1));
      });
   }

     function animateSlideC() {
      slideCelements.each(function (i) {
          setTimeout(function () {
              slideCelements.eq(i).addClass('is-visible');
          }, 150 * (i + 1));
      });
    }

    function animateSlideD() {
      slideDelements.each(function (i) {
          setTimeout(function () {
              slideDelements.eq(i).addClass('is-visible');
          }, 300 * (i + 1));
      });
    }

    animateSlideA();

    setTimeout(function () {
       animateSlideB();
    }, 5000);

    setTimeout(function () {
       animateSlideC();
    }, 10000);

    setTimeout(function () {
       animateSlideD();
    }, 15000);


   replay.on('click', function () {
     location.reload(true);
   });

});