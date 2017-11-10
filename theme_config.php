<?php

if (!defined('e107_INIT')) { exit; }

e107::lan('theme', 'admin',true);

class theme_config implements e_theme_config {
	function __construct(){
		e107::themeLan('admin','BS_Gaming_03',true);
	}
	function config(){
		$fields = array(
			'videobackground' => array('title' => LAN_BS_GAMING_03_THEMEPREF_00, 'type'=>'image', 'help'=>''),
			'videomobilebackground' => array('title' => LAN_BS_GAMING_03_THEMEPREF_01, 'type'=>'image', 'help'=>''),
			'videoposter' => array('title' => LAN_BS_GAMING_03_THEMEPREF_02, 'type'=>'image', 'help'=>''),
			'videourl' => array('title' => LAN_BS_GAMING_03_THEMEPREF_03, 'type'=>'text', 'writeParms'=>array('size'=>'xxlarge'),'help'=>''),
      'setvideobgonoff' => array('title' => LAN_BS_GAMING_03_THEMEPREF_04, 'type'=>'boolean', 'help'=> LAN_BS_GAMING_03_THEMEPREF_05),
      'leftorrightmenuarea' => array('title' => LAN_BS_GAMING_03_THEMEPREF_06, 'type'=>'dropdown', 'riteParms'=>array('optArray'=> array('left'=> LAN_BS_GAMING_03_THEMEPREF_08,'right'=> LAN_BS_GAMING_03_THEMEPREF_09)), 'help'=> LAN_BS_GAMING_03_THEMEPREF_07),  
		);
		return $fields;
	}
	function help(){
	 	return null;
	}	
	function process(){
	 	return null;
	}
}


?>
