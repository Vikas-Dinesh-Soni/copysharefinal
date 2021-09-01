<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recieve.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="recieve.js"></script>
    <title>Recieve</title>
</head>

<body>

    <div class="head">
        <p id="copyshare">CopyShare</p>
        <header>
            <ul>
                <li class="ele"> <a href="index.php"> Home </a></li>
                <li class="ele"> <a href="send.php"> Send</a> </li>
                <li class="ele"> <a href="recieve.php"> Recieve </a> </li>
                <li class="ele"> <a href="howto.php"> How to use </a> </li>
            </ul>
        </header>

    </div>


    <!-- main section  -->
    <!-- 
        <div class="main"> -->
    <main>


        <div class="greethead">
            <div class="greet">
                <h1 id="2">Enter Your Code </h1>
            </div>
        </div>

        <div class="codemain">
            <form action="" method="POST">
                <div class="code">
                    <input type="text" name="code" id="inpass" placeholder="7-digit Code" maxlength="7">
                </div>
                <div class="but1">
                    <button id="buttonstyle" name="submit" type="submit">Submit</button>
                </div>
            </form>
        </div>




    </main>



    <footer id="ft">
        <p class="footp"> &copy By CopyShare </p>
    </footer>

</body>

</html>



<?php

include 'connect.php';

if (isset($_POST['submit'])) {

    $key = $_POST['code'];

    $selectquery = "SELECT * FROM cstable WHERE pass = '$key' ";

    $query = mysqli_query($connect, $selectquery);

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {

?>
            <main>
                <div class="d">
                    <textarea name="text" id="output" cols="30" rows="10" style=" margin-left:345px; margin-bottom : 0px ; font-size : 21px; padding : 20px; width : 50% ;height : 50%; border: 3px solid black; margin-bottom :50px; border-radius:20px;"><?php echo $row['data']  ?></textarea>
                </div>
            </main>
        <?php
        }
    } else {
        ?>
        <script>
            alert("Data Not Found");
        </script>
<?php
    }
}
?>