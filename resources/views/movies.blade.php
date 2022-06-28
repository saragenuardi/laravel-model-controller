<h1>questa è la lista dei film</h1>

<ul>
    @foreach ($movies as $item)
    <li>
        <h2>{{ $item->title }}</h2>
        <h3>{{ $item->original_title}}</h3>
        <h4> {{ $item->nationality}}</h4>
        <h4> {{ $item->date}} </h4>
        <h5> {{$item->vote}} </h5>
    </li>
        
    @endforeach
</ul>