<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <title>HOME PAGE</title>

    <link rel="icon" type="image/ico" href="favicon.ico"/>

    <link href="css/stylesheets.css" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="header">
    <a class="logo" href="list-categories.php">
        <img src="img/logo.png" alt="HOME PAGE - Admin Control Panel" title="HOME PAGE - Admin Control Panel"/>
    </a>
    
</div>

<div class="menu">
    <div class="breadLine">
        <div class="arrow"></div>
        <div class="adminControl active">
            Hello, Huynh Van Toan
        </div>
    </div>

    <div class="admin">
        <div class="image">
            <img src="img/users/avatar.jpg" class="img-polaroid"/>
        </div>
        <ul class="control">
            <li><span class="icon-cog"></span> <a href="edit-user.php">Update Profile</a></li>
            <li><span class="icon-share-alt"></span> <a href="login.php">Logout</a></li>
        </ul>
    </div>

    <ul class="navigation">
        <li>
            <a href="list-categories.php">
                <span class="isw-grid"></span><span class="text">Categories</span>
            </a>
        </li>
        <li>
            <a href="list-books.php">
                <span class="isw-list"></span><span class="text">Books</span>
            </a>
        </li>
        <li>
            <a href="list-students.php">
                <span class="isw-user"></span><span class="text">Students</span>
            </a>
        </li>
    </ul>

</div>