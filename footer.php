<footer class="dark-background ">
    <div class="footer__top pt-5 ">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12 mb-4 mb-md-0">
            <h3 class="mb-3 text-center text-md-start">Contact</h3>

            <div class="flex-column d-flex align-items-center align-items-md-start">
            <!-- adress phone email acf -->
            <?php if(function_exists('get_field')) : ?>
            <?php
            $adress = get_field('adress', 'option') ?? '95 E. Price Rd., Bldg E, Brownsville, TX 78521';
            $phone = get_field('phone_number', 'option') ?? '(956) 504-4800';
            $email = get_field('email', 'option') ?? 'contact@gracielaleijamdpa.com';
            $google_map_link = get_field('google_map_link', 'option') ?? '';

            ?>


            <div class="d-flex align-items-center mb-2 gap-2">
              <?php if($google_map_link) : ?>
                <a href="<?=$google_map_link?>" target="_blank" class="text-decoration-none d-flex align-items-center gap-2">
                  <i class="bi bi-geo-alt text-primary"></i>
                  <p class="mb-0"><?=$adress?></p>
                </a>
              <?php else : ?>
                <i class="bi bi-geo-alt text-primary"></i>
                <p class="mb-0"><?=$adress?></p>
              <?php endif; ?>
            </div>
            <div class="d-flex align-items-center mb-2 gap-2">
              <?php if($phone) : ?>
                <a href="tel:<?=$phone?>" class="text-decoration-none d-flex align-items-center gap-2">
                  <i class="bi bi-phone text-primary"></i>
                  <p class="mb-0"><?=$phone?></p>
                </a>
              <?php else : ?>
                <i class="bi bi-phone text-primary"></i>
                <p class="mb-0"><?=$phone?></p>
              <?php endif; ?>
            </div>
            <div class="d-flex align-items-center mb-2 gap-2">
              <?php if($email) : ?> 
                <a href="mailto:<?=$email?>" class="text-decoration-none d-flex align-items-center gap-2">
                  <i class="bi bi-envelope text-primary"></i>
                  <p class="mb-0"><?=$email?></p>
                </a>
              <?php else : ?>
                <i class="bi bi-envelope text-primary"></i>
                <p class="mb-0"><?=$email?></p>
              <?php endif; ?>
            </div>
            <?php endif; ?>
            </div>

          </div>
          <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
          <h3 class="mb-3">Legal Links</h3>
            <?php $menu_items = \Theme_base\Base::wp_get_menu_array('footer');?>
            <?php if(is_array($menu_items) && count($menu_items) > 0): ?>
            <nav id="navmenu" class="navmenu m-0 ">
              <ul class="d-flex flex-column text-center align-items-center justify-content-center m-0 p-0">
                <?php foreach($menu_items as $item): ?>
                  <?php if(empty($item['children'])):?>
                    <li class="<?= \Theme_base\Base::get_active_class($item) ?> mb-2">
                      <a class="navicon p-0" 
                      href="<?=$item['url']?>"
                      title="<?=$item['title']?>"
                      target="<?=$item['target']?>"
                      rel="<?= $item['target'] === '_blank' ? 'noopener noreferrer' : '' ?>"
                      ><?=$item['title']?></a>
                    </li>
                  <?php else: ?>
                    <li class="dropdown"><a href="#"><span><?=$item['title']?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                        <?php foreach($item['children'] as $child): ?>
                          <li class="<?= \Theme_base\Base::get_active_class($child) ?> mb-2">
                            <a  class="navicon p-0"
                            href="<?=$child['url']?>"
                            title="<?=$child['title']?>"
                            target="<?=$child['target']?>"
                            rel="<?= $child['target'] === '_blank' ? 'noopener noreferrer' : '' ?>"
                            ><?=$child['title']?></a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            </nav>
            <?php endif; ?>
          </div>
          <!-- openning hours -->
          <div class="col-md-4 col-12 footer-hours">
            <h3 class="mb-3 text-center">Opening Hours</h3>
            <?php if(function_exists('get_field')) : ?>
            <?php
            $opening_hours = get_field('opening_hours', 'option') ?? 'Office Hours: Monday - Friday 8 - 5';
            $opening_hours_text = get_field('opening_hours_text', 'option') ?? 'Walk-ins Welcomed, Accepting New Patients';
            ?>
            <div class="info-wrap rounded-3 p-3  light-background">
            <div class="info-item d-flex" >
            <i class="bi bi-clock flex-shrink-0"></i>
            <div class="d-flex flex-column">
                <h3><?=$opening_hours?></h3>
                <p><?=$opening_hours_text?></p>
            </div>
            </div><!-- End Info Item -->
            </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

    <div class="footer__copyright text-center py-3 text-white">
        <span>© <?=date('Y')?> <?=get_bloginfo('name')?>, Inc.</span>
    </div>
</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<!-- Preloader -->
<div id="preloader"></div>

<?php wp_footer(); ?>
</body>
</html>