<!DOCTYPE html>
<html lang="en">

<head>
    <title>UTS KODE SOAL B</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            function validateForm() {
                var isValid = true;
                var name = $("#namabarang").val();
                var pattName = new RegExp("^.{10,}$");
                if (name == "") {
                    $("#salah1").show();
                    $("#salah1add").hide();
                    $("#benar1").hide();
                    isValid = false;
                } else if (!pattName.test(name)) {
                    $("#salah1").hide();
                    $("#salah1add").show();
                    $("#benar1").hide();
                    isValid = false;
                } else {
                    $("#salah1").hide();
                    $("#salah1add").hide();
                    $("#benar1").show();
                }

                var price = $("#harga").val();
                var pattPrice = new RegExp("[0-9]");
                if (price == "") {
                    $("#salah2").show();
                    $("#salah2add").hide();
                    $("#salah2add2").hide();
                    $("#benar2").hide();
                    isValid = false;
                } else if (!pattPrice.test(price)) {
                    $("#salah2").hide();
                    $("#salah2add").show();
                    $("#salah2add2").hide();
                    $("#benar2").hide();
                    isValid = false;
                } else if (price < 5000) {
                    $("#salah2").hide();
                    $("#salah2add").hide();
                    $("#salah2add2").show();
                    $("#benar2").hide();
                    isValid = false;
                } else {
                    $("#salah2").hide();
                    $("#salah2add").hide();
                    $("#salah2add2").hide();
                    $("#benar2").show();
                }

                var jenis1 = $("#jenis").val();
                if (jenis1 == "") {
                    $("#salah3").show();
                    $("#benar3").hide();
                    isValid = false;
                } else {
                    $("#salah3").hide();
                    $("#benar3").show();
                }

                var code = $("#kode").val();
                var pattCode = new RegExp("^[0-9]{10,}$");
                if (code == "") {
                    $("#salah4").show();
                    $("#salah4add").hide();
                    $("#benar4").hide();
                    isValid = false;
                } else if (!pattCode.test(code)) {
                    $("#salah4").hide();
                    $("#salah4add").show();
                    $("#benar4").hide();
                    isValid = false;
                } else {
                    $("#salah4").hide();
                    $("#salah4add").hide();
                    $("#benar4").show();
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
    <style>
        h5 {
            text-align: center;
        }

        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tab{
            padding-left: 140px;
        }
    </style>
</head>

<body>
    <div class="col-3"></div>
    <div class="col-6 container p-3 my-3 border">
        <p>Jesselyne Amadea</p>
        <p>Jesselyne</p>
        <p>5026201006</p>
        <div class="header">
            <h5>Form Input Data Barang</h5>
        </div>
        <br>
        <form action="https://www.bukalapak.com/" class="form" name="form">
            <div class="form-group">
                <label for="namabarang">Nama Barang<div class="tab">:</div></label>
                <input type="text" id="namabarang" name="namabarang">
                <div id="benar1" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="salah1" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Nama barang harus diisi!</small>
                </div>
                <div id="salah1add" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Name barang minimal 10 karakter!</small>
                </div>
            </div>
            <div class="form-group">
                <label for="harga">Harga <div class="tab">:</div> </label>
                <input type="text" id="harga" name="harga">
                <div id="benar2" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="salah2" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Harga barang harus diisi!</small>
                </div>
                <div id="salah2add" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Harga barang harus angka!</small>
                </div>
                <div id="salah2add2" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Harga barang min.5000. Mohon tulis tanpa 'Rp' dan '.'!</small>
                </div>
            </div>
            <div class="form-group ">
                <label for="jenis">Jenis Barang<div class="tab">:</div></label>
                <select id="jenis">
                    <option value=""></option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="nonmamin">Lainnya</option>
                </select>
                <div id="benar3" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="salah3" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Pilih salah satu dari opsi berikut!</small>
                </div>
            </div>
            <div class="form-group">
                <label for="kode">Kode Barcode<div class="tab">:</div></label>
                <input type="text" id="kode" name="kode">
                <div id="benar4" class="collapse">
                    <i class="fas fa-check-circle" style="color:#2ecc71"></i>
                </div>
                <div id="salah4" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Kode Barcode harus diisi!</small>
                </div>
                <div id="salah4add" class="collapse">
                    <i class='fas fa-exclamation-circle' style="color:red" ;></i>
                    <small class="text-danger">Kode Barcode harus berupa angka dan min.10 digit!</small>
                </div>
            </div>
            <div class="center">
                <button style='margin-right:20px' type="submit" id="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-success">Reset</button>
            </div>
        </form>
    </div>
    <div class="col-3"></div>
</body>

</html>
