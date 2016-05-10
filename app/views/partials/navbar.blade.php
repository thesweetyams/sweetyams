<div class="nav-container">
  <nav class="flex-nav">
    <ul class="flex-ul">
      <li class="flex-ul__item flex-ul__item--menu"><div class="flex-ul__item--hover">Menu</div>
        <div class="dropdown">
          <ul class="dropdown-list">
            <li><a class="drop__text" href="{{{action('MenuController@index')}}}">View Menu</a></li>
            <li><a class="drop__text" href="{{{action('MainController@setUpJuiceSubscription')}}}">Health Programs</a></li>
            <li><a class="drop__text" href="{{{action('MainController@setUpCatering')}}}">Catering</a></li>
            <li><a class="drop__text" href="{{{action('OrdersController@create')}}}">Order Now!</a></li>
          </ul>
          <div class="box-shadow"></div>
        </div>
      </li>
      <li class="flex-ul__item flex-ul__item--contact"><a class="flex-ul__item--hover" href="{{{action('MainController@sweetyamsLocation')}}}">Contact</a></li>
      <li class="flex-ul__item flex-ul__item--logo"><div class="logo__box"><a href="{{{action('MainController@index')}}}"><img id="logo" src="../../img/navicons/logo2.png"/></a></div></li>
      <li class="flex-ul__item flex-ul__item--about"><a class="flex-ul__item--hover" href="{{{action('MainController@setUpAboutUs')}}}">About</a></li>
      <li class="flex-ul__item flex-ul__item--community"><div class="flex-ul__item--hover">Social</div>
        <div class="dropdown" id="community-dropdown">
          <ul class="dropdown-list" id="community-dropdown-list">
            <li><a class="drop__text" href="http://www.yelp.com/biz/sweet-yams-san-antonio-4" target="_blank">Yelp</a></li>
            <li><a class="drop__text" href="https://www.instagram.com/sweetyamsorganic/" target="_blank">Instagram</a></li>
            <li><a class="drop__text" href="https://www.facebook.com/SweetYamsOrganic/" target="_blank">Facebook</a></li>
            <li><a class="drop__text" href="#" target="_blank">Gallery</a></li>
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
