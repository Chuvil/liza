<form action="editPage.php" method="post" enctype="multipart/form-data">
    Заголовок<br>
    <input type="text" name="title" value="{$title}"><br>
    Контент на странице<br>
    <textarea name="content">{$settings_content}</textarea><br>
    Заголовок для SEO<br>
    <textarea name="meta_title">{$meta_title}</textarea><br>
    Описание для SEO<br>
    <textarea name="meta_desc">{$meta_desc}</textarea><br>
    Ключевые слова для SEO<br>
    <textarea name="meta_keywords">{$meta_keywords}</textarea><br>
    Название страницы в БД<br>
    <input type="text" name="page" value="{$page}">
    <img src="../img/{$image}" width="300px">
    <input type="file" name="newImage" value="Загрузить">
    Приоритет<br>
    <input type="number" name="priority"  min="1" max="999" value="{$priority}"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="oldImage" value="{$image}">
    <input type="submit" name="send" value="Подтвердить"><br>
    <script>
        CKEDITOR.replace('content');
        CKEDITOR.replace('meta_title');
        CKEDITOR.replace('meta_desc');
        CKEDITOR.replace('meta_keywords');
    </script>
</form>