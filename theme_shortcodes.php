<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/

class theme_shortcodes extends e_shortcode { 
  function __construct(){
		
	}
  
/*----------------------------- 
  LOGIN SHORTCODE 
-----------------------------*/  
	                     
	function sc_bootstrap_usernav($parm=''){
		$placement = e107::pref('theme', 'usernav_placement', 'top');

		if($parm['placement'] != $placement){
			return '';
		}

		e107::includeLan(e_PLUGIN."login_menu/languages/".e_LANGUAGE.".php");
		
		$tp = e107::getParser();		   
		require(e_PLUGIN."login_menu/login_menu_shortcodes.php"); // don't use 'require_once'.

		$direction = vartrue($parm['dir']) == 'up' ? ' dropup' : '';
		
		$userReg = defset('USER_REGISTRATION');
				   
		if(!USERID) // Logged Out. 
		{		
			$text = '
			<ul class="nav navbar-nav navbar-right'.$direction.'">';

			if($userReg==1)
			{
				$text .= '
				<li class="registration"><a href="'.e_SIGNUP.'"><i class="fa fa-user-plus"></i> '.LAN_LOGINMENU_3.'</a></li>
				'; // Signup
			}


			$socialActive = e107::pref('core', 'social_login_active');

			if(!empty($userReg) || !empty($socialActive)) // e107 or social login is active.
			{
				$text .= '
				<li class="divider-vertical"></li>
				<li class="login dropdown">
			
				<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-user"></i> '.LAN_LOGINMENU_51.'</a>
				<div class="dropdown-menu col-sm-12" style="min-width:250px;">
				
				{SOCIAL_LOGIN: size=2x&label=1}
				'; // Sign In
			}
			else
			{
				return '';
			}
			
			
			if(!empty($userReg)) // value of 1 or 2 = login okay. 
			{

			//	global $sc_style; // never use global - will impact signup/usersettings pages. 
			//	$sc_style = array(); // remove any wrappers.

				$text .='	
				
				<form method="post" onsubmit="hashLoginPassword(this);return true" action="'.e_REQUEST_HTTP.'" accept-charset="UTF-8">
				<p>{LM_USERNAME_INPUT: idprefix=bs3-}</p>
				<p>{LM_PASSWORD_INPUT: idprefix=bs3-}</p>


				<div class="form-group"></div>
				{LM_IMAGECODE_NUMBER}
				{LM_IMAGECODE_BOX}
				
				<div class="checkbox">
				
				<label class="string optional" for="bs3-autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="bs3-autologin" value="1">
				'.LAN_LOGINMENU_6.'</label>
				</div>
				<input class="btn userlogin btn-block" type="submit" name="userlogin" id="userlogin" value="'.LAN_LOGINMENU_51.'">
				';
				
				$text .= '
				
				<a href="{LM_FPW_LINK=href}" class="btn reminder btn-block">'.LAN_LOGINMENU_4.'</a>
				<a href="{LM_RESEND_LINK=href}" class="btn resend btn-block">'.LAN_LOGINMENU_40.'</a>
				';
				
				
				/*
				$text .= '
					<label style="text-align:center;margin-top:5px">or</label>
					<input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
					<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
				';
				*/
				
				$text .= "<p></p>
				</form>
				</div>
				
				</li>
				";
			
			}

			$text .= "
			
			
			</ul>";	
			
			
			
			return $tp->parseTemplate($text, true, $login_menu_shortcodes);
		}  

		
		// Logged in. 
		//TODO Generic LANS. (not theme LANs) 	

		$userNameLabel = !empty($parm['username']) ? USERNAME : '';

		$text = '
		
		<ul class="nav navbar-nav navbar-right'.$direction.'">';
		
		if( e107::isInstalled('pm') )
		{
			$text .= '<li class="pm dropdown">{PM_NAV}</li>';
		}
		
		$text .= '
		<li class="logged-in dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">'.LAN_LOGINMENU_5.' <div>'.USERNAME.'</div></a>
		<ul class="dropdown-menu">
		<li>
			<a href="{LM_USERSETTINGS_HREF}"><span class="glyphicon glyphicon-cog"></span> '.LAN_SETTINGS.'</a>
		</li>
		<li>
			<a class="dropdown-toggle no-block" role="button" href="{LM_PROFILE_HREF}"><span class="glyphicon glyphicon-user"></span> '.LAN_LOGINMENU_13.'</a>
		</li>
		<li class="divider"></li>';
		
		if(ADMIN) 
		{
			$text .= '<li><a href="'.e_ADMIN_ABS.'"><span class="fa fa-cogs"></span> '.LAN_LOGINMENU_11.'</a></li>';	
		}
		
		$text .= '
		<li><a href="'.e_HTTP.'index.php?logout"><span class="glyphicon glyphicon-off"></span> '.LAN_LOGOUT.'</a></li>
		</ul>
		</li>
		</ul>
		
		';


		return $tp->parseTemplate($text,true,$login_menu_shortcodes);
	}	
  
  
/*----------------------------- 
    NEWS GRID SHORTCODE 
-----------------------------*/ 
  function sc_bootstrap_grid_news_latest(){
  
    $template = "
        <!-- News Grid Menu for PageTop Latest 4 News -->
        {MENU: path=news/news_grid&limit=5&category=0&source=latest&featured=1&layout=latest-news}

    ";

    $text = e107::getParser()->parseTemplate($template,true);

    echo $text;
  
  } 

  
/*----------------------------------- 
    POPULAR NEWS ON HOMEPAGE SHORTCODE 
-------------------------------------*/
  function sc_bootstrap_popular_news(){ 
  
    $sc     = e107::getScBatch('news'); // get news shortcodes.
		$tp     = e107::getParser(); // get parser.

		$limit = !empty($parm['limit']) ? intval($parm['limit']) : 6;
    
		$query = "SELECT h.hits_counter,h.hits_unique, n.*, c.* FROM `#hits` AS h
					LEFT JOIN `#news` AS n ON h.hits_type = 'news' 	AND h.hits_itemid = n.news_id
					LEFT JOIN `#news_category` AS c ON n.news_category = c.category_id
					ORDER BY h.hits_counter DESC LIMIT ".$limit;

		$data = e107::getDb()->retrieve($query,true);

		$srch = array('{HITS_COUNTER}', '{HITS_UNIQUE}');

		$template = e107::getTemplate('hits', 'popular_menu', 'homepage');

		$text = $tp->parseTemplate($template['start'], true);

		foreach($data as $row)
		{

			$repl = array(intval($row['hits_counter']), intval($row['hits_unique']));
			$tmpl = str_replace($srch,$repl, $template['item']);

			$sc->setScVar('news_item', $row); // send $row values to shortcodes.

			$text .= $tp->parseTemplate($tmpl, true, $sc); // parse news shortcodes.

		}

		$text .= $tp->parseTemplate($template['end'], true);

		e107::getRender()->tablerender(LAN_PLUGIN_HITS_POPULAR, $text);
  }
  

/*  ----------------------------------- 
    NEWS TABS FOR NEWS CATEGORIES 
-------------------------------------*/
  function sc_bootstrap_news_category_tabs(){
  	
    $news   = e107::getObject('e_news_category_tree');  // get news class.
   // $sc     = e107::getScBatch('news'); // get news shortcodes.
    $tp     = e107::getParser(); // get parser.
    
    // load active news categories. ie. the correct userclass etc.
    $data = $news->loadActive(false)->toArray();  // false to utilize the built-in cache.

    $text = '';
	
	  $tab = array();

    foreach($data as $row){
       // $sc->setScVar('news_item', $row); // send $row values to shortcodes.	  
	    $parm = array('category'=>$row['category_id'], 'featured' => 1,'limit' => 4,'layout' => 'bootstrap-news-tabs');
		  $tab[] = array('caption'=>$row['category_name'], 'text'=>e107::getObject('news')->render_newsgrid($parm));      
    }
    return e107::getForm()->tabs($tab);
  }

} 
 
?>