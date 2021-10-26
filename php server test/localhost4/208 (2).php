<?php
function function_echo(){
    echo "Hello!";
}
if($_POST){
    function_echo();
}
?>
<form method="post">
    <input type="submit" name="create" value="Hello?">
</form>