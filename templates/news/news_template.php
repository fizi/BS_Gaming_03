<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '
<div class="news-list-item">
  <div class="row">
    <div class="col-md-6">           
      <div class="news-list-item-mainimage">
        {SETIMAGE: w=1000&h=750&crop=1}
        {NEWSIMAGE: item=1}
      </div>
    </div>    
    <div class="col-md-6">
      <h3 class="news-list-item-title">{NEWS_TITLE: link=1}</h3>
      <div class="news-list-item-meta">{NEWS_DATE}<br />'.LAN_THEME_9.'&nbsp;{NEWSCATEGORY}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;'.LAN_THEME_8.'&nbsp;{NEWS_AUTHOR}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{NEWS_COMMENT_LABEL}&nbsp;{NEWS_COMMENT_COUNT}</div>  
      <div class="news-list-item-content">
        <div class="lead">{NEWS_SUMMARY}</div>
        <div class="news-list-item-body">{NEWS_BODY}</div>
        <div class="news-list-item-extended text-right"><a class="button btn btn-mini btn-xs" href="{NEWSURL}">'.LAN_READ_MORE.'&nbsp;<i class="fa fa-long-arrow-right"></i></a></div>
      </div>
    </div>
  </div>
</div>
';






//$NEWS_MENU_TEMPLATE['list']['separator']   = '<br />';



// XXX As displayed by news.php (no query) or news.php?list.1.1 (ie. regular view of a particular category)
//XXX TODO GEt this looking good in the default Bootstrap theme. 
/*
$NEWS_TEMPLATE['default']['item'] = '
	{SETIMAGE: w=400}
	<div class="view-item">
		<h2>{NEWSTITLE}</h2>
		<small class="muted">
		<span class="date">{NEWSDATE=short} by <span class="author">{NEWSAUTHOR}</span></span>
		</small>

		<div class="body">
			{NEWSIMAGE}
			{NEWSBODY}
			{EXTENDED}
		</div>
		<div class="options">
			<span class="category">{NEWSCATEGORY}</span> {NEWSTAGS} {NEWSCOMMENTS} {EMAILICON} {PRINTICON} {PDFICON} {ADMINOPTIONS}
		</div>
	</div>
';
*/


/* FOR NEWS ITEM ON NEWS.PHP ***********************************************************************/


// $NEWS_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';


$NEWS_TEMPLATE['default']['start']	= '
<!-- Default News Template -->
<div class="default-news-isotope-grid">
  <div class="default-news-isotope-grid-sizer col-lg-4 col-md-4 col-sm-6 col-xs-12"></div>
';
$NEWS_TEMPLATE['default']['item'] = '
<div class="default-news-isotope-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
  <div class="default-item news-category-{NEWS_CATEGORY_ID}">
    <div class="default-item-title">
      <h2>{NEWS_TITLE: link=1}</h2>
    </div>
    <div class="default-item-content">
      <div class="default-item-mainimage">
        {NEWS_IMAGE: carousel=1&w=1000&h=750&crop=1&interval=7000}
        <div class="default-item-category">{NEWSCATEGORY}</div>
        <div class="default-item-rate">{NEWS_RATE: readonly=1&multi=1&uniqueId=default&template= STATUS |RATE}</div>
        <div class="default-item-date">
          <div class="month">{NEWSDATE=M}</div>
          <div class="day">{NEWSDATE=dd}</div>
        </div>
      </div>
      <div class="default-item-info row">
        <div class="col-sm-6 default-item-author">'.LAN_THEME_8.' {NEWS_AUTHOR}</div>  
        <div class="col-sm-6 default-item-comments">{NEWS_COMMENT_LABEL}&nbsp;{NEWS_COMMENT_COUNT}<br />'.LAN_THEME_100.'&nbsp;{HITS_COUNTER: multi=1}</div>
      </div>
      <div class="default-item-body text-justify">{NEWS_BODY}</div>
      <div class="default-item-bottom">      
        <div class="default-item-morebutton">{EXTENDED}</div>
      </div>
    </div>
  </div>
</div>
';

$NEWS_TEMPLATE['default']['end']	= '
</div>';



/* FOR NEWS ITEM ON CATEGORY'S PAGE **************************************************************************/

$NEWS_TEMPLATE['category']['start'] = '
<!-- Category News Template -->
<div class="newscatitems">
  <div class="newscatitems-header"><h2>{NEWS_CATEGORY_NAME: link=1}</h2></div>
  <div class="row">
';

