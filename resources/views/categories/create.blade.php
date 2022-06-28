<a href="/categories">Вернуться назад</a>
<form method="post" action="/categories">
    @csrf
    <span>Название категории: </span><input type="text" name="title" value="{{ old('title') }}"><br>
    @error('title')<div>{{ $message }}</div>@enderror
    <span>Описание категории: </span><textarea name="content" id="" cols="30" rows="10">{{ old('content') }}</textarea><br>
    @error('content')<div>{{ $message }}</div>@enderror
    <span>Символьный код: </span><input type="text" name="slug" value="{{ old('slug') }}"><br>
    @error('slug')<div>{{ $message }}</div>@enderror
    <button>Отправить</button>
</form>
