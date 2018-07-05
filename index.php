<?php
namespace Verjine;
http://cidocs.ru/213/tutorial/static_pages.html
//clone __clone
/*final class a{
		final  function f(){

	}
}
trait aa{
	public function live()
	{
		# code...
	}
}
class a{
	use aa;
}
class b{
	use aa;
}
 
try{
	if (!isset($_POST['xxx'])) {

	}
}cache(e)*/

/*function inverce($x)
{
	if ($x==0) {
		throw new Exception('Divizion by 0');	
	}
	return 1/$x;
}
try{
	echo inverce(10);
	echo inverce(0);
	echo 'end';
}	
catch(Exception $e){
	echo $e->getMessage();
}*/
class test{
	public function first()
	{
		echo __function__.'<br>';
	}
	public function second()
	{
		echo __method__.'<br>';
	}
	public function thread()
	{
		echo __class__.'<br>';
	}
}
echo __namespace__.'<br>';
echo __dir__.'<br>';
echo __file__.'<br>';
echo __line__.'<br>';
$ob = new test;
$ob->first();
$ob->second();
$ob->thread();

