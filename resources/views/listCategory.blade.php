<ul>
        @foreach($category as $category)
            <li>
                
                <a href="{{ url('post/categoria/'.$post->category->title) }}">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
</ul>