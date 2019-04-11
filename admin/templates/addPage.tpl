<form action="addPage.php" method="post" enctype="multipart/form-data">
    Заголовок<br>
    <input type="text" name="title" ><br>
    Контент на странице<br>
    <textarea name="content"></textarea><br>
    Заголовок для SEO<br>
    <textarea name="meta_title"></textarea><br>
    Описание для SEO<br>
    <textarea name="meta_desc"></textarea><br>
    Ключевые слова для SEO<br>
    <textarea name="meta_keywords"></textarea><br>
    Название страницы в БД<br>
    <input type="text" name="page">
    <input type="file" name="newImage" value="Загрузить">
    Приоритет<br>
    <input type="number" name="priority" min="1" max="999"><br>
    <input type="submit" name="send" value="Подтвердить"><br>
    <script>
        CKEDITOR.replace('content');
        CKEDITOR.replace('meta_title');
        CKEDITOR.replace('meta_desc');
        CKEDITOR.replace('meta_keywords');
    </script>
</form>