<!doctype html>
<html>
<head>
  <meta charset="utf-8" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

    <title>Your message was successfully sent!</title>

    <style media="screen">
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      text-align: center;
      background-color: #f2f2f2;
    }
    a{
      display: inline-block;
      border: 1px solid #ccc;
      text-decoration: none;
      color: #ccc;
      padding: 10px 20px;
      border-radius: 100px;
    }
    </style>


</head>
<body>
  <div class="a">
    <bo dy>
    <?php
        $back = "<p><a href=\"javascript: history.back()\">Back</a></p>";

        if(!empty($_POST['name'])  and !empty($_POST['mail']) and !empty($_POST['message'])){
            $name = trim(strip_tags($_POST['name']));
            $mail = trim(strip_tags($_POST['mail']));
            $message = trim(strip_tags($_POST['message']));

            mail('mail@gmail.com', site.com,
            'ame: '.$name.'<br>mail: '.$mail.'<br> massage: '.$message,"Content-type:text/html; charset=utf-8");
            echo "Your message was successfully sent! <Br> You will receive an answer soon <Br> $back";

            exit;
        }
        else {
            echo "To send a message, fill in all the fields! $back";
            exit;
        }
    ?>
  </div>
</body>
</html>
