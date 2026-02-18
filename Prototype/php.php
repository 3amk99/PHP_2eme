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
$text = 
[
 "en" => 
 [
    "greeting" => "Hello",
    "name_placeholder" => "Enter your name",
    "choose_color" => "Choose color",
    "save_button" => "Save",
    "language_label" => "Choose language",
    "reset_all" => "Reset all"
 ],

 "fr" =>
 [
    "greeting" => "Bonjour",
    "name_placeholder" => "Entrez votre nom",
    "choose_color" => "Choisir la couleur",
    "save_button" => "Enregistrer",
    "language_label" => "Choisir la langue",
    "reset_all" => "Tout réinitialiser"
 ],

 "ar" =>
 [
    "greeting" => "مرحبا",
    "name_placeholder" => "أدخل اسمك",
    "choose_color" => "اختر اللون",
    "save_button" => "حفظ",
    "language_label" => "اختر اللغة",
    "reset_all" => "إعادة تعيين الكل"
 ],

 "de" =>
 [
    "greeting" => "Hallo",
    "name_placeholder" => "Geben Sie Ihren Namen ein",
    "choose_color" => "Farbe wählen",
    "save_button" => "Speichern",
    "language_label" => "Sprache wählen",
    "reset_all" => "Alles zurücksetzen"
 ],

 "ta" =>
 [
    "greeting" => "ⴰⵣⵓⵍ",
    "name_placeholder" => "ⵙⴽⴻⵙⴻⵎ ⵉⵙⴻⵎ-ⵉⵏⴻⴽ",
    "choose_color" => "ⴼⵔⴻⵏ ⵉⵏⵉ",
    "save_button" => "ⵙⴻⴽⵍⴻⵙ",
    "language_label" => "ⴼⵔⴻⵏ ⵜⵓⵜⵍⴰⵢⵜ",
    "character" => "ⴰⵎⵣⵣⵓⴷ",
    "reset_all" => "ⴰⵙⴻⵎⵎⴻⵏ ⴰⴽⴽ"
 ],

 "ma" => 
 [
    "greeting" => "你好",
    "name_placeholder" => "输入你的名字",
    "choose_color" => "选择颜色",
    "save_button" => "保存",
    "language_label" => "选择语言",
    "reset_all" => "全部重置"
 ],

 "ru" =>
 [
    "greeting" => "Привет",
    "name_placeholder" => "Введите ваше имя",
    "choose_color" => "Выберите цвет",
    "save_button" => "Сохранить",
    "language_label" => "Выберите язык",
    "reset_all" => "Сбросить всё"
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
                                <option value="en" id="en" <?php if($language == "en") echo"selected"; ?>>English </option>
                                <option value="fr" id="fr" <?php if($language == "fr") echo"selected"; ?>>Français</option>
                                <option value="de" id="de" <?php if($language == "de") echo"selected"; ?>>Duetsch </option>
                                <option value="ta" id="ta" <?php if($language == "ta") echo"selected"; ?>>Tamazirt</option>
                                <option value="ma" id="ma" <?php if($language == "ma") echo"selected"; ?>>Mandrin </option>
                                <option value="ru" id="ru" <?php if($language == "ru") echo"selected"; ?>>Russian </option>
                                <option value="ar" id="ar" <?php if($language == "ar") echo"selected"; ?>>Arabic  </option>
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