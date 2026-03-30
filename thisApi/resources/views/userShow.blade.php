<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 16px;
        }

        th {
            background: #4CAF50;
            color: white;
        }

        tr:hover {
            background: #f1f1f1;
        }

        a, button {
            display: inline-block;
            padding: 8px 15px;
            margin-right: 5px;
            font-size: 14px;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }

        a {
            background: #2196F3;
            color: white;
        }

        a:hover {
            background: #0b7dda;
        }

        button {
            background: #f44336;
            color: white;
            border: none;
        }

        button:hover {
            background: #da190b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Information</h1>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <!-- Update -->
                        <a href="{{ route('user.edit', $user->id) }}">Update</a>

                        <!-- Delete -->
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <div style="margin-top:20px; text-align:center;">
            <a href="{{ route('user.index') }}" style="background:#777;">Back to Users</a>
        </div>
    </div>
</body>
</html>