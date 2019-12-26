<?php session_start();?>
<?php require_once './view/header.php'; ?>
<div class="container-fluid">
    <div id="list" class="page">
        <?php require './view/list.php';?>
    </div>
    <div id="edit" class="page">
        <?php require './view/edit.php';?>
    </div>
    <div id="add" class="page">
        <?php require './view/add.php';?>
    </div>
    <div id="backoffice" class="page">
        <?php require './view/backoffice.php';?>
    </div>
    <div id="add_repe" class="page">
        <?php require './view/add_repe.php';?>
    </div>
    <div id="edit_repe" class="page">
        <?php require './view/edit_repe.php';?>
    </div>
</div>





<script type="text/javascript" src="./script/plugin/jquery/jquery-3.4.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="./script/display.js"></script>
<script type="text/javascript" src="./script/form.js"></script>
<script type="text/javascript" src="./script/dysplay-add-form"></script>   -->

<!-- New script front-->
<script type="text/javascript" src="./script/front/route.js"></script>  
<script type="text/javascript" src="./script/front/filterTask.js"></script> 
<script type="text/javascript" src="./script/front/edit.js"></script> 
<script type="text/javascript" src="./script/front/edit_repe.js"></script>
<script type="text/javascript" src="./script/front/add_repe.js"></script>
<script type="text/javascript" src="./script/front/o-grocery.js"></script>
<script type="text/javascript" src="./script/front/search.js"></script>
<script type="text/javascript" src="./script/front/detail-task.js"></script>

<!-- New script back-->
<script type="text/javascript" src="./script/back/b-del.js"></script>  
<script type="text/javascript" src="./script/back/b-edit.js"></script>
<script type="text/javascript" src="./script/back/b-edit_repe.js"></script>
<script type="text/javascript" src="./script/back/b-add.js"></script>   
<script type="text/javascript" src="./script/back/b-add_repe.js"></script>   

</body>
</html>