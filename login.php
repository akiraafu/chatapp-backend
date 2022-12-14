<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Realtime Chat App | AkiChat</title>
    <link rel="stylesheet" href="app.css" />
    <script
      src="https://kit.fontawesome.com/3132341f2b.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>AkiChat | Chat realtime</header>
        <form action="#">
          <div class="error-text">This is an error message!</div>

          <div class="field input">
            <label> Email Address</label>
            <input type="text" placeholder="Enter your email" />
          </div>
          <div class="field input">
            <label> Password</label>
            <input type="password" placeholder="Enter your password" />
            <i class="fas fa-eye"></i>
          </div>

          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Not yet signed up? <a href="index.php">Sign up now</a></div>
      </section>
    </div>

    <script src="./javascript/pass-show-hide.js"></script>
  </body>
</html>
