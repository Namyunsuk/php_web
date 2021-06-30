
<?php
    $connect = mysqli_connect("localhost", "namyunsuk", "1234", "blog") or die ("connect fail");
    $number = $_GET[number];
    $title = $_GET[title];
    $content = $_GET[content];
    $query = "delete from board where number=$number";
    $result = $connect->query($query);
    if($result) {
?>
        <script>
            alert("삭제되었습니다.");
            location.replace("./index.php");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
