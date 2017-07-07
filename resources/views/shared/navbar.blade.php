<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/home">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



    @foreach(App\Top_Level::all() as $top)
        <ul class="nav navbar-nav droppable" data-top-id="{{$top->id}}" id="{{'tl-'. $top->id }}">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$top->desc}}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              @foreach($top->menu_items as $data)
                <li data-image='{{$top->image}}'  data-menu-id='{{$data->id}}' id='{{$data->route_id}}' class="draggable"><a class="dd1" href="{{$data->route_path}}">{{$data->route_desc}}</a></li>
              @endforeach
            </ul>
          </li>
        </ul>
     @endforeach


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
