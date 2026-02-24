<?php
include "language.php" ;
 if(isset($_POST['button_reset_all']))
 {
    setcookie("name_cookie", "", time() - 3600, "/");                
    setcookie("color_cookie", "#000000", time() - 3600, "/");   
    setcookie("language_cookie", "en", time() - 3600, "/");
    setcookie("date_cookie","", time() - 3600 ,"/");  
    header('Location: php.php');
    exit ;
 }

 if(isset($_POST['save_profile']))
 {
    setcookie("name_cookie",$_POST['name'],time() + 3600, "/");
    setcookie("color_cookie",$_POST['color'],time() + 3600, "/");
    setcookie("date_cookie",date(("y-m-d  h:i:s")), time() + 3600 ,"/");
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
 $solo_language = $text[$language] ;
 $date = isset($_COOKIE['date_cookie']) ? $_COOKIE['date_cookie'] : date(("y-m-d  h:i:s")) ;
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
                             echo $date ;
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
                   <button type="submit" name="save_profile"> <?php echo $solo_language['save_button']?></button>
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