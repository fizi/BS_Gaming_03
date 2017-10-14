<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	$NEWS_GRID_TEMPLATE['col-md-6']['start'] = '<div class="row news-grid-default news-menu-grid">';

	$NEWS_GRID_TEMPLATE['col-md-6']['featured'] = '<div class="row featured">
													<div class="col-sm-12">
													<div class="item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
													</div>
													<div class="item col-sm-6">
		                                                <h3>{NEWSTITLE}</h3>
		                                                <p>{NEWSMETADIZ: limit=100}</p>
		                                                <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
	                                                </div>
	                                               </div>
	                                               </div>
            							          ';

	$NEWS_GRID_TEMPLATE['col-md-6']['item'] = '<div class="item col-md-6">
												{SETIMAGE: w=400&h=400&crop=1}
												{NEWSTHUMBNAIL=placeholder}
              									<h3>{NEWS_TITLE}</h3>
              									<p>{NEWS_SUMMARY}</p>
              									<p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							   </div>';

	$NEWS_GRID_TEMPLATE['col-md-6']['end'] = '</div>';


// ------------------ col-md-4 -----------------

	$NEWS_GRID_TEMPLATE['col-md-4']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-4']['item']     = '<div class="item col-md-4">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-4']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];



// ------------------ col-md-3 -----------------


	$NEWS_GRID_TEMPLATE['col-md-3']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-3']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-3']['item']     = '<div class="item col-md-3">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-3']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];




// ------------------ media-list -----------------



	$NEWS_GRID_TEMPLATE['media-list']['start'] = '<div class="row news-grid-default">';

	$NEWS_GRID_TEMPLATE['media-list']['featured'] = '<div class="featured item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
														 <h3><a href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
														 <p>{NEWS_SUMMARY: limit=60}</p>
													</div>


            							          ';


	$NEWS_GRID_TEMPLATE['media-list']['item'] = '<div class="item col-sm-6">
												{SETIMAGE: w=120&h=120&crop=1}
												<ul class="media-list">
													<li class="media">
													  <div class="media-left media-top">
													    <a href="{NEWS_URL}">
													      {NEWS_IMAGE: type=tag&class=media-object img-rounded&placeholder=1}
													    </a>
													  </div>
													  <div class="media-body">
													    <h4 class="media-heading"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h4>
													    <p>{NEWS_SUMMARY: limit=60}</p>
													  </div>
													  </li>

												</ul>
            							    </div>';


	$NEWS_GRID_TEMPLATE['media-list']['end'] = '</div>';
  
  
/***********************************************************************************************************************************/
   
//  fizi - This News Grid for Latest News Items - 5 News  
$NEWS_GRID_TEMPLATE['latest-news']['start'] = '
<div class="home-latestnews">
  <div class="home-latestnews-title">
    <h2>'.LAN_THEME_90.'</h2>
  </div>
  <div class="home-latestnews-body">
';

$NEWS_GRID_TEMPLATE['latest-news']['featured'] = '
    <div class="col-md-6">
      <div class="home-latestnews-featured-item">        
        <div class="home-latestnews-featured-image">
          {NEWS_IMAGE: carousel=1&w=1000&h=750&crop=1&interval=7000}
          <div class="home-latestnews-featured-rate">{NEWS_RATE: readonly=1&multi=1&uniqueId=latest-news&template= STATUS |RATE}</div>
        </div>
        <h3 class="home-latestnews-featured-title">{NEWS_TITLE: link=1}</h3>
        <div class="home-latestnews-featured-info">{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_COUNTER: multi=1}</div> 
        <div class="home-latestnews-featured-body">{NEWS_BODY}</div>
      </div>
    </div> 
    <div class="col-md-6">
      <div class="home-latestnews-items">
        <div class="row">
';

$NEWS_GRID_TEMPLATE['latest-news']['item'] = '
          <div class="home-latestnews-item"> 
            <div class="col-md-4">         
              {SETIMAGE: w=1000&h=750&crop=1}
              <div class="home-latestnews-item-image">
                {NEWS_IMAGE}
              </div>
            </div>
            <div class="col-md-8">
              <div class="home-latestnews-item-content">
                <h4 class="home-latestnews-item-content-title">{NEWS_TITLE: link=1}</h4>
                <div class="home-latestnews-item-content-info">{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_COUNTER: multi=1}</div>
                <div class="home-latestnews-item-rate">{NEWS_RATE: readonly=1&multi=1&uniqueId=latest-news&template= STATUS |RATE}</div>
              </div>
            </div>
          </div>
';

$NEWS_GRID_TEMPLATE['latest-news']['end'] = '
        </div>
      </div>
    </div>
  </div>
</div>';



// BOOTSTRAP TABBED NEWS
$NEWS_GRID_TEMPLATE['bootstrap-news-tabs']['start'] = '';

$NEWS_GRID_TEMPLATE['bootstrap-news-tabs']['featured'] = '  
  <div class="home-tab-featured-news-item"> 
    <div class="col-md-6">
      {SETIMAGE: w=1000&h=750&crop=1}        
      <div class="home-tab-featured-news-image">
        {NEWS_IMAGE}
        <div class="home-tab-featured-news-rate">{NEWS_RATE: readonly=1&multi=1&uniqueId=tab&template= STATUS |RATE}</div>
      </div>
    </div>
    <div class="col-md-6">
      <h3 class="home-tab-featured-news-title">{NEWS_TITLE: link=1}</h3>
      <div class="home-tab-featured-news-info">{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_COUNTER: multi=1}</div> 
      <div class="home-tab-featured-news-body">{NEWS_BODY}</div>
    </div>
  </div> 
  <div class="home-tab-news-items">
    <div class="row">
';

$NEWS_GRID_TEMPLATE['bootstrap-news-tabs']['item'] = '
      <div class="col-md-4">
        <div class="home-tab-news-item">        
          {SETIMAGE: w=1000&h=750&crop=1}
          <div class="home-tab-news-item-image">
            {NEWS_IMAGE}
            <div class="home-tab-news-item-rate">{NEWS_RATE: readonly=1&multi=1&uniqueId=tab&template= STATUS |RATE}</div>
          </div>
          <h4 class="home-tab-news-item-title">{NEWS_TITLE: link=1}</h4>
          <div class="home-tab-news-item-info">{NEWS_DATE=M dd, yyyy}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=fa-comments}&nbsp;{NEWS_COMMENT_COUNT}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{GLYPH=eye-open}&nbsp;{HITS_COUNTER: multi=1}</div>
          <div class="home-tab-news-item-body">{NEWSSUMMARY: limit=35}</div>
        </div>
      </div>
';

$NEWS_GRID_TEMPLATE['bootstrap-news-tabs']['end'] = '
    </div>
  </div>
';




