<?php include(ROOT.'/template/header.tpl'); ?>
        <div class="container text-center">
            <form action="edit/update/" method="post">
                <textarea class="span10" name="text"><?php echo($text); ?></textarea>
                <br/>
                <button type="submit" class="btn btn-inverse">Update</button>
            </form>
        </div>
<?php include(ROOT.'/template/footer.tpl'); ?>