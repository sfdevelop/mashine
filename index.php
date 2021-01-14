<?php
    if(isset($_POST['lid'])){
                    
        //мейл куда приходят письма
        $mail_to='bu77etproof@gmail.com';
        $mail_of="bu77etproof@gmail.com";

                    $email = $mail_to;         
                    $to = $email;

                    $subject = "Новый лид";

                    $message = "\nИмя  : ".$_POST['name']."\nТелефон: ".$_POST['subject']."\nПерезвонить в : : ".$_POST['email'];

                    $headers = "Content-type:text/plain; Charset=utf-8\r\n";
                    $headers .= "From:".$mail_of;

                    mail($to, $subject, $message, $headers);
                
                $post= 'Ваше письмо отправлено! Менеджер свяжется с Вами в ближайшее время';
                
    }   
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- <link    rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  /> -->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/animate.min.css">    

    <title>Главная</title>
</head>
<body>

    <?php
        if($post){
    ?>
        <div class="alert alert-success"><?php echo $post ?>
            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> -->
        </div>
    <?php     
        }
    ?>

    <?php
        include 'templates/head.html';
        include 'templates/work.html';
        include 'templates/slider.html';
        include 'templates/why.html';
        include 'templates/video.html';
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="js/wow.js"></script>
<script src="js/custom.js"></script>
				

</body>
</html>