  </main>

  <footer id="footer">
  <nav class="text-center">
    <?php wp_nav_menu( array(
				'container'=> false,
				'menu_class'=> false,
				'menu_id'=> 'footer-nav',
				'theme_location' => 'secundary'
		) ); ?>
  </nav>
  <div id="info" class="text-center">
    <p>Copyright 2020 | creastv.pl</p>
  </div>
  </footer>
  
  <?php wp_footer(); ?>
 </body>
</html>
