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
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%;margin-left:auto;margin-right:auto"); }

$sc_style['LASTEDIT']['pre'] = LAN_FORUM_2016.' ';

$sc_style['LASTEDITBY']['pre'] = ' '.LAN_FORUM_2017.' ';
$sc_style['LASTEDITBY']['post'] = '';

$sc_style['LEVEL']['pre'] = "";
$sc_style['LEVEL']['post'] = "";

$sc_style['ATTACHMENTS']['pre'] = "<div>";
$sc_style['ATTACHMENTS']['post'] = "</div>";

$sc_style['ANON_IP']['pre'] = "";
$sc_style['ANON_IP']['post'] = "";


$sc_style['CUSTOMTITLE']['pre'] = "<small>";
$sc_style['CUSTOMTITLE']['post'] = "</small>";


$sc_style['USER_EXTENDED']['location.text_value']['mid'] = ": ";
$sc_style['USER_EXTENDED']['location.text_value']['post'] = "<br />";




$FORUMSTART = "
<a id='top'></a>
<div style='text-align:center'>
	<table style='".USER_WIDTH."' class='fborder table'>
	  <tr>
	    <td class='fcaption'>{BACKLINK}</td>
	    <td class='fcaption' style='text-align: right'>
	      <div class='smalltext'>&nbsp;{TRACK}</div>
	    </td>
	    <td class='fcaption' style='text-align: right'>
	      <span class='smalltext'>{NEXTPREV}</span>
	    </td>
	  </tr>
	  <tr>
	    <td class='forumheader' colspan='3'>{THREADNAME}</td>
	  </tr>
	</table>
	{MESSAGE}
	<table style='".USER_WIDTH."'>
	  <tr>
	    <td style='width:60%; text-align: left'>{GOTOPAGES}</td>
	    <td style='width:40%; text-align:right; white-space: nowrap'>{BUTTONS}</td>
	  </tr>
	  <tr>
	    <td style='width:60%; text-align: left'>
	      <div class='spacer'>{MODERATORS}</div>
	    </td>
	    <td style='width:40%; text-align:right'>{THREADSTATUS}</td>
	  </tr>
	</table>
	<table style='".USER_WIDTH."' class='fborder table'>
	  <tr>
	    <td style='width:20%; text-align:center' class='fcaption'>".LAN_AUTHOR."</td>
	    <td style='width:80%; text-align:center' class='fcaption'>".LAN_FORUM_2015."</td>
	  </tr>";

$FORUMTHREADSTYLE = "
    <tr>
	    <td class='forumheader' style='vertical-align:middle'>
	      {NEWFLAG}
	      {POSTER}
	      {ANON_IP}
	    </td>
	    <td class='forumheader' style='vertical-align:middle'>
	      <table cellspacing='0' cellpadding='0' style='width:100%'>
	        <tr>
	          <td class='smallblacktext'>{THREADDATESTAMP}</td>
	          <td style='text-align:right'>{EMAILITEM} {PRINTITEM} {REPORTIMG}{EDITIMG}{QUOTEIMG}</td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	  <tr>
	    <td class='forumheader3' style='vertical-align:top'>
	      {CUSTOMTITLE}
	      {AVATAR}
	      <div class='smalltext'>
	        {LEVEL=special}
	        {LEVEL=pic}
	        {LEVEL=userid}
	        {JOINED}
	        {USER_EXTENDED=location.text_value}
	        {POSTS}
	      </div>
	    </td>
	    <td class='forumheader3' style='vertical-align:top'>
        {POLL}
	      {POST}
	      {ATTACHMENTS}
	      {LASTEDIT}{LASTEDITBY=link}
	      {SIGNATURE}
	    </td>
	  </tr>
	  <tr>
	    <td class='finfobar'>
	      <span class='smallblacktext'>{TOP}</span>
	    </td>
	    <td class='finfobar' style='vertical-align:top'>
	      <table cellspacing='0' cellpadding='0' style='width:100%'>
	        <tr>
	          <td>
	            {PROFILEIMG}
	            {EMAILIMG}
	            {WEBSITEIMG}
	            {PRIVMESSAGE}
	          </td>
	          <td style='text-align:right'>{MODOPTIONS}</td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	  <tr>
	    <td colspan='2'></td>
	  </tr>";

$FORUMEND = "
    <tr>
      <td colspan='2' class='forumheader3' style='text-align:center'>{QUICKREPLY}</td>
    </tr>
  </table>
</div>
<table style='".USER_WIDTH."'>
	<tr>
	  <td style='width:80%'>{GOTOPAGES}</td>
	  <td style='width:20%; text-align: right; white-space: nowrap'>{BUTTONS}</td>
	</tr>
	<tr>
	  <td colspan ='2'>{FORUMJUMP}</td>
	</tr>
</table>
</div>
	
  <div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b></div>";

