<?php
class Database
{
    private static $dbName = 'djbruder' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'djbruder';
    private static $dbUserPassword = '583884';
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }

	   
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
	
	public static function prepare($sql, $values)
	{
		$pdo = new PDO(
        "mysql:host=localhost;dbname=djbruder",
        "djbruder", "583884");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = $pdo->prepare($sql);
		$query->execute($values);
		return $query;
	}
}
?>