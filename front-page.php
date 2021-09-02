<?php
    /*
    *   The main template file
    */
?>
<?php
    get_header();
?>
    
    <!-- Welcome -->
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                 <h3 class="welcome"><?php the_field('welcome_section_title') ;?> </h3> 
                <img src="<?php the_field('section_title_image') ?>" alt="divider" class="w-25 divider">
            </div>
        </div>
       <div class="container-fluid cards">
        <div class="row mt-4 d-flex justify-content-around">
            <div class="col-sm-3">
                <img src="<?php the_field('welcome_section_1_image_') ?>" alt="welcome section image" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text"><?php the_field('welcome_section_1_text') ;?></p>
                </div>
            </div>
            <div class="col-sm-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/watch-1.jpg" alt="" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text">Our Quality Watch</p>
                </div>
            </div>
            <div class="col-sm-3">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/watch-1.jpg" alt="" class="card-img-top rounded-circle">
                <div class="card-body">
                    <p class="card-text">Our Quality Watch</p>
                </div>
            </div>
        </div>
       </div>
    </div>

    <!-- Latest Offer -->
    <div class="container-fluid text-center bg-dark py-5 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="text-light">Latest Sales Offer</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/divider.png" alt="divider" class="w-25 divider">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card my-5">
                    <h4 class="card-hearder py-5 ">
                        Diamond Watch <span class="font-weight-bold offer-span mb-0 latest-offer">$2000</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>Our Quality Diamond</p>
                        </blockquote>
                        <ul class="list-group">
                            <li class="list-group-item">Available on Size 24, 35 &amp; 40</li>
                            <li class="list-group-item">offer valids till 12th of August</li>
                            <li class="list-group-item">Available on Size 24, 35 &amp; 40</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card my-5">
                    <h4 class="card-hearder py-5 ">
                        Bag <span class="font-weight-bold offer-span mb-0 latest-offer">$1000</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>Our Ladies Bag</p>
                        </blockquote>
                        <ul class="list-group">
                            <li class="list-group-item">Available on Size 24, 35 &amp; 40</li>
                            <li class="list-group-item">offer valids till 12th of August</li>
                            <li class="list-group-item">Available on Size 24, 35 &amp; 40</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card my-5">
                    <h4 class="card-hearder py-5 ">
                         Shoe <span class="font-weight-bold offer-span mb-0 latest-offer">$500</span>
                    </h4>
                    <div class="card-body">
                        <blockquote class="blockquote">
                            <p>Our Men Shoes</p>
                        </blockquote>
                        <ul class="list-group">
                            <li class="list-group-item">Available on Size 24, 35 &amp; 40</li>
                            <li class="list-group-item">offer valids till 12th of August</li>
                            <li class="list-group-item">Available on Size 24, 35 &amp; 40</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- About -->
    <div class="container-fluid text-center py-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="welcome">About</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/divider.png" alt="divider" class="w-25 divider">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores possimus enim illum consequuntur sed 
                            animi expedita dolorem hic. Molestiae voluptatum veniam repellendus deleniti dolor voluptate inventore in tenetur illum nihil.
                            Quidem voluptatibus, pariatur beatae dolore distinctio repellat sit molestias facere cumque totam voluptatem
                             illum asperiores ex! Veritatis culpa dolorem temporibus nisi, perspiciatis vitae nulla expedita mollitia
                              aliquam, quo voluptas dolorum.
                            Error tempora quidem omnis corrupti voluptatibus! Ipsum atque quia in ipsam non veritatis animi placeat,
                             inventore laudantium voluptate, sapiente exercitationem ullam explicabo illum expedita? Cum 
                             laboriosam quibusdam unde. A, adipisci.
                            Odio perferendis obcaecati ducimus adipisci iusto magni nostrum aspernatur dicta recusandae
                             incidunt labore, eligendi temporibus sunt libero ea aperiam quae! Maxime fugiat et tenetur
                              enim quod mollitia ipsa omnis consequatur?
                            Itaque rem cumque, quae sed harum enim reprehenderit fuga quas debitis adipisci dignissimos
                             tenetur asperiores aut omnis impedit placeat esse libero, delectus, non ratione? Quisquam
                              iusto necessitatibus recusandae minus dicta!
                        </p>
                    </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Price List -->
    <div class="container-fluid py-5 bg-dark">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h3 class="text-light">Price List</h3>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/divider.png" alt="divider" class="w-25 divider">
            </div>
            </div>
            <div class="row py-4">
                <div class="col-sm-8">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bag-1.jpg" alt="bag picture" class="img-fluid"> 
                </div>
                <div class="col-sm-4">
                    <h4 class="text-center title text-light">Message</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Message 1 <em>-$10</em></li>
                        <li class="list-group-item">Message 2 <em>-$10</em></li>
                        <li class="list-group-item">Message 3 <em>-$10</em></li>
                        <li class="list-group-item">Message 4 <em>-$10</em></li>
                        <li class="list-group-item">Message 5 <em>-$10</em></li>
                    </ul>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-sm-4">
                    <h4 class="text-center title text-light">Message</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Message 1 <em>-$10</em></li>
                        <li class="list-group-item">Message 2 <em>-$10</em></li>
                        <li class="list-group-item">Message 3 <em>-$10</em></li>
                        <li class="list-group-item">Message 4 <em>-$10</em></li>
                        <li class="list-group-item">Message 5 <em>-$10</em></li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/shoe-1.jpg" alt="shoe picture" class="img-fluid"> 
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php
    get_footer()
?>