<?php
$overview_title = get_field('overview_title');
$overview_subtitle = get_field('overview_subtitle');
$overview_description = get_field('overview_description');
if($overview_description): ?>
    <!-- Overview Section Start -->
    <section class="container">
        <div class="careers-top">
            <div class="text-center">
                <div class="title2">
                    <h2 class="red-text"><?php echo $overview_title; ?></h2>
                    <h3 class="black-text"><?php echo $overview_subtitle; ?></h3>
                </div>
                <div class="cont-text"><?php echo $overview_description; ?></div>
            </div>
        </div>
    </section>
    <!-- Overview Section End --><?php
endif; ?>