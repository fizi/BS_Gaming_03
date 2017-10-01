
// Scroll To top ***************************************************************  
$(document).ready(function() {  
  $('.movetotop').click(function() {
    $('html, body').animate({scrollTop: 0}, 700);
    return false;
  });  
});


// SITENAME colored ************************************************************
$(document).ready(function() {
  $(".sitename a").lettering("words");
  $(".sitetag").lettering("words");
});


// MAIN NAVIGATION *************************************************************
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


// Add effect FADE to news tabs ************************************************
$(document).ready(function() {
  $("#news-tabs .tab-content .tab-pane").addClass("fade");
  $("#news-tabs .tab-content .tab-pane:first-child").addClass("in");
}); 


// Add Isotope effect **********************************************************
$(window).load(function(){ 	
  // init Isotope for News
  var $grid = $('.default-news-isotope-grid').isotope({ 
    itemSelector: '.default-news-isotope-grid-item',
    percentPosition: true, 
    masonry: {
      // use element for option
      columnWidth: '.default-news-isotope-grid-sizer'
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


// matchHeigh ****************************************************************** 
// apply your matchHeight on DOM ready (they will be automatically re-applied on load or resize)

// Homesite Popular News - apply matchHeight to each item container's items
$(document).ready(function() {
  $(".home-popularnews-body > .row").each(function() {
    $(this).children("div[class*='col-']").matchHeight();
  }); 
});

// Forum Stats make responsive *************************************************
$(document).ready(function() {
  $("#forum-stats .tab-content .table").wrap("<div class='table-responsive'></div>");
  $("#forum-stats .panel .table").wrap("<div class='table-responsive'></div>");
}); 


// Custom page image not responsive - add class img-responsive *****************
$(document).ready(function() {
  $(".cpage-body .default-cpage-body img").addClass("img-responsive");
});    