$NEWS_TEMPLATE['category']['item'] = '
<div class="news-cat-item">
  <div class="col-sm-6">
    <div class="news-cat-item-mainimage">
      {SETIMAGE: w=1000&h=750&crop=1}
      {NEWS_IMAGE: item=1}
    </div>
  </div>
  <div class="col-sm-6">       
    <h2 class="news-cat-item-title">{NEWS_TITLE: link=1}</h2>
    <div class="news-cat-item-meta">{NEWS_DATE}<br />'.LAN_THEME_9.'&nbsp;{NEWSCATEGORY}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;'.LAN_THEME_8.'&nbsp;{NEWS_AUTHOR}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{NEWS_COMMENT_LABEL}&nbsp;{NEWS_COMMENT_COUNT}</div>  
    <div class="news-cat-item-content">
      <div class="lead">{NEWS_SUMMARY}</div>
      <div class="news-cat-item-body">{NEWS_BODY=body}</div>
      <div class="news-cat-item-extended text-right"><a class="button btn btn-mini btn-xs" href="{NEWSURL}">'.LAN_READ_MORE.'&nbsp;<i class="fa fa-long-arrow-right"></i></a></div>
    </div>
  </div>
</div>
';

$NEWS_TEMPLATE['category']['end'] = '
  </div>
</div>';





###### Default view item (temporary)  ######
//$NEWS_MENU_TEMPLATE['view']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['view']['end']         = '</ul>';

// As displayed by news.php?extend.1

/* FOR EXTEND NEWS ITEM ***************************************************************************/


// $NEWS_WRAPPER['view']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left col-xs-12 col-sm-6 col-md-6">{---}</span>';

$NEWS_TEMPLATE['view']['item'] = '
<div class="view-item">
  <div class="row">
    <div class="col-md-9">
      <div class="view-item-container"> 
        <div class="view-item-title">
          <h2>{NEWS_TITLE: link=1}</h2>   
	      </div>
        <div class="view-item-container-inner">
          <div class="view-item-mainimage">
            {SETIMAGE: w=1000&h=750&crop=1}
            {NEWS_IMAGE: item=1}
          </div>
          <div class="view-item-meta">{NEWS_DATE}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;'.LAN_THEME_9.'&nbsp;{NEWSCATEGORY}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;'.LAN_THEME_8.'&nbsp;{NEWS_AUTHOR}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;{NEWSCOMMENTS}</div>
          <div class="view-item-content">
            <div class="lead">{NEWS_SUMMARY}</div>
            <div class="view-item-body">{NEWS_BODY=body}</div>
            <div class="row view-item-videos">
			        <div class="col-md-6 view-video">{NEWSVIDEO: item=1}</div>
		 	        <div class="col-md-6 view-video">{NEWSVIDEO: item=2}</div>
		 	        <div class="col-md-6 view-video">{NEWSVIDEO: item=3}</div>
              <div class="col-md-6 view-video">{NEWSVIDEO: item=4}</div>
		        </div>
            {SETIMAGE: w=1000&h=750&crop=1}
            <div class="row view-item-images-1">
              <div class="col-md-6">{NEWS_IMAGE: item=2}</div>
              <div class="col-md-6">{NEWS_IMAGE: item=3}</div>
            </div>
            <div class="row view-item-images-2">
              <div class="col-md-6">{NEWSIMAGE: item=4}</div>
              <div class="col-md-6">{NEWSIMAGE: item=5}</div>
            </div>
            <div class="view-item-extended">{NEWS_BODY=extended}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="view-item-rate">
        <h3 class="view-item-rate-title">'.LAN_THEME_110.'</h3>
        <div class="view-item-rate-body">{NEWS_RATE}</div>
      </div>
      <div class="view-item-tags">
        <h3 class="view-item-tags-title">'.LAN_THEME_50.'</h3>
        <div class="view-item-tags-body">{NEWSTAGS: separator=&nbsp;}</div>
      </div>
      <div class="view-item-share">
        <h3 class="view-item-share-title">'.LAN_THEME_60.'</h3>
        <div class="view-item-share-body">{PRINTICON}{ADMINOPTIONS}{SOCIALSHARE: type=basic}</div>
      </div>
      <div class="view-item-author">
        <h3 class="view-item-author-title">'.LAN_THEME_70.'</h3>    
	      <div class="view-item-author-avatar">
          {SETIMAGE: w=160&h=160&crop=1}
          {NEWS_AUTHOR_AVATAR: shape=circle}
        </div>               
	      <h4 class="view-item-author-name">{NEWS_AUTHOR}</h4>
	      <div class="view-item-author-info">{NEWS_AUTHOR_SIGNATURE}</div>
        <div class="view-item-author-articles"><a class="articles" href="{NEWS_AUTHOR_ITEMS_URL}">'.LAN_THEME_71.'</a></div>	
      </div>    
      {NEWSRELATED: limit=4&types=news}
    </div>
  </div>
</div>
{NEWSNAVLINK}
';

/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';





### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '
{SETIMAGE: w=900&h=700&crop=1}
<div class="related-news-title"><h2>'.LAN_RELATED.'</h2></div>
<div class="row">';

$NEWS_TEMPLATE['related']['item'] = '
  <div class="col-xs-12">
    <div class="related-news-image">
      <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
    </div> 
    <div class="related-news-header">
      <h4 class="related-news-caption"><a href="{RELATED_URL}">{RELATED_TITLE}</a></h4>
      <div class="related-news-summary">{RELATED_SUMMARY}</div> 
    </div>
  </div>';

$NEWS_TEMPLATE['related']['end'] = '
</div>';