<?php

/*
Project: Test
Date: 21/10/12
Author: Russell
*/

class action{
	var $name;
	var $arm;
	var $jump;
	var $speed;
	function set($name, $arm, $jump, $speed)
	{
		$this->name = $name;
		if( $arm == 'l' || $arm == 'left' )
		{
			$this->arm = 'Left';
		}
		if( $arm == 'r' || $arm == 'right' )
		{
			$this->arm = 'Right';
		}
		$this->jump = (int)$jump;
		$this->speed = (int)$speed;
	}
	function runup()
	{
		if( $this->speed < rand(0,100) )
		{
			$smooth = true;
		}else{
			$smooth = false;
		}
		return $smooth;
	}
	function jump()
	{
		if( $this->runup() == true && $this->jump < rand(0,100) )
		{
			$perfect = true;
		}else{
			$perfect = false;
		}
	}
	function display()
	{
		if( $this->jump == true)
		{
			return '<strong>The ball was delivered '.$this->arm.' handed by '.$this->name.' with great skill!</strong>';
		}else if( $this->jump == false )
		{
			return '<strong>The ball was delivered '.$this->arm.' handed by '.$this->name.' with little skill!</strong>';
		
		}
	}
}

#############################
#############################
##USAGE Example
#############################
#############################

$bowler = new action;
$bowler->set('Steven Finn', 'r', 10, 90);
echo $bowler->display();


?>