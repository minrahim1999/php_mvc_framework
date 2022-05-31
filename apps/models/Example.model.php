<?php
/**
 * @author MinRahim <minrahim1999@gmail.com>
 * 
 * Please be aware this is for learn how MVC work.
 * Please dont use this for production because of the security reasons.
 * Please learn other framework that been maintenance by developer.
 * You can edit this file and add more security for your own comfort.
 */

/**
 * App Example Class 
 */
class Example
{
    private $db;

    // This connect automatic with database
    public function __construct()
    {
        $this->db = new Database;
    }

    // This function get all the example data from example table
    public function getExample()
    {
        $this->db->query('SELECT * FROM example ORDER BY created_at ASC');

        $results = $this->db->resultSet();

        return $results;
    }
}
?>