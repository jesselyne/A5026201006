<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas Kastemisasi jQuery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=outline|shadow-multiple">
    <script>
        $(document).ready(function () {
            $("#sunday").hide();
            $("#button1").click(function () {
                $("#sunday").toggle();
            });
            $("#monday").hide();
            $("#button2").mousedown(function () {
                $("#monday").toggle();
            });
            $("#tuesday").hide();
            $("#button3").mouseup(function () {
                $("#tuesday").toggle();
            });
            $("#wednesday").hide();
            $("#button4").click(function () {
                $("#wednesday").toggle();
            });
            $("#thursday").hide();
            $("#button5").mousedown(function () {
                $("#thursday").toggle();
            });
            $("#friday").hide();
            $("#button6").mouseup(function () {
                $("#friday").toggle();
            });
            $("#saturday").hide();
            $("#button7").click(function () {
                $("#saturday").toggle();
            });
            $("textarea").change(function () {
                alert("The schedule has been updated. Finish your work then have some fun!");
            });
        });
    </script>
    <style>
        #judul {
            background-color:orange;
            border-radius: 12px;
            font-family: "Sofia", sans-serif;
            font-size: 60px;
        }

        div.border {
            background-color: blanchedalmond;
            border: 5px solid black;
            border-radius: 12px;
        }
    </style>
</head>

