<?php    $connect = mysqli_connect("localhost","namyunsuk" ,"1234" ,"blog" ) or die("connect fail");
                $id = $_GET[id];
                $number = $_GET[number];
                $query = "select title, content, date, id from board where number=$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
                $title = $rows['title'];
                $content = $rows['content'];
                $usrid = $rows['id'];
                session_start();
                $URL = "./index.php";
 
                if(!isset($_SESSION['userid'])) {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
                else if($_SESSION['userid']==$usrid) {
        ?>
        <form method = "get" action = "modify_action.php">
        <table>
                <tr>
                <td> 글수정</td>
                </tr>                
                <table class = "table2">
                <tr>
                        <td>작성자</td>
                        <td><input type="hidden" name="id" value="<?=$_SESSION['userid']?>"><?=$_SESSION['userid']?></td>
                        </tr>
                        <tr>
                        <td>제목</td>
                        <td><input type = text name = title value="<?=$title?>"></td>
                        </tr>
                        <tr>
                        <td>내용</td>
                        <td><textarea name = content><?=$content?></textarea></td>
                        </tr>
                        </table>
                        <center>
                        <input type="hidden" name="number" value="<?=$number?>">
                        <input type = "submit" value="작성">
                        </center>
                </td>
                </tr>
        </table>
        <?php   }
                else {
        ?>              <script>
                                alert("권한이 없습니다.");
                                location.replace("<?php echo $URL?>");
                        </script>
        <?php   }
        ?>
