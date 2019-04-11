<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>UNItied</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="main.css" type="text/css">
  <style>
  #register-form{
    text-align: center;
  }
  #usernameText{
    font-size: 14pt;
    height: 32px;
    width : 600px;
    margin: 0 auto;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
  }
  #passwordText{
    font-size: 14pt;
    height: 32px;
    width : 600px;
    margin: 0 auto;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
  }
  #submitBtn{
    height: 32px;
    width : 600px;
    margin: 0 auto;
    margin-left: auto;
    margin-right: auto;
  }
  </style>


</head>

<body>
<div class="header" id="myHeader">
    <div class="image">
  <div class="container-fluid">
    <div class="row">
      <div class="pic_base">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANMAAADvCAMAAABfYRE9AAABDlBMVEX///8REiQHAQGXlpTMysuAf30AQZUAk+0AAAAAABhycnjv+f5qaWgeme7O096amZcAM5EAO5N5eHbn5+dTcKvm7vPU0tOfn58LDCAAj+z4+PgAABuRkI4Aje3t7e3///wAABDi8Pzb2tri5/C6uroxMT5QUFqwsK9ISVKKi5JXV18cHS0AAA5hYWBkZW4mJzUuLjsANY86OkYAHYunudVvh7Fnsuu62fEdUZ99kbW3x92t0/N6uuyYqMBtirykpKpceKozXqOPxO7P0tt+foaSk5kaGSy2trxFREQZGBhRT08tKyo3NjZVVFQhHx5lZGI8nem4wdBTrvHD4vg7Y6ah0fUAK4wmneuPocCWweB6g58YAAAJHUlEQVR4nO2cC1vayBqAQYIEvACJhpgE8MQAudAEs11rq560btDWy7bbutbz///IzkwSrgmKdc2E873PA8EQdF6++b7MDMFcDgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAVSS0U+LQb8aKoWlX5yrK3vVbaLXkheCRUKFQ3WcytlnZzfp0WU1WQEXFaW1vDWhwjpd2qX6DFNAKhkVOg9WdRSLtpz0MSeoVIaNIp0LopqGk3cGnUKaEZp1CrkaWKwWszQvNOQWplpRDyWmNOKM4p9NrUaK8Yk1XhCU5BxeCYtJudjCQkCSU7BVpfFCorhqT2koUWOoUVo0rZ0ElSY6rCEk6B1m2PHq1g8PMIjzmFWlRUjNHg59edgvq+mXLFSC5zz3MKtYpCWtFCg5+nCi3hFGjdpFMIGWUJo6WcgmB9TWOIsUTHWzpO14qaVvfj/5V8uk55hiWpTynkT3di1zY1Csa1j40glnPaTFsnYmb+9xwn1OfIhqb1iscqxqPjPYVh8QN6hkeEhJnTo05kutHKCdjpz7Ql5pDiZrgLnciZKKgKGna6SlshDmluJWKBExK6Gk3fidNtqo2PQQpOK624ijHvhIQ+V4MhkISziM44MdXo3DJfMebXja6joSpfvXmDNiSfrtNrfTwCGgI2woZKM7OqmfU9FlcFclzvCqcUetTCTmspNj8WAUsoSi8aq02OMSbXYdfe9EJxpoL91ohT7guWom1hQggNlKoWnmbGFSN0wnPZRvikqlxHZ1rixLGUnXMxwrizKQ0mSq1gmoWdcFUohEFsNT6HQiOnHnYqptb6eITJBBqnFqkYhU2W/TKawGq3Y6GRE4+dPqfV+ASEmQquKFqUHrzGjVZchSI7ZRQ54YRi1ygbHM06kT44Sq1go1ZvZoTGTjjlWMo+xolxmuqDYeGOGU8ETgXs1Euv/XHEOoXlHT3NbM72uWkn9ZYkFF2r50lOWKtQXUsQipwaYV2nq/QtcCpUvy6aPyEnZlzZaep+C50WzgmR09iZqnr+PCc2GO/djp1uaFg0Dwmc4qfwSfMnkmQsGpdXx05c2iITSDxGZbSYpYnY+dPNZoMRVAx68VWYUOwNZafdAImMhhY6kaX+6ZU8JQgbR6USQZ22mnZCM8KYKwkkrdGgYcVyAerkpHDKiWUVupuejKQpsU7sFWWDuqVQ5+e5eKBAUa1+Bq2o/03M3WkaJiTwn5D4Z1uNaSd2LWF2vnsQQEMMN7aahNIuruEIabpVUmPi+j2kND3slnhVFVQeveTuvob5bfs1G5/AxtZeCbO1m+OZEHWyqkmNsRPLTirxPaXIERq53E59HVOjw6k054S1xtGSqpHTpJLEIJ9iSDacJq1ahWjdaFwekFFxTFacGGbUA1FJJ05KtINXJo2y5MSMFlUZBV+3/CaKnDZtlCknZvQBeq+wyV5HcWvMKmXLKep/UuNrtMolKXNKGXMaLTHfFoIHcUpZc4qkos9m4pQy5zR1UUq8UvacJqXmy0NGncazpV68UgadRucpIUEpi05MsGzCJxhl0ylIKWW1nHBKJfY8cHoFwAmc0gKcwCktwAmc0gKcwCktwAmc0gKcwCktXsCJ46rUOkmqsLQTxxWVhiZQ6kTW+KUWrz7dieOUHsMHS880OpW+n/7YIHuk1rxWnBNXbIRXhm1sP+ysr1PotLfX3Ns6/UF2SrOpNe/EFcNLwA4e7uq1Wp1Kp0CsWTr6IbXRfl5Y5BQZHTwc3x9GPpQ6Ea2f5/hCnalYzTqRb9xtvN2pHa5PQ6cT7oWlI2Klxjtx5B82SQ/Htfr6LLQ6Ea1TXDD4OCeOfBnl7XptTohuJ2RVOsnhb1jPOnHkn4Vtf4o1otypVGp+3xj1v5ETh/8/jvQ+ptdlwgmF6kc77H+RE4cv7d29SwgShU74DIVpok0Yqr9DqdCJw1+O3K4HQarXD2uHiFptoprT5IREtr4dnZ+8Q5ycH30rNYlW87yNv3sXOhGlD6Tf1Q8PP318f/YX5uz3nePorEuNE4rP9/PtXandDva129LByfdmcywVOAVRwkb3dw9/tNqjX9JubZ99rGMtSpz2mt/+dyC1Z59o7x7hWDXf5fCgAt0xWOlgvY6MdrbnL3ttt/76eH9Ih9PP0xghArZCUvj0i4cNLexxXF+v3f0Rfzw65OyYBqdcK6mBiPa7rb3Sz4kD/ov619miS5OlDHxBQDpqNs9HP324P/yUGKTs0D5v7o2uPf90/zEDcXic9knzKAzN29/e03BJ/EvwrhkESjpeGSUUqVMSqA+/r4wS4m8s0367Skq5NrFZKSUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP6vqaweufLqkcuvHuCUDUInUQxuBDl6Utwvi/Lop3wZPyfnqSdwErsdUXRdmZjJdhn7oQeuZ+RtU86T/fL+cF+0bPMi5RY/TujkDMtl3+m6clk3RW8gd/V9p5Pnu/7Q8Kyy6ZbLHbPMs65u2o74yK98eRb8RZG8/UEfiw4L+17f68tGxTZ0u1KxPNdHVd438rzvsAbjah5jm+qlruqC2+m8ipIlXpCWyvhe7lh4i955MZJAOOgoZ98td1zRzeudC8vSw7c7dJIr3a7tObo/ZFEfG/h9dlhx5I7HDw1f11hdYwYs22qJsvgqSmVDNGR333Xsvi47Jnqr0VZ0h3lLdh3HuXDzg7zt6YaB4uDpXb+ie4YxMEx50im/P6xYl11zQJw62MkeiCzL8obf1VhXY6w+y3tG/zWMEI5R8S5t3+35tnFpGSbeeu7lsN/1u9jkEpl0dd+rGEPdYw3X7vqXA8OecfKGrG+absU2naFjmLZfGVjaEL1WdRmPqdiC5/KsapZfx6nvdXzbNfQhSoJhB7Uc5cTQHPq6a5iGYVtIS6zYunHhm/bQr7hGXze6lcq0k4i65T4qAOg2sFzRNvudC1GvdPfL+kC29XJZrzhm2dVfqUCIFsoi2bEseSBbYkfGW7FjXQxkByUOyiSrIw4Gg/zFoOzkHbdjiYM8ekF+yolUDlnGGYnrCLnLk5OTKIa1HCfsq9W8oBoED6LbaF9wgCiGO8IHs3VvpQCnbLCKTv8ADvhzH0lOeDoAAAAASUVORK5CYII="
          width="100" id="profile_pic" alt="">
      </div>
      <div class="content_base">
        <font color = "white"><h2>UNItied</h2></font>
      </div>

    </div>

