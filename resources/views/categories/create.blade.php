<a href="/categories">Вернуться назад</a>
<form method="post" action="/categories">
    @csrf
    <span>Название категории: </span><input type="text" name="title"><br>
    <span>Описание категории: </span><textarea name="content" id="" cols="30" rows="10"></textarea><br>
    <button>Отправить</button>
</form>