$FORUMREPLYSTYLE = "
    <tr>
	    <td class='forumheader' style='vertical-align:middle'>
	      {NEWFLAG}
	      {POSTER}
	      {ANON_IP}
	    </td>
	    <td class='forumheader' style='vertical-align:middle'>
	      <table cellspacing='0' cellpadding='0' style='width:100%'>
	        <tr>
	          <td class='smallblacktext'>{THREADDATESTAMP}</td>
	          <td style='text-align:right'>{REPORTIMG}{EDITIMG}{QUOTEIMG}</td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	  <tr>
	    <td class='forumheader3' style='vertical-align:top'>
	      {CUSTOMTITLE}
	      {AVATAR}
	      <div class='smalltext'>
	        {LEVEL=special}
	        {LEVEL=pic}
	        {LEVEL=userid}
	        {JOINED}
	        {USER_EXTENDED=location.text_value}
	        {POSTS}
	      </div>
	    </td>
	    <td class='forumheader3' style='vertical-align:top'>
        {POST}
	      {ATTACHMENTS}
	      {LASTEDIT}{LASTEDITBY}
	      {SIGNATURE}
	    </td>
	  </tr>
	  <tr>
	    <td class='finfobar'>
	      <span class='smallblacktext'>{TOP}</span>
	    </td>
	    <td class='finfobar' style='vertical-align:top'>
	      <table cellspacing='0' cellpadding='0' style='width:100%'>
	        <tr>
	          <td>
	            {PROFILEIMG}
	            {EMAILIMG}
	            {WEBSITEIMG}
	            {PRIVMESSAGE}
	          </td>
	          <td style='text-align:right'>{MODOPTIONS}</td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	  <tr>
	    <td colspan='2'></td>
	  </tr>";

$FORUMDELETEDSTYLE = "
    <tr>
	    <td class='forumheader' style='vertical-align:middle'>
	      {POSTER}
	      {ANON_IP}
	    </td>
	    <td class='forumheader' style='vertical-align:middle'>
	      <table cellspacing='0' cellpadding='0' style='width:100%'>
	        <tr>
	          <td class='smallblacktext'>{THREADDATESTAMP}</td>
	          <td style='text-align:right'></td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	  <tr>
	    <td class='forumheader3' style='vertical-align:top' colspan='2'>{POSTDELETED}</td>
	  </tr>
	  <tr>
	    <td class='finfobar'>
	      <span class='smallblacktext'></span>
	    </td>
	    <td class='finfobar' style='vertical-align:top' colspan='2'>
	      <table cellspacing='0' cellpadding='0' style='width:100%'>
	        <tr>
	          <td></td>
	          <td style='text-align:right'>{MODOPTIONS}</td>
	        </tr>
	      </table>
	    </td>
	  </tr>
	  <tr>
	    <td colspan='2'></td>
	  </tr>";


$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "<a class='forumlink' href='{FORUM_HREF}'>{FORUM_TITLE}</a>";


// {MODERATORS} {THREADSTATUS}

// New in v2.x - requires a bootstrap theme be loaded.  
// Modified by FIZI ****************************************************************************************************************

$FORUM_VIEWTOPIC_TEMPLATE['caption'] 	= "";
$FORUM_VIEWTOPIC_TEMPLATE['start'] 	= "
<div id='forum-view-topic'>
  <div class='row'>
	  <div>{BACKLINK}</div>
  </div>
  <div class='row'>
	  <div class='col-md-9 forum-topic-title'><h3>{THREADNAME}</h3></div>
    <div class='col-md-3 forum-topic-button'>{TRACK} {BUTTONSX}</div>
  </div>	
  {MESSAGE}											
  <ul class='forum-viewtopic unstyled list-unstyled'>
";

$FORUM_VIEWTOPIC_TEMPLATE['thread'] = "
    <li id='post-{POSTID}' class='forum-viewtopic-post'>
		  <div class='row row-top'>
		    {SETIMAGE: w=100&h=100&crop=1}
			  <div class='col-md-2 text-center'>
				  <div class='forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
				  {NEWFLAG} {ANON_IP}
        </div>
			  <div class='col-md-4 text-muted text-center'><small><i class='fa fa-clock-o'></i> {THREADDATESTAMP}</small></div>
			  <div class='col-md-4 text-muted text-center'><small>{LASTEDIT}&nbsp;&nbsp;{LASTEDITBY=link}</small></div>
			  <div class='hidden-xs hidden-sm col-md-2 text-right'>{POSTOPTIONS}</div>										
		  </div>
		  <div class='row row-center'>
			  <div class='col-md-2 text-center'>
				  <div class='forum-viewtopic-avatar'>{AVATAR: shape=rounded}</div>
					<div class='forum-viewtopic-level'><small>{LEVEL=badge}</small></div>
          <div class='forum-viewtopic-level-icons'><small>{LEVEL=glyph}</small></div>
          <div class='visible-xs visible-sm'>{POSTOPTIONS}</div>
			  </div>
		    <div class='visible-xs visible-sm col-sm-12'><hr /></div>
		    <div class='col-md-10 forum-viewtopic-text'>
			    {POLL}
			    {THREAD_TEXT}
			    {ATTACHMENTS: modal=1}
		    </div>
      </div>																			
	    <div class='row row-bottom'>
		    <div class='hidden-xs hidden-sm col-md-2'>&nbsp;</div>
		    <div class='col-md-10 finfobar'><small>{SIGNATURE=clean}</small></div>											
	    </div>										
	  </li>
