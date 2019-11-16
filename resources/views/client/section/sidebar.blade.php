<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{route('client.profile')}}" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="/public/media/33/1.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
             {{$client->full_name}}

        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="#">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{$trans['Dashboard']}}</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{$trans['Messages']}}</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{$trans['Tasks']}}</p>
                </a>
            </li>


        </ul>
    </div>
</div>