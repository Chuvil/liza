<form action="delPost.php" method="post">
    Удалить этот пост?
    Да<input type="radio" name="del" value="yes" checked><br>
    Нет<input type="radio" name="del" value="no"><br>
    <input type="hidden" name="id" value="{$id}">
    <input type="submit" name="send" value="Подтвердить">
</form>