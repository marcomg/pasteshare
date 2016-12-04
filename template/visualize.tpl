<?php
// disable caching for this page
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
// Include tamplate
include(ROOT.'/template/header.tpl'); ?>
        <div class="container text-center">
            <p><em>Your notes anywhere , anytime...</em></p>
            <form action="edit/update/" method="post">
                <textarea rows="6" class="span10" name="text"><?php echo($text); ?></textarea>
                <br/>
                <button type="submit" class="btn btn-inverse">Update</button>
            </form>
        </div>
<?php include(ROOT.'/template/footer.tpl'); ?>