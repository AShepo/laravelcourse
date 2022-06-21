<form method="post" action="/categories/delete/{{ $category->id }}">
    @csrf
    <h2>Вы действительно хотите удалить категорию {{ $category->title }}?</h2>
    <button>Да</button>
    <a href="/categories">Нет. Ещё подумаю...</a>
</form>
