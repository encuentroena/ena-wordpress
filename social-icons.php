<a class="footer-btn share-btn" title="" id="footer-btn-fb"  href="#"
onclick="return !window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo get_post_meta($post->ID, '_yourls_url', true); ?> '+'','das','location=no,links=no,scrollbars=no,toolbar=no,width=620,height=550')"
target="_blank"></a>

<a class="footer-btn share-btn" title="" id="footer-btn-tw" href="#" onclick="return !window.open('http://twitter.com/home/?status=<?php echo the_title();?> <?php echo get_post_meta($post->ID, '_yourls_url', true);?> <?php echo "#Ena"?>','das','location=no,links=no,scrollbars=no,toolbar=no,width=620,height=350')"
target="_blank"></a>

<a class="footer-btn share-btn" style="display:none;" data-reveal-id="footer-btn-share-popup" title="" id="footer-btn-share" onclick="" href="#"></a>

<a id="footer-btn-rss" title="" class="footer-btn share-btn"  style="display:none;" href="<?php echo get_post_meta($post->permalink); ?>feed/" target="_blank"></a>
