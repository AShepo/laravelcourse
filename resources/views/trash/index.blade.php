<h1>Удаленные категории</h1>
@if(count($categories) > 0)
    @foreach($categories as $category)
        <h2>{{ $category->title }}</h2>
        <div>{{ $category->content }}</div>
        <a href="/trash/{{ $category->slug }}">Подробнее</a>
        <br>
        <a href="/trash/{{ $category->id }}/restore">Восстановить</a>
    @endforeach
@else
    <h2>Нет удаленных категорий</h2>
    <a href="/categories">Вернуться в раздел категории</a>
@endif
