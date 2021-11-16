<!DOCTYPE html>
<html lang="en">

<head>
    <title>Praktikum 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #ffa500;
            font-family: 'Open Sans', sans-serif;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.3);
            width: 400px;
        }

        .header {
            font-size: 30px;
            background-color: #f7f7f7;
            padding: 20px;
            text-align: center;
        }

        .form {
            padding: 10px 20px;
        }

        .form-group {
            margin-bottom: 5px;
            padding-bottom: 10px;
        }

        .form-group label {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .form-group input {
            border: 2px solid #f0f0f0;
            border-radius: 4px;
            font-family: inherit;
            font-size: 14px;
            padding: 10px;
            width: 100%;
        }

        .form button {
            background-color: #ffa500;
            border: 2px solid #ffa500;
            border-radius: 4px;
            color: #fff;
            font-family: inherit;
            font-size: 15px;
            padding: 5px;
            margin-top: 5px;
            width: 100%;
        }
    </style>
    <script>
        $(document).ready(function () {
            function validateForm() {
                var isValid = true;
                var name = $("#username").val();
                var pattName = new RegExp("[0-9]");
                if (name == "") {
                    $("#false").show();
                    $("#falseAdd").hide();
                    $("#true").hide();
                    isValid = false;
                } else if (pattName.test(name)) {
                    $("#false").hide();
                    $("#falseAdd").show();
                    $("#true").hide();
                    isValid = false;
                } else {
                    $("#true").show();
                    $("#false").hide();
                    $("#falseAdd").hide();
                }

                var alamat = $("#address").val();
                if (alamat == "") {
                    $("#salah").show();
                    $("#benar").hide();
                    isValid = false;
                } else {
                    $("#benar").show();
                    $("#salah").hide()
                }

                var alamatEmail = $("#email").val();
                if (alamatEmail == "") {
                    $("#cekSalah").show();
                    $("#cekSalahAdd").hide();
                    $("#cekBenar").hide();
                    isValid = false;
                } else if (alamatEmail.search("@") == -1) {
                    $("#cekSalah").hide();
                    $("#cekSalahAdd").show();
                    $("#cekBenar").hide();
                    isValid = false;
                } else {
                    $("#cekBenar").show();
                    $("#cekSalah").hide();
                    $("#cekSalahAdd").hide();
                }

                var password2 = $("#pwd").val();
                if (password2 == "") {
                    $("#cekSalah2").show();
                    $("#cekSalah2Add").hide();
                    $("#cekBenar2").hide();
                    isValid = false;
                } else if (password2.length < 8 || password2.length > 16) {
                    $("#cekSalah2").hide();
                    $("#cekSalah2Add").show();
                    $("#cekBenar2").hide();
                    isValid = false;
                } else {
                    $("#cekBenar2").show();
                    $("#cekSalah2").hide()
                    $("#cekSalah2Add").hide();
                }

                var phone = $("#telephone").val();
                var pattPhone = new RegExp("^[0-9]{7,}$")
                if (phone == "") {
                    $("#cekSalah3").show();
                    $("#cekSalah3Add").hide();
                    $("#cekBenar3").hide();
                    isValid = false;
                } else if (!pattPhone.test(phone)) {
                    $("#cekSalah3").hide();
                    $("#cekSalah3Add").show();
                    $("#cekBenar3").hide();
                    isValid = false;
                } else {
                    $("#cekBenar3").show();
                    $("#cekSalah3").hide()
                    $("#cekSalah3Add").hide();
                }

                var course1 = $("#course").val();
                if (course1 == "") {
                    $("#cekSalah4").show();
                    $("#cekBenar4").hide();
                    isValid = false;
                } else {
                    $("#cekBenar4").show();
                    $("#cekSalah4").hide()
                }

                var zip = $("#zipcode").val();
                var pattZip = new RegExp("^[0-9]{6}$");
                if (zip == "") {
                    $("#cekSalah5").show();
                    $("#cekSalah5Add").hide();
                    $("#cekBenar5").hide();
                    isValid = false;
                } else if (!pattZip.test(zip)) {
                    $("#cekSalah5").hide();
                    $("#cekSalah5Add").show();
                    $("#cekBenar5").hide();
                    isValid = false;
                } else {
                    $("#cekBenar5").show();
                    $("#cekSalah5").hide()
                    $("#cekSalah5Add").hide();
                }
                return isValid;
            }
            $("form").submit(function (event) {
                if (validateForm() == false) {
                    event.preventDefault();
                }
            });
        });

    </script>
</head>

<body>
    <div class="container">
        <div class="header">
            <p>REGISTRATION FORM</p>
        </div>
        <form action="https://www.bukalapak.com/" class="form" name="form">
            <div class="form-group">
                <label for="username">Name</label>
                <input type="text" placeholder="Enter your name" id="username" name="username">
                <div id="true" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="false" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Name must be filled out</small>
                </div>
                <div id="falseAdd" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Name cannot contain number</small>
                </div>

            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" placeholder="Enter your address" id="address" name="address">
                <div id="benar" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="salah" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Address must be filled out</small>
                </div>
            </div>
            <div class="form-group ">
                <label for="email">Email</label>
                <input type="text" placeholder="Enter your email address" id="email" name="email">
                <div id="cekBenar" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="cekSalah" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Email must be filled out</small>
                </div>
                <div id="cekSalahAdd" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Email address must contain '@' character</small>
            </div>
            </div>
            <div class="form-group ">
                <label for="pwd">Password</label>
                <input type="password" placeholder="Enter your password" id="pwd" name="pwd">
                <div id="cekBenar2" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="cekSalah2" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Password must be filled out</small>
                </div>
                <div id="cekSalah2Add" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Password consist 8-16 characters</small>
                </div>
            </div>
            <div class="form-group ">
                <label for="telephone">Telephone</label>
                <input type="tel" placeholder="Enter your phone number" id="telephone" name="telephone">
                <div id="cekBenar3" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="cekSalah3" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Telephone must be filled out</small>
                </div>
                <div id="cekSalah3Add" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">7 digits required</small>
                </div>
            </div>
            <div class="form-group ">
                <label for="course">Course</label>
                <select id="course">
                    <option value=""></option>
                    <option value="BTECH">BTECH</option>
                    <option value="BBA">BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="B.COM">B.COM</option>
                    <option value="GEEKSFORGEEKS">GEEKSFORGEEKS</option>
                </select>
                <div id="cekBenar4" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="cekSalah4" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Select the option below</small>
                </div>
            </div>
            <div class="form-group ">
                <label for="zipcode">Zip Code</label>
                <input type="text" placeholder="Enter your Zip Code" id="zipcode" name="zipcode">
                <div id="cekBenar5" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="cekSalah5" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Zip Code must be filled out</small>
                </div>
                <div id="cekSalah5Add" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">6 digits required</small>
                </div>
            </div>
            <button type="submit" id="submit" class="btn btn-primary" value="Submit">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>

</body>

</html>
