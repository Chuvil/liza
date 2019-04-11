<form action="editPost.php" method="post" enctype="multipart/form-data">
    Название поста<br>
    <input type="text" name="name" value="{$name}"><br>
    Тема поста<br>
    <input type="text" name="theme" value="{$theme}"><br>
    <textarea name="text" placeholder="Текст поста">{$text}</textarea><br>
    <script>
        CKEDITOR.replace('text');
    </script>
    <img src="../img/posts/{$oldPhoto}" width="300px"><br>
    <input type="file" name="newPhoto" value="Загрузить"><br>
    <input type="submit" name="send" value="Отправить">
</form>