<?php
if (isset($_GET["notice"]) == "all_fields_required") {
    echo "<div class='get-requests-error text-center'>Се појави грешка:<br>Сите полиња се задолжителни</div>";
}
if (isset($_GET["email"]) == "invalid") {
    echo "<div class='get-requests-error text-center'>Се појави грешка:<br>Вашата е-маил адреса е невалидна<br>ве молиме внесете ja вашата најкористена е-маил адреса</div>";
}
if (isset($_GET["phone"]) == "invalid") {
    echo "<div class='get-requests-error text-center'>Се појави грешка:<br>Вашиот телефонски број е навалиден, ве молиме внесете тел во форма: xxxxxxxxx</div>";
}
// if (isset($_GET["success"]) == "send") {
//     echo  "<div class='get-requests-success text-center'>
//     Честитки: Вашето барање беше успешно пратено!<br>Нашиот тим ке ве контактира во наредните 24 часа!
//     </div>";
// }
// With image bellow
if (isset($_GET["success"]) == "send") {
    echo  "<div class='get-requests-success text-center '>
   <img id='congrats-img' src='assets/images/default.png'><br>Ви благодариме!<br>Нашиот тим ке ве контактира во наредните 24 часа!
    </div>";
}
?>