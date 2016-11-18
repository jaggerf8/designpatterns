<?php

	abstract class factoryball
	{
		public $color = '';
		public $price = 0;
		public $bounce = false;
		public $sport = '';
		
		public function whatcolor()
		{
			echo 'this ball is ' . $this->color;
		}
		
		public function price()
		{
			echo 'the price of this ball is $' . $this->price;
		}

		public function sport()
		{
			echo 'this is a ' . $this->sport;
		}

		public function bounce()
		{
			echo  'you bounced the ball';
		}

		public function isItBouncy()
		{
			if($bounce==true)
				echo 'the ball is bouncy';
			else 
				echo 'the ball is not bouncy';
		}
	}


	class Soccerball extends factoryball
	{
		public $sport = 'soccer ball';
		public $color = 'black and white';
		public $bounce = true;
		public $price = 20.00;
	}
?>
