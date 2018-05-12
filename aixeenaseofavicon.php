<?php
/*------------------------------------------------------------------------
# aixeenaseofavicon.php - Aixeena SEO Favicon (plugin)
# ------------------------------------------------------------------------
# version		1.0.0
# author    	Ciro Artigot for Aixeena.org
# copyright 	Copyright (c) 2018 CiroArtigot. All rights reserved.
# @license 		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites 		http://aixeena.org/
-------------------------------------------------------------------------
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.plugin.plugin');

class plgSystemAixeenaseofavicon extends JPlugin
{
	function __construct(& $subject, $params ){
		parent::__construct( $subject, $params );
	}
	
	function  onBeforeCompileHead() {

		global $_PROFILER;
		$app = JFactory::getApplication();
		if ($app->isAdmin()) return;
		$doc = JFactory::getDocument();
		if ($doc->getType() != 'html') return;
	
		foreach($doc->_links as $st => $script) {
			if(strpos($st,"/favicon.ico")!==false) unset($doc->_links[$st]);
		}
		
		if($this->params->get('favicon','')) $doc->addFavicon($this->params->get('favicon',''), 'image/x-icon',  'shortcut icon');
		
		if($this->params->get('favicon16','')) $doc->addCustomTag('<link rel="icon" type="image/png" sizes="16x16" href="'.$this->params->get('favicon16','').'">');
		
		if($this->params->get('favicon32','')) $doc->addCustomTag('<link rel="icon" type="image/png" sizes="32x32" href="'.$this->params->get('favicon32','').'">');
		
		if($this->params->get('favicon57','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="57x57" href="'.$this->params->get('favicon57','').'">');
		
		if($this->params->get('favicon60','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="60x60" href="'.$this->params->get('favicon60','').'">');
		
		if($this->params->get('favicon72','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="72x72" href="'.$this->params->get('favicon72','').'">');		
		
		if($this->params->get('favicon76','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="76x76" href="'.$this->params->get('favicon76','').'">');
		
		if($this->params->get('favicon96','')) $doc->addCustomTag('<link rel="icon" type="image/png" sizes="96x96" href="'.$this->params->get('favicon96','').'">');
		
		if($this->params->get('favicon114','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="114x114" href="'.$this->params->get('favicon114','').'">');
		
		
		if($this->params->get('favicon120','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="120x120" href="'.$this->params->get('favicon120','').'">');		
		
		if($this->params->get('favicon144','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="144x144" href="'.$this->params->get('favicon144','').'">
		<meta name="msapplication-TileImage" content="'.$this->params->get('favicon144','').'">');
		
		if($this->params->get('favicon152','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="152x152" href="'.$this->params->get('favicon152','').'">');		
		
		if($this->params->get('favicon180','')) $doc->addCustomTag('<link rel="apple-touch-icon" sizes="180x180" href="'.$this->params->get('favicon180','').'">');
		
		if($this->params->get('favicon192','')) $doc->addCustomTag('<link rel="icon" type="image/png" sizes="192x192" href="'.$this->params->get('favicon192','').'">');
		
		if($this->params->get('tilecolor','')) $doc->addCustomTag('<meta name="msapplication-TileColor" content="'.$this->params->get('tilecolor','').'">');
		
		if($this->params->get('themecolor','')) $doc->addCustomTag('<meta name="theme-color" content="'.$this->params->get('themecolor','').'"> ');
		


		return true;

	}
	
}
?>
