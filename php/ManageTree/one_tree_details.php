<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/37953f48ea.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap');

    @media print {

        .circles,
        .btn_addToBasket,
        .btn_print,
        .btn_back,
        .btn_Basket {
            display: none;
        }

        img {
            margin-left: 120px;
        }

    }

    @media screen {
        body {
            width: 100vh;
            height: 100vh;
            overflow: hidden;
            background-image: linear-gradient(-45deg,
                    rgba(255, 53, 127, 1) 0%,
                    rgba(59, 173, 227, 1) 25%,
                    rgba(152, 68, 183, 1) 51%,
                    rgba(87, 111, 230, 1) 100%);
            background-size: 150% 100%;
            animation: ease_test 10s ease infinite;
        }

        @keyframes ease_test {
            0% {
                background-position: 0% 50%
            }

            50% {
                background-position: 100% 0%
            }

            100% {
                background-position: 0% 200%
            }
        }

        img {
            width: 100%;
            max-height: 43%;
            border-radius: 20px 20px 0px 0px;
        }

        .content {
            background-color: rgb(232, 232, 235);
            width: 40vw;
            height: 95vh;
            border-radius: 20px;
            padding-bottom: 10px;
            font-size: medium;
            font-family: 'EB Garamond', serif;
            position: absolute;
            /* top: calc((100vh - 85vh)/2); */
            top: 1vh;
            left: calc((100vw - 40vw)/2);
            z-index: 2;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }

        .circles {
            position: absolute;
            top: -10px;
            width: 95vw;
            height: 95vh;
            z-index: 1;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 7s linear infinite;
            bottom: -20vh;
        }

        .circles li:nth-child(1) {
            left: 5%;
            animation-delay: 1s;
        }


        .circles li:nth-child(2) {
            left: 10%;
            animation-delay: 2s;
            animation-duration: 7s;
        }

        .circles li:nth-child(3) {
            left: 15%;

            animation-delay: 0.2s;
            animation-duration: 5s;
        }

        .circles li:nth-child(4) {
            left: 20%;
            animation-delay: 0.4s;
            animation-duration: 8s;
        }

        .circles li:nth-child(5) {
            left: 30%;
            animation-delay: 1s;
        }

        .circles li:nth-child(6) {
            right: 0%;
            animation-delay: 0s;
        }

        .circles li:nth-child(7) {
            right: 10%;
            animation-delay: 2s;
        }

        .circles li:nth-child(8) {
            right: 15%;
            animation-delay: 0.2s;
            animation-duration: 4s;
        }

        .circles li:nth-child(9) {
            right: 20%;
            animation-delay: 1s;
            animation-duration: 6s;
        }

        .circles li:nth-child(10) {
            right: 30%;
            /* animation-delay: 0s; */
            animation-duration: 6s;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            50% {
                transform: translateY(-50vh) rotate(360deg);
                opacity: 0.5;
                border-radius: 50%;
            }

            100% {
                transform: translateY(-100vh) rotate(720deg);
                opacity: 0;
                border-radius: 100%;
            }

        }

        .class1 {
            height: 57%;
            overflow: scroll;
            overflow-x: hidden;
            padding-left: 5px;
        }

        .class1::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        .class1::-webkit-scrollbar {
            width: 3px;
            background-color: greenyellow;
        }

        .class1::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #555;
        }




        /* CSS */

        .btn_print {
            background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            cursor: pointer;
            height: 45px;
            width: 150px;
            font-family: Phantomsans, sans-serif;
            color: #FFFFFF;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            justify-content: center;
            border-radius: 10px;
            position: absolute;
            top: calc(85vh - 45px - 50px);
            left: 100%;
        }

        .btn_addToBasket {

            background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);
            cursor: pointer;
            height: 45px;
            width: 150px;
            font-family: Phantomsans, sans-serif;
            color: #FFFFFF;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            justify-content: center;
            border-radius: 10px;
            position: absolute;
            top: calc(85vh - 45px);
            left: 100%;

        }

        .btn_back {
            background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);
            cursor: pointer;
            height: 45px;
            width: 100px;
            font-family: Phantomsans, sans-serif;
            color: #FFFFFF;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            justify-content: center;
            border-radius: 10px;
            position: absolute;
            bottom: calc(100% - 10px - 45px);
            right: 100%;
        }

        .btn_Basket {
            background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
            cursor: pointer;
            height: 45px;
            width: 150px;
            font-family: Phantomsans, sans-serif;
            color: #FFFFFF;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            justify-content: center;
            border-radius: 10px;
            position: absolute;
            top: calc(85vh + 5px);
            left: 100%;

        }
    }
</style>

<body>
    <div class="content">
        <?php
        include("../Connection.php");
        $id = $_GET["id"];
        if ($id == "") {
            echo "No items Here!";
            exit();
        }
        $sql = $conn->query("SELECT * FROM caythuoc WHERE id = '$id'");
        if (mysqli_num_rows($sql) > 0) {
            $result = mysqli_fetch_array($sql);

            echo '
                    <img src="../../' . $result["image"] . '" alt="Image"> <br>
                    <div class = "class1">
                    <b>Tên:</b> ' . $result["tenCayThuoc"] . ' <br><br>
                    <b>Tên Khoa học:</b> ' . $result["tenKhoaHoc"] . '<br>';

            echo "<ul>";
            foreach (explode("&&", $result["moTa"]) as $value) {
                echo "<li>" . $value . "</li>";
            }
            echo "</ul>";

            echo "<b>Nơi trồng: </b> <br>";
            echo "<ul>";
            foreach (explode("&&", $result["noiTrong"]) as $value) {
                echo "<li>" . $value . "</li>";
            }
            echo "</ul>";

            echo "<b>Công dụng: </b> <br>";
            echo "<ul>";
            foreach (explode("&&", $result["congDung"]) as $value) {
                echo "<li>" . $value . "</li>";
            }

            echo "</ul>";

            echo "</div>";
            echo '<a class="btn btn_back" onclick="history.back()"><i class="bi bi-arrow-left-circle-fill" style ="color:"></i> Back </a>';
            echo '<button class="btn btn_print" onclick="window.print()"><i class="fa-brands fa-pinterest"></i> Print </button>';
            echo ' <button class="btn btn_addToBasket" onclick="addToBasket(' . $id . ')"><i class="bi bi-bag-plus-fill"></i> Add To Basket</button>';
            echo '<a class="btn btn_Basket" href = "../../Cart.html" ><i class="bi bi-bag-check-fill"></i> Go to Baslket</a>';
        }

        ?>


    </div>
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <script>
        function addToBasket(x) {
            $.ajax({
                url: "../Basket/addTreeToBasket.php",
                type: "post",
                data: {
                    id_tree: x
                },
                success: function(data) {
                    alert(data);
                }
            });
        }
    </script>
</body>

</html>