<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login RS</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <center>
        <div>
            <h4>Masukkan Username dan Password</h4>
        </div>
        <div>
            <form action="{{ route('cek.login') }}" method="POST">
                @csrf
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password">
                </div>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
    </center>
</body>
</html>