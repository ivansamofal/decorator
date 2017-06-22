<?
		//автозагрузка классов
	function __autoload( $className ) {
	  $className = strtolower(str_replace( "..", "", $className ));
	  require_once( "$className.php" );
	}
	//$apple = new apple;
	$redApple = new ApplePropertiesDecorator(new apple);
	//echo $apple->getFruit();
	echo $redApple->getFruit();