<?php
  session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/style.css">
</head>
<body>  
    <!----navbar--->
    <header class="nav-atas fixed-top">
        <h1>Piala UNP Kediri</h1>
        <ul class="link">   
            <li><a href="#home"><i class="bi bi-house-door-fill"></i> Home</a></li>
            <li><a href="#about"><i class="bi bi-person-lines-fill"></i> About</a></li>
            <li><a href="#skills"><i class="bi bi-image-alt"></i></i> Galery</a></li>
            <li><a href="#contact"><i class="bi bi-box-arrow-in-right"></i></i> Login</a></li>
        </ul>
        <i class="bi bi-list burger"></i>
     </header>

        <!----Home--->
    <section id="home">
      <div class="home">
          <div class="left">
              <h1>Selamat datang di, <br>Piala UNP Kediri<span class="nama"> 2022</span><br>Tournamen MLBB Se- Jawa Timut</h1>
              <br><br>
              <ul>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                  <li><a href="#"><i class="bi bi-github"></i></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
              </ul>
          </div>
          <div>
              <img src="img/logo MLBB.jpg" alt="foto" class="foto">
          </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,0L80,42.7C160,85,320,171,480,208C640,245,800,235,960,197.3C1120,160,1280,96,1360,64L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </section>
    <!----About---->
    <section id="about" class="about">
        <h1>UNP CUP 2022</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, animi!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ipsam molestias veritatis ea, impedit sequi voluptas minus ullam itaque alias.</p>
        <h2>Visi dan Misi</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero beatae quis, modi illo molestias explicabo et numquam nobis deleniti corrupti asperiores quidem reiciendis enim nesciunt cumque voluptate totam velit eveniet in amet odio excepturi adipisci veritatis? Quod eligendi eaque omnis nam reprehenderit eum illum! Consequuntur veniam blanditiis recusandae consequatur illum sit! Laudantium quo eum, tenetur architecto nulla repellendus sit quod officia ullam animi, illum saepe? Quibusdam ratione reprehenderit, eius suscipit soluta tenetur repudiandae. Assumenda, quo aperiam? Reiciendis, voluptatem impedit esse cumque iure saepe. Quis non aliquam vitae et mollitia, ipsum atque, quaerat molestias impedit, quae explicabo labore sunt laudantium eligendi.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga reiciendis ipsum maiores repellendus nulla enim tempora atque non delectus quis provident soluta, obcaecati corrupti error reprehenderit doloremque animi quo, aut consectetur nostrum praesentium ut consequuntur! Mollitia, iure labore. Quidem perspiciatis cupiditate dolores eius nisi aliquid, repellendus ad nihil facilis, eum ab. Iure error tempore dolor beatae natus iste perspiciatis cumque. Ratione unde sed et voluptatum soluta molestias magni possimus!</p>
    </section>

    <!----Skills---->
    <section id="skills" class="skills">
        <h1>Galery</h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin: 0 auto; width: 1000px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/mlbb1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/mlbb2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/mlbb3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <br><br>

    <!----login----> 
    <?php
      if(isset($_SESSION['nomortim'])){ 
        if(isset($_SESSION['nomortim'])){
          include 'koneksi.php';
          $querytim = "SELECT * FROM tim WHERE nomor = '".$_SESSION['nomortim']."'";
          $queryanggota = "SELECT * FROM anggota WHERE nomor = '".$_SESSION['nomortim']."'";
  
          $datatim = query($querytim);
          $dataang = query($queryanggota);
          $tim = $datatim[0];
      }else{
          header('Location:index.php#contact');
      }?>
        <section id="contact" style="margin-top: 50px;">
          <div class="container" style="padding-left: 55px;">
            <h3>Detail Tim : <?= $tim['nama'] ?></h3>
            <a href="logout.php" class="btn btn-primary btn-kirim"  onclick="return confirm('Apakah anda yakin?');"><i class="bi bi-box-arrow-left"></i> Log Out</a>
          </div>
          <br><br>
          <div id="print">
            <div class="home" style="padding-top : 0px;">
              <div>
                  <img src="logo/<?=$tim['logo']?>" alt="foto" class="foto"> 
              </div>
              <div class="left">
                  <h3>Nomor Pendaftaran : <?= $tim['nomor']?></h3>
                  <h3>Nama Tim : <?= $tim['nama']?></h3>
                  <h3>Asal : <?= $tim['asal']?></h3>
                  <h3>Email : <?= $tim['email']?></h3>
                  <h3>Nomor hp : <?= $tim['nomortlp']?></h3>
                  <h3>Tanggal Daftar : <?= $tim['tgl']?></h3>
                  <h3>status : Sudah Terdaftar</h3>
              </div>
          </div>
          <br><br>
          <br>
          <div class="container" style="padding-bottom: 50px;">
          <h3>Anggota Tim : </h3>
          <br>
          <table class="table">
              <thead>
                  <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Player</th>
                  <th scope="col">Nickname Game</th>
                  <th scope="col">Gmae ID</th>
                  <th scope="col">Role</th>
                  </tr>
              </thead>
              <?php $i = 1; foreach($dataang as $key => $pg): ?>
              <tbody>
                  <tr>
                      <th scope="row"><?= $i++ ?></th>
                      <td><?= $pg['nama']?></td>
                      <td><?= $pg['nickname']?></td>
                      <td><?= $pg['idgame']?></td>
                      <td><?= $pg['role']?></td>
                  </tr>
              </tbody>
              <?php endforeach; ?>
          </table>
          </div>
        </div>
      </section>
      <?php }else{ ?>
        <section id="contact">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Login</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6">
              <form name="login" method="POST" action="validasilogintim.php">
              <?php if(isset($_SESSION['error'])){ ?>
                <p style="color: red;"><?php echo $_SESSION['error']; session_destroy();?></p>
              <?php };?>
                <div class="mb-3">
                  <label for="Emailtim" class="form-label">Email</label>
                  <input type="text" class="form-control" id="emailtim" aria-describedby="emailtim" name="emailtim" required/>
                </div>
                <div class="mb-3">
                  <label for="passwordtim" class="form-label">Password</label>
                  <input type="password" class="form-control" id="passwordtim" aria-describedby="passwordtim" name="passwordtim" />
                </div>
                <button type="submit" class="btn btn-primary btn-kirim" name="login"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                <a href="daftartim.php" class="btn btn-primary btn-kirim"><i class="bi bi-plus-lg"></i> Daftar</a>
                <a href="login.php" class="btn btn-primary btn-kirim"><i class="bi bi-person-circle"></i> Admin</a>
              </form>
            </div>
          </div>
        </div>
    </section>
     <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
