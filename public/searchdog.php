<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title> Dog </title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/tracuu.css" />
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php include('../partials/header.php') ?>

<main>  
		<h2 class="text-center" >Tra cứu thông tin các loài chó</h2>
        <div>
            <form class="text-center" action="searchdog.php" method="get">
            <label for="search">Nhập tên giống chó hoặc mèo: </label>
                <input type="text" name="search" />
               <input type="submit" name="ok" value="Tìm" />
            </form>
        </div>

        <?php
        // Nếu người dùng submit form thì thực hiện
        if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Hãy nhập đi nào!";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from dog where name like '%$search%'";
 
                // Kết nối sql
                $con = mysqli_connect('localhost', 'root', '', 'thepet');
 
                // Thực thi câu truy vấn
                $sql = mysqli_query($con, $query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($sql);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                if ($num > 0 && $search != "") 
                {
                    // Dùng $num để đếm số dòng trả về.
                   // echo "<p>Thông tin về loài <b>$search</b> :</p>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                   
                    while ($row = mysqli_fetch_assoc($sql)) {
                            echo "<br>";
                            $pic = '<img src="img/' . $row['img'] . '">';
                            echo "$pic";
                            echo "<br>";
                            echo "<p>Chó <b> {$row['name']} </b> </p>";
                            echo "<p>Nguồn gốc: {$row['country']}</p>";
                            echo "<p>Chi tiết: {$row['detail']}</p>";                  
                    }
                    
                } 
                else {
                    echo "Không tìm thấy kết quả!";
                }
                mysqli_close($con);
            }
        }

        ?>   
        

</main>     


<?php include('../partials/footer.php') ?>

</body>
</html>
