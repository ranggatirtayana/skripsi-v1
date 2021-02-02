<html>
<title>Firebase Messaging Demo</title>
<style>
    div {
        margin-bottom: 15px;
    }
</style>
<body>
    <div id="token"></div>
    <div id="msg"></div>
    <div id="notis"></div>
    <div id="err"></div>
    <script>
       MsgElem = document.getElementById("msg")
       TokenElem = document.getElementById("token")
       NotisElem = document.getElementById("notis")
       ErrElem = document.getElementById("err")
    </script>
</body>
</html>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.5/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyAQS1ajmt1uugULBGrP86Qu1ofjH2Nm398",
    authDomain: "pmi15-f7e7c.firebaseapp.com",
    projectId: "pmi15-f7e7c",
    storageBucket: "pmi15-f7e7c.appspot.com",
    messagingSenderId: "902303068285",
    appId: "1:902303068285:web:93786322d886681e720114",
    measurementId: "G-8FQSXXJZQ6"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

    const messaging = firebase.messaging();
    messaging
    .requestPermission()
    .then(function () {
        MsgElem.innerHTML = "Notification permission granted." 
        console.log("Notification permission granted.");
    })
    .catch(function (err) {
    ErrElem.innerHTML = ErrElem.innerHTML + "; " + err
    console.log("Unable to get permission to notify.", err);
    });
</script>