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
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%"); }

if (!isset($FORUM_MAIN_START))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_MAIN_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<th colspan='2' style='width:60%; text-align:center' class='fcaption'>{FORUMTITLE}</th>\n<th style='width:10%; text-align:center' class='fcaption'>".LAN_FORUM_0002."</th>\n<th style='width:10%; text-align:center' class='fcaption'>".LAN_FORUM_0003."</th>\n<th style='width:20%; text-align:center' class='fcaption'>".LAN_FORUM_0004."</th>\n</tr>";
*/
// LEGACY definition with LAN Shortcodes ({THREADTITLE}, {REPLYTITLE}, {LASTPOSTITLE}).....
	$FORUM_MAIN_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<th colspan='2' style='width:60%; text-align:center' class='fcaption'>{FORUMTITLE}</th>\n<th style='width:10%; text-align:center' class='fcaption'>{THREADTITLE}</th>\n<th style='width:10%; text-align:center' class='fcaption'>{REPLYTITLE}</th>\n<th style='width:20%; text-align:center' class='fcaption'>{LASTPOSTITLE}</th>\n</tr>";
}
if (!isset($FORUM_MAIN_PARENT))
{
	$FORUM_MAIN_PARENT = " <tr>\n<td colspan='5' class='forumheader'>{PARENTNAME} {PARENTSTATUS}</td>\n</tr>";
}
if (!isset($FORUM_MAIN_FORUM))
{
	$SC_WRAPPER['LASTPOST:type=date'] = "{---}<br>";
	$SC_WRAPPER['LASTPOST:type=url'] = " <a href='{---}'>".IMAGE_post2."</a>";
	$FORUM_MAIN_FORUM = "<tr>\n<td style='width:5%; text-align:center' class='forumheader2'>{NEWFLAG}</td>\n<td style='width:55%' class='forumheader2'>{FORUMNAME}<br /><span class='smallblacktext'>{FORUMDESCRIPTION}</span>{FORUMSUBFORUMS}</td>\n<td style='width:10%; text-align:center' class='forumheader3'>{THREADS}</td>\n<td style='width:10%; text-align:center' class='forumheader3'>{REPLIES}</td>\n<td style='width:20%; text-align:center' class='forumheader3'><span class='smallblacktext'>{LASTPOST}</span></td>\n</tr>";
}
if (!isset($FORUM_MAIN_END))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_MAIN_END = "</table></div>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td colspan='2' style='width:60%' class='fcaption'>".LAN_FORUM_0009."</td>\n</tr>\n<tr>\n<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>\n<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr><tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>\n</div>\n<div class='spacer'>\n<table class='fborder table' style='".USER_WIDTH."'>\n<tr>\n<td class='forumheader3' style='text-align:center; width:33%'>{ICONKEY}</td>\n<td style='text-align:center; width:33%' class='forumheader3'>{SEARCH}</td>\n<td style='width:33%; text-align:center; vertical-align:middle' class='forumheader3'><span class='smallblacktext'>{PERMS}</span>\n</td>\n</tr>\n</table>\n</div>\n</div>";
*/
// LEGACY definition with LAN Shortcodes ({INFOTITLE}).....
$FORUM_MAIN_END = "</table></div>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>\n<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>\n<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr><tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>\n<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>\n</div>\n<div class='spacer'>\n<table class='fborder table' style='".USER_WIDTH."'>\n<tr>\n<td class='forumheader3' style='text-align:center; width:33%'>{ICONKEY}</td>\n<td style='text-align:center; width:33%' class='forumheader3'>{SEARCH}</td>\n<td style='width:33%; text-align:center; vertical-align:middle' class='forumheader3'><span class='smallblacktext'>{PERMS}</span>\n</td>\n</tr>\n</table>\n</div>\n</div>";
}

if (!isset($FORUM_NEWPOSTS_START))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_NEWPOSTS_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td style='width:3%' class='fcaption'>&nbsp;</td>\n<td style='width:60%' class='fcaption'>".LAN_FORUM_0075."</td>\n<td style='width:27%; text-align:center' class='fcaption'>".LAN_FORUM_0074."</td>\n</tr>";
*/
// LEGACY definition with LAN Shortcodes ({NEWTHREADTITLE}, {POSTEDTITLE}).....
	$FORUM_NEWPOSTS_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td style='width:3%' class='fcaption'>&nbsp;</td>\n<td style='width:60%' class='fcaption'>{NEWTHREADTITLE}</td>\n<td style='width:27%; text-align:center' class='fcaption'>{POSTEDTITLE}</td>\n</tr>";
}

if (!isset($FORUM_NEWPOSTS_MAIN))
{
	$FORUM_NEWPOSTS_MAIN = "<tr>\n<td style='width:3%' class='forumheader3'>{NEWIMAGE}</td>\n<td style='width:60%' class='forumheader3'>{NEWSPOSTNAME}</td>\n<td style='width:27%; text-align:center' class='forumheader3'>{STARTERTITLE}</td>\n</tr>";
}

if (!isset($FORUM_NEWPOSTS_END))
{
	$FORUM_NEWPOSTS_END = "</table></div></div>";
}