";

$FORUM_VIEWTOPIC_TEMPLATE['end'] = "
</ul>
<div class='row'>
	<div class='col-xs-12 col-md-6 text-center'>{GOTOPAGES}</div>
	<div class='col-xs-12 col-md-6 forum-topic-button'>{BUTTONSX}</div>
</div>
<div class='row'>
	<div class='col-xs-12 col-md-6 col-md-offset-3'>{QUICKREPLY}</div>
</div>
<small class='text-muted'>{MODERATORS}</small>
{THREADSTATUS}
</div>
";


$FORUM_VIEWTOPIC_TEMPLATE['replies'] = "
    <li id='post-{POSTID}' class='forum-viewtopic-reply'>
		  <div class='row row-top'>
		    {SETIMAGE: w=100&h=100&crop=1}
			  <div class='col-md-2 text-center'>
				  <div class='forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
				  {NEWFLAG} {ANON_IP}
        </div>
			  <div class='col-md-4 text-muted text-center'><small><i class='fa fa-clock-o'></i> {THREADDATESTAMP}</small></div>
			  <div class='col-md-4 text-muted text-center'><small>{LASTEDIT}&nbsp;&nbsp;{LASTEDITBY=link}</small></div>
			  <div class='hidden-xs hidden-sm col-md-2 text-right'>{POSTOPTIONS}</div>										
		  </div>
		  <div class='row row-center'>
			  <div class='col-md-2 text-center'>
				  <div class='forum-viewtopic-avatar'>{AVATAR: shape=rounded}</div>
					<div class='forum-viewtopic-level'><small>{LEVEL=badge}</small></div>
          <div class='forum-viewtopic-level-icons'><small>{LEVEL=glyph}</small></div>
          <div class='visible-xs visible-sm'>{POSTOPTIONS}</div>
			  </div>
		    <div class='visible-xs visible-sm col-sm-12'><hr /></div>
		    <div class='col-md-10 forum-viewtopic-text'>
			    {POLL}
			    {THREAD_TEXT}
			    {ATTACHMENTS: modal=1}
		    </div>
      </div>																			
	    <div class='row row-bottom'>
		    <div class='hidden-xs hidden-sm col-md-2'>&nbsp;</div>
		    <div class='col-md-10 finfobar'><small>{SIGNATURE=clean}</small></div>											
	    </div>										
	  </li>
";


$FORUM_VIEWTOPIC_TEMPLATE['deleted'] = "
    <li id='post-{POSTID}' class='forum-viewtopic-deleted forum-viewtopic-post'>
		  <div class='row row-top'>
			  {SETIMAGE: w=100&h=0&crop=0}
			  <div class='col-md-2 text-center'>
				  <div class='forum-user-combo'>{USERCOMBO}<br />{CUSTOMTITLE}</div>
				  {NEWFLAG} {ANON_IP}
        </div>
			  <div class='col-md-4 text-muted text-center'><small>{THREADDATESTAMP=relative}</small></div>
			  <div class='col-md-4 text-muted text-center'><small>{LASTEDIT}{LASTEDITBY=link}</small></div>
			  <div class='col-md-2 text-right'>{POSTOPTIONS}</div>
		  </div>
		  <div class='row row-center'>
			  <div class='col-md-2 text-center'>
				  <div class='forum-viewtopic-avatar'>{AVATAR: shape=rounded}</div>
          <div class='forum-viewtopic-level'><small>{LEVEL=badge}</small></div>
          <div class='forum-viewtopic-level-icons'><small>{LEVEL=glyph}</small></div>
        </div> 
			  <div class='visible-xs visible-sm col-sm-12'><hr /></div>
			  <div class='col-md-10 forum-viewtopic-text'>{POSTDELETED}</div>
		  </div>
		  <div class='row row-bottom'>
			  <div class='hidden-xs hidden-sm col-md-2'>&nbsp;</div>
			  <div class='col-md-10 finfobar'><small>{SIGNATURE=clean}</small></div>
		  </div>
	  </li>
";


	
$FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'] = "<div class='forum-viewtopic-attachments'>{---}</div>";
$FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'] = "<span class='forum-viewtopic-customtitle'><small>{---}</small></span>";

$FORUM_VIEWTOPIC_WRAPPER['replies']['ATTACHMENTS'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['ATTACHMENTS'];
$FORUM_VIEWTOPIC_WRAPPER['replies']['CUSTOMTITLE'] = $FORUM_VIEWTOPIC_WRAPPER['thread']['CUSTOMTITLE'];

