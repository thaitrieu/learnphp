<?php
if(isset($_POST['data'])){
    $input = $_POST['data'];
    $inputNoCode = nl2br($input);

    echo $inputNoCode;
}
?>
<hr>
<form action="" method="post">
    <textarea name="data" id="" cols="30" rows="10"><?php echo $input; ?></textarea><br/>
    <button type="submit">Gem</button>
</form>
