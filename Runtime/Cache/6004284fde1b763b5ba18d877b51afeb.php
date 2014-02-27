<?php if (!defined('THINK_PATH')) exit();?><FORM method="post" action="__URL__/update">
Title:<INPUT type="text" name="title" value="<?php echo ($vo["title"]); ?>"><br/>
Content:<TEXTAREA name="content" rows="5" cols="45"><?php echo ($vo["content"]); ?></TEXTAREA><br/>
<INPUT type="hidden" name="id" value="<?php echo ($vo["id"]); ?>">
<INPUT type="submit" value="OK">
</FORM>