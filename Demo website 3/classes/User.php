<?php 
require_once('DBConnect.php');

class User
{
	public static $table = 'users';

	public function __construct($rows) 
	{
		$this->init($rows);
	}


	public static function make($row)
	{
		return new User($row);
	}  


	public function init($rows)
	{
		foreach ($rows as $key => $row) {
			$this->$key = $row;
		}
	}

	
	public static function getUsers()
	{
		$connection = new DBConnect;
		$query = "SELECT * FROM " . self::$table;
        $rows = $connection->select($query);

        $users = array();

        foreach ($rows as $key => $row) {
        	$users[] = self::make($row);
        }

		return $users;

	}


	public static function insert($params) 
	{
		$connection = new DBConnect;
		return $connection->insert(self::$table, $params);
	}


	public function updateData($columns, $conditions)
	{
		
		$connection = new DBConnect;
		$connection->update(self::$table, $columns, $conditions);
	} 


	public static function find($attribute) 
	{

		$connection = new DBConnect;
		$query = "SELECT * FROM " . self::$table;
		$row = current($connection->select($query, $attribute));

		return self::make($row);

	}

}

