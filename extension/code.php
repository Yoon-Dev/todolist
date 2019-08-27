<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/plugin/jquery/jquery-3.4.0.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap-grid.css">


    <title>TODOLIST</title>
</head>


<body class="locked" id="body-code">
<div class="container">
    <div class="row">
        <div class="col-12" style="text-align: center;">
            <form action="" method="post" style="padding-top: 50vh;">
                <input class="input-code my-3" type="text" name="code" id="code"><br>
                <input class="input-sub" type="submit" value="unlocked" name="test" id="submit-code">
            </form>
        </div>
    </div>    
</div>
</body>

<?php
if(isset($_POST['test'])){
if($_POST['code'] == "6.62607004"){
    $_SESSION['code'] = true;
    $_SESSION['reload'] = 2;
}
else{
    $_SESSION['code'] = false;
?>
<script>
if($('#code').hasClass('input-code')){
$('#code').removeClass('input-code');
$('#code').addClass('input-code-error');
}
if($('#submit-code').hasClass('input-sub')){
$('#submit-code').removeClass('input-sub');
$('#submit-code').addClass('input-sub-error');
}
if($('#body-code').hasClass('locked')){
$('#body-code').removeClass('locked');
$('#body-code').addClass('locked-error');
}
// $('.locked').css({"background": "url('https://media.giphy.com/media/9WC8WTZsFxkRi/giphy.gif')",
//                     "background-size": "cover",
//                     "background-position": "contain center"});
   
</script>
<?php
}
}
?>

</html>