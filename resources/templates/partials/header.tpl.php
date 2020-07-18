<header class="header">
    <h2><?= $title ?></h2>
    <p>
      <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, Im VipulM.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
        <span class="wrap"></span>
      </a>
    </p>
    <?php
        /**
         * Functions hooked into `theme/header/end` action.
         *
         * @hooked cooler\App\Structure\render_documentation_button - 10
         */
        do_action('theme/header/end')
    ?>
    <div class="space2"></div>
        <div class="next"></div>
</header>
