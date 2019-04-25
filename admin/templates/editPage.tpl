<form action="editPage.php" method="post" enctype="multipart/form-data">
    Заголовок<br>
    <input type="text" name="title" value="{$title}"><br>
    Контент на странице<br>
    <textarea name="content" class="ckEditor">{$settings_content}</textarea><br>
    Тема страницы<br>
    <textarea name="theme" class="ckEditor">{$theme}</textarea><br>
    Заголовок для SEO<br>
    <textarea name="meta_title" class="ckEditor">{$meta_title}</textarea><br>
    Описание для SEO<br>
    <textarea name="meta_desc" class="ckEditor">{$meta_desc}</textarea><br>
    Ключевые слова для SEO<br>
    <textarea name="meta_keywords" class="ckEditor">{$meta_keywords}</textarea><br>
    Название страницы в БД<br>
    <input type="text" name="page" value="{$page}"><br>
    Старое фото<br>
    <img src="../img/{$image}" width="300px"><br>
    <img id="image_preview" width="300px"><br>
    <input type="file" name="newImage" value="Загрузить"><br>
    Приоритет<br>
    <input type="number" name="priority"  min="1" max="999" value="{$priority}"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="hidden" name="oldImage" value="{$image}">
    <input type="submit" name="send" value="Подтвердить"><br>
</form>