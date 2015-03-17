<?php include(ROOT.'/template/header.tpl'); ?>
        <div class="container">
            <p>This url is the passkey for text. Who has the link can edit and read the text, be careful!</p>
            <p><?php echo($url); ?></p>
            <p>QrCode<br/>
            <img src="data:image/png;base64,<?php echo($image64); ?>" />
            </p>
            <p>Click the button to delete the passkey, the text and the link<br/>
            <a class="btn btn-danger" href="<?php echo($url_root.'/edit/delete/'.$cid); ?>">Delete</a></p>
        </div>
<?php include(ROOT.'/template/footer.tpl'); ?>