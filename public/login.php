<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin | In the Groove Studios</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <main class="login-wrapper">
      <form class="login-form" action="../services/get.php?action=auth_user" method="post">
        <h1>In the Groove Admin</h1>
        <label for="username">Username
          <input type="text" name="username" value=""/>
        </label>
        <label for="password">Password
          <input type="password" name="password" value=""/>
        </label>
        <input type="submit" name="login">
      </form>
    </main>
  </body>
</html>
