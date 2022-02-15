<?php
if (isset($_POST)) {
    $result1 = $result2 = null;
    $input = $_POST["input"];
    $select = $_POST["select"];

    if ($select == 'min') {
        $result1 = $input * 60 . " Minutes.";
    } else {
        $result2 = $input * 3600 . " Seconds";
    }
}
?>
<!DOCTYPE html>
<html>
<body>

    <div class="container">
        <div class="form">
            <form class="input" method="post" action="index.php">
                <div class="item">
                    <input type="number" min="1" id="input" name="input" value="<?php echo $input; ?>" />
                </div>
                <div class="item">
                    <input id="min" type="radio" value="min" name="select" checked />
                    <label for="sec">Hours to min</label>
                </div>
                <div class="item">
                    <input id="sec" type="radio" value="sec" name="select" />
                    <label for="sec">hours to seconds</label>
                </div>
                <div>
                    <input type="submit" name="submit" value="Convert">
                </div>
            </form>
        </div>
        <div class="result">
            <p id="result"><?php echo $result1; ?></p>
            <p id="result"><?php echo $result2; ?></p>
        </div>
    </div>


</body>

</html>