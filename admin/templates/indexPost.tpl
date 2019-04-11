<table border="1">
    <tr>
        <th>№</th>
        <th>Название поста</th>
        <th>Фото</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    {section loop=$posts name=i}
        <tr>
            <td>{$number++}</td>
            <td>{$posts[i].name}</td>
            <td><img src="../img/posts/{$posts[i].photo}" width="300px"></td>
            <td><a href="editPost.php?id={$posts[i].id}">Редактировать</a></td>
            <td><a href="delPost.php?id={$posts[i].id}">Удалить</a></td>
        </tr>
    {/section}
</table>