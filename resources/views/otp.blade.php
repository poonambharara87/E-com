<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title>OTP verification</title>
</head>
<body>
    <form>
        <label>Enter    Phone Number</label>
        <input type="number" id="number" placeholder="+91 2343123423">
        </br>
        <div id="recapcha-container"></div>
    </br>
        <button type="submit" onclick="sendCode()">Send Code</button>
            <div id="error" style="color:red; display:none"> </div>
            <div id="sentMessage" style="color:green; display:none"> </div>
    
</form>

<script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-app.js"></script>


<script> 
    var firebaseConfig = {
        apiKey: "AIzaSyA1xHEpp6wF8ktXfKICHtLfODVTLJ9lGsc",
        authDomain: "otp-verfication-c2881.firebaseapp.com",
        databaseURL: "https://otp-verfication-c2881-default-rtdb.firebaseio.com",
        projectId: "otp-verfication-c2881",
        storageBucket: "otp-verfication-c2881.appspot.com",
        messagingSenderId: "576314757478",
        appId: "1:576314757478:web:ef676992df2dcb886078a7",
        measurementId: "G-D2TLRW4K6B"
    }
    firebase.initializeApp(firebaseConfig);

</script>

<script type="text/javascript">
    window.onload = function(){
        render();
    }

    function render(){
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recapcha-container');
        recaptchaVerifier.render();
    }

   
    
</script>
</body>
</html>