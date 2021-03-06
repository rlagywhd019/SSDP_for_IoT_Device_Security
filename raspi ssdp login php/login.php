<!DOCTYPE html>
<?php session_start(); ?>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title> UUID Setting </title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <style>
html, body
{
    height: 100%;
}

body
{
    display: table;
    margin: 0 auto;
    animation: fadein 2s;
    -webkit-animation: fadein 2s; /* Safari and Chrome */
}

.container
{
    height: 100%;
    display: table-cell;
    vertical-align: middle;
}

.main
{
    height: 400px;
    width: 600px;
}
@-webkit-keyframes fadein { /* Safari and Chrome */
    from {
        opacity:0;
    }
    to {~
        opacity:1;
    }
}
</style>
</head>
<body>
<?php if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) { ?>
<div class="container">
    <div class="main">
        <div class="card border-dark mb-3">
            <div class="card-header"> Welcome - Sign in </div>
                <div class="card-body">
                    <form action="login_ok.php" method="post">
                        <input type="text" name="user_id" class="form-control" placeholder="Username" required><br>
                        <input type="password" name="user_pw" class="form-control" placeholder="Password" required><br>
                        <button type="submit" class="btn btn-outline-success">Sign in</button>
                        <a href="register.php"><button type="button" class="btn btn-outline-dark">Sign Up</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <?php } else {
            $user_id = $_SESSION['user_id'];
            echo "<p><strong>$user_id</strong>?????? ?????? ??????????????? ????????????. ";
            echo "<a href=\"index.php\">[????????????]</a> ";
            echo "<a href=\"logout.php\">[????????????]</a></p>";
        } ?>
</body>
</html>