
<?php 
    $args = array('post_type' => 'page', 'pagename' => 'header');

    $my_page = get_posts($args);
?>
<?php 
    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>
<header id="header">
<?php
    the_content(); 
    endforeach; 
  ?>
  <?php else: ?>
  <?php endif; ?>
  

  


</header>
