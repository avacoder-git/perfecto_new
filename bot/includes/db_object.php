<?php

class DB_object{


    public static function find_all()
    {

        return static::find_by_query("select * from " . static::$db_table ." ");


    }

    public static function find_by_id($id)
    {
        return  static::find_by_query("select * from ".static::$db_table. " where id=".$id);
    }

    public static function find_by_query($sql)
    {
        global $database;
        $objects = array();

        $result = $database->query($sql);

        while ($row = mysqli_fetch_array($result))
        {
            $objects[] = static::instantiation($row);
        }

        return $objects;

    }




    public static function instantiation($row)
    {
        $object_name = get_called_class();
        $new_object = new $object_name;

        foreach ($row as $key => $value) {
            if ($new_object->has_attribute($key)) {
                $new_object->$key = $value;
            }
        }

        return $new_object;

    }

    private  function has_attribute($attribute){

        $properties = get_object_vars($this);

        return array_key_exists($attribute, $properties);

    }





    public function save(){

        return isset($this->id) ? $this->update() : $this->create();



    }



    protected function properties()
    {
        $properties = array();
        foreach (static::$db_table_fields as $db_field){

            if(property_exists($this, $db_field))
            {
                $properties[$db_field] = $this->$db_field;
            }

        }

        return $properties;

    }


    protected function clean_properties(){

        global $database;

        $clean_properties = array();

        foreach ($this->properties() as $key => $values)
        {

            $clean_properties[$key] = $database->escape_string($values);

        }

        return $clean_properties;

    }





    public function create(){

        global $database;

        $properties = $this->clean_properties();

        $sql = "insert into " . static::$db_table . " (" . implode(", " , array_keys($properties)) . ") ";
        $sql .= " values('" . implode("' , '" , array_values($properties))  . "' )";

        if ($database->query($sql))
        {
            $this->id = $database->the_insert_id();
            return true;
        }
        else{
            return false;
        }
    }

    public function update(){

        global $database;


        $properties =   $this->clean_properties();

        $properties_pairs = array();

        foreach ($properties as $key => $value)
        {

            $properties_pairs[] = "{$key}='{$value}'";

        }

        $sql ="update  " . static::$db_table . " set ";

        $sql .= implode(", ", $properties_pairs);


        $sql .= " where id=" .$database->escape_string($this->id);

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true: false;

    }
    public function delete(){

        global $database;

        $sql ="delete from  " . static::$db_table . " where  ";
        $sql .= "id= " .$database->escape_string($this->id);
        $sql .= " limit 1";
        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true: false;

    }

    public static function count_all()
    {
        global $database;

        $sql = "select count(*) from ". static::$db_table;
        $result = $database->query($sql);
        $row = mysqli_fetch_array($result);

        return array_shift($row);
    }

    public static function find_by_status($status)
    {
        $sql = "select * from ".static::$db_table." where status='{$status}'";
        return self::find_by_query($sql);
    }


}






?>
