<div class="markdown">

<form method="post" action="<?php echo URL; ?>test2/add/1">
    <label >Title</label><input type="text" name="title" value="<?php echo  htmlspecialchars($this->test[0]['title'],ENT_QUOTES) ?>"/><br />
    <label>Content</label><textarea id="markdown" type="text" name="content"><?php echo  htmlspecialchars($this->test[0]['content']) ?></textarea><br />
    <label>&nbsp;</label><input type="submit" />
</form>
    
<hr />
<?php $html= \michelf\markdown::defaultTransform(htmlspecialchars($this->test[0]['content']));
echo $html;?>
<hr />

<?php $html= \michelf\markdown::defaultTransform(strip_tags($this->test[0]['content']));
echo $html;?>
<hr />

nl2br(strip_tags(htmlspecialchars
<p><?php echo  $this->test[0]['title'] ?></p>
<p><?php echo  nl2br(strip_tags(htmlspecialchars($this->test[0]['content']), '<b> <a>')); ?></p>
<hr />
nl2br(strip_tags
<p><?php echo  $this->test[0]['title'] ?></p>
<p><?php echo  nl2br(strip_tags($this->test[0]['content'], '<b> <a>')); ?></p>
<hr />
nl2br
<p><?php echo  $this->test[0]['title'] ?></p>
<p><?php echo  nl2br($this->test[0]['content']); ?></p>
<hr />
<p><?php echo  $this->test[0]['title'] ?></p>
<p><?php echo  $this->test[0]['content']; ?></p>
</div>
<script language="javascript">$(document).ready(function(){$('#markdown').markItUp(myMarkdownSettings);});</script>
