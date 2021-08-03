<?php


class Category extends DB_object {

    protected static $db_table = "category";
    protected static $db_table_fields = array("id","name", "status");

    public $id;
    public $name;
    public $status;

    public function is_deletable(){

        global $database;

        $sql ="SELECT * FROM product as p inner join category as c on c.id=p.category_id where c.id=".$database->escape_string($this->id);
        $row = mysqli_fetch_array($database->query($sql));

        return (count($row)==0)?true:false;

    }


}







?>