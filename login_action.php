<?php
 
        session_start();
        $connect = mysqli_connect("localhost", "namyunsuk", "1234", "blog") or die("fail");
        $id=$_GET['id'];
        $pw=$_GET['pw'];
        $query = "select * from member where id='$id'";
        $result = $connect->query($query);
        if(mysqli_num_rows($result)==1) {
 
                $row=mysqli_fetch_assoc($result);
 
       
                if($row['pw']==$pw){
                        $_SESSION['userid']=$id;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("로그인 되었습니다.");
                                        location.replace("./index.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }
 
                else {
        ?>              <script>
                                alert("error");
                                history.back();
                        </script>
        <?php
                }
 
        }
 
                else{
?>              <script>
                        alert("error.");
                        history.back();
                </script>
<?php
        }
?>
