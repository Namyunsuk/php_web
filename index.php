<!DOCTYPE html>
 
<html>
<head>
        <meta charset = 'utf-8'>
</head>
<body>
 <?php
                $connect = mysqli_connect('localhost', 'namyunsuk', '1234', 'blog') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
 
                session_start();
 
                if(isset($_SESSION['userid'])) {
			echo $_SESSION['userid'];?>님 안녕하세요
			<button onclick="location.href='./logout.php'">로그아웃</button>
                        <br/>
        <?php
                }
                else {
        ?>              <button onclick="location.href='./login.php'">로그인</button>
                        <br />
        <?php   }
        ?>



<?php
                $connect = mysqli_connect('localhost', 'namyunsuk', '1234', 'blog') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);
 
        ?>
        <h2>게시판</h2>
        <table align = center>
        <thead>
        <tr>
        <td>번호</td>
        <td>제목</td>
        <td>작성자</td>
        </tr>
        </thead>
 
        <tbody>
        <?php
                while($rows = mysqli_fetch_assoc($result)){
                        if($total%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
                <td><?php echo $total?></td>
                
                <a href = "view.php?number=<?php echo $rows['number']?>">
                <?php echo $rows['title']?></td>
                  <td><?php echo $rows['id']?></td>
              
                </tr>
        <?php
                $total--;
                }
        ?>
        </tbody>
        </table>
 
        <div class = text>
        <font style="cursor: hand"onClick="location.href='./write.php'">글쓰기</font>
        </div>
</body>
</html>
