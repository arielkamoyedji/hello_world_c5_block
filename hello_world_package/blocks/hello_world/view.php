<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<fieldset>
    <legend><?php echo t("Your input"); ?></legend>
    <div class="">
        <?php
            echo "Field1: ".$field1."<br>";
            echo "Field2: ".$field2."<br>";

            if($booleanField == 0)
            {
                echo "Boolean: No";
            }
            else
            {
                echo "Boolean: Yes";
            }
        ?>
    </div>
</fieldset>