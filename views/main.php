<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark position-relative">
      <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
          </li>          
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <span class="sr-only"><?php echo $_SESSION['user_data']['name'] ?></span></a>
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
          </li>
        <?php else: ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
          </li>
        <?php endif; ?>            
        </ul>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <?php Messages::display();?>
            <?php require($view);?>
        </div>
    </div>
</body>
</html>