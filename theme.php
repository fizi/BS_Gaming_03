<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Game Plus Theme for e107 v2.x.
 */

if(!defined('e107_INIT')) { exit; }

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected)

define("BOOTSTRAP", 3);
define("FONTAWESOME", 4);
define('VIEWPORT', "width=device-width, initial-scale=1.0");

// e107::library('load', 'bootstrap'); // see theme.xml 
// e107::library('load', 'fontawesome'); // see theme.xml 

// CDN provider for Bootswatch.
$cndPref = e107::pref('theme', 'cdn', 'cdnjs');

switch($cndPref) {

	case "jsdelivr":
	//	e107::css('url', 'https://cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url',    'https://cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdn.jsdelivr.net/bootstrap/3.3.6/js/bootstrap.min.js", 'jquery');
	break;			
	
	case "cdnjs":
	default:
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css');
	//	e107::css('url', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	//	e107::js("footer", "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js", 'jquery', 2);

}

/* @example prefetch  */
//e107::link(array('rel'=>'prefetch', 'href'=>THEME.'images/browsers.png'));

e107::css("theme", 			"css/animate.css"); 
e107::css("theme", 			"css/rate.css"); 
e107::css("theme", 			"css/mediaelementplayer.css"); 



e107::js("theme", 			"js/isotope.pkgd.js");
e107::js("theme", 			"js/imagesloaded.pkgd.js");
e107::js("theme", 			"js/responsive-tabs_mod_by_fizi.js");
e107::js("theme", 			"js/jquery.lettering.js");
e107::js("theme", 			"js/jquery.matchHeight.js"); 
e107::js("theme", 			"js/jquery.rate.js");
e107::js("theme", 			"js/jquery.arctext.js");  
e107::js("theme", 			"js/custom.js");
                 

e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3.

// Theme disclaimer is displayed in your site disclaimer appended to the site disclaimer text.
// Uncomment the line below to set a theme disclaimer (remove the // ).
define('THEME_DISCLAIMER', "<br />".LAN_THEME_6.""); 

// applied before every layout.
// $LAYOUT['_header_'] = "";

// applied after every layout. 
// $LAYOUT['_footer_'] = "";

$LAYOUT = array();

// Default Header layout for ALL layouts
$LAYOUT['_header_'] = "
<div id='header'>
  <div class='container'>
    <div class='row header-top'>
      <div class='col-md-12'>
        <div class='social-connected'>
          {XURL_ICONS: size=2x}
        </div>
      </div>
    </div>
    <div class='row header-middle'>
      <div class='col-md-6'>
        <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}'>{SITENAME}</a></div>
        <div class='sitetag'>{SITETAG}</div>
      </div>
      <div class='col-md-6'>
        {BOOTSTRAP_USERNAV: placement=top}
      </div>
    </div>
    <div class='row header-bottom'>   
      <div class='col-md-12'>
        <div id='top-mainmenu'>    
          <div class='navbar navbar-default' role='navigation'>
            <div class='navbar-header'>
              <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbar'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
              </button>
            </div>
            <div id='navbar' class='navbar-collapse collapse'>
              {NAVIGATION: type=main&layout=fizi_main} 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='row divider'>
      <div class='col-md-12'>
        <div class='divider-inner'> </div>
      </div>
    </div>
	{ALERTS} 
  </div>
</div>
";


// Default Footer layout for ALL layouts
$LAYOUT['_footer_'] = "
<div id='footer'>
  <div class='container'>
    <div class='row'>
      <div class='footer-top'>
        <div class='footer-menus-inner'>
          <div class='col-md-4'>
            {SETSTYLE=bottomcol}
            {MENU=5}
          </div>
          <div class='col-md-4'>
            {SETSTYLE=bottomcol}
            {MENU=6}
          </div>
          <div class='col-md-4'>
            {SETSTYLE=bottomcol}
            {MENU=7}
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='footer-bottom'>
        <div class='col-md-6'>
          <div class='site-info'>        
            {SITEDISCLAIMER}
            {THEME_DISCLAIMER}
          </div>
        </div>
        <div class='col-md-6'>
          <div class='footer-social-connected'>
            {XURL_ICONS}
          </div>
        </div>
      </div>
      <div class='button-up'>
        <div class='button-up-inner'>  
          <a href='#' class='movetotop'><span class='glyphicon glyphicon-chevron-up'></span></a>
        </div>
      </div>
    </div>
  </div>
