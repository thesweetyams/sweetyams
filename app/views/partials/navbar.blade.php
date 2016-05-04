<div class="nav-container">
  <nav class="flex-nav">
    <ul class="flex-ul">
      <li class="flex-ul__item"><div class="flex-ul__item--hover">Menu</div>
        <div class="dropdown">
          <ul class="dropdown-list">
            <li><a href="{{{action('MenuController@index')}}}">View Menu</a></li>
            <li><a href="{{{action('MainController@setUpJuiceSubscription')}}}">Juice Subscription</a></li>
            <li><a href="{{{action('MainController@setUpCatering')}}}">Catering</a></li>
            <li><a href="{{{action('MenuController@setUpOrdering')}}}">Order Now!</a></li>
          </ul>
          <div class="box-shadow"></div>
        </div>
      </li>
      <li class="flex-ul__item"><a class="flex-ul__item--hover" href="{{{action('MainController@sweetyamsLocation')}}}">Location</a></li>
      <li class="flex-ul__item"><div class="logo__box"><a href="{{{action('MainController@index')}}}"><img id="logo" src="../../img/navicons/logo2.png"/></a></div></li>
      <li class="flex-ul__item"><a class="flex-ul__item--hover" href="{{{action('MainController@setUpAboutUs')}}}">About</a></li>
      <li class="flex-ul__item"><div class="flex-ul__item--hover">Community</div>
        <div class="dropdown" id="community-dropdown">
          <ul class="dropdown-list" id="community-dropdown-list">
            <li><a href="#">Yelp</a></li>
            <li><li><a href="#">Instagram</a></li></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Gallery</a></li>
          </ul>
          <div class="box-shadow"></div>
        </div>
      </li>
    </ul>
  </nav>
</div>












{{-- <div class="">
<div class="">
<a href="" class="">Sweet Yams</a>
</div>
<div class="">
<a href="" class=""><span>Menu</span><span class=""></span></a>
</div>
<div class="">
<a href="" class=""><span>Our Story</span><span class="arr"></span></a>
</div>
<div class="">
<a href="" class=""><span></span></a>
</div>
<div class="">
<a href="" class=""><span>Location</span><span class=""></span></a>
</div>
<div class="">
<a href="" class=""><span>Contact Us</span><span class=""></span></a>
</div>
</div> --}}
