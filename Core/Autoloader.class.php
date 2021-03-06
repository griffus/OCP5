<?php
namespace Core;

class Autoloader
{	
	public static function Register()
	{
		spl_autoload_register(array(__CLASS__, 'Autoload'));
	}
	
	public static function Autoload($name)
	{		
		if(strpos($name, __NAMESPACE__.'\\') === 0)
		{
			$name = str_replace(__NAMESPACE__.'\\', '', $name);
			$name = str_replace('\\', '/', $name);
			
			if(strpos($name, 'Exception') > 0)
				return;
		
		if(file_exists(__DIR__.'/'.$name.'.class.php'))
			require(__DIR__.'/'.$name.'.class.php');
		else
			require(__DIR__.'/'.$name.'.php');
		}		
	}	
}
?>