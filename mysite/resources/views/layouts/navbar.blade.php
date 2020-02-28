<style>
  .nav-search-item {
    border-top-style: solid;
    border-top-color: white;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top d-flex">
    <div class="navbar-header d-flex mr-auto">
      <button type="button" id="sidebarCollapse" class="btn btn-info">
          <i class="fas fa-bars" style="color: white"></i>
      </button>      
      <a class="navbar-brand active" href="{{action('Index@index')}}">&nbsp;Home</a>
    </div>
    <ul class="navbar-nav d-flex">
      @if (isset($Menus))
        @foreach ($Menus as $menu)
          @if(isset($menu['Cart']) && $menu['Cart'] == true)
            <li class="nav-item">
              <a class="nav-link" href="{{$menu['href']}}"><i class='far fa-shopping-cart'></i>&nbsp;{{$menu['name']}}</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" href="{{$menu['href']}}">{{$menu['name']}}</a>
            </li>
          @endif
        @endforeach
      @endif
    </ul>

</nav>
