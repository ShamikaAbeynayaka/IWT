<?php 

include_once'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';

?>

<?php 

$iid = $_POST["iid"];
$answer = $_POST["answer"];
$email = $_POST["email"];

$q = "INSERT INTO answer(answer_id, iid, answer) VALUES('', '$iid','$answer')";

if($conn->query($q)){
    

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username = 'js6695878@gmail.com';//your gmail
    $mail->Password = 'wsidmuccykkhbdhj';//your gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('js6695878@gmail.com', 'LankaLands');// your gmail

    $mail->addAddress($email);

    $mail->isHTML(true);

    $mail->Subject = "Answer for the question";
    $mail->Body = $answer;

    $mail->send();

    echo "Success";

}else{
    echo "fail";
}

?>