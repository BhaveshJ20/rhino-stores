<?php echo get_template_part( 'template-parts/modules/common', 'banner' ); ?>

<section class="contentarea">

    <?php echo get_template_part( 'template-parts/modules/common', 'overview' ); ?> 

    <section class="container">
        <div class="com_grid_wrap mb-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-part">
                    <div class="content-text mb-4"><?php
                            $nsc_title = get_field('nsc_title');
                            $nsc_email = get_field('nsc_email');
                            $nsc_description = get_field('nsc_description'); ?>

                            <div class="text-center">
                                <?php if($nsc_description): echo '<p>'.$nsc_description.'</p>'; endif; ?>                                
                                <div class="title2">
                                    <h2 class="red-text">
                                        <?php echo $nsc_title; ?>
                                    </h2>
                                </div><?php
                                if($nsc_email): 
                                    echo '<div class="cont-text"><p class="mb-4"><b>Email:</b> <a class="blk-link" href="mailto:'.$nsc_email.'">'.$nsc_email.'</a></p></div>';
                                endif; ?>                                
                            </div><?php
                            $wac_title = get_field('wac_title');
                            $wac_subtitle = get_field('wac_subtitle');
                            $wac_description = get_field('wac_description'); ?>
                            <!--<div class="title2">
                                <h2 class="red-text">Working at Cambridge</h2>
                            </div>--><?php?>                            
                            <div class="title2">
                                <h2 class="red-text"><?php echo ($wac_title) ? $wac_title : 'Culture and Values'; ?></h2>
                                <h3 class="black-text"><?php echo $wac_subtitle; ?></h3>
                            </div>
                            <div class="cont-text"><?php echo $wac_description; ?></div>                            
                        </div>
                        <div class="content-text mb-4">
                            <div class="title2 mb-2">                        
                                <h2 class="red-text"><?php echo get_field('the_masscash_way_title'); ?></h2>
                            </div><div class="cont-text"> <?php 
                            if( have_rows('add_masscash_way') ):
                                while ( have_rows('add_masscash_way') ) : the_row();
                                    $the_masscash_image = get_sub_field('the_masscash_image');     
                                    echo '<div class="title2"><h3 class="black-text text-uppercase pb-0">'.get_sub_field('the_masscash_way_title').'</h3></div>';
                                    if($the_masscash_image):
                                        echo '<div class="row">';
                                        echo '<div class="col-md-8">';
                                    endif;
                                    if(get_sub_field('the_masscash_description')):
                                        echo '<p class="mb-4">'.get_sub_field('the_masscash_description').'</p>';    
                                    endif;     
                                    if($the_masscash_image):
                                        echo '</div>';
                                        echo '<div class="col-md-4">';
                                        echo '<img src="'.$the_masscash_image.'" class="masscash-img">';
                                        echo '</div>';
                                        echo '</div>';
                                    endif;
                                    
                                endwhile;
                            endif; ?>                            
                        </div></div><?php
                        $latest_job_offering_url = get_field('latest_job_offering_url');
                        $latest_job_offering_title = get_field('latest_job_offering_title');                        
                        if($latest_job_offering_title == ''): $latest_job_offering_title = "LATEST JOB OFFERINGS"; endif;                    
                        if($latest_job_offering_url):
                            echo '<br/><a target="_blank" href="'.$latest_job_offering_url.'" class="btn btn-red latest-job-offer-btn">'.$latest_job_offering_title.'</a>';
                        endif; 
                        $careerCount = 1;
                        if( have_rows('add_job_opportunities') ): ?>
                            <div class="title2">
                                <h2 class="red-text">Job Opportunities</h2>                            
                            </div><?php
                            while ( have_rows('add_job_opportunities') ) : the_row();
                                if($careerCount % 2 == 0):
                                    $joClass = "red-text";
                                else:
                                    $joClass = "black-text";
                                endif;        
                                $jo_title = get_sub_field('jo_title');
                                $jo_description = get_sub_field('jo_description');
                                $contact_name = get_sub_field('contact_name');
                                $contact_number = get_sub_field('contact_number');                                
                                $contact_email = get_sub_field('contact_email');
                                $information_title = get_sub_field('information_title');
                                $information_link = get_sub_field('information_link'); ?>
                                <div class="content-text mb-4">
                                    <div class="title2">
                                        <h2 class="<?php echo $joClass ?>"><?php echo $jo_title; ?></h2>
                                    </div>
                                    <?php echo $jo_description;
                                    if($contact_name): 
                                        echo '<div class="title2"><h2 class="red-text mb-1">'.$contact_name.'</h2></div>';
                                    endif;
                                    if($contact_number): 
                                        echo '<div class="title2"><h2 class="red-text mb-1">'.$contact_number.'</h2></div>';
                                    endif;
                                    if($contact_email): 
                                        echo '<p><a class="red-link mb-1" href="mailto:'.$contact_email.'">'.$contact_email.'</a></p>';
                                    endif; 
                                    if($information_title): 
                                        echo '<div class="title2"><h2 class="red-text mb-1">'.$information_title.'<h2></div>';
                                    endif;
                                    if($information_link): 
                                        echo '<p><a class="red-link mb-1" target="_blank" href="'.$information_link.'">'.$information_link.'</a></p>';
                                    endif; ?>                                    
                                </div><?php
                                $careerCount++;
                            endwhile;
                        endif; ?>                                                         
                    </div>
                </div>
                <?php echo get_template_part( 'template-parts/modules/common', 'facebook' ); ?>
            </div>
        </div>
    </section>

</section>