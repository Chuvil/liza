<table border="1">
        <tr>
            <th>№</th>
            <th>Название страницы</th>
            <th>Заглавное изображение</th>
            <th>Редактировать</th>
        </tr>
    {section loop=$pages name=i}
        <tr>
            <td>{$number++}</td>
            <td>{$pages[i].title}</td>
            <td><img src="../img/{$pages[i].image}" width="300px"></td>
            <td><a href="editPage.php?id={$pages[i].id}">Редактировать</a></td>
        </tr>
    {/section}
</table>