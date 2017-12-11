<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signup.css">
  </head>
  <body>

    <div class="login">
      <form action="" method="post">
        <label for="Username">Username</label><input id="Username" type="text">
        <label for="Password">Password</label><input id="Password" type="password">
        <button type="submit" class="loginbutton" name="button">Login</button>
      </form>
    </div>
    <div class="signup">
      <form action="includes/signup.include.php" method="post">
        <table>
          <tr>
            <td><label for="firstname">First Name</label></td><td><input id="firstname" type="text"></td>
          </tr>
          <tr>
        <td><label for="lastname">Last Name</label></td><td><input id="lastname" type="text"></td>
      </tr>
      <tr>
        <td><label for="username">Username</label></td><td><input id="username" type="text"></td>
      </tr>
        <tr>
        <td><label for="password">Password</label></td><td><input id="password" type="text"></td>
      </tr>
      <tr>
      <td>  <label for="repasword">Re type your password</label></td><td><input id="repasword" type="text"></td>
      </tr>
      <tr>
        <td><label for="email">E mail address</label></td><td><input id="email" type="text"></td>
      </tr>
      <tr>
        <td><label for="dateofbirth">Date of birth</label></td><td><input id="dateofbirth" type="text"></td>
      </tr>
      <tr>
        <td colspan="2"><label>Gender</label>&nbsp;&nbsp;&nbsp;<label>Male</label><input id="male" name="gender" type="radio">&nbsp;
            <label>Female</label><input id="female" name="gender" type="radio">&nbsp;
            <label>Transgender</label><input id="Transgender" name="gender" type="radio"></td>
        </tr>
        <tr>
        <td><label for="country">Country</label></td><td><input id="country" type="text"></td>
      </tr>
      <tr>
        <td><label for="hometown">Home town</label></td><td><input id="hometown" type="text"></td>
      </tr>
      <tr>
        <td colspan="2"><input id="agreement" type="checkbox">
        <p id="agree">By clicking Create an account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy.
        </p></td><br>
      </tr>
      <tr>
        <td colspan="2"><p class="signupbutton">SignUp</p></td>
      </tr>
      </table>
      </form>
    </div>
  </body>
</html>
