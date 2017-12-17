<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/
 
if (!defined('e107_INIT')) { exit; }
$PAGE_WRAPPER = array();

global $sc_style;

$sc_style['CPAGEAUTHOR|default']['pre'] = '';
$sc_style['CPAGEAUTHOR|default']['post'] = ", ";

$sc_style['CPAGESUBTITLE|default']['pre'] = '<h2>';
$sc_style['CPAGESUBTITLE|default']['post'] = '</h2>';

$sc_style['CPAGEMESSAGE|default']['pre'] = '';
$sc_style['CPAGEMESSAGE|default']['post'] = '';

$sc_style['CPAGENAV|default']['pre'] = '';
$sc_style['CPAGENAV|default']['post'] = '';

#### default template - BC ####
	// used only for parsing comment outside of the page tablerender-ed content
	// leave empty if you integrate page comments inside the main page template
	
	
$PAGE_TEMPLATE['default']['page'] = '
{PAGE}
'; 
	
// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['default']['start'] = '
<div id="{CPAGESEF}" class="cpage_body cpage-body">
  <div class="default-cpage-container">
    {CHAPTER_BREADCRUMB}
'; 
	
// page body
$PAGE_TEMPLATE['default']['body'] = '
    {CPAGEMESSAGE|default}		
	  {CPAGESUBTITLE|default}		
    <div class="row">
      <div class="col-md-9">
        <div class="row">      
          <div class="col-md-6">
            <div class="default-cpage-meta">{CPAGEDATE}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;'.LAN_THEME_8.'&nbsp;{CPAGEAUTHOR}</div>
          </div>
          <div class="col-md-6">
            {CPAGENAV}
          </div>
        </div>
	      <div class="default-cpage-content">
          <div class="default-cpage-mainimage">
            {SETIMAGE: w=1000&h=750&crop=1}
            {CPAGEFIELD: name=image1}
          </div>  
          {SETIMAGE: w=1000&h=750&crop=1}
          {CPAGEBODY}
        </div>
      </div>
      <div class="col-md-3">	
	      <div class="default-cpage-rating">
          <h3 class="default-cpage-rating-title">'.LAN_THEME_81.'</h3>
          <div class="default-cpage-rating-body">{CPAGERATING|default}</div>
        </div>
        <div class="default-cpage-share">
          <h3 class="default-cpage-share-title">'.LAN_THEME_60.'</h3>
          <div class="default-cpage-share-body">{PRINTICON}{PDFICON}{CPAGEEDIT}{SOCIALSHARE: type=basic}</div>
        </div>
        {CPAGERELATED:limit=5&types=page}
      </div>
    </div>
    <div class="default-cpage-comments">
      <div class="default-cpage-comments-title"><h2>'.LAN_THEME_80.'</h2></div>
      <div class="default-cpage-comments-body">{PAGECOMMENTS}</div>
    </div>  
';     


// {CPAGEFIELD: name=image}
$PAGE_WRAPPER['default']['CPAGEEDIT'] = "<div class='text-right'>{---}</div>";


// used only when password authorization is required
$PAGE_TEMPLATE['default']['authorize'] = '
<div class="cpage-restrict">
	{message}
	{form_open}
	<div class="panel panel-default">
		<div class="panel-heading">{caption}</div>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-3 control-label">{label}</label>
				<div class="col-sm-9">
					{password} {submit} 
				</div>
			</div>
		</div>
  </div>
	{form_close}
</div>
';
	

// used when access is denied (restriction by class)
$PAGE_TEMPLATE['default']['restricted'] = '
  {text}
';
	
// used when page is not found
$PAGE_TEMPLATE['default']['notfound'] = '
  {text}
';
	
// always used
$PAGE_TEMPLATE['default']['end'] = '
  </div>
</div>'; 
	


 
// options per template - disable table render
//	$PAGE_TEMPLATE['default']['noTableRender'] = false; //XXX Deprecated
	
// define different tablerender mode here
$PAGE_TEMPLATE['default']['tableRender'] = 'cpage';

$PAGE_TEMPLATE['default']['related']['start'] = '
<h2 class="cpage-related-title">{LAN=LAN_RELATED}</h2>
<div class="row">
';
$PAGE_TEMPLATE['default']['related']['item'] = '
  <div class="col-xs-12">
    <div class="cpage-related-image">
      <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
    </div>
    <div class="cpage-related-header">
      <h4 class="cpage-related-caption">
      <a href="{RELATED_URL}">{RELATED_TITLE}</a>
    </div>
  </div>
';
$PAGE_TEMPLATE['default']['related']['end'] = '
</div>
';


// CPAGE FOR REVIEW -------------------------------------------------------------
$PAGE_TEMPLATE['review']['page'] = '
{PAGE}
';

// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['review']['start'] = '
<div id="{CPAGESEF}" class="cpage_body cpage-body">
  <div class="review-container">
    {CHAPTER_BREADCRUMB}
'; 
	
