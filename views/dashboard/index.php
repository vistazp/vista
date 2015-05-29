<h1>Dashboard</h1>


<br />
<div>
<h3>Hello, <b><?php echo $_SESSION['userName'] ?></b>!</h3>
    
</div>
<form id="randomInsert" action="<?php echo URL; ?>dashboard/xhrInsert/" method="post">
    <input type="text" name="text" />
    <input type="submit" />
</form>

<div id="listInsert">
    
</div>