</div>
  </div>
  <ul class="nav">
    <li><a href="Homepage.php">Home</a></li>
    <li><a href="AboutUs.php">About Us</a></li>
    <li><a href="LoginMenu.php">Log In</a></li>
    <li><a href="RegisterUniversity.php">Registry</a></li>
  </ul>

</div>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="register" class="container-fluid section">
  <br>
<div class="contact-title">
  <center><h2>Log In</h2></center><br><br>
</div>
<div class="register-form">
  <center>
<a href="Login.php">
  <input class="btn" type="button" name="" value="UNI Admin"><br><br>
</a>
<a href="ApplicantLogin.php">
  <input class="btn" type="button" name="" value="Applicant">
</a>
</center>
  </form>

</div>
<br>
</div>

</div>

<div class="footer">
  <div class="container-fluid">
    <div class="footerTitle">
      <h3>Find us on</h3>
    </div>
  <div class="row">
    <div class="col-sm-3"><p>
      <a href="https://www.facebook.com/">Facebook</a>
    <a href="https://www.facebook.com/">
      <img src="https://geburtshausunna.de/wp-content/uploads/2018/02/logo-facebook.png" alt="" width="48" height="48"></a></p></div>
      <div class="col-sm-3"><p>
        <a href="https://twitter.com/">Twitter</a>
      <a href="https://twitter.com/">
        <img src="http://goinkscape.com/wp-content/uploads/2015/07/twitter-logo-final.png" alt="" width="42" height="42"></a></p></div>
        <div class="col-sm-3"><p>
          <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFUiUJ-XSrYNgAAAWUM6XSY_r56EPwSxNLAKt30dtaO_8GFZzAuU_yN5fF-HKPAhe9TqYCbCHW3Xd_ERzm0OC66dRdg3u4Xnk7e6JYFtItW2B725VywbtIryfxb2JoD_0BXyQ4=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fapdnow">LinkedIn</a>
        <a href="https://www.linkedin.com/authwall?trk=gf&trkInfo=AQFUiUJ-XSrYNgAAAWUM6XSY_r56EPwSxNLAKt30dtaO_8GFZzAuU_yN5fF-HKPAhe9TqYCbCHW3Xd_ERzm0OC66dRdg3u4Xnk7e6JYFtItW2B725VywbtIryfxb2JoD_0BXyQ4=&originalReferer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fapdnow">
          <img src="http://icons.iconarchive.com/icons/social-media-icons/glossy-social/512/Linkedin-icon.png" alt="" width="42" height="42"></a></p></div>
          <div class="col-sm-3"><p>
            <a href="https://www.instagram.com/">Instagram</a>
          <a href="https://www.instagram.com/">
            <img src="https://sguru.org/wp-content/uploads/2018/01/instagram-colourful-icon.png" alt="" width="42" height="42"></a></p></div>
    <div class="footerContent">
    <center>Privacy | Terms of Use</center>
    <p align="left">@Copyright 2019</p>
    </div>
    </div>

</div>
</div>



<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>

<!-- Library -->
<script type="text/javascript" src="lib/scrollify/jquery.scrollify.js"></script>

<!--This is my custom js -->
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
