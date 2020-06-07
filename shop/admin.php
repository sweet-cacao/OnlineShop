<?php
session_start();
if ($_SESSION['user-logged'] != 'admin' && !$_SESSION['is-admin']) {
    exit(header('Location: index.php'));
}
?>

<?php
require("header.php");
?>

<main>
	<div>
    <form action="admin/cat.php" method="POST">
    <span class = "form_title">Categories</span>
    <br />
    <br />
    <label class="form_label">Name</label> <input class = "form_input" type="text" name="name" value="" />
        <br />
        <br />
        <label class="form_label">Title</label> <input class = "form_input" type="text" name="title" value="" />
		<br />
        <br />
        <label class="form_label">Image URL</label> <input class = "form_input" type="text" name="img" value="" />
		<br />
        <br />
    <input class="form_button" type="submit" name="submit1" value="CREATE" />
    <input class="form_button" type="submit" name="submit2" value="MODIFY" />
    <input class="form_button" type="submit" name="submit3" value="DELETE" />
    </form>
</div>
    <br />
    <div>
    <form action="admin/article.php" method="POST">
    <span class="form_title">Articles</span>
    <br />
    <br />
    <label class="form_label">Name</label> <input class = "form_input" type="text" name="name" value="" />
        <br />
        <br />
        <label class="form_label">Category(ies)</label> <input class = "form_input" type="text" name="cat" value="" />
		<br />
        <br />
	<label class="form_label">Price <input class = "form_input" type="text" name="price" value="" />
        <br />
        <br />
    <input class="form_button" type="submit" name="submit1" value="CREATE" />
    <input class="form_button" type="submit" name="submit2" value="MODIFY" />
    <input class="form_button" type="submit" name="submit3" value="DELETE" />
    </form>
</div>
<br />
    <div>
    <form action="admin/modifusers.php" method="POST">
    <span class="form_title">Users</span>
    <br />
    <br />
    <label class="form_label">Login</label> <input class = "form_input" type="text" name="login" value="" />
        <br />
        <br />
        <label class="form_label">Password</label> <input class = "form_input" type="text" name="passwd" value="" />
		<br />
        <br />
    <input class="form_button" type="submit" name="create_user" value="CREATE" />
    <input class="form_button" type="submit" name="modify_user" value="MODIFY" />
    <input class="form_button" type="submit" name="delete_user" value="DELETE" />
    </form>
</div>
</main>
<?php require("footer.php"); ?>