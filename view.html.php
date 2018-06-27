<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HTML View class for the login view
 */
class ProjectViewMath extends JViewLegacy {

	public function display($tpl = null) {
		$document = JFactory::getDocument();
		$app = JFactory::getApplication();


		$document->setTitle(JText::_('Swoop-Test'));
		$this->return = JRequest::getString("return", base64_encode($_SERVER['HTTP_REFERER']));

		parent::display();
	}

}
