<?php
 
        $connect = mysqli_connect('localhost', 'namyunsuk', '1234', 'blog') or die("fail");
 
 
        $id=$_GET[id];
        $pw=$_GET[pw];
        $query = "insert into member (id, pw, date, permit) values ('$id', '$pw', 0)";
 
 
        $result = $connect->query($query);
 

        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        
                        alert("fail");
                </script>
<?php   }
 
        mysqli_close($connect);
?>
