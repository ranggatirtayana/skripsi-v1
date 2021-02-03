<html>
<title>Firebase Messaging Demo</title>
<style>
    div {
        margin-bottom: 15px;
    }
</style>
<body>
<h2 id="pesan">Mohon tunggu ...</h2>
<div id="token"></div>
<div id="msg"></div>
<div id="notis"></div>
<div id="err"></div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js"></script>
<script>
    MsgElem = document.getElementById("msg");
    TokenElem = document.getElementById("token");
    NotisElem = document.getElementById("notis");
    ErrElem = document.getElementById("err");
    // Initialize Firebase
    // TODO: Replace with your project's customized code snippet
    var config = {
        apiKey: "AIzaSyCaWxqFh3Ee5fHXFjGUejxNg_DW12jnRi8",
        authDomain: "pmi-skripsi.firebaseapp.com",
        projectId: "pmi-skripsi",
        storageBucket: "pmi-skripsi.appspot.com",
        messagingSenderId: "136570720046",
        appId: "1:136570720046:web:0b61610a5fa934d90d34bf",
        measurementId: "G-SKQMR9WBS4"
    };
    firebase.initializeApp(config);

    const messaging = firebase.messaging();
    messaging
        .requestPermission()
        .then(function () {
            MsgElem.innerHTML = "Notification permission granted."
            console.log("Notification permission granted.");

            // get the token in the form of promise
            return messaging.getToken()
        })
        .then(function(token) {
            // TokenElem.innerHTML = "token is : " + token
            $.ajax({
                url:"{{ URL("/") }}/api/token",
                type:"POST",
                data:{
                    user_id : "{{ $id }}",
                    token : token
                },
                success:function(data){
                    // $("#allow").html("Allow")
                    $("#pesan").html("Update selesai ...")
                    setTimeout(()=>{
                        window.close();
                    },10000)
                },
                error:function(err){
                    alert("Terjadi kesalahan , harap hubungi bagian IT");
                }
            })
        })
        .catch(function (err) {
            ErrElem.innerHTML =  ErrElem.innerHTML + "; " + err
            console.log("Unable to get permission to notify.", err);
        });

</script>

</body>

</html>
