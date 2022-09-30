<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style> 
body {
background: url("bg2.JPG");
  background-repeat: no-repeat;
  background-size: cover;}
  .registration-form form {
    background:none;
  }
  .registration-form .social-media {
        background:none;

  }
  .footer{
  background: #000016;
  color: #fff;
  text-align: center;
  padding: 2em;
}

.footer .footer-title{
  font-size: 20px;
  font-weight: 600;
}

.footer p{
  font-size: 16px;
  margin-top: 10px;
}

.footer p a{
  color: #3a6cf4;
  font-weight: 600;
  text-decoration: none;
}
img {
    vertical-align: middle;
    border-style: none;
    width: 143px;
    margin-left: 145px;
    margin-top: -79px;
}
.registration-form .social-icons a {
    font-size: 23px;
    margin: 0 3px;
    color: #0750d9;
    border: 1px solid;
    border-radius: 50%;
    width: 45px;
    display: inline-block;
    height: 45px;
    text-align: center;
    line-height: 45px;
    background:none;
}
h5 {
    color:#000;
}
 ul {
    margin-top: 0;
    margin-bottom: 1rem;
    list-style: none;
}
.h2gender {
    margin-left: 180px;
    color:blue;
}
label {
    align-items: center;
    /* display: inline-block; */
    margin-bottom: -0.5rem;
    color: #fff;
    font-size: 21px;
    margin-left: 24px;
    font-family: initial;
}
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    -ms-appearance: none;
    appearance: none;
    outline: 0;
    box-shadow: none;
    border: 0!important;
    background: #fff;
    background-image: none;
    flex: 1;
    padding: 0px 0.5em;
    color: #1d2124;
    cursor: pointer;
    font-size: 1em;
    font-family: 'Open Sans', sans-serif;
}

select::-ms-expand {
   display: none;
}
.select {
   position: relative;
   display: flex;
   width: 20em;
   height: 3em;
   line-height: 3;
   background: #5c6664;
   overflow: hidden;
   border-radius: .25em;
}
.select::after {
   content: '\25BC';
   position: absolute;
   top: 0;
   right: 0;
   padding: 0 1em;
   background: #2b2e2e;
   cursor:pointer;
   pointer-events:none;
   transition:.25s all ease;
}
.select:hover::after {
   color: #23b499;
}
</style>
</head>
<body>
    <div class="registration-form">
        <form  action="feedback.php" method="post" class="agile_form">
        <img src="logo.png">
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Your Name " name="name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control item" placeholder="Your Email" name="email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Your Adress" name = "adress">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" placeholder="Your Number" name="num">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item"  placeholder="Your university" name="unv">
            </div>
            <div class="form-group">
                <div class="select">
                 <select name="gender" id="gender">
      <option selected disabled>Choose a gender</option>
      <option name="gender" value="male" id="good">male</option>
      <option name="gender" value="Female" id="excellent" >Female</option>
   </select>
</div>
                <button type="submit" class="btn btn-block create-account"  value="submit Feedback">registration </button>
            </div>
            
        </form>
        <div class="social-media">
            <h5>Contact me</h5>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100053618827804"target="_blank"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="https://www.linkedin.com/in/mohamed-elkoly-16b843220"target="_blank"><i class="icon-social-linkedin" title="linkedin"></i></a>
                <a href="https://twitter.com/mohamedelkoly12?t=x-kQFnwFmJpmbgkk6P_Nyw&s=09"target="_blank"><i class="icon-social-twitter" title="Twitter"></i></a>
                <a href="https://github.com/midoElkhouly01035"target="_blank"><i class="icon-social-github" title="github"></i></a>
                <a href="https://www.instagram.com/mohamedelkholyq/"target="_blank"><i class="icon-social-instagram" title="github"></i></a>

            </div>
        </div>
    </div>
    			   <footer class="footer">
      <span class="footer-title">MOHAMED ELKHOULY</span>
      <p>Copyright @2022 <a href="http://elkhouly2022.eb2a.com/index2.php"target="_blank">Mohamed</a>. All Rights Reserved.</p>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
    $(document).ready(function(){
  $('#birth-date').mask('00/00/0000');
  $('#phone-number').mask('0000-0000');
 })
    </script>
</body>
</html>
