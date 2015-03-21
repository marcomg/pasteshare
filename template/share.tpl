<?php include(ROOT.'/template/header.tpl'); ?>
        <div class="container">
            <p>This url is the passkey for text. Who has the link can edit and read the text, be careful!</p>
            <p><?php echo($url); ?></p>
            <p>QrCode<br/>
            <img src="data:image/png;base64,<?php echo($image64); ?>" />
            </p>
            <a class="btn btn-danger" href="<?php echo($url_root.'/edit/delete/'.$cid); ?>">Unlink all device</a></p>
            <a class="btn btn-warning" href="<?php echo($url_root.'/edit/cookiedelete'); ?>">Unlink this device</a></p>
        </div>
<?php include(ROOT.'/template/footer.tpl'); ?>