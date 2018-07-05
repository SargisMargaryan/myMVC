<?php

/*abstract class man{
	public $name;
	public $surname;
	public function __construct($n,$s)
	{
		$this->name = $n;
		$this->surname = $s;
	}
	abstract function get_salery();
}

class workTime extends man{
	public $sum;
	public $time;
	public function __construct($n,$s,$t,$sum)
	{
		parent:: __construct($n,$s);
		$this->time = $t;
		$this->sum = $sum;
	}

	public function get_salery(){
		return $this->time * $this->sum;
	}
}


class fixed extends man{
	public $sum;
	public $time;
	public function __construct($n,$s,$t,$su)
	{
		parent:: __construct($n,$s);
		$this->time = $t;
		$this->sum = $su;
	}
	public function get_salery(){
		return $this->time * $this->sum;
	}
}

class pracent extends man{
	public $sum;
	public $time;
	public function __construct($n,$s,$t,$su)
	{
		parent:: __construct($n,$s);
		$this->time = $t;
		$this->sum = $su;
	}
	public function get_salery(){
		return ($this->time * $this->sum) + ($this->time * $this->sum)/100;
	}
}

class factory {
	public $name;
	public $adress;
	public $worker = [];
	public function __construct($name,$add)
	{
		$this->name=$name;
		$this->adress=$add;  
	}
	public function getworker(man $worker)
	{
		$this->worker[] = $worker;
	}
	public function show()
	{
     echo $this->name.'gorcarani hasce-'.$this->adress." ashxatavarcneri cucak".'<br>';

		echo '<table border="2">';
		foreach ($this->worker as $value) {
		    echo "<tr>
					<td>$value->name</td>
					<td>$value->surname</td>
					<td>".$value->get_salery()."</td>
					<td>".get_class($value)."</td>
				</tr>";
		}
		echo '</table>';
	}
}

$obj1 = new pracent('Gor', 'Vardanyan', 12, 100);
$obj2 = new workTime('Jeki', 'Chan', 10, 50);
$obj3 = new fixed('Bruce', 'Li', 12, 50);
$x = new factory('Grand candy','Yerevan');
$x->getworker($obj1);
$x->getworker($obj2);
$x->getworker($obj3);
$x->show();*/

					/*magic method*/
// class test{
// 	public $name;
// 	public function getname()
// 	{
// 		return $this->name;
// 	}
// 	public function __call($a,$b)
// 	{
// 		if ($a=='min') {
// 			return min($b);
// 		}
// 		elseif ($a=='max') {
// 			return max($b);
// 		}
// 	}
// }
// $t = new test;
/*$t->setadres($a,$b);
*///echo 'min '.$t->min(12,5,48,62,36,-8,-20).'<br>';
//echo 'max '.$t->max(12,5,48,62,36,-8,-20);

//---------------------------------------------------------------------------------
class student{
	public $name='Armen';
	protected $surname = 'Ashotyan';
	private $city = 'Yerevan';
	public $age = 36;
	public function __call($name,$arg)
	{
		$sub0 = substr($name, 0,3);
		$sub1 = substr($name, 3);
		if ($sub0 ==='set') {
			if (property_exists($this, $sub1)) {
				 $this->$sub1=$arg[0];
			}
		}
		if ($sub0 ==='get') {
			if (property_exists($this, $sub1)) {
				return $this->$sub1;
			}
		}
	}

	public function __sleep()
	{
		return array('name','city');
	}
/*	public function __wakeup()
	{
		$this->name = 'Galust';
		$this->surname = 'Sahakyan';
		$this->age = 174;
		$this->city = 'Yerevan';

	}*/

}


/*$t = new student;
$t->setname('Armen');
print_r($t->getname());
$t1 = new student;
$t1->setcity('Yerevan');
print_r($t1->getcity());
*/
//---------------------------------------------
$obj = new student;
$str = serialize($obj);
/*echo $str;
*/print_r($str);
//------------***----------------
/*public function __invoke($x)
{
	echo $x*$x;
}
$s = new student;
$s(10);*/


//----------------------------------------------------------------

/*class test1{
	public $name;
	public function getname()
	{
		return $this->name;
	}
	static function __callStatic($a,$b)
	{
		# code...
	}
}
*/
//----------------------------------------------------------------

//erku fayl index.php ev ajax planet.php
// petqa unennanq erku class 
// class planet{
// 	private $name;
// 	public $radius;
// 	public $x;
// 	public $y;
// 	public $parent;
// 	public $alfa;
// 	public $delta;
// 	__construct
// 	get_cord(){
// 		return [$name,$x,$y];
// 	}
// }
// class solar{
// 	const X = 640;
// 	const Y = 360;
// 	$planets = [];
// 	get_cord(){
// 		foreach ($variable as $key => $value) {
// 			/*json incode uxarkelindex.php*/
// 		}
// 	}
// }
// if (!isset($_SESSION['alfa'])) {
// 	$_SESSION['alfa']
// }