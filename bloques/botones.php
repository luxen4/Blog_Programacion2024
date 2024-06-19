<h2><?= $h2; ?></h2>
<div style="display: flex;">
    <div>
    <a href="<?= $href0; ?>">
            <input type="button" value="<?= $value_buttons[0]; ?>" class="custom-button" onclick="alert('Button Clicked!')">
        </a>
    </div>

    <?php if (isset($value_buttons[1]) && !empty($value_buttons[1])) { ?>
        <div>

            <a href="#">
                <input type="button" value="<?= $value_buttons[1]; ?>" class="custom-button" onclick="alert('Button Clicked!')">
            </a>

        </div><?php }
                ?>

    <?php if (isset($value_buttons[2]) && !empty($value_buttons[2])) { ?>
        <div>
            <input type="button" value="<?= $value_buttons[2]; ?>" class="custom-button" onclick="alert('Button Clicked!')">
        </div><?php }
                ?>

    <?php if (isset($value_buttons[3]) && !empty($value_buttons[3])) { ?>
        <div>
            <input type="button" value="<?= $value_buttons[3]; ?>" class="custom-button" onclick="alert('Button Clicked!')">
        </div><?php }
                ?>

</div>