if (!isset($FORUM_TRACK_START))
{
// How it should be??? (LAN Shortcodes replaced by their outputed LANS...)
/*
	$FORUM_TRACK_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td colspan='3' style='width:60%' class='fcaption'>".LAN_FORUM_0073."</td>\n</tr>\n";
*/
// LEGACY definition with LAN Shortcodes ({TRACKTITLE}).....
$FORUM_TRACK_START = "<div style='text-align:center'>\n<div class='spacer'>\n<table style='".USER_WIDTH."' class='fborder table'>\n<tr>\n<td colspan='3' style='width:60%' class='fcaption'>{TRACKTITLE}</td>\n</tr>\n";

	if (!isset($FORUM_TRACK_MAIN))
	{
		$FORUM_TRACK_MAIN = "<tr>
			<td style='text-align:center; vertical-align:middle; width:6%'  class='forumheader3'>{NEWIMAGE}</td>
			<td style='vertical-align:middle; text-align:left; width:70%'  class='forumheader3'><span class='mediumtext'>{TRACKPOSTNAME}</span></td>
			<td style='vertical-align:middle; text-align:center; width:24%'  class='forumheader3'><span class='mediumtext'>{UNTRACK}</span></td>
			</tr>";
	}
}

if (!isset($FORUM_TRACK_END))
{
	$FORUM_TRACK_END = "</table>\n</div>\n</div>";
}


/*
$FORUM_MAIN_START	= "<br />MAIN START";
$FORUM_MAIN_PARENT 	= "<br />MAIN PARENT";
$FORUM_MAIN_FORUM		= "<br />MAIN FORUM";
$FORUM_MAIN_END		= "<br />MAIN END";
$FORUM_NEWPOSTS_START	= "<br />NEWPOSTS-START";
$FORUM_NEWPOSTS_MAIN 	= "<br />NEWPOSTS-MAIN";
$FORUM_NEWPOSTS_END 	= "<br />NEWPOSTS END";
$FORUM_TRACK_START	= "<br />TRACK-START";
$FORUM_TRACK_MAIN	= "<br />TRACK-MAIN";
$FORUM_TRACK_END	= "<br />TRACK-END";
*/

// New in v2.x - requires a bootstrap theme be loaded.  


$FORUM_TEMPLATE['main']['start'] = "
{FORUM_BREADCRUMB}
<div class='forum-search'>
  <div class='form-group text-right'>{SEARCH}</div>
</div>
<div id='forum' class='forum'>
";

$FORUM_TEMPLATE['main']['parent']	= "
  <div class='forum-parent'>
    <div class='row'>
      <div class='col-xs-8 col-sm-6 forum-parent-title text-left'>{PARENTNAME} {PARENTSTATUS}</div>
      <div class='col-xs-2 forum-parent-replies text-center'>".LAN_FORUM_0003."</div>
			<div class='col-xs-2 forum-parent-topics text-center'>".LAN_FORUM_0002."</div>
			<div class='hidden-xs col-sm-2 forum-parent-lastpost text-center'>".LAN_FORUM_0004."</div>
		</div>
  </div>
";

$FORUM_TEMPLATE['main']['forum'] = "
  <div class='forum-child'>
    <div class='row'>
      <div class='hidden-xs col-sm-1 forum-newflag text-center'>{NEWFLAG}</div>
      <div class='col-xs-8 col-sm-5 forum-forumname text-left'>
        {FORUMNAME}
        <div class='smalltext'>{FORUMDESCRIPTION}</div>
        <div class='forum-subforum'>{FORUMSUBFORUMS}</div>
      </div>
      <div class='col-xs-2 forum-replies text-center'>{REPLIESX}</div>
      <div class='col-xs-2 forum-threads text-center'>{THREADSX}</div>
      <div class='hidden-xs col-sm-2 forum-lastpost-user text-center'>
        <div class='smalltext'>{LASTPOST:type=username} {LASTPOST:type=datelink}</div>
      </div>
    </div>
  </div>
";

//{LASTPOST:type=username} + {LASTPOST:type=datelink} can also be replaced by the legacy shortcodes {LASTPOST} or {LASTPOSTUSER} + {LASTPOSTDATE}

$FORUM_TEMPLATE['main']['end'] = "
  <div class='forum-footer text-center'><small>{USERINFOX}</small></div>
</div>
";

// $FORUM_WRAPPER['main']['forum']['USERINFOX'] = "{FORUM_BREADCRUMB}(html before){---}(html after)";

// Tracking
$FORUM_TEMPLATE['track']['start'] = "
{FORUM_BREADCRUMB}
<div id='forum-track'>
  <div class='forum-track-caption'>
    <div class='row'>
      <div class='col-xs-10 col-sm-8 forum-track-topic text-left'>".LAN_FORUM_1003."</div>
      <div class='hidden-xs col-sm-2 forum-track-lastpost text-center'>".LAN_FORUM_0004."</div>
      <div class='col-xs-2 forum-track-modify text-center'>".LAN_FORUM_1020."</div>
    </div>
  </div>
";

$FORUM_TEMPLATE['track']['item'] = "
  <div class='forum-track-item'>
    <div class='row'>
      <div class='hidden-xs col-sm-1 forum-track-item-newflag text-center'>{NEWIMAGE}</div>
      <div class='col-xs-10 col-sm-7 forum-track-item-topic text-left'>{TRACKPOSTNAME}</div>
      <div class='hidden-xs col-sm-2 forum-track-item-lastpost text-center'>
        <div class='smalltext'>{LASTPOSTUSER} {LASTPOSTDATE}</div>
      </div>
      <div class='col-xs-2 forum-track-item-modify text-center'>{UNTRACK}</div>
    </div>
  </div>
";

$FORUM_TEMPLATE['track']['end'] = "
</div>";




/*
$FORUM_TEMPLATE['main-end']				.= "

<div class='center'>
	<small class='muted'>{PERMS}</small>
	</div>
<table style='".USER_WIDTH."' class='fborder table'>\n<tr>
<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>
<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>
<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>
";
*/
?>
