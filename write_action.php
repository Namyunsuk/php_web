<?php
                $connect = mysqli_connect("localhost", "namyunsuk", "1234", "blog") or die("fail");
                
                $id = $_GET[name];                      
                $pw = $_GET[pw];                        
		$title = $_GET[title];                  
  		$content = $_GET[content]; 
                
 
                $URL = './index.php';                   
 
 
                $query = "insert into board (number,title, content,id, password) 
                        values(null,'$title', '$content', '$date',0, '$id', '$pw')";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "등록 완료."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>
