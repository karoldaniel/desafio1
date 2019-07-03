
<?php 
    $args = array('post_type' => 'page', 'pagename' => 'page-sobre');

    $my_page = get_posts($args);
?>
<?php 
    if($my_page) : forEach($my_page as $post) : setup_postdata($post);
?>
<header id="sobre">
<?php
    the_content(); 
    endforeach; 
  ?>
  <?php else: ?>
  <?php endif; ?>
  
    <?php
        include('src/components/sobre.php'); 
        // include('templete-parts/content-sigle.php')
    ?>



</header>
