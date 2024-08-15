<?php get_header(); ?>
<!-- メインビュー -->
<?php get_template_part('parts/fv'); ?>

<!-- パンぐずりスト -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-price layout-page-margin">
  <div class="page-price__inner inner page-body-icon">

    <div class="page-price__contents">
      <div class="page-price__content">
        <div class="page-price__content-wrap">
          <div class="page-price__content-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/page-price-icon.svg" alt="クジラのアイコン">
          </div>
          <h2 class="page-price__content-title">ライセンス講習</h2>
        </div>
        <ul class="page-price__content-items">
          <?php
          $custom_field_values = SCF::get_option_meta('theme-price', 'license');
          $index = 0; // インデックスを追加
          foreach ($custom_field_values as $custom_field_value) :
          ?>
            <li class="page-price__content-item">
              <dl>
                <dt class="page-price__content-text"><?php echo $custom_field_value["license-course-content"]; ?></dt>
                <dd class="page-price__content-cost"><?php echo $custom_field_value["license-course-price"]; ?></dd>
              </dl>
            </li>
          <?php
            $index++; // インデックスをインクリメント
          endforeach;
          ?>
        </ul>
      </div>
      <div class="page-price__content">
        <div class="page-price__content-wrap">
          <div class="page-price__content-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/page-price-icon.svg" alt="クジラのアイコン">
          </div>
          <h2 class="page-price__content-title">体験ダイビング</h2>
        </div>
        <ul class="page-price__content-items">
          <?php
          $custom_field_values = SCF::get_option_meta('theme-price', 'experience');
          $index = 0; // インデックスを追加
          foreach ($custom_field_values as $custom_field_value) :
          ?>

            <li class="page-price__content-item">
              <dl>
                <dt class="page-price__content-text"><?php echo $custom_field_value["experience-course-content"]; ?></dt>
                <dd class="page-price__content-cost"><?php echo $custom_field_value["experience-course-price"]; ?></dd>
              </dl>
            </li>
          <?php
            $index++; // インデックスをインクリメント
          endforeach;
          ?>
        </ul>
      </div>
      <div class="page-price__content">
        <div class="page-price__content-wrap">
          <div class="page-price__content-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/page-price-icon.svg" alt="クジラのアイコン">
          </div>
          <h2 class="page-price__content-title">ファンダイビング</h2>
        </div>
        <ul class="page-price__content-items">

          <?php
          $custom_field_values = SCF::get_option_meta('theme-price', 'fun');
          $index = 0; // インデックスを追加
          foreach ($custom_field_values as $custom_field_value) :
          ?>
            <li class="page-price__content-item">
              <dl>
                <dt class="page-price__content-text"><?php echo $custom_field_value["fun-course-content"]; ?></dt>
                <dd class="page-price__content-cost"><?php echo $custom_field_value["fun-course-price"]; ?></dd>
              </dl>
            </li>
          <?php
            $index++; // インデックスをインクリメント
          endforeach;
          ?>
        </ul>
      </div>
      <div class="page-price__content">
        <div class="page-price__content-wrap">
          <div class="page-price__content-icon">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price/page-price-icon.svg" alt="クジラのアイコン">
          </div>
          <h2 class="page-price__content-title">スペシャルダイビング</h2>
        </div>
        <ul class="page-price__content-items">

          <?php
          $custom_field_values = SCF::get_option_meta('theme-price', 'special');
          $index = 0; // インデックスを追加
          foreach ($custom_field_values as $custom_field_value) :
          ?>
            <li class="page-price__content-item">
              <dl>
                <dt class="page-price__content-text"><?php echo $custom_field_value["special-course-content"]; ?></dt>
                <dd class="page-price__content-cost"><?php echo $custom_field_value["special-course-price"]; ?></dd>
              </dl>
            </li>
          <?php
            $index++; // インデックスをインクリメント
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>