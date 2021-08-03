<?php

use Telegram\Bot\Keyboard\Keyboard;
require_once ("includes/init.php");
$keyboard = new Keyboard();

$main_menu  = $keyboard->setResizeKeyboard(true)
    ->row(
        Keyboard::button(['text'=>"Sotib olish"])
    )->row(
        Keyboard::button(['text'=>"Sotish"])
    );

$keyboard = new  Keyboard();
$admin_main_menu  = $keyboard->setResizeKeyboard(true)
    ->row(
        Keyboard::button(['text'=>"✏️"]),
        Keyboard::button(['text'=>"👁‍🗨"]),
        Keyboard::button(['text'=>"🆕"])
    );
$keyboard = new  Keyboard();

$edit_menu = $keyboard->setResizeKeyboard(true)
    ->row(
        Keyboard::button(["text" => $kategoriyalar]),
        Keyboard::button(["text" => $brendlar])
    )->row(
    Keyboard::button(["text" => $modellar]),
    Keyboard::button(["text" => $tovarlar])
    )->row(
        Keyboard::button(['text'=>"Bosh menyuga"])
    );

$keyboard = new  Keyboard();


$back = $keyboard->setResizeKeyboard(true)
    ->row(
        Keyboard::button(['text'=>"Bosh menyuga"])
    );


function make_inline_button($text, $callback_data)
{
    return Keyboard::inlineButton(['text'=>$text, 'callback_data'=>$callback_data]);
}
$keyboard = new Keyboard();

$back  = $keyboard->setResizeKeyboard(true)
    ->row(
        Keyboard::button(['text'=>"Ortga"])
    );



?>