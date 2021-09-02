<?php
/*
* footer template 
*/
?>
<footer class="container-fluid py-5 footer">
        <div class="row">
            <div class="col-sm-4">
                <h4>Stay Connected:</h4>
                <form>
                    <div class="form-row form-group">
                        <div class="col-md-8">
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary">Sign up <i class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </form>
                <!-- Social Media icons -->
                <i class="fab fa-facebook-square fa-2x"></i>
                <i class="fab fa-twitter-square fa-2x"></i>
                <i class="fab fa-instagram-square fa-2x"></i>
                <i class="fab fa-pinterest-square fa-2x"></i>
            </div>
            <div class="col-sm-4">
                <h5>Out settings</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     Reiciendis, rem possimus? Esse pariatur possimus facilis consequuntur 
                    obcaecati tempore similique aspernatur sequi quae asperiores modi
                     molestiae minus consectetur, deserunt qui nemo.
                </p>
            </div>
            <div class="col-sm-4">
                <h5>Navigation</h5>
                <!-- <ul class="list-group">
                    <li class="list-group-item"><a href="blog.html">Blog</a></li>
                    <li class="list-group-item"><a href="contact.html">Contact Us</a></li>
                    <li class="list-group-item"><a href="blog.html">Privacy Policy</a></li>
                </ul> -->

                <?php wp_nav_menu( array(
                    'theme_location'  => 'footer',
                    'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'ul',
                    'container_class' => 'ist-group',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) ); ?>
                
            </div>
        </div>
    </footer>

    <?php wp_footer() ?>
  </body>
</html>
