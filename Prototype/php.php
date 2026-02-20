<?php
 if(isset($_POST['button_reset_all']))
 {
    setcookie("name_cookie", "", time() - 3600, "/");                
    setcookie("color_cookie", "#000000", time() - 3600, "/");   
    setcookie("language_cookie", "en", time() - 3600, "/");  
    header('Location: php.php');
    exit ;
 }

 if(isset($_POST['save_profile']))
 {
    setcookie("name_cookie",$_POST['name'],time() + 3600, "/");
    setcookie("color_cookie",$_POST['color'],time() + 3600, "/");
    header("Location: php.php");
    exit ;
 }

 if(isset($_POST['save_language']))
 {
   setcookie("language_cookie",$_POST['language'],time() + 3600, "/" );
   header("Location: php.php");
   exit ;
 }
 $language = isset($_COOKIE['language_cookie']) ? $_COOKIE['language_cookie'] : "en"  ;
  $name = isset($_COOKIE['name_cookie']) ? $_COOKIE['name_cookie'] : "" ;
 $color = isset($_COOKIE['color_cookie']) ? $_COOKIE['color_cookie'] : "rgb(0, 0, 0)" ;
$text = [
    "en" => [
        "greeting" => "Hello",
        "name_placeholder" => "Enter your name",
        "choose_color" => "Choose color",
        "save_button" => "Save",
        "language_label" => "Choose language",
        "reset_all" => "Reset all",
        "en_name" => "English",
        "fr_name" => "French",
        "ar_name" => "Arabic",
        "de_name" => "German",
        "ta_name" => "Tamazight",
        "ma_name" => "Chinese",
        "ru_name" => "Russian"
    ],
    "fr" => [
        "greeting" => "Bonjour",
        "name_placeholder" => "Entrez votre nom",
        "choose_color" => "Choisir la couleur",
        "save_button" => "Enregistrer",
        "language_label" => "Choisir la langue",
        "reset_all" => "Tout réinitialiser",
        "en_name" => "Anglais",
        "fr_name" => "Français",
        "ar_name" => "Arabe",
        "de_name" => "Allemand",
        "ta_name" => "Tamazight",
        "ma_name" => "Chinois",
        "ru_name" => "Russe"
    ],
    "ar" => [
        "greeting" => "مرحبا",
        "name_placeholder" => "أدخل اسمك",
        "choose_color" => "اختر اللون",
        "save_button" => "حفظ",
        "language_label" => "اختر اللغة",
        "reset_all" => "إعادة تعيين الكل",
        "en_name" => "الإنجليزية",
        "fr_name" => "الفرنسية",
        "ar_name" => "العربية",
        "de_name" => "الألمانية",
        "ta_name" => "تامازيغت",
        "ma_name" => "الصينية",
        "ru_name" => "الروسية"
    ],
    "de" => [
        "greeting" => "Hallo",
        "name_placeholder" => "Geben Sie Ihren Namen ein",
        "choose_color" => "Farbe wählen",
        "save_button" => "Speichern",
        "language_label" => "Sprache wählen",
        "reset_all" => "Alles zurücksetzen",
        "en_name" => "Englisch",
        "fr_name" => "Französisch",
        "ar_name" => "Arabisch",
        "de_name" => "Deutsch",
        "ta_name" => "Tamazight",
        "ma_name" => "Chinesisch",
        "ru_name" => "Russisch"
    ],
    "ta" => [
        "greeting" => "ⴰⵣⵓⵍ",
        "name_placeholder" => "ⵙⴽⴻⵙⴻⵎ ⵉⵙⴻⵎ-ⵉⵏⴻⴽ",
        "choose_color" => "ⴼⵔⴻⵏ ⵉⵏⵉ",
        "save_button" => "ⵙⴻⴽⵍⴻⵙ",
        "language_label" => "ⴼⵔⴻⵏ ⵜⵓⵜⵍⴰⵢⵜ",
        "character" => "ⴰⵎⵣⵣⵓⴷ",
        "reset_all" => "ⴰⵙⴻⵎⵎⴻⵏ ⴰⴽⴽ",
        "en_name" => "ⵉⵏⴳⵍⵉⵙⵉⵙ",
        "fr_name" => "ⴼⵔⴰⵏⵙⵉⵙ",
        "ar_name" => "ⵄⴻⵔⴱⵉⵙ",
        "de_name" => "ⴷⵉⵎⴰⵏⴿ",
        "ta_name" => "ⵜⴰⵎⴰⵣⵉⵖⵜ",
        "ma_name" => "ⵛⵉⵏⴻⵙⵉⵙ",
        "ru_name" => "ⵔⵓⵙⵙⵉⵙ"
    ],
    "ma" => [
        "greeting" => "你好",
        "name_placeholder" => "输入你的名字",
        "choose_color" => "选择颜色",
        "save_button" => "保存",
        "language_label" => "选择语言",
        "reset_all" => "全部重置",
        "en_name" => "英语",
        "fr_name" => "法语",
        "ar_name" => "阿拉伯语",
        "de_name" => "德语",
        "ta_name" => "塔马齐格特语",
        "ma_name" => "中文",
        "ru_name" => "俄语"
    ],
    "ru" => [
        "greeting" => "Привет",
        "name_placeholder" => "Введите ваше имя",
        "choose_color" => "Выберите цвет",
        "save_button" => "Сохранить",
        "language_label" => "Выберите язык",
        "reset_all" => "Сбросить всё",
        "en_name" => "Английский",
        "fr_name" => "Французский",
        "ar_name" => "Арабский",
        "de_name" => "Немецкий",
        "ta_name" => "Тамазигт",
        "ma_name" => "Китайский",
        "ru_name" => "Русский"
    ]
];


 $solo_language = $text[$language] ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>project99</title>
