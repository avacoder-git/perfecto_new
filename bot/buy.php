<?php


if ($text =="Sotib olish")
{
    $reply = "Tanlang:";


    $i = 0;
    $buttons = array();

    foreach ($categories as $category) {

        if($category->status == "completed")
        {
            $i++;
            $buttons[] = Keyboard::inlineButton(['text' => $category->name, "callback_data" => $category->id]);
            if($i%2 ==0)
            {
                $inline_keyboard
                    ->row(...$buttons);
                $buttons = array();
            }
        }

    }
    $inline_keyboard
        ->row(...$buttons);


    $telegram->sendMessage([
        'chat_id'=>$chat_id,
        'text' =>$reply,
        'reply_markup' => $inline_keyboard
    ]);

}
?>