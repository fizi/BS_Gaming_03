<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */



$POPULAR_MENU_TEMPLATE['default']['start'] 	= "<ul class='media-list unstyled list-unstyled popular-menu'>{SETIMAGE: w=100&h=100&crop=1}"; // set the {NEWSIMAGE} dimensions.
$POPULAR_MENU_TEMPLATE['default']['item'] 	= '<li class="media">
													  <div class="media-left media-top">
															<a href="{NEWS_URL}">
													      {NEWS_IMAGE: type=tag&class=media-object img-rounded&placeholder=1}
															</a>
													  </div>
													  <div class="media-body">
													    <h4 class="media-heading">{NEWS_TITLE}</a></h4>
													    <p>{NEWS_SUMMARY: limit=60}</p>
													    <small>{GLYPH=fa-stats} {HITS_COUNTER}</small>
													  </div>
													  </li>';
										
$POPULAR_MENU_TEMPLATE['default']['end'] 	= "</ul>";





/********* Modified by FIZI *****************************************************************************************************************************************************/
$POPULAR_MENU_TEMPLATE['homepage']['start'] = "
<div class='row'>
";
$POPULAR_MENU_TEMPLATE['homepage']['item'] = "
  <div class='col-md-4 col-sm-6 col-xs-12'>
    <div class='home-popular-item'>
      <div class='home-popular-image'>
        {SETIMAGE: w=1000&h=750&crop=1}
			  <a href='{NEWS_URL}'>
          {NEWS_IMAGE: type=tag&class=news_image news-image img-responsive img-fluid img-rounded rounded&placeholder=1}
        </a>
        <div class='home-popular-item-rate'>{NEWS_RATE: readonly=1&multi=1&uniqueId=popular&template= STATUS |RATE}</div>
		  </div>
		  <h4 class='home-popular-title'>{NEWS_TITLE: link=1}</a></h4>
		  <div class='home-popular-body'>{NEWS_SUMMARY: limit=60}</div>
		  <div class='home-popular-info'>{GLYPH=fa-stats} {HITS_COUNTER}</div>
    </div>
	</div>
";
										
$POPULAR_MENU_TEMPLATE['homepage']['end'] = "
</div>";