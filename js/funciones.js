$(".button-collapse").sideNav();
// Pause slider
$('.slider').slider('pause');
// Start slider
$('.slider').slider('start');
// Next slide
$('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');

    $(document).ready(function(){
    $('.slider').slider({full_width: true});
    });

    $(document).ready(function(){
    $('.barra-nav .row').pushpin({ top: $('.barra-nav').offset().top });
  });

    $(document).ready(function() {
      $('.modal-trigger').leanModal();
    });

function initialize() {
          var latlng = new google.maps.LatLng(2.4445416,-76.6058154);
          var settings = {
              zoom: 16,
              center: latlng,
              mapTypeControl: true,
              mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
              navigationControl: true,
              navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
              mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
      var companyPos = new google.maps.LatLng(2.445446, -76.605862);
      var companyMarker = new google.maps.Marker({
          position: companyPos,
          map: map,
          title:"CideaCauca - CRC"    
      }

      );}