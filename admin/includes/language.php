<?php
$lang = "uz";

if (isset($_GET['lang'])&&$_GET['lang']=="uz"){
//    $uz = "selected";
    $lang = "uz";
}elseif (isset($_GET['lang'])&&$_GET['lang']=="eng"){
//    $uz2 = "selected";
    $lang = "eng";
}elseif (isset($_GET['lang'])&&$_GET['lang']=="ru"){
//    $uz2 = "selected";
    $lang = "ru";
}
$nav = array(
    'uz' => array(
        'about' => "Biz haqimizda",
        'universities' => "Universitetlar",
        'otziv' => "Sharhlar",
        'results' => "Natijalar",
        'send' => "Murojaat yuborish",
        'wants' => "Talaba Bo'lishni xohlayman",
        'lang' => "O'zbekcha",
        'people' => "dunyoning TOP - 1000 va eng yaxshi oliygohlarida ta'lim olish istagida bo'lganlarga bepul maslahatlar berish, qo'llab-quvvatlash va talaba bo'lishga ko'maklashuvchi ishonchli konsalting kompaniya",
        'uchun' => "Biz siz uchun",
        'free'=> "MUTLAQO BEPUL KONSULTATSIYA BERAMIZ",
        'givinfo' => "XORIJ UNIVERSITETLARI HAQIDA MA'LUMOTLAR BERAMIZ",
        'docs' => "HUJJATLARNI TOPSHIRISHDA YORDAM BERAMIZ",
        "help"  => "TALABA BO’LISHINGIZ UCHUN KO’MAKLASHAMIZ",
        "service" => "SIFATLI VA ISHONCHLI XIZMAT KO’RSATAMIZ",
        'murojaat' => "BIZGA MUROJAAT QILING!",
        'bepul' => "BEPUL KONSULTATSIYA OLING!",
        'choose' => "UNIVERSITET VA SOHANI TANLANG!",
        'apply' => "HUJJATLARNI TOPSHIRING!",
        'bestudent' => "TALABA BO'LING!",
        'description' => "BIZNING YORDAMIMIZDA MAQSADINGIZGA ERISHIB, OLIYGOHDA TALABA BO’LING!",
        'faoliyat' => "Faoliyat (yil)",
        'davlatlar' => "Davlatlar",
        'filiallar' => "Filiallar",
        'xursand' => "XURSAND MIJOZLARIMIZDAN SHARHLAR",
        'easy' => "PERFECTO CONSULTING BILAN DUNYO UNIVERSITETLARIDA OSON TALABA BO'L",
        'name'  => "Ismingiz",
        "tel" => "Telefon raqamingiz",
        'country' => "Qaysi mamlakatda o'qishni xohlaysiz?",
        'close' => "Yopish",
        'strategiya' => "Qabul strategiyasi",
        'bilimsiz' => "Bilim olishni qimmat deb hisoblasang, Bilimsizlik qanchaga tushishini o'ylab ko'r!",
        'aloqa' => "Aloqa",
        'address' => "Toshkent, Bekobod shahar 14-daha, 46-uy, 1-qavat",
        'moljal' => "Mo'ljal: Okean market",
<<<<<<< HEAD
		'kelajak' => "Sizning kelajagingiz - Bizning maqsadimiz!"
=======
		'kelajak' => "Sizning kelajagingiz - Bizning maqsadimiz!",
        'other' => "Boshqa",
        'origin' => "Qayerdansiz?",
        'tcity' => "Toshkent shahar",
        'tregion' => "Toshkent viloyati",
        'samarkand' => "Samarqand",
        'fergana' => "Farg'ona",
        'andijan' => "Andijon",
        'namangan' => "Namangan",
        'syrdarya' => "Sirdaryo",
        'jizzakh' => "Jizzax",
        'kashka' => "Qashqadaryo",
        'surxon' => "Surxondaryo",
        'bukhara' => "Buxoro",
        'navai' => "Navoiy",
        'kharezm' => "Xorazm",
        'karakalpak'=> "Qoraqalpog'iston"

>>>>>>> ce7ce54 (adding a region to the references)
),
    'eng' => array(
        'name'  => "Enter your name",
        "tel" => "enter your telephone number",
        'country' => "Which country do you want to study?",
        'close' => "Close",

        'about' => "About us",
        'universities' => "Universities",
        'otziv' => "Comments",
        'results' => "Results",
        'send' => "Leave a message",
        'wants' => "I want to be a Student",
        'lang' => "English",
        'people' => "a reliable consulting company that provides free advice, support and assistance to those who want to study in the TOP - 1000 and the best universities in the world",
        'uchun' => "We for you",
        'free'=> "Give a free consulting service",
        'givinfo' => "Give lots of informations about foreign universities",
        'docs'=> 'Help to apply documents',
        'help' => "Help to be a student",
        'service' => "Have a reliable and high quality service",
        'murojaat' => "Contact us!",
        'bepul' => "GET A FREE CONSULTATION!",
        'choose' => "CHOOSE UNIVERSITY AND A FACULTY!",
        'apply' => "apply documents!",
        'bestudent' => "be a student!",
        'description' => "ACHIEVE YOUR GOALS AND BECOME A STUDENT at UNIVERSITY WITH PERFECTO CONSULTING",
        'faoliyat' => "Activity (year)",
        'davlatlar' => "Country",
        'filiallar' => "Branches",
        'xursand' => "COMMENTS FROM OUR HAPPY STUDENTS",
        'easy' => "EASY WAY TO THE WORLD UNIVERSITIES WITH PERFECTO CONSULTING",
        'strategiya' => "Admission strategy",
        'bilimsiz' => "If you think education is expensive, think about how much ignorance costs",
        'aloqa' => "Contact",
        'address' => "Tashkent, Bekabad city 14-Avenue, 46, 1-floor",
        'moljal' => "Destination: Okean market",
<<<<<<< HEAD
        'kelajak' => "Your future is our goal!"
=======
        'kelajak' => "Your future is our goal!",
        'other' => "Other",
        'origin' => "Where are you from?",
        'tcity' => "Tashkent city",
        'tregion' => "Tashkent region",
        'samarkand' => "Samarkand",
        'fergana' => "Fergana",
        'andijan' => "Andijan",
        'namangan' => "Namangan",
        'syrdarya' => "Syrdarya",
        'jizzakh' => "Jizzakh",
        'kashka' => "Kashkadarya",
        'surxon' => "Surkhandarya",
        'bukhara' => "Bukhara",
        'navai' => "Navai",
        'kharezm' => "Kharezm",
        'karakalpak'=> "Karakalpakistan"


>>>>>>> ce7ce54 (adding a region to the references)
    ),
    'ru' => array(
        'name'  => "Ваше имя",
        "tel" => "Ваш номер телефона",
        'country' => "В какой стране ты хочешь учиться?",
        'close' => "Закрыть",

        'about' => "О нас",
        'universities' => "Университеты",
        'otziv' => "Комментарии",
        'results' => "Результаты",
        'send' => "Оставить заявку",
        'wants' => "Я хочу быть студентом",
        'lang' => "Русский",
        'people' => "Надежная консалтинговая компания, которая предоставляет бесплатные консультации,поддержка   и помощь студентам, которые хотят учиться в ТОП-1000 и лучших университетах мира",
        'uchun' => "Мы ДЛЯ ВАС",
        'free' => "АБСОЛЮТНО БЕСПЛАТНО КОНСУЛЬТИРУЕМ",
        'givinfo' => "ПРЕДОСТАВЛЯЕМ ИНФОРМАЦИИ ОБ ИНОСТРАННЫХ УНИВЕРСИТЕТАХ",
        'docs' => "ПОМОЖЕМ ВАМ ПОДГОТОВИТЬ И ПОДАТЬ ДОКУМЕНТЫ",
        "help" => "ПОМОЖЕМ СТАТЬ СТУДЕНТОМ",
        "service" => "ПРЕДОСТАВЛЯЕМ КАЧЕСТВЕННОЕ И НАДЕЖНОЕ ОБСЛУЖИВАНИЕ",
        'murojaat' => "СВЯЖИТЕСЬ С НАМИ!",
        'bepul' => "ПОЛУЧИТЕ БЕСПЛАТНУЮ КОНСУЛЬТАЦИЮ!",
        'choose' => "ВЫБЕРИТЕ УНИВЕРСИТЕТ И ФАКУЛЬТЕТ!",
        'apply' => "ПОДАЙТЕ ДОКУМЕНТЫ!",
        'bestudent' => "СТАНЬТЕ СТУДЕНТОМ!",
        'description' => "ДОСТИГАЙТЕ СВОЕЙ МЕЧТЫ СТАТЬ СТУДЕНТОМ С НАШЕЙ ПОМОЩЬЮ!",
        'faoliyat' => "Активность (год)",
        'davlatlar' => "Страна ",
        'filiallar' => "Филиалы",
        'xursand' => "КОММЕНТАРИИ ОТ НАШИХ ДОВОЛЬНЫХ СТУДЕНОВ",
        'easy' => "ЛЕГКО СТАНЬТЕ СТУДЕНТОМ В УНИВЕРСИТЕТАХ МИРА ВМЕСТЕ С PERFECTO CONSULTING",
        'strategiya' => "Стратегия приёма",
        'bilimsiz' => "ЕСЛИ ДУМАЕШЬ, ЧТО ОБРАЗОВАНИЕ ДОРОГОЕ, ТО ПОДУМАЙ О ТОМ ВО СКОЛЬКО ОБОЙДЁТСЯ НЕВЕЖЕСТВО!",
        'aloqa' => "Связь",
        'address' => "Ташкент, г. Бекабад  14-мкр, 46-дом, 1-этаж",
        'moljal' => "Ориентир: магазин ОКЕАН",
<<<<<<< HEAD
        'kelajak' => "Ваше будущее - наша цель!"
=======
        'kelajak' => "Ваше будущее - наша цель!",
        'other' => "Other",
        'origin' => "Where are you from?",
        'tcity' => "Tashkent city",
        'tregion' => "Tashkent region",
        'samarkand' => "Samarkand",
        'fergana' => "Fergana",
        'andijan' => "Andijan",
        'namangan' => "Namangan",
        'syrdarya' => "Syrdarya",
        'jizzakh' => "Jizzakh",
        'kashka' => "Kashkadarya",
        'surxon' => "Surkhandarya",
        'bukhara' => "Bukhara",
        'navai' => "Navai",
        'kharezm' => "Kharezm",
        'karakalpak'=> ""


>>>>>>> ce7ce54 (adding a region to the references)
    ),
);
?>