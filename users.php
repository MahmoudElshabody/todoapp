<table>
    <thead>
        <th>id</th>
        <th>first name</th>
        <th>last name</th>
        <th>email</th>
        <th>password</th>
        <th>actions</th>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user['id']; ?> </td>
                <td><?= $user['frist name']; ?> </td>
                <td><?= $user['last name']; ?> </td>
                <td><?= $user['email']; ?> </td>
                <td><?= $user['password']; ?> </td>
                <td>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>">
                        <?php $_SESSION['user_id'] = $user['id'] ?>
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                        <button>delete</button>
                    </form>
                </td>
                <td>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>">
                        <?php $_SESSION['user_id'] = $user['id'] ?>
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                        <button>delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>