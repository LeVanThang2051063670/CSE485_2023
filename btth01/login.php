
        <link rel="stylesheet" href="css/style_login.css">
        <?php include 'header.html'; ?>

    </header>
    
   

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>

                  
    


                 <?php 
                
                
               
                
                if (isset($_POST['Login'])==true) {
                    $tendangnhap = $_POST['tk'];
                    $matkhau = $_POST['mk'];
                   
                    $conn =new PDO("mysql:host=localhost;dbname=btth01_cse485","root","");
                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                   // Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
                    if (! $tendangnhap || ! $matkhau) {
                        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                        exit;
                    }
                    $sql = "select * from users where taikhoan = ? and matkhau = ?";
                    $stmt = $conn->prepare($sql) ;
                    $stmt->execute([$tendangnhap,$matkhau]);
                   if ($stmt->rowCount()==1){
                   $user = $stmt->fetch();
                   header("location:index.php");
                   }
                 else{
                    echo "<p style='text-align: center; '> Đăng nhập sai.Vui lòng đăng nhập lại  </p>";
                   }
                }
                ?> 
                    <div class="card-body">
                        <form>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control "name="tk" placeholder="username" >
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                                <input type="text" class="form-control"name="mk" placeholder="password" >
                            </div>
                            
                            <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" name ="Login" value="Login" class="btn float-end login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center ">
                            Don't have an account?<a href="#" class="text-warning text-decoration-none">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                        </div>
                    </div>
                </div>

        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>