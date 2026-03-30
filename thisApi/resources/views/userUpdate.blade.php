<div>
    <h1>Update User</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}">
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password">
        </div>

        <button type="submit">Update User</button>
    </form>

    <br>

    <a href="/user">Back</a>
</div>