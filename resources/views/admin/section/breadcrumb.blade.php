
@section('breadcrumb')


    @foreach($data as $key=>$value)


        @if($key == count($data) - 1)

            <li class="breadcrumb-item active" aria-current="page">{{$value}}</li>

        @else

            <li class="breadcrumb-item"><a href="{{route(CheckValue($link[$key],false,"#"))}}">{{$value}}</a></li>

        @endif

    @endforeach

@endsection


