<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile - My Website</title>
    <link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
<?php include 'header.php'; ?>
<div class="profile-container">
    <h1 style="margin-bottom: 0;" class="page-title">User Profile</h1>
    <div class="user-data-container">
        <div class="image-container">
            <div></div>
        </div>
        <div class="text-info-container">
            <div>
                <label>Username:</label>
                <label></label>
            </div>
            <div>
                <label>E-mail address:</label>
                <label></label>
            </div>
        </div>
    </div>
    <form class="form" method="post">
        <div class="textarea-container">
            <label for="postContent">Create a post</label>
            <textarea rows="8" id="postContent" name="postContent"></textarea>
        </div>
        <button>Submit</button>
    </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>