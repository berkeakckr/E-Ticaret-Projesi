<form action="{{route('admin.create.post')}}" method="post">
    @csrf
    <div>
        <label for="category">Kategory Ekle</label>
        <input name="name" id="category" type="text">
    </div>
    <div>
        <button type="submit">Ekle</button>
    </div>
</form>