// page body
$PAGE_TEMPLATE['review']['body'] = '
    {CPAGEMESSAGE|default}		
	  {CPAGESUBTITLE|default}		
    <div class="row">
      <div class="col-md-9">
        <div class="row">      
          <div class="col-md-6">
            <div class="review-cpage-meta">{CPAGEDATE}&nbsp;&nbsp;&#9702;&nbsp;&nbsp;'.LAN_THEME_8.'&nbsp;{CPAGEAUTHOR}</div> 
          </div>
          <div class="col-md-6">
            {CPAGENAV}
          </div>
        </div>
	      <div class="review-cpage-content">
          <div class="review-mainimage">
            {SETIMAGE: w=1000&h=750&crop=1}
            {CPAGEFIELD: name=image1}
          </div> 
          <div class="review-scores-wrap">
            <div class="review-scores">
              <ul class="progress-wrap">
                <li><div class="review-scores-title">{CPAGEFIELDTITLE: name=gameplay}:</div>{CPAGEFIELD: name=gameplay}</li>
                <li><div class="review-scores-title">{CPAGEFIELDTITLE: name=graphics}:</div>{CPAGEFIELD: name=graphics}</li>
                <li><div class="review-scores-title">{CPAGEFIELDTITLE: name=sound}:</div>{CPAGEFIELD: name=sound}</li> 
                <li><div class="review-scores-title">{CPAGEFIELDTITLE: name=eop}:</div>{CPAGEFIELD: name=eop}</li>
              </ul>
            </div>
            <div class="review-scores">
              <div class="review-scores-comments">
                <div class="review-scores-title">{CPAGEFIELDTITLE: name=good}:</div>{CPAGEFIELD: name=good}  
                <div class="review-scores-title">{CPAGEFIELDTITLE: name=bad}:</div>{CPAGEFIELD: name=bad}       
                <div class="review-score-number">
                  <div class="rating-item" data-value="{CPAGEFIELD: name=score}"></div>                 
                </div>
              </div>
            </div>        
          </div>
          {SETIMAGE: w=1000&h=750&crop=1}
          {CPAGEBODY}
        </div>
      </div>
      <div class="col-md-3">	
	      <div class="default-cpage-rating">
          <h3 class="default-cpage-rating-title">'.LAN_THEME_81.'</h3>
          <div class="default-cpage-rating-body">{CPAGERATING|default}</div>
        </div>
        <div class="default-cpage-share">
          <h3 class="default-cpage-share-title">'.LAN_THEME_60.'</h3>
          <div class="default-cpage-share-body">{PRINTICON}{PDFICON}{CPAGEEDIT}{SOCIALSHARE: type=basic}</div>
        </div>
        {CPAGERELATED:limit=5&types=page}
      </div>
    </div>
    <div class="default-cpage-comments">
      <div class="default-cpage-comments-title"><h2>'.LAN_THEME_80.'</h2></div>
      <div class="default-cpage-comments-body">{PAGECOMMENTS}</div>
    </div>  
';

$PAGE_TEMPLATE['review']['end'] = '
  </div>
</div>';


$PAGE_TEMPLATE['review']['related']['start'] = '
<h2 class="cpage-related-title">{LAN=LAN_RELATED}</h2>
<div class="row">
';
$PAGE_TEMPLATE['review']['related']['item'] = '
  <div class="col-xs-12">
    <div class="cpage-related-image">
      <a href="{RELATED_URL}">{RELATED_IMAGE}</a>
    </div>
    <div class="cpage-related-header">
      <h4 class="cpage-related-caption">
      <a href="{RELATED_URL}">{RELATED_TITLE}</a>
    </div>
  </div>
';
$PAGE_TEMPLATE['review']['related']['end'] = '
</div>
';
// END -------------------------------------------














// $PAGE_TEMPLATE['default']['editor'] = '<ul class="fa-ul"><li><i class="fa fa-li fa-edit"></i> Level 1</li><li><i class="fa fa-li fa-cog"></i> Level 2</li></ul>';

	
#### No table render example template ####

$PAGE_TEMPLATE['custom']['start'] = '<div id="{CPAGESEF}" class="cpage-body">'; 
$PAGE_TEMPLATE['custom']['body'] = ''; 
$PAGE_TEMPLATE['custom']['authorize'] = '';	
$PAGE_TEMPLATE['custom']['restricted'] = '';	
$PAGE_TEMPLATE['custom']['end'] = '</div>'; 
$PAGE_TEMPLATE['custom']['tableRender'] = '';

	
$PAGE_WRAPPER['profile']['CMENUIMAGE: template=profile'] = '<span class="page-profile-image pull-left col-xs-12 col-sm-4 col-md-4">{---}</span>';
$PAGE_TEMPLATE['profile'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['profile']['body'] = '
  {CPAGEMESSAGE}
	{CPAGESUBTITLE}
	<div class="clear"><!-- --></div>

	{CPAGENAV|default}
	{SETIMAGE: w=320}
	{CMENUIMAGE: template=profile}
	{CPAGEBODY}

	<div class="clear"><!-- --></div>
	{CPAGERATING}
	{CPAGEEDIT}
';
	
	
?>