</div>
";


$themePref = e107::pref('theme');

if($themePref['left_or_right_menuarea_on_frontpage'] === 'left'){

  $sidebar = "
   <div class='container'>
     <div class='row'>
       <div class='page_content'>
         <div class='col-md-12'> 
           {SETIMAGE: w=1000&h=750&crop=1}
           {VIDEOBG_ON_OFF}
         </div>
         <div class='col-md-3'>
           <div class='sidebar'>
             <div class='search'>
               {SEARCH}
             </div>
             {SETSTYLE=sidebar}
             {MENU=1}
             {MENU=2}
           </div>
         </div>
         <div class='col-md-9'>
           <div class='main_content'>     
             {BOOTSTRAP_GRID_NEWS_LATEST}
             {SETSTYLE=home-popularnews}
             {BOOTSTRAP_POPULAR_NEWS}
             <div id='news-tabs' class='news-tabs'>
               {BOOTSTRAP_NEWS_CATEGORY_TABS} 
             </div>
             <div id='book_chapters' class='book_chapters'>
               
             </div> 
             {SETSTYLE=maincontent}          
{---}
             <div class='row'>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=3}
               </div>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=4}
               </div>
             </div>
             <div class='row'>
               <div class='col-md-12'>
                 {SETSTYLE=maincontent}
                 {MENU=8}
               </div>
             </div>     
           </div>
         </div>
       </div>
     </div>
   </div>     
   ";
}else{
   
   $sidebar = "
   <div class='container'>
     <div class='row'>
       <div class='page_content'>
         <div class='col-md-12'> 
           {SETIMAGE: w=1000&h=750&crop=1}
           {VIDEOBG_ON_OFF}
         </div>
         <div class='col-md-9'>
           <div class='main_content'>     
             {BOOTSTRAP_GRID_NEWS_LATEST}
             {SETSTYLE=home-popularnews}
             {BOOTSTRAP_POPULAR_NEWS}
             <div id='news-tabs' class='news-tabs'>
               {BOOTSTRAP_NEWS_CATEGORY_TABS} 
             </div>
             <div id='book_chapters' class='book_chapters'>
               
             </div> 
             {SETSTYLE=maincontent}          
{---}
             <div class='row'>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=3}
               </div>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=4}
               </div>
             </div>
             <div class='row'>
               <div class='col-md-12'>
                 {SETSTYLE=maincontent}
                 {MENU=8}
               </div>
             </div>     
           </div>
         </div>
         <div class='col-md-3'>
           <div class='sidebar'>
             <div class='search'>
               {SEARCH}
             </div>
             {SETSTYLE=sidebar}
             {MENU=1}
             {MENU=2}
           </div>
         </div>
       </div>
     </div>
   </div>    
   ";
}

// Game 03 theme Homepage layout 
$LAYOUT['game_03_home'] = $sidebar;
  

if($themePref['left_or_right_menuarea'] === 'left'){
   
   $sidebar = "
   <div class='container'>
     <div class='row'>
       <div class='page_content'>
         <div class='col-md-3'>
           <div class='sidebar'>
             <div class='search'>
               {SEARCH}
             </div>
             {SETSTYLE=sidebar}
             {MENU=1}
             {MENU=2}
           </div>
         </div>
         <div class='col-md-9'>
           <div class='main_content'>     
             {SETSTYLE=maincontent} 
{---}
             <div class='row'>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=3}
               </div>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=4}
               </div>
             </div> 
             <div class='row'>
               <div class='col-md-12'>
                 {SETSTYLE=maincontent}
                 {MENU=8}
               </div>
             </div>     
           </div>
         </div>
       </div>
     </div>
   </div>   
   "; 
      
}else{
   
   $sidebar = "
   <div class='container'>
     <div class='row'>
       <div class='page_content'>
         <div class='col-md-9'>
           <div class='main_content'>     
             {SETSTYLE=maincontent} 
{---}
             <div class='row'>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=3}
               </div>
               <div class='col-md-6'>
                 {SETSTYLE=maincontent}
                 {MENU=4}
               </div>
             </div> 
             <div class='row'>
               <div class='col-md-12'>
                 {SETSTYLE=maincontent}
                 {MENU=8}
               </div>
             </div>     
           </div>
         </div>
         <div class='col-md-3'>
           <div class='sidebar'>
             <div class='search'>
               {SEARCH}
             </div>
             {SETSTYLE=sidebar}
             {MENU=1}
             {MENU=2}
           </div>
         </div>
       </div>
     </div>
   </div>
   ";
}


