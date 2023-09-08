<??php
$firstname $_POST['firstname'];
$lastname $_POST['lastname'];
$email $_POST['email']
$gender $_POST['gender'];
$knowinglanguages $_POST['knowinglanguages'];



//connection

$conn = new mysqli('localhost','root','','form_data');

if($conn->connect_error){
    die('connection Failed : '$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into data(firstname, lastname, email, gender, knowing_languages) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstname, $lastname, $email, $gender, $knowinglanguages);
    $stmt->execute();
    echo "data submited successfully...Thanks";
    $stmt->close();
    $conn->close();
}

?>