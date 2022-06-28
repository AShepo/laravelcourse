<h1>{{ $category->title }}</h1>
<a href="/trash">Вернуться назад</a>
<a href="/trash/{{ $category->id }}/restore">Восстановить</a>
<br>

<em>{{ $category->created_at }}</em>
<div>{{ $category->content }}</div>
