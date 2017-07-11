<?php

	$server='myysql5.000webhost.com';
	$user='a4470929_admin';
	$password='formun92';
	$dbname= 'a4470929_pmun';
	
	$conn = new mysqli($server,$user,$password,$dbname);
	if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
	}
	$connected=1;
	
	function query(/* $sql [, ... ] */)
    {
        global $server,$user,$password,$dbname;
		
		// SQL statement
        $sql = func_get_arg(0);

        // parameters, if any
        $parameters = array_slice(func_get_args(), 1);

        // try to connect to database
        static $handle;
        if (!isset($handle))
        {
            try
            {
                // connect to database
                $handle = new PDO("mysql:dbname=" . $dbname . ";host=" . $server, $user, $password);

                // ensure that PDO::prepare returns false when passed invalid SQL
                $handle->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
            }
            catch (Exception $e)
            {
                // trigger (big, orange) error
                trigger_error($e->getMessage(), E_USER_ERROR);
                exit;
            }
        }

        // prepare SQL statement
        $statement = $handle->prepare($sql);
        if ($statement === false)
        {
            // trigger (big, orange) error
            trigger_error($handle->errorInfo()[2], E_USER_ERROR);
            exit;
        }

        // execute SQL statement
        $results = $statement->execute($parameters);
        // return result set's rows, if any
        if ($results !== false)
        {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }
?>