<?php
# di buat oleh adidoank
# bandung 25 september 2018

@system("clear");
@system("clear");
@system("clear");

//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
print $ijo."
  ____    _    ____ ___ _   _  ____
 / ___|  / \  |  _ \_ _| \ | |/ ___|
| |     / _ \ | |_) | ||  \| | |  _
| |___ / ___ \|  __/| || |\  | |_| |
 \____/_/   \_\_|  |___|_| \_|\____|".$t;
 echo $putih."create by : adidoank | "."kode invite: q0ji94".$t.$t;

include(readline($turkis."masukan config : "));
//echo"$turkis bot start $putih \n";
print "BOT CAPING……………………".$t.$kuning."[>] ".$putih."sedang login".$t;
sleep(2);

// login

$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/user/ccsp/detail"); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$head = array();
					$head[] = "Cookie: u=$uid;n=$n";
					$head[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
		$result = curl_exec($ch);
		$js = json_decode($result,true);
		$coin = $js['data']['coin'];
		$money = $js['data']['money'];
		if ($js['message'] == 'OK') {
		echo $turkis."[*] ".$putih."login: ".$ijo.$js['message'].$t;
		sleep(1);
		echo $turkis."[•] ".$putih."coin: ".$ijo.$coin.$putih." || money: ".$ijo."Rp.".$money.$t.$t;
		}
		else
		{
		echo $red."[!] login gagal || ".$js['message'].$t;
		exit;
		}
sleep(1);
echo $turkis."[>] ".$putih."menjalankan bot".$t;
sleep(1);
#######################################################
echo $turkis."[*] ".$putih."membaca berita >20<".$t;
sleep(1);
$x = 0;
while($x<20):
$x++;
flush();
$news		=	news($uid,$n);
$news1 = json_decode($news,true);
if ($news1['message'] == 'OK') {
	    echo $ijo."    ==> sukses ";
	    }
	    else
	    {
	    echo $red."[!] => failed !";
	    }
endwhile;
sleep(1);
// video
echo $t.$turkis."[*] ".$putih."menonton video >10<".$t;
sleep(1);
$v=0;
while($v<10):
$v++;
flush();
$video		=	video($uid,$n);
$video1 = json_decode($video,true);
if ($video1['message'] == 'OK') {
	    echo $ijo."    ==> sukses ";
	    }
	    else
	    {
	    $red."[!] => failed !";
	    }
endwhile;
sleep(1);
//share
echo $t.$turkis."[*] ".$putih."membagikan konten >5<".$t;
sleep(1);
$s=0;
while($s<5):
$s++;
flush();
$share		=	share($uid,$n);
$share1 = json_decode($share,true);
	if ($share1['message'] == 'OK') {
	    echo $ijo."    ==> sukses ";
	    }
	    else
	    {
	    $red."[!] => failed !";
	    }
endwhile;
sleep(1);
//share code
sleep(1);
echo $t.$turkis."[*] ".$putih."membagikan code invite >20<".$t;
sleep(1);
$c=0;
while ($c < 20):
$c++;
flush();
$code		=	code($uid,$n);
$code1 = json_decode($code,true);
if ($code1['message'] == 'OK') {
	    echo $ijo."    ==> sukses ";
	    }
	    else
	    {
	    $red."[!] => failed !";
	    }
endwhile;
sleep(1);
// buka notif
sleep(1);
echo $t.$turkis."[*] ".$putih."membuka notifikasi >5<".$t;
sleep(1);
$k=0;
while ($k < 5):
$k++;
flush();
$klik		=	klik($uid,$n);
$klik1 = json_decode($klik,true);
	if ($klik1['message'] == 'OK') {
	    echo $ijo."    ==> sukses ";
	    }
	    else
	    {
	    $red."[!] => failed !";
	    }
endwhile;
sleep(1);
//result
$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/user/ccsp/detail"); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$headr = array();
					$headr[] = "Cookie: u=$uid;n=$n";
					$headr[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);
		$result = curl_exec($ch);
		$rls = json_decode($result,true);
		$coin1 = $rls['data']['coin'];
		$money1 = $rls['data']['money'];

	  echo $t."
	  =====| RESULT |=====".$t;
echo $putih."[•] coin: ".$ijo.$coin1.$putih." | money: Rp.".$ijo.$money1.$t;

#######################################################
function news($uid,$n){ 
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/news/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
				$headers[] = "Cookie: u=$uid;n=$n";
				$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function video($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/video/view/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function share($uid,$n){
		$rand = rand(1,9999);
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/news/$rand"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function code($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/code"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
				$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
function klik($uid,$n){
		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/event/share/click/push"); 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			$headers = array();
					$headers[] = "Cookie: u=$uid;n=$n";
					$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 6.0.1; Redmi 3S Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/66.0.3359.126 Mobile Safari/537.36;CapingNews/4.1.4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}
?>
