<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="../backend/Images/tsunami.png">
  <title>Tsunami Warning Center</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
  body {
    padding: 0;
    margin: 0;
    background-image: url(images/ts.png);
    background-size: cover;
    font-family: 'Montserrat', sans-serif;
}

.overlay {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.box {
    position: absolute;
    width: 400px;
    background-color: white;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 15px;
    box-shadow: 0 10px 10px 10px rgb(0, 0, 0, .2);
}

.header {
    background-image: url(images/ts.png);
    background-size: cover;
    padding: 90px 30px;
    color: white;
    border-radius: 15px 15px 0 0;
}

.header p {
    font-size: x-small;
}

.login-area {
    text-align: center;
    padding: 50px 50px 30px 50px;
}

.username,
.password {
    width: 100%;
    text-align: center;
    padding: 13px 0;
    border-radius: 20px;
    outline: none;
    border: none;
    color: white;
    background-color: rgba(55, 10, 114, .5);
    margin-bottom: 15px;
    transition: 5s;
}

.username::placeholder,
.password::placeholder {
    color: rgba(255, 255, 255, .7);
}

.username:focus,
.password:focus {
    background-color: rgba(55, 10, 114, .7);
}

.submit {
    width: 150px;
    padding: 10px;
    background-color: rgba(55, 10, 114, 1);
    border-radius: 10px;
    font-weight: bold;
    color: white;
    border: none;
    outline: none;
    margin: 10px;
    transition: .2s;
    cursor: pointer;
}

.submit:hover {
    background-color: #1f0344;
}

a {
    display: block;
    font-size: x-small;
    text-decoration: none;
    color: rgba(55, 10, 114, 1);
    margin-top: 10px;
}
</style>

<body>
  <?php
  if (@$_GET['msg'] == 'kosong') {
    $color = 'warning';
    $msg = 'Maaf user dan password tidak boleh kosong';
  } elseif (@$_GET['msg'] == 'sukses') {
    $color = 'success';
    $msg = 'Selamat Anda Berhasil log in';
  } elseif (@$_GET['msg'] == 'gagal') {
    $color = 'danger';
    $msg = 'Maaf Anda gagal log in';
  } else {
    $msg = '';
    $color = '';
  }
  ?>
  <div class="overlay"></div>
  <form action="cek_login.php" method="post" class="box">
    <div class="header">
      <h4 class="text-center"><b>Tsunami Warning Center</b></h4>
    </div>
    <div class="login-area">
    <?php
    if ($msg != '') { ?>
      <div class="alert alert-<?= $color ?> alert-dismissible fade show text-center" role="alert">
        <?= $msg ?>
      </div>
    <?php } ?>
      <input type="text" class="username" id="user" name="user" placeholder="Username" required>
      <input type="password" class="password" name="pass" id="pass" placeholder="Password" required>
      <input type="submit" class="submit">
      <a href="#">Forgot Password?</a>
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>