<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send page</title>
    <link rel="stylesheet" href="send.css" />

    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet" />

    <script src="script.js"></script>
</head>

<body>
    <div class="head">
        <p id="copyshare">CopyShare</p>
        <header>
            <ul>
                <li class="ele"> <a href="index.html"> Home </a></li>
                <li class="ele"> <a href="send.php"> Send</a> </li>
                <li class="ele"> <a href="recieve.php"> Recieve </a> </li>
                <li class="ele"> <a href="howto.php"> How to use </a> </li>
            </ul>
        </header>
    </div>

    <div class="container">
        <section>

            <!-- heading -->
            <div class="greeth">
                <div class="greet">
                    <h1>Enter Your Text here</h1>
                </div>
            </div>

            <!-- inputbox where user enters the data  -->

            <form action="" method="POST">

                <!-- data  -->

                <div class="textbox">
                    <textarea name="inputdata" id="inputdata" cols="30" rows="10" placeholder="Enter your text here" required></textarea>
                </div>

                <!-- Password -->
                <div id="pass">
                    <input type="text" name="alpha" id="inpass" readonly>
                </div>


                <!-- Generate Password Button  -->
                <div class="buttons">

                    <div id="but2">
                        <button name="submit" type="submit" id="sub"> Submit </button>
                    </div>

                </div>

            </form>


            <div class="buttons">
                <div class="but1">
                    <button name="generate" onclick="generate()" id="genbut">Generate</button>
                </div>
            </div>

        </section>

    </div>


    <!-- footer  -->
    <div class="foot">
        <footer>
            <p class="footp"> &copy By CopyShare </p>
        </footer>
    </div>
</body>

</html>




<?php
include 'connect.php';
if(isset($_POST['submit'])) {
    $inputdata = $_POST['inputdata'];
    $pass = $_POST['alpha'];

    $query = "INSERT INTO `cstable`( `data`, `pass`, `dateandtime`) VALUES ('$inputdata','$pass', current_timestamp());";

    $res = mysqli_query($connect, $query);

    if ($res) {
    ?>
        <script>
            alert("Data Inserted");
        </script>
    <?php
    } 
    else {
    ?>
        <script>
            alert("Insertion Failed");
        </script>
<?php
    }
}

?>

+