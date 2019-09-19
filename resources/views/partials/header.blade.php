<header class="header">
  <nav class="upper-nav">
    @if (has_nav_menu('upper_navigation'))
      {!! wp_nav_menu(['theme_location' => 'upper_navigation', 'menu_class' => 'nav',         
        'link_before' => '<span>',     
        'link_after'  => '</span>']) 
      !!}
    @endif
  </nav>
  <a class="brand" href="/">@include('partials/logo')</a>
  <nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu($primarymenu) !!}
    @endif
  </nav>
  <div class="container-fluid">
    <!--<a class="brand" href="{{ home_url('/') }}">-->
    
    
  </div>
</header>
