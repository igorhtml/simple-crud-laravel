<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud</title>
</head>

<body>

    @auth

    <h1>You are logged in</h1>
        
    @else

    <div style="padding: 1rem; border: 3px solid black; border-radius: 5px;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Name">
            <input name="email" type="text" placeholder="Email">
            <input name="password" type="password" placeholder="Password">
            <button>Register</button>
        </form>
    </div>

    @endauth
    


</body>

</html>