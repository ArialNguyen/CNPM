<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/37953f48ea.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(64, 138, 87);
            box-sizing: border-box;
        }

        .card-text::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        .card-text::-webkit-scrollbar {
            width: 5px;
            background-color: #F5F5F5;
        }

        .card-text::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background-color: #555;
        }

        .card {
            height: 100%;
            background-color: rgb(64, 138, 87);
            width: 90%;
            margin: auto;
        }

        .card-body {
            height: 50%;
        }

        .card-title {
            line-height: 1rem;
        }

        .card-text {
            height: 60%;
            overflow: scroll;
            overflow-x: hidden;
        }

        .card-body a {
            line-height: 1rem;
            margin-right: 3%;
        }

        .main-card {
            height: 50vh;
        }

        .main-card>div {
            height: 90%;
        }

        .card img {
            width: 100%;
            height: 50%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .moTa {
            height: 30px;
            width: 60px;
            text-align: center;
            border: 1px solid black;
            border-radius: 50%;
            padding: 3px;
            top: -15px;
            background-color: white;
            margin-left: 10px;
        }

        .carousel img {
            height: 40vh;
        }
        .btn_back {
            background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
            cursor: pointer;
            height: 45px;
            width: 100px;
            font-family: Phantomsans, sans-serif;
            color: #FFFFFF;
            box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
            justify-content: center;
            border-radius: 10px;
            position: absolute;
            top: 10px;
            left: 10px;;
        }
    </style>
</head>

<body>

    <!-- 
    1 row -> 4 card
    x row -> n card
    x row = n/4 card 
    op1: n%4 != 0 -> int(n/4) + 1
    op2: n%4 == 0 -> n/4


   -->

    <div class="container-fluid">
        <div class="row mt-1">
            <a class="btn btn_back " onclick="history.back()"><i class="bi bi-arrow-left-circle-fill"></i> Back
            </a>
            <h2 style="text-align: center;"><b><i>
                        <?php
                        error_reporting(0);
                        include("../Connection.php");
                        $id_benh = $_GET["id"];
                        $sql = $conn->query("SELECT tenBenh,listCayThuoc FROM benh WHERE id = '$id_benh'");
                        echo mysqli_fetch_assoc($sql)["tenBenh"];
                        ?>
                    </i></b></h2>
        </div>
    </div>
    <?php
    if (mysqli_num_rows($sql) > 0) {
        $sql = $conn->query("SELECT tenBenh,listCayThuoc FROM benh WHERE id = '$id_benh'");
        $result = mysqli_fetch_assoc($sql);
        $arr_id_tree = explode(",",  $result["listCayThuoc"]); // [2,3] 1 2 3 4 5 6
        $card = 0;
        if ($arr_id_tree[0] == $result["listCayThuoc"] && count($arr_id_tree) == 1 && $result["listCayThuoc"] != "") {
            $card = 1;
        } else if ($result["listCayThuoc"] == "") {
            $card = 0;
        } else {
            $card = count($arr_id_tree);
        }
        echo '<div class="container-fluid" id="list">';
        $row = ($card % 4 == 0) ? $card / 4 : (int)($card / 4) + 1;
        $index = 0;
        for ($i = 0; $i < $row; $i++) {
            echo '<div class="row main-card">';
            for ($j = 1; $j <= 4; $j++) {
                if ($index < $card) {
                    $id = $arr_id_tree[$index];
                    $result = mysqli_fetch_assoc($conn->query("SELECT * FROM caythuoc WHERE id = '$id'"));
                    echo "<div class='col-3'>";
                    echo "<div class='card mt-4'>";
                    echo '<img src="../../' . $result["image"] . '">';
                    echo '<div class="card-body text-start border bg-light rounded-bottom">';
                    echo '<div class="id d-none">';
                    echo $id;
                    echo '</div>';
                    echo '<h5 class="card-title">';
                    echo "<b>" . $result["tenCayThuoc"] . "</b>";
                    echo '</h5>';
                    echo '<div class="card-text">';
                    echo $result["moTa"];
                    echo '</div>';
                    echo '<a href="../ManageTree/one_tree_details.php?id=' . $id . '" class="btn btn-primary mt-2">';
                    echo "Go";
                    echo '</a>';
                    echo '<a href="delete_tree_in_dease.php?id_benh=' . $id_benh . '&id_cay=' . $id . '" class="btn btn-danger mt-2">';
                    echo "Delete";
                    echo '</a>';
                    echo '</div>';
                    echo "</div>";
                    echo "</div>";
                    $index++;
                }
            }
            echo '</div>';
        }
        echo '</div>';
    }
    ?>

    <script>


    </script>
</body>

</html>