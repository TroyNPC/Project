<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background:#f5f6fa;
        margin:0;
        padding:40px;
    }

    .container{
        max-width:900px;
        margin:auto;
        background:white;
        padding:30px;
        border-radius:10px;
        box-shadow:0 4px 10px rgba(0,0,0,0.1);
    }

    h2{
        margin-bottom:5px;
        font-size:16px;
        color:#333;
    }

    input{
        width:100%;
        padding:10px;
        margin-bottom:15px;
        border:1px solid #ccc;
        border-radius:6px;
        font-size:14px;
    }

    input:focus{
        outline:none;
        border-color:#4CAF50;
    }

    button{
        background:#4CAF50;
        color:white;
        border:none;
        padding:10px 18px;
        border-radius:6px;
        cursor:pointer;
        font-size:14px;
        margin-top:5px;
    }

    button:hover{
        background:#45a049;
    }

    table{
        width:100%;
        border-collapse:collapse;
        margin-top:30px;
    }

    thead{
        background:#4CAF50;
        color:white;
    }

    th, td{
        padding:12px;
        text-align:left;
        border-bottom:1px solid #ddd;
    }

    tr:hover{
        background:#f1f1f1;
    }

    a{
        text-decoration:none;
        color:#4CAF50;
        font-weight:bold;
    }

    a:hover{
        text-decoration:underline;
    }

</style>

<div class="container">

    <form method="POST" action="">
        @csrf

        <h2>Please input your name:</h2>
        <input type="text" name="name">

        <h2>Please input your email:</h2>
        <input type="email" name="email">

        <h2>Please input your password:</h2>
        <input type="password" name="password">

        <button type="submit">Submit</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Profile</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.show', $user->id) }}">
                            View User
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>