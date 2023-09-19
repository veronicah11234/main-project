{{-- <!DOCTYPE html>
<html>
<head>
    <title>User Management</title>
</head>
<body>
    <h2>User Management</h2>

    <!-- Form to Create/Edit User -->
    <form action="process_user.php" method="post">
        <input type="hidden" name="user_id" value="" /> <!-- Use this field to store the user's ID for editing -->

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required /><br /><br />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required /><br /><br />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required /><br /><br />

        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
        </select><br /><br />

        <label for="permissions">Permissions:</label><br />
        <input type="checkbox" id="permission1" name="permissions[]" value="view"> View<br />
        <input type="checkbox" id="permission2" name="permissions[]" value="edit"> Edit<br />
        <input type="checkbox" id="permission3" name="permissions[]" value="delete"> Delete<br /><br />

        <input type="submit" name="submit" value="Submit" />
    </form>

    <!-- Form to Delete User -->
    <form action="delete_user.php" method="post">
        <label for="delete_user_id">User ID to Delete:</label>
        <input type="text" id="delete_user_id" name="delete_user_id" required /><br /><br />
        <input type="submit" name="delete_submit" value="Delete User" />
    </form>
</body>
</html> --}}
