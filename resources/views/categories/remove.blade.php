<form method="post" action="/categories/{{ $category->id }}/delete">
    @csrf
    @method('DELETE')
    <h2>Вы действительно хотите удалить категорию {{ $category->title }}?</h2>
    <button>Да</button>
    <a href="/categories">Нет. Ещё подумаю...</a>
</form>
