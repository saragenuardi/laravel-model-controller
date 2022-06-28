<h1>questa è la lista dei film</h1>

<ul>
    @foreach ($movies as $item)
    <li>
        <h2>{{ $item->title }}</h2>
    </li>
        
    @endforeach
</ul>