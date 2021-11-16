<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas pertemuan 9</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
        h2 {
            margin-top: 25px;
            text-align: center;
        }
        #box {
            border: 1px solid black;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 5px 5px 5px grey;
        }
</style>
<body>
    <?php
        function hasilperkalian($angkainput){
            $hasilkali = "";
            for ($i = 1; $i <= 20; $i++) {
                $hasilkali = $hasilkali . $angkainput . " * " . $i . " = " . ($angkainput * $i) . "<br>";
            }
            echo $hasilkali;
        }
    ?>
    <h2>Multiplication 1-20</h2>
    <br>
    <div class="row">
        <div class="col-5"></div>
        <div class="col-2" id="box">
            <div class="container">
                <p><b>Result</b> <br>
                <?php
                    $angkainput=$_GET["inputNumber"];
                    hasilperkalian($angkainput);
                ?>
                 </p>
            </div>
        </div>
        <div class="col-5"></div>
    </div>
</body>
</html>
