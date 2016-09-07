<?php
/**
* @author Piotr "PeterMax" Martficki <petermax_30@gmx.co.uk>
* @copyright 2016 
* @version 1.0
* @package MySQLi_My_Manager 
* @category Database
*/

final class Mysqli_My_Manager extends mysqli
{
	protected $db_connect;

	public function __construct() 
	{ 
	}
     
    /**
     * Connect database
     */
	public function conn() 
    {
        $this->db_connect = parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ( $this->connect_error ) {
            throw new Exception(' Failed Connect to MySQL Database <br /> Error Info : ' . $this->connect_error);
        }
        
        $this->set_charset('utf8');         
    }
	
	/**
     * [select : select data]
     * @param  string $select [column name]
     * @param  string $from   [table name]
     * @param  string $where  [optional  ex: WHERE id='1']
     * @return object
     */
    public function select($select, $from, $where = '') 
    {
    	return $this->query("SELECT {$select} FROM {$from} {$where}");
    }  
}
?>