
/* SITENAME colored */
$(document).ready(function() {
  $(".sitename a").lettering("words");
  $(".sitetag").lettering("words");
});


/* MAIN NAVIGATION */
$(document).ready(function() {
  $('.navbar a.dropdown-toggle').on('click', function(e) {
    var elmnt = $(this).parent().parent();
    if (!elmnt.hasClass('nav')) {
      var li = $(this).parent();
      var heightParent = parseInt(elmnt.css('height').replace('px', '')) / 2;
      var widthParent = parseInt(elmnt.css('width').replace('px', '')) - 10;
            
      if(!li.hasClass('open')) li.addClass('open')
      else li.removeClass('open');
      $(this).next().css('top', heightParent + 'px');
      $(this).next().css('left', widthParent + 'px');
            
      return false;
    }
  });
});


// Add active to news tabs *************************************************
$(document).ready(function() {
  $("#news-tabs.news-tabs ul li:first-child").addClass("active");
}); 


// For Isotope *****************************************************************
$(document).ready(function() {
  $(".isotope-grid > .isotope-grid-item:eq(0)").addClass("isotope-grid-item2");
}); 


$(window).load(function(){ 	
  // init Isotope for News
  var $grid = $('.isotope-grid').isotope({ 
    itemSelector: '.isotope-grid-item',
    percentPosition: true, 
    masonry: {
      // use element for option
      columnWidth: '.isotope-grid-sizer'
    },
    horizontalOrder: true,
    transitionDuration: '0.2s'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  }); 
});
  
  
$(window).load(function(){   
  // init Isotope for Gallery 
  var $grid = $('.gallery-isotope-grid').isotope({ 
    itemSelector: '.gallery-isotope-grid-item',
    percentPosition: true,
    masonry: {
      // use element for option
      columnWidth: '.gallery-isotope-grid-sizer'
    }, 
    horizontalOrder: true,
    transitionDuration: '0.2s'
  });
  // layout Isotope after each image loads
  $grid.imagesLoaded().progress( function() {
    $grid.isotope('layout');
  });    
});

// Hide and Show News Items ****************************************************
$(document).ready(function() {
  $('.isotope-grid > .isotope-grid-item').hover(function() {
    $(this).siblings('div').stop().fadeTo(250, 0.4);
  }, function() {
    $(this).siblings('div').stop().fadeTo(250, 1.0);
  });
});


// Forum Stats make responsive *************************************************
$(document).ready(function() {
  $("#forum-stats .tab-content .table").wrap("<div class='table-responsive'></div>");
  $("#forum-stats .panel .table").wrap("<div class='table-responsive'></div>");
}); 


// Custom page image not responsive - add class img-responsive *************************************************
$(document).ready(function() {
  $(".cpage-body .default-cpage-body img").addClass("img-responsive");
});    