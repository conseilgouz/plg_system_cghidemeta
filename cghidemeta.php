<?php
/**
 * @package 	CG Hide Meta
 * @copyright 	(c) 2025 www.conseilgouz.com
 * @license		GNU/GPL, https://www.gnu.org/licenses/gpl-3.0.html
 *
 */
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;

class plgSystemCGHideMeta extends CMSPlugin
{
    function onAfterDispatch()
    {
		$doc = Factory::getDocument();
		$doc->setGenerator(''); // 	hide the meta tag generator for website 
		header_remove('X-Powered-By');
		header('X-Content-Type-Options: nosniff');
	}
}