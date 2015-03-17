<?php include(ROOT.'/template/header.tpl'); ?>
        <div class="container">
            <p>This urlis the passkey for text. Who has the link can edit and read the text, be careful!</p>
            <p><?php echo($url); ?></p>
            <img src="data:image/png;base64,<?php echo($image64); ?>" />
        </div>
<?php include(ROOT.'/template/footer.tpl'); ?>