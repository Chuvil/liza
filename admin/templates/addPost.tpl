<form action="addPost.php" method="post" enctype="multipart/form-data">
    Название поста<br>
    <input type="text" name="name"><br>
    Тема поста<br>
    <input type="text" name="theme"><br>
    <textarea name="text" placeholder="Текст поста"></textarea><br>
    <script>
        CKEDITOR.replace('text');
    </script>
    <input type="file" name="photo" value="Загрузить"><br>
    <input type="submit" name="send" value="Отправить">
</form>