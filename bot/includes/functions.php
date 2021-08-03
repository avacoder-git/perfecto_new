<?php

use Telegram\Bot\Keyboard\Keyboard;

function delete_query_msg()
{
    global $telegram;
    global $query_user_id;
    global $query_msg_id;

    return $telegram->deleteMessage([
        "chat_id" => $query_user_id,
        "message_id" => $query_msg_id
    ]);

}

function send_message($text, $chat_id, $reply_markup)
{
    global $telegram;

    return $telegram->sendMessage([
        "text" => $text,
        "chat_id"=>$chat_id,
        "reply_markup"=> $reply_markup
    ]);

}


function crud_categroy($properties, $table_name)
{
    global $query_user_id;
    global $chat_id;
    global $back;
    global $query_data;
    global $main_menu;
    global $text;
    global $admin_main_menu;
    foreach ($properties as $property) {

        if ($query_data == "edit_" . $table_name . "/" . $property->id) {

            delete_query_msg();
            $property->status = "edit";
            $property->save();
            $reply = $table_name . "ga yangi nom kiriting:";
            send_message($reply, $query_user_id, $back);

        }
        if ($query_data == "delete_" . $table_name . "/" . $property->id )
        {

            delete_query_msg();

            if ($property->is_deletable()) {
                $property->delete();
                $reply = $property->name . " - O'chirildi";

            }else
            {
                $reply = "Bu " . $table_name. " ni o'chirib bo'lmaydi, chunki bunda mavjud tovarlar bor";
            }
            send_message($reply, $query_user_id, $admin_main_menu);
            admin_inline_buttons($properties, $chat_id);

        }
    }
    if ($query_data == "add_" . $table_name) {
        delete_query_msg();

        $reply = "Nom kiriting:";
        send_message($reply, $query_user_id, $admin_main_menu);

        $class_name = $table_name;
        $object = new  $class_name();

        $object->status = "noname";
        $object->save();
    }
}



function create_property($properties)
{

    global $edit_menu;
    global $text;
    global $chat_id;
    global $back;
    global $main_menu;
    foreach ($properties as $property) {


        if ($property->status=="noname")
        {
            $property->name = $text;
            $property->status = "completed";
            $property->save();
            $reply = $text." - Muvaffaqiyatli qo'shildi" ;
            send_message($reply, $chat_id, $back);
            admin_inline_buttons($properties, $chat_id);
        }

        if ($property->status=="edit")
        {
            $property->name = $text;
            $property->status = "completed";
            $property->save();
            $reply = $text." - Muvaffaqiyatli O'zgartirildi" ;
            send_message($reply, $chat_id, $back);
            admin_inline_buttons($properties, $chat_id);
        }
    }


}


function admin_inline_buttons($properties, $chat_id)
{
    $i = 0;

    $inline_keyboard = Keyboard::make()->inline();

    foreach ($properties as $property) {

        if ($property->status == "completed") {
            $i++;
            $buttons[] = make_inline_button($property->name, $property->name."/");
            if ($i % 2 == 0) {
                $inline_keyboard
                    ->row(...$buttons);
                $buttons = array();
            }
        }

    }

    $inline_keyboard
        ->row(...$buttons);

    $inline_keyboard->row(
        make_inline_button("+", "add_category")
    );

    $reply = "Nima qilamiz?";

    send_message($reply, $chat_id , $inline_keyboard);
}



?>
