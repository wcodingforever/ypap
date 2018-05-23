<?php

// if($_GET){
//     $echo = "dfd"; 
//     if(isset($_GET['insert'])){
//         insert();
//     }elseif(isset($_GET['select'])){
//         select();
//     }
// }
// // $echo = ""; 
//     function select()
//     {
//        $echo = "The select function is called.";
//     }
//     function insert()
//     {
//        $echo = "The insert function is called.";
//     }

?>

<form method="GET">
<input type="submit" class="button" name="insert" value="insert" />
<?php if($_GET['insert']) echo "insert";?>
<input type="submit" class="button" name="select" value="select" />
</form>

