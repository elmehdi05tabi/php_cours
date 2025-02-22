<?PHP 
setcookie("style[color]","red",strtotime("+1 year")) ;
setcookie("style[font]","blue",time()+10) ; 
echo '<pre>' ;
print_r($_COOKIE);
echo '</pre>' ;
if(isset($_COOKIE["style"])) {
    echo $_COOKIE["style"]["color"] ; 
} 
?>