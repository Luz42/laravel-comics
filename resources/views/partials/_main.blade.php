<main>
    <ul>
        @foreach ($comics as $item)
            <li>{{$item['title']}}</li>
        @endforeach
    </ul>
</main>