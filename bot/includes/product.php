<?php

class Product extends DB_object{

    protected static $db_table = "product";
    protected static $db_table_fields = array("id","status", "brand_id", "model_id","category_id", "user_id");

    public $id;
    public $status;
    public $brand_id;
    public $model_id;
    public $category_id;
    public $user_id;
    public $name;
    public $price;
    public $description;
    public $photo;



    public static function find_products($category_id, $brand_id, $model_id)
    {

        $sql = "select * from product inner join product_details on product.id=product_details.id";
        $sql .= " where category_id=".$category_id." and brand_id=".$brand_id." and model_id=".$model_id;
        return self::find_by_query($sql);

    }

}

?>
