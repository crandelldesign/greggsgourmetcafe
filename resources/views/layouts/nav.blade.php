<nav class="navbar">
    <ul class="nav">
        <li class="{{(isset($active_page)) && $active_page=='carryout'?'active':''}}"><a href="{{url('/carryout-menu')}}">Carryout Menu</a></li>
        <li class="{{(isset($active_page)) && $active_page=='catering'?'active':''}}"><a href="{{url('/catering-menu')}}">Catering Menu</a></li>
        <li class="{{(isset($active_page)) && $active_page=='specials'?'active':''}}"><a href="{{url('/specials')}}">Specials</a></li>
    </ul>
</nav>