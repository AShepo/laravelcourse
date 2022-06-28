<h1>Категории</h1>
<a href="/trash">Перейти в корзину</a><br>
<a href="/categories/create">Добавить новую категорию</a>

@foreach($categories as $category)
    <h2>{{ $category->title }}</h2>
    <div>{{ $category->content }}</div>
    <a href="/categories/{{ $category->slug }}">Подробнее</a>
    <br>
    <a href="/categories/{{ $category->id }}/edit">Редактировать</a>
    <a href="/categories/{{ $category->id }}/remove">Удалить</a>
@endforeach
