<?php
    ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Brainster | Employee</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/employeestudent.css">
    <link rel="icon" href="assets/images/logo.ico"> 
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'> 
    <script src="assets/js/main.js"></script>
</head>
<body>
    <nav class="body-color nav-main">
        <div class="logo">
            <a href="index.php"><img src="assets/images/logo-brainster-cut.png" class="img-responsive" alt=""></a>
        </div>
        <div class="links">
            <div>
                <ul class="text-black">
                    <li class="text-black"><a href="https://www.brainster.io/marketpreneurs" target="_blank">Академија за маркетинг</a></li>
                    <li class="text-black"><a href="http://codepreneurs.co/" target="_blank">Академија за програмирање</a></li>
                    <li class="text-black"><a href="https://www.brainster.io/data-science" target="_blank">Академија за data science</a></li>
                    <li class="text-black"><a href="https://www.brainster.io/design" target="_blank">Академија за дизајн</a></li>
                </ul>
            </div>
        </div>
        <a role="button" href="employeestudent.php" class="text-white bg-red btn-nav employee">Вработи наш студент</a>
        <button class="barsMenu" type="button" onclick="barsMenu()">
            <span class="icon-bar"></span>
            <span class="icon-bar bar-75"></span>
            <span class="icon-bar bar-50"></span>
        </button>
    </nav><!--nav finished-->
    <aside class="nav-sidebar">
        <button type="button" class="sidebarIcon" onclick="barsMenuClose()"><i class="fas fa-times  barsMenuClose"></i></button>
        <ul class="text-black">
            <li class="text-white"><a href="https://www.brainster.io/marketpreneurs" target="_blank">Академија за маркетинг</a></li>
            <li class="text-white"><a href="​https://codepreneurs.co/" target="_blank">Академија за програмирање</a></li>
            <li class="text-white"><a href="" target="_blank">Академија за data science</a></li>
            <li class="text-white"><a href="https://www.brainster.io/design" target="_blank">Академија за дизајн</a></li>
            <li><a role="button" href="employeestudent.php" class="employee text-white bg-red btn-nav">Вработи наш студент</a></li>
        </ul>
    </aside><!--NAV SIDEBAR-->
    <div class="container-fluid">
        <div id="signUpForm" class="row padding-5-0 body-color ">
            <div class="col-md-12 text-center">
                <p class="h1">Вработи Студенти</p>
            </div>
        </div><!--form-intro finished-->
        <div class="row body-color padding-top-5-bottom-15">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                <form action="employeestudent.php" class="form form-group" method="POST">
                    <?php
                        include 'get-requests.php';
                    ?>
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12 firstLastName">
                            <div class="form-group">
                                <label for="firstLastName">Име и презиме</label>
                                <input id="firstLastName" name="firstLastName" type="text" class="input-lg form-control" placeholder="Вашето име и презиме">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 companyName">
                            <div class="form-group">
                                <label for="companyName">Име на компанија</label>
                                <input id="companyName" name="companyName" type="text" class="input-lg form-control" placeholder="Име на вашата компанија">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12 contactEmail">
                            <div class="form-group">
                                <label for="contactEmail">Контакт имејл</label>
                                <input id="contactEmail" name="contactEmail" type="text" class="input-lg form-control" placeholder="Контакт имејл на вашата компанија">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12 phone">
                            <div class="form-group contactPhone">
                                <label for="contactPhone">Контакт телефон</label>
                                <input id="contactPhone" name="contactPhone" type="text" class="input-lg form-control" placeholder="Контакт телефон на вашата компанија">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12 margin-5-0">
                            <label for="studentType">Тип на студенти</label>
                            <br>
                            <div class="custom-select">
                                <select name="studentType" id="studentType" class="italic custom-select form-control input-lg">
                                    <option style='display:none' value="0">Избери тип на студент</option>
                                    <?php 
                                        $student = [
                                            1 => "Студенти од маркетинг",
                                            2 => "Студенти од програмирање",
                                            3 => "Студенти од data science",
                                            4 => "Студенти од дизајн",
                                        ];
                                        foreach ($student as $key => $value) {
                                            echo"<option value='$value'>$value</option>";
                                            // if you switch second value with key, in sql will enter by number 1.2.3 or 4 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <label for="" class=""></label>
                            <button type="submit" class="form-group btn btn-block btn-lg bg-red text-white btn-margin">Испрати</button>
                        </div>
                    </div>
                </form><!--FORM FINISHED-->
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include 'functions.php';
                    $firstLastName = $_POST["firstLastName"];
                    $companyName = $_POST["companyName"];
                    $contactEmail = $_POST["contactEmail"];
                    $contactPhone = $_POST["contactPhone"];
                    $studentType = $_POST["studentType"];
                    checkUserPass($firstLastName, $companyName, $contactEmail, $contactPhone, $studentType);
                    validateEmailPhone();
                    
                    // pisuvanje vo lokalen fajl as back up
                    $data = "$firstLastName=$companyName=$contactEmail=$contactPhone=$studentType\n";
                    file_put_contents("data.txt", $data, FILE_APPEND);

                    // conection with database
                    include 'data_base_connection.php';
                    
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    // inserting in database
                    $sql = "INSERT INTO members (company_user_name_surname, company_name, company_email, company_phone, student_type) VALUES ('$firstLastName', '$companyName', '$contactEmail', '$contactPhone', '$studentType');";
                   
                    if (mysqli_query($conn, $sql)) {
                        header("location: employeestudent.php?success=send");
                        die();
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            ?>
            </div>
        </div>
        <div class="row " id="Footer">
            <div class="padding-2 col-md-12 footer text-center">
                <p>Изработено со <i class="fas fa-heart red-col"></i> од студентите на Brainster</p>
            </div>
        </div>
       
    </div><!--CONTAINER FLUID-->
</body>
    <script src="assets/js/select.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
</html>
