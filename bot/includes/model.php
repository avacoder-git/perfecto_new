<?php

class Model extends DB_object{

    protected static $db_table = "model";
    protected static $db_table_fields = array("id","name", "status");

    public $id;
    public $name;
    public $status;

    public static function find_by_models_brand_category($brand_id, $category_id)
    {

        $sql = "select * from  ".static::$db_table."  inner join product on model.id=product.model_id where brand_id=".$brand_id." and category_id=".$category_id;

        return self::find_by_query($sql);


    }




}

?>
