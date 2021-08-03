<?php
class User extends DB_object{

    protected static $db_table = "users";
    protected static $db_table_fields = array("id","name","user_id","status", "phone");

    public $id;
    public $name;
    public $user_id;
    public $status;
    public $phone;





    public static function is_new_user($user_id){
        $users = User::find_all();
        $i = 0;

        foreach ($users as $user) {
            if ($user->user_id == $user_id)
            {
                $i++;
            }
        }
        return !$i;
    }







}



?>