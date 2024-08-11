@php
  $months = [
    'January',
    'February',
    'March',
    'April',
    'May', 
    'June',
    'July',
    'August',
    'September',
    'October',
    'November',
    'December'
  ];
@endphp

<!--

  WAG M MUNA TO PANSININ SKSKSK
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PUP CCIS Student Module</title>
  @vite('resources/js/app.jsx')
</head>
<body>
  
  
  <form action="{{ route('studentLogin') }}" method="POST">
    @csrf

    <div class="studentNumber">
      <input name="studentNumber" type="text" placeholder="Student Number:" value="{{ old('studentNumber') }}" required>
    </div>

    <div class="month">
      <select name="month" required>
        <option value="">Birth Month</option>
        @foreach ($months as $month)
          <option value="{{ $month }}" {{ old('month') == $month ? 'selected' : '' }}>
            {{ $month }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="day">
      <select name="day" required>
        <option value="">Birth Day</option>
        @foreach (range(1, 31) as $day)
          <option value="{{ $day }}" {{ old('day') == $day ? 'selected' : '' }}>
            {{ $day }}
          </option>          
        @endforeach
      </select>
    </div>

    <div class="year">
      <select name="year" required>
        <option value="">Birth Year</option>
        @foreach (range(2014, 1960) as $year)
          <option value="{{ $year }}" {{ old('year') == $year ? 'selected' : '' }}>
            {{ $year }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="password">
      <input type="password" name="password" required>
    </div>

    <div class="loginButton">
      <input type="submit" value="Sign In">
    </div>
  </form>

</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CCIS Student Login Module</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400;700&display=swap" />
    <link rel="stylesheet" href="{{ URL('css/studentLoginpage.css') }}">
  </head>
  <body>
    <div class="main-container">
      <div class="rightform">
        <div class="header">
          <div class="flex-row-dfc">
            <div class="line"></div>
            <span class="sign-in">Sign in to start your session</span>
          </div>
          <div class="flex-row-d">
            <span class="student">Student</span>
            <div class="portal">
              <span class="space"> </span><span class="portal-1">Portal</span
              ><span class="space-2"> </span>
            </div>
            <span class="beta">βeta</span>
          </div>
        </div>
        <div class="box-body">
          <div class="int-student-no">
            <div class="div-placeholder">
              <span class="student-number">Student Number</span>
            </div>
            <input class="int-student-no-input" />
          </div>
          <div class="int-b-month">
            <div class="int-b-day">
              <div class="div">
                <span class="birth-day">Birth Day</span>
                <div class="vector"></div>
              </div>
            </div>
            <div class="int-b-year">
              <div class="div-3">
                <span class="birth-year">Birth Year</span>
                <div class="vector-4"></div>
              </div>
            </div>
            <div class="int-b-month-5">
              <span class="birth-month">Birth Month</span>
              <div class="vector-6"></div>
            </div>
          </div>
          <div class="int-pass">
            <div class="txt-pass"><span class="password">Password</span></div>
            <input class="int-pass-input" />
          </div>
          <button class="button"><span class="sign-in-7">Sign in</span></button>
          <div class="footer">
            <span class="form-service"
              >By using this service, you understood and agree to the PUP-CCIS
              Online Services
            </span>
            <div class="flex-row-f">
              <span class="form-link-terms">Terms of Use</span
              ><span class="form-and"> and </span
              ><span class="form-link-privacy">Privacy Statement</span>
            </div>
          </div>
        </div>
      </div>
      <div class="left-form"></div>
    </div>
    
  </body>
</html>