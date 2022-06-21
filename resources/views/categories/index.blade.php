<h1>Категории</h1>
<a href="/categories/create">Добавить новую категорию</a>

@foreach($categories as $category)
    <h2>{{ $category->title }}</h2>
    <div>{{ $category->content }}</div>
    <a href="/categories/{{ $category->id }}">Подробнее</a>
    <br>
    <a href="/categories/edit/{{ $category->id }}">Редактировать</a>
    <a href="/categories/remove/{{ $category->id }}">Удалить</a>
@endforeach
