</main>

<?php if (!is_page(71)): ?>
  <footer>
    <div class="content-width">

      <?php if(have_rows('socials_f', 'option')): ?>

        <div class="soc-wrap">
          <ul>

            <?php while(have_rows('socials_f', 'option')): the_row() ?>

              <?php if ($field = get_sub_field('icon')): ?>
                <li>
                  <a href="<?php the_sub_field('url') ?>" target="_blank">
                    <?= wp_get_attachment_image($field['ID'], 'full') ?>
                  </a>
                </li>
              <?php endif ?>

            <?php endwhile ?>

          </ul>
        </div>

      <?php endif ?>

      <?php if ($field = get_field('copyright_f', 'option')): ?>
        <div class="text">
          <p><?= $field ?></p>
        </div>
      <?php endif ?>

    </div>
  </footer>
<?php endif ?>

<?php wp_footer(); ?>
</body>
</html>