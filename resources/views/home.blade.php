<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Crud</title>
</head>

<body>

    @auth

        <p>You are logged in</p>

        <div style="margin: 1rem 0; padding: 1rem; border: 3px solid black; border-radius: 5px;">
            <h2>Create post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input name="title" type="text" placeholder="Post name">
                <textarea name="body" placeholder="Post body"></textarea>
                <button>Create</button>
            </form>
        </div>

        <div style="margin: 1rem 0; padding: 1rem; border: 3px solid black; border-radius: 5px;">
            <h2>All Posts</h2>
            @foreach ($posts as $post)
                <div style="border: 1px solid red; padding: 1rem; margin: 1rem;">
                    <h3>{{ $post['title'] }}</h3>
                    <p>{{ 'Post by ' . $post->postUserName->name }}</p>
                    <p>{{ $post['body'] }}</p>
                    <p><a href="/edit-post/{{ $post->id }}">Edit post</a></p>
                    <form action="/delete-post/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach

        </div>

        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @else
        <div style="margin: 1rem 0; padding: 1rem; border: 3px solid black; border-radius: 5px;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="text" placeholder="Email">
                <input name="password" type="password" placeholder="Password">
                <button>login</button>
            </form>
        </div>

        <div style="margin: 1rem 0; padding: 1rem; border: 3px solid black; border-radius: 5px;">
            <h2>Login</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="Name">
                <input name="loginpassword" type="password" placeholder="Password">
                <button>Login</button>
            </form>
        </div>



    @endauth



</body>

</html>
