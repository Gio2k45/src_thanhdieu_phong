<?php $created_config='config/config.php';if(!file_exists($created_config)){if(touch($created_config)){}else{}}else{}?>
<?php require_once('config/config.php'); ?>
<?php if(isset($config['head']['anti_ddos']) && $config['head']['anti_ddos'] !== '') {require($config['head']['anti_ddos']);}?>
<?php $lockfile=__DIR__.'/install.lock';$configFile=__DIR__.'/config/config.js';if(!file_exists($lockfile)){echo '<script>alert("Bạn chưa cấu hình thông tin website!")</script>';echo '<script>window.location="./install/"</script>';exit;}else{$install_lock=file_get_contents($lockfile);if(strpos($install_lock,'step1 = true')!==false&&strpos($install_lock,'step2 = true')!==false){if(!file_exists($configFile)){echo '<script>alert("File config chưa được tạo!")</script>';echo '<script>window.location="./install/"</script>';exit;}}else{echo '<script>alert("Bạn chưa cấu hình thông tin website!")</script>';echo '<script>window.location="./install/"</script>';exit;}} ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?=$config['head']['description'];?>">
    <meta name="author" content="<?=$config['head']['author'];?>">
    <meta name="keywords" content="<?=$config['head']['keywords'];?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?=$config['head']['shortcut_icon'];?>" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <title><?=$config['head']['title'];?></title>
    <script src="//cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="./v4.0.2/js/jquery-3.6.0.min.js"></script>
    <script src="<?=$config['head']['anti_f12'];?>"></script>
    <link rel="stylesheet" href="./v4.0.2/css/toastr.css">
    <link rel="stylesheet" href="./v4.0.2/css/theme.css">
    <script src="./v4.0.2/js/toastr.min.js"></script>
    <link rel="stylesheet" href="./v4.0.2/css/toastr.min.css">
    <meta property="og:title" content="<?=$config['head']['title_small'];?>">
    <meta property="og:url" content="//thanhdieu.com">
    <meta property="og:image" content="<?=$config['head']['image_review'];?>">
    <meta name="theme-color" content="#00FFFF">
  </head>
  <body id="wussun-community" data-theme="theme-custom" onload="__StartFontEnd()" class="__BodyStyle ThanhDieuDepTrai__">
  <div id="stars"></div>
  <div id="stars2"></div>
  <div id="stars3"></div>
  <div id="addons"></div>
  <script src="./config/config.js"></script>
  <script src="./v4.0.2/js/resources.v4.js"></script>
  <script src="./v4.0.2/js/theme-custom.js"></script>
  <noscript>
  <h1>Vui Lòng Kích Hoạt Javascript.</h1>
  <p>Trang Website Sẽ Không Hoạt Động Nếu Bạn Tắt.</p>
  </noscript>
  </body>
</html>