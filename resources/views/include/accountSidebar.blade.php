<aside class="col-md-3 col-sm-4">

    <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->

    <section class="section_offset">

        <h3>My Account</h3>

        <ul class="theme_menu">

            <li><a href="/account/dashboard" class="dashboard"><i class="fas fa-address-card"></i> Profile Information</a></li>
            <li><a href="/account/orders" class="orders"><i class="fas fa-shopping-cart"></i> Orders</a></li>
            <!-- <li><a href="/account/wishlist" class="wishlist"><i class="fas fa-clipboard-list"></i> Wishlist</a></li> -->
            
            <li><a href="/account/address" class="address"><i class="fas fa-address-book"></i> Manage Address</a></li>
            <li><a href="/account/review" class="rating-rev"><i class="fas fa-comments"></i> My Reviews & Ratings</a></li>
            <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
   <i class="fas fa-power-off"></i> Logout</a> </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </ul>

    </section><!--/ .section_offset -->

    <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

    <div class="section_offset">

        <a href="#" class="banner">
            
            <img src="images/banner_img_10.png" alt="">

        </a>

    </div>

    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

</aside><!--/ [col]-->