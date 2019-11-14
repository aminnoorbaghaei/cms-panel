<nav class="tm-navigation">
    <ul>


        @foreach($all_menu as $item)
            <li><a href="{{$item->hrefUrl}}">{{$item->title}}</a></li>
        @endforeach

    </ul>
</nav>