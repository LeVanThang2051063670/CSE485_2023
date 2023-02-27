
        <?php include 'header.html'; ?>

    </header> 
    

    <main class="container mt-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <?php
            $url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $url_components = parse_url($url);
            parse_str($url_components['query'], $params);

            $servername = "localhost";
            $username = "root";
            $password = "";

            
            $conn =new PDO("mysql:host=localhost:4306;dbname=btth01_cse485","root","");
            $stmt = $conn->prepare("SELECT * FROM baiviet WHERE ma_bviet = ?");
            $stmt->execute([$params['id']]);
            $data = $stmt->fetch();

            $stmt1 = $conn->prepare("SELECT * FROM tacgia WHERE ma_tgia = ?");
            $stmt1->execute([$data['ma_tgia']]);
            $data1 = $stmt1->fetch();

            echo    "<div class='row mb-5'>
                        <div class='col-sm-4'>
                            <img src='".$data['hinhanh']."' class='img-fluid' alt='...'>
                        </div>
                        <div class='col-sm-8'>
                            <h5 class='card-title mb-2'>
                                <a href='' class='text-decoration-none'>".$data['tieude']."</a>
                            </h5>
                            <p class='card-text'><span class='fw-bold'>Bài hát: </span>".$data['ten_bhat']."</p>
                            <p class='card-text'><span class='fw-bold'>Thể loại: </span>Nhạc trữ tình</p>
                            <p class='card-text'><span class='fw-bold'>Tóm tắt: </span>".$data['tomtat']."</p>
                            <p class='card-text'><span class='fw-bold'>Nội dung: </span>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                            <p class='card-text'><span class='fw-bold'>Tác giả: </span>".$data1['ten_tgia']."</p>
                        </div>          
                    </div>";
            
            $conn = null;
        ?>
                <!-- <div class="row mb-5">
                    <div class="col-sm-4">
                        <img src="images/songs/cayvagio.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="card-title mb-2">
                            <a href="" class="text-decoration-none">Cây và gió</a>
                        </h5>
                        <p class="card-text"><span class=" fw-bold">Bài hát: </span>Cây và gió</p>
                        <p class="card-text"><span class=" fw-bold">Thể loại: </span>Nhạc trữ tình</p>
                        <p class="card-text"><span class=" fw-bold">Tóm tắt: </span>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                        <p class="card-text"><span class=" fw-bold">Nội dung: </span>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                        <p class="card-text"><span class=" fw-bold">Tác giả: </span>Nguyễn Văn Giả</p>

                    </div>          
                </div>

                <div class="row mb-5">
                    <div class="col-sm-4">
                        <img src="images/songs/cayvagio.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="card-title mb-2">
                            <a href="" class="text-decoration-none">Cây và gió</a>
                        </h5>
                        <p class="card-text"><span class=" fw-bold">Bài hát: </span>Cây và gió</p>
                        <p class="card-text"><span class=" fw-bold">Thể loại: </span>Nhạc trữ tình</p>
                        <p class="card-text"><span class=" fw-bold">Tóm tắt: </span>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                        <p class="card-text"><span class=" fw-bold">Nội dung: </span>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                        <p class="card-text"><span class=" fw-bold">Tác giả: </span>Nguyễn Văn Giả</p>

                    </div>          
                </div> -->
               
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>