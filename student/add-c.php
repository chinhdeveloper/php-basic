<?php 
include 'mysql.php';
include 'helper.php';

if(methoadPost()){
    $conn=OpenCon();
    $oneStudent = methoadPost();
    $frame = $oneStudent['frame'];
    $age = $oneStudent['age'];
    $address = $oneStudent['address'];
    if($conn){
        $insertStu = "INSERT INTO `student`( `fname`, `age`, `address`) VALUES ('$frame','$age','$address')";
        if ($conn->query($insertStu) === TRUE) {
            echo "Bạn đã thành công ";
            CloseCon($conn);
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            CloseCon($conn);
          }
    }else {
        echo "xin loi databáse bị vấn đề";
    }
}else {
    echo "Mời bạn nhập thông tin hợp lý";
}

?>