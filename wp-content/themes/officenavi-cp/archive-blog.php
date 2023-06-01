<?php get_header(); ?>

<div id="contents">
  <a href="https://www.office-navi.jp/" target="_blank" class="search_anchor">
    <div class="search_anchor_inner">
      <div class="icon">
        <img src="<?php echo home_url('asset/img/common/icon-search.svg'); ?>" alt="">
      </div>
      <p>オフィスを<br>検索する</p>
    </div>
  </a>
  <div class="under_mv">
    <div class="under_mv_textarea">
      <div class="title">
        <p><span class="red">ニュース</span></p>
        <h2 class="text_up">
          <span class="red">N</span>
          <span>E</span>
          <span>W</span>
          <span>S</span>
        </h2>
      </div>
    </div>
  </div>

  <div class="blog">
      <div class="category_area">
          <ul class="info_cat_list">
              <li class="current"><a href="<?php echo home_url('news/'); ?>" class="current">全て</a></li>
              <?php
                  $terms = get_terms('news_category');
                  foreach( $terms as $term ):
                  $name = $term->name;
                  $slug = $term->slug;
                  $term_link = get_term_link($term);
                  if ( is_wp_error( $term_link ) ) {
                  continue;
                  }
                  echo '<li><a class="" href="'.esc_url($term_link).'">'.$name.'</a></li>';
                  endforeach;
              ?>
          </ul>
      </div>

      <div class="blogArea">
          <div class="contents">
              <div class="article">
                  <?php
                  $terms = get_the_terms($post_id,"news_category");
                  foreach ($terms as $term) {
                      $slug_current = $term->slug;
                  }
                  ?>
                  <?php
                  $year = get_query_var('year');
                  $monthnum = get_query_var('monthnum');
                  $args = array(
                      'year' => $year,
                      // 'monthnum' => $monthnum,
                      'post_type'=>'news',
                      'posts_per_page'=> 10,
                      'order' => 'DESC',
                      'orderby' => 'date',
                      'paged' => $paged,
                  );
                  $wp_query = new WP_Query( $args );
                  if ( $wp_query->have_posts() ) :
                      while ( $wp_query->have_posts() ) : $wp_query->the_post();
                  ?>
                  <a href="<?php the_permalink(); ?>" class="news_block">
                      <div class="blog_img">
                          <?php if(has_post_thumbnail()): ?>
                          <?php the_post_thumbnail( 'full' ); ?>
                          <?php elseif(first_image()): ?>
                          <img src="<?php echo first_image(); ?>" alt="<?php the_title(); ?>">
                          <?php else : ?>
                          <div class="img_box">
                              <img src="<?php echo home_url('asset/img/common/blog-thumbnail-default.png'); ?>"
                                  alt="<?php the_title(); ?>">
                          </div>
                          <?php endif ; ?>
                      </div>
                      <div class="txtArea">
                          <div class="category">
                              <time><?php the_time("Y.m.d"); ?></time>
                              <div class="category_name">
                                  <?php
                                      $terms = get_the_terms($post_id,"news_category");
                                      foreach ($terms as $term) {
                                      $slug = $term->slug;
                                      $name = $term->name;
                                      }
                                      echo '<span class="cat '.$slug.'">'.$name.'</span>';
                                  ?>
                              </div>
                          </div>
                          <p class="blog_title pc"><?php the_title(); ?></p>
                      </div>
                      <p class="blog_title sp"><?php the_title(); ?></p>
                      <!-- <p class="customer"><?php echo get_post_meta(get_the_ID(), 'cf_customer_name', true) ;?></p> -->
                  </a>
                  <?php endwhile; ?>
                  <div class="navi fade_y">
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                  </div>
                  <?php else : ?>
                  <!-- <div class="blogarea_off"></div> -->
                  <?php endif;?>
                  <?php wp_reset_query(); ?>
              </div>
          </div>
      </div>
  </div>
</div>
<?php get_footer(); ?>
