<?php // This is a development file - used to manually inserted users into the database ?>

<form method="post">
  <input type="password" name="password" />
  <button type="submit">Generate</button>
</form>

<input type="text" size="100" value="<?=password_hash( $_POST['password'], PASSWORD_DEFAULT )?>"/>
