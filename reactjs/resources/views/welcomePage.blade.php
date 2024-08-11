<!---
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ URL('css/welcomePage.css') }}">
  <title>CCIS Student Portal</title>
</head>
<body background="{{ URL('images/LoginPageBg.png')}}">

  <div class="titleContainer"> 
    
    <h1 id="departmentName">COLLEGE OF COMPUTER AND INFORMATION SCIENCES</h1>
    <p id="pup">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</p>

  </div>

  <div class="loginContainer">
    
    <a class="studentLink" href="{{ route('studentLogin') }}">Student</a>
    <a class="facultyLink" href="{{ route('facultyLogin') }}">Faculty</a>
  
  </div>
  
  <div class="reminderContainer">
    <p>By using this service, you understood and agree to the PUP-CCIS Online Services </p>
    <p>Terms of Use and Privacy Statement</p>
  </div>
</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>College of Computer and Information Science</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" />
    <link rel="stylesheet" href="{{ URL('css/welcomePage.css') }}">
  </head>
  <body background="{{ URL('images/LoginPageBg.png')}}">
    <div class="main-container">
      <span class="student">COLLEGE OF COMPUTER<br /> INFORMATION SCIENCE</span>
      <span class="sign-in-text"> POLYTEHCNIC UNIVERSITY OF THE PHILIPPINES</span>
      <div class="flex-row-b">
        
        <form action="{{'studentLogin'}}" method="GET"> 
          <button class="studentButton" type="submit">STUDENT</button>
        </form>
        
        <form action="" method="GET">
          <button class="facultyButton" type="submit">FACULTY</button>
        </form>
        
      </div>
      <span class="footer-txt"
        >By using this service, you understood and agree to the PUP-CCIS Online
        Services
      </span>
      <div class="flex-row-ed">
        <span class="terms-of-use">Terms of Use</span
        ><span class="footer-txt-3"> and </span
        ><span class="privacy-statement">Privacy Statement</span>
      </div>
    </div>
  </body>
</html>