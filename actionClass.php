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
    	var $skill1;
    	var $skill2;
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
        	$this->skill1 = (int)rand(0,100);
        	$this->skill2 = (int)rand(0,100);
	}
	function runup()
	{
		if( $this->speed > $this->skill1 )
		{
			$smooth = true;
		}else{
			$smooth = false;
		}
		return $smooth;
	}
	function jump()
	{
		if( $this->runup() == true && $this->jump > $this->skill2 )
		{
			$perfect = true;
		}else{
			$perfect = false;
		}
        	return $perfect;
	}
	function display()
	{
		if( $this->jump == true)
		{
			$say = '<p>
                <strong>The ball was delivered '.$this->arm.' handed by '.$this->name.' with great skill!</strong>
            </p>';
		}else if( $this->jump == false )
		{
			$say = '<p>
                <strong>The ball was delivered '.$this->arm.' handed by '.$this->name.' with little skill!</strong>
            </p>';
		
		}
        	return $say.'
            <p>
                Skill One '.($this->speed).' / '.($this->skill1).'
            </p>
            <p>
                Skill Two '.($this->jump).' / '.($this->skill2).'
            </p>';
	}
}

#############################
#############################
##USAGE Example
#############################
#############################

$bowler = new action;
$bowler->set('Steven Finn', 'r', rand(0,100), rand(0,100));
echo $bowler->display();


?>