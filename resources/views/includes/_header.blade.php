<header>
    <nav>
        <ul>
            @foreach (config('navbar') as $item)
                <li><a href= "{{$item['navLink']}}"s>{{$item['navName']}}</a></li>
            @endforeach
        </ul>
    </nav>
</header>
