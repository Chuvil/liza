<form action="addPage.php" method="post" enctype="multipart/form-data" id="addPage">
    Заголовок<br>
    <input type="text" name="title"><br>
    Контент на странице<br>
    <textarea name="content" class="ckEditor"></textarea><br>
    Тема страницы(надпись на картинке)<br>
    <textarea name="theme" class="ckEditor"></textarea><br>
    Заголовок для SEO<br>
    <textarea name="meta_title" class="ckEditor"></textarea><br>
    Описание для SEO<br>
    <textarea name="meta_desc" class="ckEditor"></textarea><br>
    Ключевые слова для SEO<br>
    <textarea name="meta_keywords" class="ckEditor"></textarea><br>
    Название страницы в БД(на латинице)<br>
    <input type="text" name="page" placeholder="index"><br>
    <img id="image_preview" width="300px"><br>
    <input type="file" name="image" value="Загрузить"><br>
    Приоритет страницы<br>
    <input type="number" name="priority" min="1" max="999"><br>
    <input type="submit" name="send" value="Подтвердить"><br>
</form>