<body>
    <div id="judul" class= "container font-effect-outline">
        <p style="text-align: center;">Weekly Planner</p>
    </div>
    <div class="border container pt-3 my-3">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5">
                    <button id="button1" class="btn btn-light btn-block font-effect-shadow-multiple">Sunday</button><br>
                    <button id="button2" class="btn btn-light btn-block font-effect-shadow-multiple">Monday</button><br>
                    <button id="button3" class="btn btn-light btn-block font-effect-shadow-multiple">Tuesday</button><br>
                    <button id="button4" class="btn btn-light btn-block font-effect-shadow-multiple">Wednesday</button><br>
                    <button id="button5" class="btn btn-light btn-block font-effect-shadow-multiple">Thursday</button><br>
                    <button id="button6" class="btn btn-light btn-block font-effect-shadow-multiple">Friday</button><br>
                    <button id="button7" class="btn btn-light btn-block font-effect-shadow-multiple">Saturday</button><br>
                </div>
                <div class="col-5">
                    <div id="sunday">
                        <h3 style="text-align: center;background-color: whitesmoke;">SUNDAY</h3>
                        <h6>TO DO LIST</h6>
                        <input type="checkbox" id="task1" name="task1">
                        <label for="task1"> Beli buah di supermarket</label><br>
                        <input type="checkbox" id="task2" name="task2">
                        <label for="task2"> Rapihkan ruang belajar</label><br>
                        <input type="checkbox" id="task3" name="task3">
                        <label for="task3"> Kerjakan tugas</label><br>
                        <input type="checkbox" id="task7" name="task7">
                        <label for="task7"> Buat jadwal minggu ini</label>
                        <h6>DON'T forget to</h6>
                        <textarea id="additional7" name="additional7" rows="4" cols="32">Cek Emails!</textarea>
                        <h6>Weekly Goals</h6>
                        <textarea id="additional8" name="additional8" rows="4"
                            cols="32">Better Than Yesterday!</textarea>
                        <br><br>
                    </div>
                    <div id="monday">
                        <h3 style="text-align: center;background-color: whitesmoke;">MONDAY</h3>
                        <h6>TO DO LIST</h6>
                        <input type="checkbox" id="task4" name="task4">
                        <label for="task4"> Kuliah RO </label><br>
                        <input type="checkbox" id="task5" name="task5">
                        <label for="task5"> Kuliah MProsTI</label><br>
                        <input type="checkbox" id="task6" name="task6">
                        <label for="task6"> Rapat kepanitiaan</label><br>
                        <input type="checkbox" id="task8" name="task8">
                        <label for="task8"> Kerjakan tugas</label><br>
                        <h6>DON'T forget to</h6>
                        <textarea id="additional7" name="additional7" rows="4" cols="32">Cek Emails!</textarea>
                        <h6>Weekly Goals</h6>
                        <textarea id="additional8" name="additional8" rows="4"
                            cols="32">Better Than Yesterday!</textarea>
                        <br><br>
                    </div>
                    <div id="tuesday">
                        <h3 style="text-align: center;background-color: whitesmoke;">TUESDAY</h3>
                        <h6>TO DO LIST</h6>
                        <input type="checkbox" id="task9" name="task9">
                        <label for="task9"> Siram tanaman di balkon</label><br>
                        <input type="checkbox" id="task10" name="task10">
                        <label for="task10"> Kelas Statistika</label><br>
                        <input type="checkbox" id="task11" name="task11">
                        <label for="task11"> Kelas MPB</label><br>
                        <input type="checkbox" id="task12" name="task12">
                        <label for="task12"> Kerjakan tugas</label>
                        <h6>DON'T forget to</h6>
                        <textarea id="additional7" name="additional7" rows="4" cols="32">Cek Emails!</textarea>
                        <h6>Weekly Goals</h6>
                        <textarea id="additional8" name="additional8" rows="4"
                            cols="32">Better Than Yesterday!</textarea>
                        <br><br>
                    </div>
                    <div id="wednesday">
                        <h3 style="text-align: center; background-color: whitesmoke;" >WEDNESDAY</h3>
                        <h6>TO DO LIST</h6>
                        <input type="checkbox" id="task13" name="task13">
                        <label for="task13"> Kuliah DMJK</label><br>
                        <input type="checkbox" id="task14" name="task14">
                        <label for="task14"> Rekam suara eval PSM</label><br>
                        <input type="checkbox" id="task15" name="task15">
                        <label for="task15"> Rapat kepanitiaan</label><br>
                        <input type="checkbox" id="task16" name="task16">
                        <label for="task16"> Kerjakan tugas</label>
                        <h6>DON'T forget to</h6>
                        <textarea id="additional7" name="additional7" rows="4" cols="32">Cek Emails!</textarea>
                        <h6>Weekly Goals</h6>
                        <textarea id="additional8" name="additional8" rows="4"
                            cols="32">Better Than Yesterday!</textarea>
                        <br><br>
                    </div>
                    <div id="thursday">
                        <h3 style="text-align: center; background-color: whitesmoke;">THURSDAY</h3>
                        <h6>TO DO LIST</h6>
                        <input type="checkbox" id="task17" name="task17">
                        <label for="task17"> Olahraga</label><br>
                        <input type="checkbox" id="task18" name="task18">
                        <label for="task18"> Kelas RKPL</label><br>
                        <input type="checkbox" id="task19" name="task19">
                        <label for="task19"> Kelas PWEB</label><br>
                        <input type="checkbox" id="task20" name="task20">
                        <label for="task20"> Rapat kepanitiaan</label><br>
                        <input type="checkbox" id="task21" name="task21">
                        <label for="task21"> Kerjakan tugas</label>
                        <h6>DON'T forget to</h6>
                        <textarea id="additional7" name="additional7" rows="4" cols="32">Cek Emails!</textarea>
                        <h6>Weekly Goals</h6>
                        <textarea id="additional8" name="additional8" rows="4"
                            cols="32">Better Than Yesterday!</textarea>
                        <br><br>
                    </div>
                    <div id="friday">
                        <h3 style="text-align: center; background-color: whitesmoke;">FRIDAY</h3>
                        <h6>TO DO LIST</h6>
                        <input type="checkbox" id="task22" name="task22">
                        <label for="task22"> Kelas MPB</label><br>
                        <input type="checkbox" id="task23" name="task23">
                        <label for="task23"> Latihan PSM</label><br>
                        <input type="checkbox" id="task24" name="task24">
                        <label for="task24"> Asistensi</label><br>
                        <h6>DON'T forget to</h6>
                        <textarea id="additional7" name="additional7" rows="4" cols="32">Cek Emails!</textarea>
                        <h6>Weekly Goals</h6>
                        <textarea id="additional8" name="additional8" rows="4"
                            cols="32">Better Than Yesterday!</textarea>
                        <br><br>
                    </div>
                    <div id="saturday">
                        <h3 style="text-align: center;background-color: whitesmoke;">SATURDAY</h3>
                        <h6>TO DO LIST</h6>
                        <input type="checkbox" id="task25" name="task25">
                        <label for="task25"> Olahraga</label><br>
                        <input type="checkbox" id="task26" name="task26">
                        <label for="task26"> Webinar</label><br>
                        <input type="checkbox" id="task27" name="task27">
                        <label for="task27"> Latihan PSM</label><br>
                        <input type="checkbox" id="task28" name="task28">
                        <label for="task28"> Makan malam di ...</label>
                        <h6>DON'T forget to</h6>
                        <textarea id="additional7" name="additional7" rows="4" cols="32">Cek Emails!</textarea>
                        <h6>Weekly Goals</h6>
                        <textarea id="additional8" name="additional8" rows="4"
                            cols="32">Better Than Yesterday!</textarea>
                        <br><br>
                        </textarea>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
</body>

</html>
