<h2>Список постов</h2>
<div class="box-body">
    <table class="table table-bordered table-hover" border="1">
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
                <td><a href="editPost.php?id={$posts[i].id}"><i class="fa fa-edit"></i> Редактировать</a></td>
                <td><a href="delPost.php?id={$posts[i].id}"><i class="fa fa-ban"></i> Удалить</a></td>
            </tr>
        {/section}
    </table>
</div>