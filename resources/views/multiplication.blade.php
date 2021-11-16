<!DOCTYPE html>
<html lang="en">

<head>
    <title>Multiplication</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h2 {
            margin-top: 25px;
            text-align: center;
        }

        p.groove {
            border-style: groove;
        }

        #outer {
            border: 1px solid black;
            margin: 20px 100px;
            padding: 25px 50px;
            border-radius: 12px;
            box-shadow: 5px 5px 5px grey;
        }
    </style>
</head>

<body>
    <div class="container-fluid-sm">
        <h2>Multiplication 1-20</h2>
        <form action="acctugasphp" method="get" id="multiplicationform" name="multiplicationform">
            @csrf
            <div id="outer" class="form-group">
                <label for="inputNumber">Enter a number: </label>
                <input type="number" class="form-control" id="inputNumber" name="inputNumber"><br>
                <button type="submit" class="btn btn-primary" id="resultButton" value="Result">Submit</button>
            </div>
        </form>
    </div>

</body>

</html>
