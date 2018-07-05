<?php

// class solar{
// 	const X = 600;
// 	const Y = 360;
// 	public $planets = [];
// 	public function get_cord(){
// 		foreach ($planets as $val) {

// 		}
// 	}
// }
class planet{
	const X = 600;
	const Y = 360;
	public $name;
	public $radius;
	public $x;
	public $y;
	public $parent;
	public $alfa;
	public $delta;
	public function setsolar($x0,$y0)
	{
		self::X = $x0;
		self::Y = $y0;
	}
	public function get_cord(){
		return ['x0'=>$x0,'y0'=>$y0,'x1'=>$x1,'y1'=>$y1,'x2'=>$x2,'y2'=>$y2,'x3'=>$x3,'y3'=>$y3,'x4'=>$x4,'y4'=>$y4,'x5'=>$x5,'y5'=>$y5,'x6'=>$x6,'y6'=>$y6];
	}
}
/**/
if (!isset($_SESSION['alfa'])) {
	$_SESSION['alfa'];
}
$ob = new planet;
$php_arr = $ob->get_cord();
$js_json = json_encode($php_arr);
echo $js_json;