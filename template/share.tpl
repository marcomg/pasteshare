<?php
// disable caching for this page
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Include tamplate
include(ROOT.'/template/header.tpl');
?>
        <div class="container">
            <p>This url is the passkey for text. Who has the link can edit and read the text, be careful!</p>
            <p><?php echo($url); ?></p>
            <p>QrCode<br/>
            <img src="data:image/png;base64,<?php echo($image64); ?>" />
            </p>
            <a class="btn btn-danger" href="<?php echo($url_root.'/edit/delete/'.$cid); ?>">Unlink all devices</a></p>
            <a class="btn btn-warning" href="<?php echo($url_root.'/edit/cookiedelete/'.$cid); ?>">Unlink this device</a></p>
        </div>
<?php include(ROOT.'/template/footer.tpl'); ?>