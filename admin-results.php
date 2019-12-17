<!DOCTYPE html>
<html>
<head>
    <title>Admin-Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    include 'data_base_connection.php';
    $sql = "SELECT * FROM members;";
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);
    
    
// Displaying  in table
    if ($result_check > 0) {
        echo " 
        <table class='table table-striped table-bordered text-left'>
        <thead>
            <tr>
                <th>Реден број</th>
                <th>Име и презиме</th>
                <th>Име на компанија</th>
                <th>Контакт е-маил</th>
                <th>Контакт телефон</th>
                <th>Тип на студент</th>
                <th>Датум на барање</th>
            </tr>
        <thead>";

      
        while ($row = mysqli_fetch_assoc($result))
        echo "
        
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['company_user_name_surname']}</td>
                <td>{$row['company_name']}</td>
                <td>{$row['company_email']}</td>
                <td>{$row['company_phone']}</td>
                <td>{$row['student_type']}</td>
                <td>{$row['reg_time']}</td>
            </tr>";
         echo "</table>";   
    }

?>




<!--scripts bootstrap.js and j.Query-->  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
</body>
</html>