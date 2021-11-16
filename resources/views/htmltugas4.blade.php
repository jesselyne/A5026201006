<!DOCTYPE html>
<html lang="en">

<head>
    <title>Multiplication</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script>
        function calculatorloop(n) {
            let number = "";
            for (let i = 1; i <= 20; i++) {
                number += n + " * " + i + " = " + n * i + "<br>";
            }
            return number;
        }
        function showcalculatorloop(n) {
            console.log(calculatorloop(n));
        }
    </script>
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

        #calculate {
            margin: 20px;
            padding: 8px;
        }
    </style>
</head>

<body>
    <div class="container-fluid-sm">
        <h2>Multiplication 1-20</h2>
        <form method="GET" action="">
            <div id="outer" class="form-group">
                <label for="inputNumber">Enter a number: </label>
                <input type="number" class="form-control" id="inputNumber" name="inputNumber"><br>
                <input type="button" class="btn btn-primary" id="resultButton" value="Result"
                    onclick="calculatorloop();">
                <div id="calculate">
                    <script>
                        $(document).ready(
                            function () {
                                $("#resultButton").click(
                                    function () {
                                        let n = $("#inputNumber").val();
                                        $("#calculate").html(calculatorloop(n));
                                    }
                                );
                            }
                        );
                    </script>
                </div>
            </div>
        </form>
        <!-- Coding ALpro
        import java.util.Scanner;

            public class CalculatorLoop{
                public static void main(String[] args){
                    Scanner sc = new Scanner(System.in);
                    System.out.print("Enter a number : ");
                    double input = sc.nextDouble();

                for(int i = 1; i <= 12; i++) {
                        System.out.println(input + " *" + i + " = " + input * i);}
                }
            } -->
    </div>

</body>

</html>
