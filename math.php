<?php

class ProjectControllerMath extends JControllerLegacy {

	//this function is use to add two number which coming from json call
	public function add() {
		//security check for right json call
		JSession::checkToken('get') or die('Invalid Token');

		//get parameter values
		$number1 = JRequest::getVar('n1', '0', 'get', 'int');
		$number2 = JRequest::getVar('n2', '0', 'get', 'int');

    //sum two values
		$result = $number1 + $number2;

		//encode value to send json
		echo json_encode($result);
		jexit();

	}


	
}

  ?>
