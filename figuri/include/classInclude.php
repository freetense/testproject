<?php
class Pryamougolnik
{
	var $a = 6;
	var $b = 5;
	function square()
	{
		return $this->a*$this->b;
	}
}
class Krug
{
	var $r = 8;
	function square()
	{
		return round($this->r*$this->r*M_PI, 2);
	}
}
class Piramida
{
	var $d = 12;
	var $k = 7;
	function square()
	{
		return round(($this->d*$this->d) + (2*$this->d*sqrt(($this->k*$this->k)+(($this->d*$this->d)/4))), 2);
	}
}
?>