
<section class="twitfaves">
  <h2>On Twitter</h2>
  <ul class="block-twitfaves">
    <?php foreach ($tweets as $tweet): ?>
      <li class="clearfix">
        <div class="image">
          <a href="http://twitter.com/<?php print $tweet->screen_name; ?>" title="<?php print t("@name on Twitter", array('@name' => $tweet->screen_name)); ?>">
            <img src="<?php print $tweet->image_url; ?>" alt="" title=""  />
          </a>
        </div>
        <div class="twitfav-content">
          <div class="screenname">
            <a href="http://twitter.com/<?php print $tweet->screen_name; ?>" title="<?php print t("@name on Twitter", array('@name' => $tweet->screen_name)); ?>">
              <?php print $tweet->screen_name; ?>
            </a>
          </div>
          <div class="tweet">
            <?php print $tweet->text; ?>
          </div>
          <div class="time-ago">
            <a href="<?php print $tweet->url ?>" title="Permalink">
              <?php print format_interval(time() - $tweet->timestamp); ?> ago
            </a>
          </div>
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
  <div class="more-link">
    <?php print $follow_link; ?>
  </div>
</section>