<h2>Daftar Buku</h2>

@forelse ($bookshelf->books as $book)
    <div>
        ID : {{ $book->id }} <br>
        Judul : {{ $book->title }} <br>
        Pengarang : {{ $book->author }} <br><br>
    </div>
@empty
    <div>Buku Kosong!</div>
@endforelse