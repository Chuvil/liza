<form action="addPost.php" method="post" enctype="multipart/form-data">
    Название поста<br>
    <input type="text" name="name"><br>
    Тема поста<br>
    <input type="text" name="theme"><br>
    <textarea name="text" placeholder="Текст поста" class="ckEditor"></textarea><br>
    <input type="file" name="photo" value="Загрузить"><br>
    <input type="submit" name="send" value="Отправить">
</form>