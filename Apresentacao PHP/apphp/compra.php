<?PHP include('menu.php'); ?>
<?PHP

if(!isset($_SESSION['user_session']) && !isset($_SESSION['user_senha']))
{
    echo ' que que o sapo ta facendo?';
}
else{
    echo 'para vei';
}
?>