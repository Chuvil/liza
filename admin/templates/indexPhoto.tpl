<h2>Управление фото</h2>
<div class="box-body">
    <table class="table table-bordered table-hover">
        <tr>
            <th>№</th>
            <th>Название фото</th>
            <th>Фото</th>
            <th>Удалить</th>
        </tr>
        {section loop=$photos name=i}
            <tr>
                <td>{$number++}</td>
                <td>{$photos[i].name}</td>
                <td><img src="../img/photos/{$photos[i].photo}" width="300px"></td>
                <td><a href="delPhoto.php?id={$photos[i].id}">Удалить</td>
            </tr>
        {/section}
    </table>
</div>