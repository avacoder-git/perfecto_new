<?php

class Reference extends Db_object {

    protected static $db_table = "clients";
<<<<<<< HEAD
    protected $db_table_fields = array("id", "name","phone", "target","date");
=======
    protected $db_table_fields = array("id", "name","phone", "target", 'origin',"date");
>>>>>>> ce7ce54 (adding a region to the references)

    public $id;
    public $name;
    public $phone;
    public $target;
<<<<<<< HEAD
=======
    public $origin;
>>>>>>> ce7ce54 (adding a region to the references)
    public $date ="CURRENT_TIMESTAMP";



    public static function delete_all()
    {
        global $database;

        $sql = "delete from ".static::$db_table;

        return $database->query($sql);

    }

}







?>
