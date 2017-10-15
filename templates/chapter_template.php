<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/
/**
 * Template for Book and Chapter Listings, as well as navigation on those pages. 
 */


//****************************************************************************** 
$CHAPTER_TEMPLATE['default']['listPages']['caption'] = "{CHAPTER_NAME}";
$CHAPTER_TEMPLATE['default']['listPages']['start'] = "
{CHAPTER_BREADCRUMB}
<div class='list-pages'>
  <div class='row'>
";

$CHAPTER_TEMPLATE['default']['listPages']['item'] = "
    <div class='col-xs-12 col-sm-6 col-md-3'>
      {SETIMAGE: w=1000&h=750&crop=1}
      <div class='list-pages-image'>{CPAGEFIELD: name=image1}</div>
      <h4 class='list-pages-title'><a href='{CPAGEURL}'>{CPAGETITLE}</a></h4>
      <div class='list-pages-body'>{CPAGEBODY}</div>
      <div class='list-pages-readmore'><a class='button btn btn-mini btn-xs' href='{CPAGEURL}'>".LAN_READ_MORE."</a></div>
    </div>
";

$CHAPTER_TEMPLATE['default']['listPages']['end'] = "
  </div>
</div>
";	


// *****************************************************************************
$CHAPTER_TEMPLATE['default']['listChapters']['caption']	= "{BOOK_NAME}";	
$CHAPTER_TEMPLATE['default']['listChapters']['start']	= "
<ul class='list-chapters'>
";

$CHAPTER_TEMPLATE['default']['listChapters']['item'] = "
  <li class='list-chapters-item'>
    <h4 class='list-chapters-name'><a href='{CHAPTER_URL}'>{CHAPTER_NAME}</a></h4>
    {PAGES}
";

$CHAPTER_TEMPLATE['default']['listChapters']['end']	= "
</ul>
";


// *****************************************************************************
$CHAPTER_TEMPLATE['default']['listBooks']['start'] = "
<ul class='list-books'>
";

$CHAPTER_TEMPLATE['default']['listBooks']['item']	= "
  <li class='list-books-item'>
    <h3 class='list-books-name'><a href='{BOOK_URL}'>{BOOK_NAME}</a></h3>
    {CHAPTERS}
";

$CHAPTER_TEMPLATE['default']['listBooks']['end'] = "
</ul>
";


// *****************************************************************************
$CHAPTER_TEMPLATE['nav']['listChapters']['caption']	= "Articles";

$CHAPTER_TEMPLATE['nav']['listChapters']['start'] = '
<ul class="page-nav">';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['item'] = '
  <li><a role="button" href="{LINK_URL}">{LINK_NAME}</a></li>
';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['item_submenu'] = '
	<li>
    <a role="button" href="{LINK_URL}">{LINK_NAME}</a> 
		{LINK_SUB}
	</li>
';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['item_submenu_active']	= '
	<li class="active">
    <a role="button"  href="{LINK_URL}">{LINK_NAME}</a>
		{LINK_SUB}
	</li>
';	
																	
$CHAPTER_TEMPLATE['nav']['listChapters']['item_active'] = '
	<li class="active"><a crole="button" href="{LINK_URL}">{LINK_NAME}</a></li>
';	

$CHAPTER_TEMPLATE['nav']['listChapters']['end'] = '
</ul>';		

	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_start'] = '
<ul class="page-nav" id="{LINK_IDENTIFIER}" role="menu" >
';
		
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_item'] = '
	<li role="menuitem" >
		<a href="{LINK_URL}">{LINK_NAME}</a>
		{LINK_SUB}
	</li>
';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_loweritem']	= '
	<li role="menuitem" >
		<a href="{LINK_URL}">{LINK_NAME}</a>
		{LINK_SUB}
	</li>
';

$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_loweritem_active'] = '
  <li role="menuitem" class="active">
		<a href="{LINK_URL}">{LINK_NAME}</a>
		{LINK_SUB}
	</li>
';

$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_item_active'] = '
	<li role="menuitem" class="active">
		<a href="{LINK_URL}">{LINK_NAME}</a>
		{LINK_SUB}
	</li>
';

$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_end'] = '
</ul>';	


// *******************************************************************************************
$CHAPTER_TEMPLATE['nav']['listBooks'] = $CHAPTER_TEMPLATE['nav']['listChapters'];
$CHAPTER_TEMPLATE['nav']['listPages'] = $CHAPTER_TEMPLATE['nav']['listChapters'];
$CHAPTER_TEMPLATE['nav']['showPage'] = $CHAPTER_TEMPLATE['nav']['listChapters'];


// *********************************************************************************************
// Used by e107_plugins/page/chapter_menu.php & /page.php?bk=x
$CHAPTER_TEMPLATE['panel']['listChapters']['caption']	= "{BOOK_NAME}";

$CHAPTER_TEMPLATE['panel']['listChapters']['start']	= "
<div class='chapter-panel-list'>
";

$CHAPTER_TEMPLATE['panel']['listChapters']['item']	= "
  <div class='col-xs-12 col-md-4 text-center'>
		<h2>{CHAPTER_NAME}</h2>
    <h1><a href='{CHAPTER_URL}'>{CHAPTER_ICON}</a></h1>
    <p>{CHAPTER_DESCRIPTION}</p>
    <p>{CHAPTER_BUTTON}</p>
  </div>
";

$CHAPTER_TEMPLATE['panel']['listChapters']['end']	= "
</div>";


// ***********************************************************************************************
$CHAPTER_TEMPLATE['panel']['listPages']['caption'] = "{CHAPTER_NAME}";
$CHAPTER_TEMPLATE['panel']['listPages']['start'] = "
{CHAPTER_BREADCRUMB}
<div class='chapter-pages-list'>
";

$CHAPTER_TEMPLATE['panel']['listPages']['item'] = "
  <div class='section'>
    <div class='row'>{CPAGEMENU}</div>
  </div>
";
  
$CHAPTER_TEMPLATE['panel']['listPages']['end'] = "
</div>
";	

?>