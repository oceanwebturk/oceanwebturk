<?=csrf_meta()?>
<form action="<?=route("csrf.token.test")?>" method="post">
<input type="text" name="goolge">
<button>Submit</button>
</form>
<?php print_r(get_meta_tags(REAL_BASE_DIR."public/index.php")); ?>
