<?php
include ("vendor/autoload.php");
include ("includes/init.php");
use Telegram\Bot\Api;
use Telegram\Bot\Keyboard\Keyboard;


$telegram = new Api('1619073447:AAEIEsbh7EwRrATF_3V4LVdqR-XXnRCpL8Y');
$result = $telegram->getWebhookUpdate();

$text = $result['message']['text'];

$chat_id = $result['message']['chat']['id'];
$username = $result['message']['username'];
$name = $result['message']['first_name']. $result['message']['last_name'];

$path = "perfectoconsulting.uz/bot/bot.php";


$update = file_get_contents('php://input');
$update = json_decode($update,true);


$query =  $update["callback_query"];


$query_id = $query["id"];
$query_user_id = $query['from']["id"];
$query_data = $query["data"];
$query_msg_id = $query['message']["message_id"];

include("includes/functions.php");


$keyboard = new Keyboard();



$inline_keyboard = Keyboard::make()->inline();

$categories = Category::find_all();
$brands = Brand::find_all();
$models = Model::find_all();

$admins = User::find_by_status("admin");

require_once("includes/language.php");
require_once("includes/keyboard.php");


foreach ($admins as $admin) {

    if ($admin->user_id==$chat_id|| $admin->user_id==$query_user_id)
    {


        create_property($categories);

        if ($text=="/start")
        {
            send_message("Admin menyu", $chat_id, $admin_main_menu);
        }

        if ($text == $edit)
        {
            $reply = "Nimani o'zgartiramiz?";

            send_message($reply, $chat_id, $edit_menu);
        }
        if ($text==$main_menu_text)
        {
            send_message("Bosh menyu", $chat_id, $admin_main_menu);
        }
        if ($text == $kategoriyalar)
        {
            $reply = "Kategoriyalarda nimalar qilish mumkin? \n";
            $reply .= "1. Nomini o'zgartirish  \n";
            $reply .= "2. O'chirish (agar kategoriyada hech qanday tovar bo'lmasa  \n";
            $reply .= "3. Qo'shish  \n \n";

            send_message($reply, $chat_id, $back);

            admin_inline_buttons($categories, $chat_id);


        }

        foreach ($categories as $category) {

            if($query_data == $category->name."/")
            {

                delete_query_msg();

                $inline_keyboard->row(
                    make_inline_button($edit, "edit_category/".$category->id),
                    make_inline_button($trash, "delete_category/".$category->id)
                );

                send_message($category->name, $query_user_id, $inline_keyboard);
            }
        }


        break;
    }
    elseif($admin->user_id!=$chat_id){

        if ($text =="/start")
        {
            $reply = "Salom";

            send_message($reply, $chat_id, $main_menu);
        }

        $categories = Category::find_all();

        $buttons = array();
        $i = 0;

        if ($text == "Sotib olish") {
            $reply = "Tanlang:";


            $i = 0;

            foreach ($categories as $category) {

                if ($category->status == "completed") {
                    $i++;
                    $buttons[] = make_inline_button($category->name, $category->name."/");
                    if ($i % 2 == 0) {
                        $inline_keyboard
                            ->row(...$buttons);
                        $buttons = array();
                    }
                }

            }
            $inline_keyboard
                ->row(...$buttons);
            send_message($reply,$chat_id, $inline_keyboard);
        }


        foreach ($categories as $category) {

            if($query_data == $category->name."/")
            {

                delete_query_msg();
                $reply = $category->name."/";

                $brands = Brand::find_brands_by_category($category->id);

                foreach ($brands as $brand)
                {
                    $inline_keyboard->row(make_inline_button($brand->name,$brand->name."/"));

                }

                send_message($reply, $query_user_id, $inline_keyboard);
            }

            $brands = Brand::find_all();

            foreach ($brands as $brand)
            {

                if ($query_data == $category->name."/".$brand->name."/")
                {
                    delete_query_msg();

                    $reply = $category->name."/".$brand->name."/";

                    $models = Model::find_by_models_brand_category($brand->id, $category->id);

                    foreach ($models as $model) {



                        $inline_keyboard->row(Keyboard::inlineButton(['text'=> $model->name, "callback_data" => $reply.$model->name."/"]));

                    }
                    $telegram->sendMessage([
                        "text" => $reply,
                        "chat_id" =>$query_user_id,
                        "reply_markup" =>$inline_keyboard
                    ]);
                }

                $models = Model::find_all();

                foreach ($models as $model) {
                    $reply = $category->name."/".$brand->name."/".$model->name."/";

                    if ($query_data == $reply)
                    {
                        delete_query_msg();

                        $products = Product::find_products($category->id, $brand->id, $model->id);

                        foreach ($products as $product) {
                            $inline_keyboard->row(Keyboard::inlineButton(['text'=> $product->name." - ". $product->price, "callback_data" => $reply.$product->name."/"]));
                        }

                        send_message($reply, $query_user_id, $inline_keyboard);
                    }



                }


            }


        }

        break;
    }
    echo $admin->status;
}

crud_categroy($categories, "category") ;
crud_categroy($brands, "brand") ;
crud_categroy($models, "model") ;



$user = new User();

$user->name = $name;
$user->user_id = $chat_id;
$user->status="user";

if (User::is_new_user($chat_id))
{
    $user->save();
}



?>