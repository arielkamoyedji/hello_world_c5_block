<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="">
    <p>
        <label for="field1"><?php echo t("Field 1"); ?> </label>
        <input id="field1" name="field1" type="text" value="<?php echo $field1 ?>" />
    </p>
    <p>
        <label for="field2"><?php echo t("Field 2"); ?> </label>
        <input id="field2" name="field2" type="text" value="<?php echo $field2 ?>" />
    </p>
    <p>
        <input id="booleanField" name="booleanField" type="checkbox" value="" <?php if($booleanField == "Yes") ?> checked" />&nbsp;&nbsp;<label for="booleanField"><?php echo t("Boolean field"); ?></label>
    </p>
    <hr>
</div>