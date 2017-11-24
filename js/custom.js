
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


// Add effect FADE to news tabs ************************************************
$(document).ready(function() {
  $("#news-tabs .tab-content .tab-pane").addClass("fade");
  $("#news-tabs .tab-content .tab-pane:first-child").addClass("in");
}); 


// Add Isotope effect **********************************************************
$(document).ready(function() {
  $(".default-news-isotope-grid > .default-news-isotope-grid-item:eq(0)").addClass("default-news-isotope-grid-item2");
}); 


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
  $(".home-popularnews-body > .row, .home-chapter-box-body > .row").each(function() {
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
  $(".cpage-body .default-cpage-content img").addClass("img-responsive");
  $(".cpage-body .review-container img").addClass("img-responsive");  
}); 

 
$(document).ready(function() {
  $('.review-container .rating-item').rateCircle({
    size: 100,
    lineWidth: 10,
    fontSize: 30,
    referenceValue: 10
  });
});

// Custom select style for FORUM ***********************************************  
$(document).ready(function() {
  $("select").addClass("tbox custom-select");
});


// Header video muted/unmuted play/pause **********************************************  
window.onload = function() {
  // Video
  var video = document.getElementById("video-background");
  video.volume = 0.5;
  // Button
  var muteButton = document.getElementById("mute"); 
  // Event listener for the mute button
  muteButton.addEventListener("click", function() {
    if (video.muted == false) {
      // Mute the video
      video.muted = true;
      // Update the button text
      muteButton.innerHTML = "<i class='fa fa-volume-up'></i>";
    } else {
      // Unmute the video
      video.muted = false;
      // Update the button text
      muteButton.innerHTML = "<i class='fa fa-volume-off'></i>";
    }
  }); 
  
  // Button    
  var playButton = document.getElementById("play-pause"); 
  // Event listener for the play/pause button
  playButton.addEventListener("click", function() {
    if(video.paused === true) {
      // Play the video
      video.play();
      // Update the button text to 'Pause'
      playButton.innerHTML = "<i class='fa fa-pause'></i>";
    }else{
      // Pause the video
      video.pause();
      // Update the button text to 'Play'
      playButton.innerHTML = "<i class='fa fa-play'></i>";
    }
  }); 
}; 
 
// Header youtube video play/pause ********************************************** 
           
// https://developers.google.com/youtube/iframe_api_reference
// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
// global variable for the player
var player;
// this function gets called when API is ready to use
function onYouTubeIframeAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('youtube-video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange      
    }
  });
};
// The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
  player.setVolume(50); 
  player.mute();  
}


function onPlayerStateChange(event) { 
  // Button
  var playButton = document.getElementById("play-pause");
  // Event listener for the play/pause button
  playButton.addEventListener("click", function() {
    if(event.data == YT.PlayerState.PAUSED) {
      // Play the video
      player.playVideo();
      playButton.innerHTML = "<i class='fa fa-pause'></i>";
    }else{ 
      // Pause the video
      player.pauseVideo();
      playButton.innerHTML = "<i class='fa fa-play'></i>";
    }
  }); 
  
  var muteButton = document.getElementById("mute");
  muteButton.addEventListener("click", function() {
    if(player.isMuted()) {
      // unMute the audio
      player.unMute();
      muteButton.innerHTML = "<i class='fa fa-volume-off'></i>";
    }else{ 
      // mute the audio
      player.mute();
      muteButton.innerHTML = "<i class='fa fa-volume-up'></i>";
    }
  });   
}; 
    
 
// Curving text with CSS3 & jQuery
$(document).ready(function() {
  $('#videoMessage h1').arctext({
    radius: 400
  }); 
}); 


// FeatureBox wrap carousel indicators *************************************************
$(document).ready(function() {
  $(".featurebox > .carousel-indicators").wrap("<div class='wrap-carousel-indicators'></div>");
}); 

// FeatureBox carousel indicators - replace numbered list*************************************************
$(document).ready(function() {
  $(".wrap-carousel-indicators ol.carousel-indicators").each(function() {
    $("li", this).prepend(function(i) {
        return $("<span />", {text: i+1 });
     });
  });
  
  
}); 
 