// Game 03 theme SideBar layout 
$LAYOUT['game_03_with_sidebar'] = $sidebar; 


// Game 03 theme Fullpage layout 
$LAYOUT['game_03_full_page'] = "
<div class='container'>
  <div class='row'>
    <div class='page_content'>
      <div class='col-md-12'>
        {SETSTYLE=maincontent}
{---}
      </div>
    </div>
  </div>
</div>  
"; 


function rand_tag(){ 
  if(!file_exists(e_BASE."files/taglines.txt")){ 
    return null; 
  } 
  $tags = file(e_BASE."files/taglines.txt"); 
  return stripslashes(htmlspecialchars($tags[rand(0, count($tags))])); 
}


//        [newsstyle]
/* NEWSSTYLE IS UNUSED FOR NOW */
/* NEWSSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */

      

//  [list of news category]
/* NEWSLISTSTYLE IS UNUSED FOR NOW */
/* NEWSLISTSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */



// define('ICONPRINTPDF', 'pdf.png');
// define('ICONMAIL', 'email.png');
// define('ICONPRINT', 'printer.png');
// define('ICONSTYLE', 'float: left; border:0');
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', LAN_THEME_2);
define('PRE_EXTENDEDSTRING', '');
define('EXTENDEDSTRING', LAN_THEME_3);
define('POST_EXTENDEDSTRING', '');
define('TRACKBACKSTRING', LAN_THEME_7);
define('TRACKBACKBEFORESTRING', '&nbsp;|&nbsp;');


// linkstyle
/* LINKSTYLE IS UNUSED FOR NOW */
/* LINKSTYLE IS IN THEME FOLDER/TEMPLATES/navigation_template.php */


/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data. 
 */ 


 function tablestyle($caption, $text, $id='', $info=array()){

//	global $style; // no longer needed.

  $style = $info['setStyle'];
  
  echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	
	$type = $style;

	//@todo a switch will be faster than all these elseif statements. 
	
	switch($style){
  
    case "wmessage":
      echo "<h1>{$caption}</h1>
            <h2>{$text}</h2>";
    break;
    
    case "slider":
      echo "<div class='slider-box'>
              <div class='slider-box-body'>{$text}</div>
            </div>";
    break;
    
    case "home-popularnews":
      echo "<div class='home-popularnews'>                             
              <div class='home-popularnews-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='home-popularnews-body'>{$text}</div>
            </div>";
    break;
    
    case "maincontent":
      echo "<div class='maincontent-box'>                             
              <div class='maincontent-box-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='maincontent-box-body'>{$text}</div>
            </div>";
    break;
    
    case "sidebar":
      echo "<div class='sidebar-box'>
              <div class='sidebar-box-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='sidebar-box-body'>{$text}</div>                                                     
            </div>";
    break;
    
    case "bottomcol":
      echo "<div class='bottommenu-box'>                             
              <div class='bottommenu-box-title'>             		                                                      
                <h2>{$caption}</h2>
              </div>
              <div class='bottommenu-box-body'>{$text}</div>
            </div>";
    break;
    
    default: 
      echo "<div class='othermenu-box'>
		          <div class='othermenu-box-title'>
                <h2>{$caption}</h2>
              </div>	                                 
              <div class='othermenu-box-body'>{$text}</div>                       
            </div>";
	}
}
    

// chatbox post style
// $CHATBOXSTYLE in THEME FOLDER/templates/chatbox_menu/chat_template.php    


// Image Version Example
// $SEARCH_SHORTCODE in THEME FOLDER/search_template.php

?>