</head>
<body style="background: <?php echo $color ;  ?>;">
   <div id="container">
        <div id="collector">
                <form method="POST" id="form_1">
                    <div id="greeting">
                        <?php echo $solo_language['greeting'] ." ". ($name ? $name : "Guest") . "  👋" ?>
                        <?php 
                              date_default_timezone_set("Africa/Casablanca");
                              echo date("Y-m-d H:i:s");
                        ?>
                    </div>

                    <div id="name_placeholder">
                        <?php echo $solo_language['name_placeholder'] ; ?>
                    </div>

                    <div id="name_div">
                        <input type="text" id="name" name="name" >
                    </div>

                    <div id="choose_color">
                        <?php echo $solo_language['choose_color'] ; ?>
                    </div>

                    <div id="color_div">
                        <input type="color" id="color" name="color" value="<?php echo $color; ?>">
                    </div>
                   <button type="submit" name="save_profile"> save kolchi</button>
                </form>


                <form method="POST" id="form_2" >
                    <div id="language_label">
                        <?php echo $solo_language['language_label'] ; ?>
                    </div>

                    <div id="language_div">
                            <select name="language" id="language">
                                <option value="en" id="en" <?php if($language == "en") echo"selected"; ?>>  <?php echo $solo_language['en_name'] ; ?>  </option>
                                <option value="fr" id="fr" <?php if($language == "fr") echo"selected"; ?>>  <?php echo $solo_language['fr_name'] ; ?>  </option>
                                <option value="de" id="de" <?php if($language == "de") echo"selected"; ?>>  <?php echo $solo_language['de_name'] ; ?>  </option>
                                <option value="ta" id="ta" <?php if($language == "ta") echo"selected"; ?>>  <?php echo $solo_language['ta_name'] ; ?>  </option>
                                <option value="ma" id="ma" <?php if($language == "ma") echo"selected"; ?>>  <?php echo $solo_language['ma_name'] ; ?>  </option>
                                <option value="ru" id="ru" <?php if($language == "ru") echo"selected"; ?>>  <?php echo $solo_language['ru_name'] ; ?> </option>
                                <option value="ar" id="ar" <?php if($language == "ar") echo"selected"; ?>>  <?php echo $solo_language['ar_name'] ; ?>  </option>
                            </select>
                    </div>

                    <div id="save_button_lang">
                        <button type="submit" id="Send_lang" name="save_language">
                            <?php echo $solo_language['save_button'] ; ?>
                        </button>
                    </div>

                    <div id="reset">
                        <button type="submit" name="button_reset_all" id="send_reset">
                            <?php echo $solo_language['reset_all'] ; ?>
                        </button>
                    </div>
                </form>
        </div>
   </div>
</body>
</html>