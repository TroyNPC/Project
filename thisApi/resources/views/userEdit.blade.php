<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f6fa;
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        button {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }

        button:hover {
            background: #45a049;
        }

        .back-btn {
            background: #777;
            text-decoration: none;
            display: inline-block;
            padding: 8px 15px;
            border-radius: 6px;
            color: white;
            margin-top: 10px;
        }

        .back-btn:hover {
            background: #555;
        }

        .alert {
            background: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit User</h1>

@if(isset($errors) && $errors->any())
    <div class="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ route('user.update', $user->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

        <label for="password">Password: <small>(Leave blank if unchanged)</small></label>
        <input type="password" name="password" placeholder="New password">

        <button type="submit">Update User</button>
    </form>

    <div style="text-align:center;">
        <a href="{{ route('user.index') }}" class="back-btn">Back to Users</a>
    </div>
</div>

</body>
</html>