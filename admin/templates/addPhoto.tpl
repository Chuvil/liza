<h2>Добавить фото</h2>
<form action="addPhoto.php" method="post" enctype="multipart/form-data">
    Введите имя файла<br>
    <input type="text" name="name"><br>
    <img id="image_preview" width="300px"><br>
    <input type="file" name="photo" value="Загрузить фото"><br>
    <input type="submit" name="send" value="Добавить">
</form>