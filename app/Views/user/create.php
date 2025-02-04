<h1>Create User</h1>
<form action="/users/store" method="post">
    <label>Username</label>
    <input type="text" name="username" required><br>

    <label>Email</label>
    <input type="email" name="email" required><br>

    <label>Password</label>
    <input type="password" name="password" required><br>

    <button type="submit">Save</button>
</form>
