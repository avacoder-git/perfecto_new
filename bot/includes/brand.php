<?php

class Brand extends DB_object{

    protected static $db_table = "brand";
    protected static $db_table_fields = array("id","name", "status");

    public $id;
    public $name;
    public $status;


    public static function find_brands_by_category($categroy_id)
    {

        $sql = "select * from ".static::$db_table." inner join product on product.brand_id=brand.id where category_id=".$categroy_id;

        return self::find_by_query($sql);


    }

}

?>
