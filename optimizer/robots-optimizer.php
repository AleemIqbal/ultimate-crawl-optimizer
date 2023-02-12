<?php

function ultimatecrawloptimizer_settings_robots_page()
{
  if (isset($_POST['submit'])) {
    file_put_contents(ABSPATH . 'robots.txt', stripslashes($_POST['robotstxt']));
    // Update the state of the checkbox in the database
    update_option_isset("ultimatecrawloptimizer_remove_wp_json_api");
    update_option_isset("ultimatecrawloptimizer_block_parameters");
    update_option_isset("ultimatecrawloptimizer_block_feed");
    update_option_isset("ultimatecrawloptimizer_block_spam_directories");
    update_option_isset("ultimatecrawloptimizer_block_cart_page");
    update_option_isset("ultimatecrawloptimizer_block_checkout_page");
    update_option_isset("ultimatecrawloptimizer_block_myaccount_page");
    update_option_isset("ultimatecrawloptimizer_block_login_page");
    update_option_isset("ultimatecrawloptimizer_block_woocommerce_parameters");
    update_option_isset("ultimatecrawloptimizer_add_woocommerce_product_sitemap");
    update_option_isset("ultimatecrawloptimizer_block_xenu");
    update_option_isset("ultimatecrawloptimizer_block_scrappers");
    update_option_isset("ultimatecrawloptimizer_prevent_internal_search_crawl");
    update_option_isset("ultimatecrawloptimizer_block_ahrefs_crawler");
    update_option_isset("ultimatecrawloptimizer_block_semrush_crawler");
    update_option_isset("ultimatecrawloptimizer_block_moz_crawler");
    update_option_isset("ultimatecrawloptimizer_block_majestic_crawler");
    update_option_isset("ultimatecrawloptimizer_block_archive_org");
    update_option_isset("ultimatecrawloptimizer_block_chatgpt");
    update_option_isset("ultimatecrawloptimizer_add_yoast_sitemap");
    update_option_isset("ultimatecrawloptimizer_add_rankmath_sitemap");
    update_option_isset("ultimatecrawloptimizer_aioseo_sitemap");
    update_option_isset("ultimatecrawloptimizer_add_squirrly_sitemap");
    update_option_isset("ultimatecrawloptimizer_add_xml_sitemaps_sitemap");
    update_option_isset("ultimatecrawloptimizer_add_jetpack_sitemap");
    update_option_isset("ultimatecrawloptimizer_add_wp_default_sitemap");
    update_option_isset("ultimatecrawloptimizer_add_news_sitemap");

    if (isset($_POST['ultimatecrawloptimizer_add_wp_default_robots'])) update_option('ultimatecrawloptimizer_add_wp_default_robots', $_POST['ultimatecrawloptimizer_add_wp_default_robots']);
    if (isset($_POST['ultimatecrawloptimizer_change_google_bot'])) update_option('ultimatecrawloptimizer_change_google_bot', $_POST['ultimatecrawloptimizer_change_google_bot']);
    if (isset($_POST['ultimatecrawloptimizer_change_google_images']))  update_option('ultimatecrawloptimizer_change_google_images', ($_POST['ultimatecrawloptimizer_change_google_images']));
    if (isset($_POST['ultimatecrawloptimizer_change_google_media_partners']))  update_option('ultimatecrawloptimizer_change_google_media_partners', ($_POST['ultimatecrawloptimizer_change_google_media_partners']));
    if (isset($_POST['ultimatecrawloptimizer_change_google_adsbot']))  update_option('ultimatecrawloptimizer_change_google_adsbot', ($_POST['ultimatecrawloptimizer_change_google_adsbot']));
    if (isset($_POST['ultimatecrawloptimizer_change_google_mobile']))  update_option('ultimatecrawloptimizer_change_google_mobile', ($_POST['ultimatecrawloptimizer_change_google_mobile']));
    if (isset($_POST['ultimatecrawloptimizer_change_bing_bot'])) update_option('ultimatecrawloptimizer_change_bing_bot', ($_POST['ultimatecrawloptimizer_change_bing_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_msn_bot']))  update_option('ultimatecrawloptimizer_change_msn_bot', ($_POST['ultimatecrawloptimizer_change_msn_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_msn_bot_media']))  update_option('ultimatecrawloptimizer_change_msn_bot_media', ($_POST['ultimatecrawloptimizer_change_msn_bot_media']));
    if (isset($_POST['ultimatecrawloptimizer_change_apple_bot']))  update_option('ultimatecrawloptimizer_change_apple_bot', ($_POST['ultimatecrawloptimizer_change_apple_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_yandex_bot']))  update_option('ultimatecrawloptimizer_change_yandex_bot', ($_POST['ultimatecrawloptimizer_change_yandex_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_yandex_images']))  update_option('ultimatecrawloptimizer_change_yandex_images', ($_POST['ultimatecrawloptimizer_change_yandex_images']));
    if (isset($_POST['ultimatecrawloptimizer_change_yahoo_bot']))  update_option('ultimatecrawloptimizer_change_yahoo_bot', ($_POST['ultimatecrawloptimizer_change_yahoo_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_duckduckgo_bot']))  update_option('ultimatecrawloptimizer_change_duckduckgo_bot', ($_POST['ultimatecrawloptimizer_change_duckduckgo_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_qwant_bot'])) update_option('ultimatecrawloptimizer_change_qwant_bot', ($_POST['ultimatecrawloptimizer_change_qwant_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_baidu_bot']))  update_option('ultimatecrawloptimizer_change_baidu_bot', ($_POST['ultimatecrawloptimizer_change_baidu_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_naver_bot']))  update_option('ultimatecrawloptimizer_change_naver_bot', ($_POST['ultimatecrawloptimizer_change_naver_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_seznam_bot']))  update_option('ultimatecrawloptimizer_change_seznam_bot', ($_POST['ultimatecrawloptimizer_change_seznam_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_facebook_bot']))  update_option('ultimatecrawloptimizer_change_facebook_bot', ($_POST['ultimatecrawloptimizer_change_facebook_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_instagram_bot']))  update_option('ultimatecrawloptimizer_change_instagram_bot', ($_POST['ultimatecrawloptimizer_change_instagram_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_whatsapp_bot']))  update_option('ultimatecrawloptimizer_change_whatsapp_bot', ($_POST['ultimatecrawloptimizer_change_whatsapp_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_telegram_bot']))  update_option('ultimatecrawloptimizer_change_telegram_bot', ($_POST['ultimatecrawloptimizer_change_telegram_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_twitter_bot']))  update_option('ultimatecrawloptimizer_change_twitter_bot', ($_POST['ultimatecrawloptimizer_change_twitter_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_linkedin_bot']))  update_option('ultimatecrawloptimizer_change_linkedin_bot', ($_POST['ultimatecrawloptimizer_change_linkedin_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_pinterest_bot']))  update_option('ultimatecrawloptimizer_change_pinterest_bot', ($_POST['ultimatecrawloptimizer_change_pinterest_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_discord_bot']))  update_option('ultimatecrawloptimizer_change_discord_bot', ($_POST['ultimatecrawloptimizer_change_discord_bot']));
    if (isset($_POST['ultimatecrawloptimizer_change_webp']))  update_option('ultimatecrawloptimizer_change_webp', ($_POST['ultimatecrawloptimizer_change_webp']));
    if (isset($_POST['ultimatecrawloptimizer_change_jpg']))  update_option('ultimatecrawloptimizer_change_jpg', ($_POST['ultimatecrawloptimizer_change_jpg']));
    if (isset($_POST['ultimatecrawloptimizer_change_png']))  update_option('ultimatecrawloptimizer_change_png', ($_POST['ultimatecrawloptimizer_change_png']));
    if (isset($_POST['ultimatecrawloptimizer_change_gif']))  update_option('ultimatecrawloptimizer_change_gif', ($_POST['ultimatecrawloptimizer_change_gif']));
    if (isset($_POST['ultimatecrawloptimizer_change_pdf']))  update_option('ultimatecrawloptimizer_change_pdf', ($_POST['ultimatecrawloptimizer_change_pdf']));
    if (isset($_POST['ultimatecrawloptimizer_change_docx']))  update_option('ultimatecrawloptimizer_change_docx', ($_POST['ultimatecrawloptimizer_change_docx']));
    if (isset($_POST['ultimatecrawloptimizer_change_html']))  update_option('ultimatecrawloptimizer_change_html', ($_POST['ultimatecrawloptimizer_change_html']));
    if (isset($_POST['ultimatecrawloptimizer_change_php']))  update_option('ultimatecrawloptimizer_change_php', ($_POST['ultimatecrawloptimizer_change_php']));
  }
  $robotstxt = file_get_contents(ABSPATH . 'robots.txt');
  $ultimatecrawloptimizer_block_feed = get_option('ultimatecrawloptimizer_block_feed', false);
  $ultimatecrawloptimizer_remove_wp_json_api = get_option('ultimatecrawloptimizer_remove_wp_json_api', false);
  $prevent_internal_search_crawl = get_option('ultimatecrawloptimizer_prevent_internal_search_crawl', 0);
  $ultimatecrawloptimizer_block_ahrefs_crawler = get_option('ultimatecrawloptimizer_block_ahrefs_crawler', false);
  $ultimatecrawloptimizer_block_semrush_crawler = get_option('ultimatecrawloptimizer_block_semrush_crawler', false);
  $ultimatecrawloptimizer_block_moz_crawler = get_option('ultimatecrawloptimizer_block_moz_crawler', false);
  $ultimatecrawloptimizer_block_majestic_crawler = get_option('ultimatecrawloptimizer_block_majestic_crawler', false);
  $ultimatecrawloptimizer_block_archive_org = get_option('ultimatecrawloptimizer_block_archive_org', false);
  $ultimatecrawloptimizer_block_chatgpt = get_option('ultimatecrawloptimizer_block_chatgpt', false);
  $ultimatecrawloptimizer_add_yoast_sitemap = get_option('ultimatecrawloptimizer_add_yoast_sitemap', false);
  $ultimatecrawloptimizer_add_rankmath_sitemap = get_option('ultimatecrawloptimizer_add_rankmath_sitemap', false);
  $ultimatecrawloptimizer_aioseo_sitemap = get_option('ultimatecrawloptimizer_aioseo_sitemap', false);
  $ultimatecrawloptimizer_add_squirrly_sitemap = get_option('ultimatecrawloptimizer_add_squirrly_sitemap', false);
  $ultimatecrawloptimizer_add_xml_sitemaps_sitemap = get_option('ultimatecrawloptimizer_add_xml_sitemaps_sitemap', false);
  $ultimatecrawloptimizer_add_jetpack_sitemap = get_option('ultimatecrawloptimizer_add_jetpack_sitemap', false);
  $ultimatecrawloptimizer_add_wp_default_sitemap = get_option('ultimatecrawloptimizer_add_wp_default_sitemap', false);
  $ultimatecrawloptimizer_add_news_sitemap = get_option('ultimatecrawloptimizer_add_news_sitemap', false);
  $ultimatecrawloptimizer_add_wp_default_robots = get_option('ultimatecrawloptimizer_add_wp_default_robots', false);
  $ultimatecrawloptimizer_change_google_bot = get_option('ultimatecrawloptimizer_change_google_bot', false);
  $ultimatecrawloptimizer_change_google_images = get_option('ultimatecrawloptimizer_change_google_images', false);
  $ultimatecrawloptimizer_change_google_media_partners = get_option('ultimatecrawloptimizer_change_google_media_partners', false);
  $ultimatecrawloptimizer_change_google_adsbot = get_option('ultimatecrawloptimizer_change_google_adsbot', false);
  $ultimatecrawloptimizer_change_google_mobile = get_option('ultimatecrawloptimizer_change_google_mobile', false);
  $ultimatecrawloptimizer_change_bing_bot = get_option('ultimatecrawloptimizer_change_bing_bot', false);
  $ultimatecrawloptimizer_change_msn_bot = get_option('ultimatecrawloptimizer_change_msn_bot', false);
  $ultimatecrawloptimizer_change_msn_bot_media = get_option('ultimatecrawloptimizer_change_msn_bot_media', false);
  $ultimatecrawloptimizer_change_apple_bot = get_option('ultimatecrawloptimizer_change_apple_bot', false);
  $ultimatecrawloptimizer_change_yandex_bot = get_option('ultimatecrawloptimizer_change_yandex_bot', false);
  $ultimatecrawloptimizer_change_yandex_images = get_option('ultimatecrawloptimizer_change_yandex_images', false);
  $ultimatecrawloptimizer_change_yahoo_bot = get_option('ultimatecrawloptimizer_change_yahoo_bot', false);
  $ultimatecrawloptimizer_change_duckduckgo_bot = get_option('ultimatecrawloptimizer_change_duckduckgo_bot', false);
  $ultimatecrawloptimizer_change_qwant_bot = get_option('ultimatecrawloptimizer_change_qwant_bot', false);
  $ultimatecrawloptimizer_change_baidu_bot = get_option('ultimatecrawloptimizer_change_baidu_bot', false);
  $ultimatecrawloptimizer_change_naver_bot = get_option('ultimatecrawloptimizer_change_naver_bot', false);
  $ultimatecrawloptimizer_change_seznam_bot = get_option('ultimatecrawloptimizer_change_seznam_bot', false);
  $ultimatecrawloptimizer_change_facebook_bot = get_option('ultimatecrawloptimizer_change_facebook_bot', false);
  $ultimatecrawloptimizer_change_instagram_bot = get_option('ultimatecrawloptimizer_change_instagram_bot', false);
  $ultimatecrawloptimizer_change_whatsapp_bot = get_option('ultimatecrawloptimizer_change_whatsapp_bot', false);
  $ultimatecrawloptimizer_change_telegram_bot = get_option('ultimatecrawloptimizer_change_telegram_bot', false);
  $ultimatecrawloptimizer_change_twitter_bot = get_option('ultimatecrawloptimizer_change_twitter_bot', false);
  $ultimatecrawloptimizer_change_linkedin_bot = get_option('ultimatecrawloptimizer_change_linkedin_bot', false);
  $ultimatecrawloptimizer_change_pinterest_bot = get_option('ultimatecrawloptimizer_change_pinterest_bot', false);
  $ultimatecrawloptimizer_change_discord_bot = get_option('ultimatecrawloptimizer_change_discord_bot', false);
  $ultimatecrawloptimizer_change_webp = get_option('ultimatecrawloptimizer_change_webp', false);
  $ultimatecrawloptimizer_change_jpg = get_option('ultimatecrawloptimizer_change_jpg', false);
  $ultimatecrawloptimizer_change_png = get_option('ultimatecrawloptimizer_change_png', false);
  $ultimatecrawloptimizer_change_gif = get_option('ultimatecrawloptimizer_change_gif', false);
  $ultimatecrawloptimizer_change_pdf = get_option('ultimatecrawloptimizer_change_pdf', false);
  $ultimatecrawloptimizer_change_docx = get_option('ultimatecrawloptimizer_change_docx', false);
  $ultimatecrawloptimizer_change_html = get_option('ultimatecrawloptimizer_change_html', false);
  $ultimatecrawloptimizer_change_php = get_option('ultimatecrawloptimizer_change_php', false);
  $ultimatecrawloptimizer_block_parameters = get_option('ultimatecrawloptimizer_block_parameters', false);
  $ultimatecrawloptimizer_block_spam_directories = get_option('ultimatecrawloptimizer_block_spam_directories', false);
  $ultimatecrawloptimizer_block_cart_page = get_option('ultimatecrawloptimizer_block_cart_page', false);
  $ultimatecrawloptimizer_block_checkout_page = get_option('ultimatecrawloptimizer_block_checkout_page', false);
  $ultimatecrawloptimizer_block_myaccount_page = get_option('ultimatecrawloptimizer_block_myaccount_page', false);
  $ultimatecrawloptimizer_block_login_page = get_option('ultimatecrawloptimizer_block_login_page', false);
  $ultimatecrawloptimizer_block_woocommerce_parameters = get_option('ultimatecrawloptimizer_block_woocommerce_parameters', false);
  $ultimatecrawloptimizer_add_woocommerce_product_sitemap = get_option('ultimatecrawloptimizer_add_woocommerce_product_sitemap', false);
  $ultimatecrawloptimizer_block_xenu = get_option('ultimatecrawloptimizer_block_xenu', false);
  $ultimatecrawloptimizer_block_scrappers = get_option('ultimatecrawloptimizer_block_scrappers', false);
?>

  <div class="wrap custom-seo-settings robots-optimizaiton">
    <h1 class="custom-seo-settings-title">Robots.txt Optimization</h1>
    <form method="post" action="">
      <div class="custom-seo-settings-box sticky-textarea">
        <textarea id="robotstxt" name="robotstxt" dis><?= $robotstxt ?></textarea>
      </div>
      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Add Wordpress Default Robots.txt</h3>
          <p>Protect backend of website by blocking search engines and web crawlers from accessing WordPress administration panel. Allow dynamic functionality by allowing crawling of admin-ajax.php file for AJAX requests to the server.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Add Wordpress Default Robots.txt
                  <p>
                    Add the default Wordpress robots.txt rules by adding the following to your robots.txt file:<br />
                    <br /><strong>Basic:</strong><br />
                    <code>User-agent: *<br />
                      Disallow: /wp-admin/<br />
                      Allow: /wp-admin/admin-ajax.php</code><br />
                      <br /><strong>Advanced:</strong><br />
                      <code>User-agent: *<br />
                      Allow: /wp-admin/admin-ajax.php<br />
                      Allow: /*/*.css<br />
                      Allow: /*/*.js<br />
                      Disallow: /wp-admin/<br />
                      Disallow: /wp-includes/<br />
                      Disallow: /readme.html<br />
                      Disallow: /license.txt<br />
                      Disallow: /xmlrpc.php<br />
                      Disallow: /wp-login.php<br />
                      Disallow: /wp-register.php<br />
                      Disallow: *?attachment_id=</code>
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_add_wp_default_robots" id="ultimatecrawloptimizer_add_wp_default_robots_1" value="1" <? checked(1, $ultimatecrawloptimizer_add_wp_default_robots, true) ?> />
                    <label for="ultimatecrawloptimizer_add_wp_default_robots_1">Advanced</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_add_wp_default_robots" id="ultimatecrawloptimizer_add_wp_default_robots_2" value="2" <? checked(2, $ultimatecrawloptimizer_add_wp_default_robots, true) ?> />
                    <label for="ultimatecrawloptimizer_add_wp_default_robots_2">Basic</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_add_wp_default_robots" id="ultimatecrawloptimizer_add_wp_default_robots_3" value="3" <? checked(3, $ultimatecrawloptimizer_add_wp_default_robots, true) ?> <?php echo (!$ultimatecrawloptimizer_add_wp_default_robots) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_add_wp_default_robots_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Block Crawling of WordPress Duplicate</h3>
          <p>By blocking these URLs, website owners can prevent search engines from indexing this duplicate content and instead prioritize high-quality, unique content on their website, improving their SEO and visibility in search results.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Prevent Crawling of WordPress JSON API Endpoints
                  <p>Prevent search engines from crawling the WordPress JSON API endpoints by adding a "disallow" rule to your robots.txt file for <code>/wp-json/</code> and <code>/?rest_route=</code>.</p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_remove_wp_json_api" id="ultimatecrawloptimizer_remove_wp_json_api" value="1" <?= ($ultimatecrawloptimizer_remove_wp_json_api ? 'checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">Block Search URLs from Indexing
                  <p>Blocking search URLs, such as "/search/" and "/?s=", from being crawled by web crawlers in robots.txt helps to avoid having duplicate content indexed in search engines and reduces the load on the website's servers.</p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_prevent_internal_search_crawl" id="ultimatecrawloptimizer_prevent_internal_search_crawl" value="1" <?= ($prevent_internal_search_crawl ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Parameters from Indexing
                  <p>Block Parameters to avoid duplicate Content issues by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                    Disallow: *?s=*<br />
                    Disallow: *?p=*<br />
                    Disallow: *&p=*<br />
                    Disallow: *&preview=*</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_parameters" id="ultimatecrawloptimizer_block_parameters" value="1" <?= ($ultimatecrawloptimizer_block_parameters ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Feed from Indexing
                  <p>Block Feed directories to save crawl budget<br />
                    <code>User-agent: *<br />
                    Disallow: /feed/<br />
                    Disallow: /feed/$<br />
                    Disallow: /comments/feed<br />
                    Disallow: */feed<br />
                    Disallow: */feed$<br />
                    Disallow: /?feed=<br />
                    Disallow: /wp-feed</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_feed" id="ultimatecrawloptimizer_block_feed" value="1" <?= ($ultimatecrawloptimizer_block_feed ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Spam Directory from Indexing
                  <p>Block these directories to save crawl budget<br />
                    <code>User-agent: *<br />
                    Disallow: /trackback/<br />
                    Disallow: */comments$<br />
                    Disallow: */trackback<br />
                    Disallow: */trackback$<br />
                    Disallow: /wp-comments<br />
                    Disallow: /wp-trackback<br />
                    Disallow: */replytocom=</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_spam_directories" id="ultimatecrawloptimizer_block_spam_directories" value="1" <?= ($ultimatecrawloptimizer_block_spam_directories ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Prevent Scrappers</h3>
          <p>By blocking WayBackMachine Archive.org, a website owner can have more control over which versions of its pages are accessible to the public and protect the website from privacy concerns, resource constraints, and SEO issues.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block WayBackMachine Archive.org Crawler
                  <p>Block WayBackMachine crawler by adding following lines in robots.txt<br />
                    <code>User-agent: ia_archiver<br />
                      Disallow: /<br />
                      User-agent: archive.org_bot<br />
                      Disallow: /<br />
                      User-agent: ia_archiver-web.archive.org<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_archive_org" id="ultimatecrawloptimizer_block_archive_org" value="1" <?= ($ultimatecrawloptimizer_block_archive_org ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block ChatGPT Crawler
                  <p>Block ChatGPT From Using Your Website Content by adding following lines in robots.txt<br />
                    <code>User-agent: CCBot<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_chatgpt" id="ultimatecrawloptimizer_block_chatgpt" value="1" <?= ($ultimatecrawloptimizer_block_chatgpt ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Woocommerce Optimization</h3>
          <p>By blocking WayBackMachine Archive.org, a website owner can have more control over which versions of its pages are accessible to the public and protect the website from privacy concerns, resource constraints, and SEO issues.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block Cart Page
                  <p>Block Cart Page from indexation by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /cart/</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_cart_page" id="ultimatecrawloptimizer_block_cart_page" value="1" <?= ($ultimatecrawloptimizer_block_cart_page ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Checkout Page
                  <p>Block Checkout Page from indexation by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /checkout/</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_checkout_page" id="ultimatecrawloptimizer_block_checkout_page" value="1" <?= ($ultimatecrawloptimizer_block_checkout_page ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block My Account Page
                  <p>Block My Account Page from indexation adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /my-account/</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_myaccount_page" id="ultimatecrawloptimizer_block_myaccount_page" value="1" <?= ($ultimatecrawloptimizer_block_myaccount_page ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Login Page
                  <p>Block Login Page from indexation by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                      Disallow: /login/</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_login_page" id="ultimatecrawloptimizer_block_login_page" value="1" <?= ($ultimatecrawloptimizer_block_login_page ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Woocommerce Parameters
                  <p>Block Woocommerce Parameters to avoid duplicate Content issues by adding following lines in robots.txt<br />
                    <code>User-agent: *<br />
                    Disallow: /*?orderby=price<br />
                    Disallow: /*?orderby=rating<br />
                    Disallow: /*?orderby=date<br />
                    Disallow: /*?orderby=price-desc<br />
                    Disallow: /*?orderby=popularity<br />
                    Disallow: /*?filter<br />
                    Disallow: /*?orderby=title<br />
                    Disallow: /*?orderby=desc<br />
                    Disallow: /*add-to-cart=*<br />
                    Disallow: /*add_to_wishlist=*<br />
                    Disallow: /*?paged=&count=*<br />
                    Disallow: /*?count=*</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_woocommerce_parameters" id="ultimatecrawloptimizer_block_woocommerce_parameters" value="1" <?= ($ultimatecrawloptimizer_block_woocommerce_parameters ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Add Sitemaps</h3>
          <p>By including the sitemap in the robots.txt file, search engines are able to quickly and efficiently crawl the site and index its content, which can improve search engine rankings and visibility.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <? if (is_plugin_active('wordpress-seo/wp-seo.php')) { ?>
                <tr>
                  <th scope="row">Add Yoast Sitemap Link
                    <p>Add the link to the Yoast Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="ultimatecrawloptimizer_add_yoast_sitemap" id="ultimatecrawloptimizer_add_yoast_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_yoast_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('seo-by-rank-math/rank-math.php')) { ?>
                <tr>
                  <th scope="row">Add RankMath Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/sitemap_index.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="ultimatecrawloptimizer_add_rankmath_sitemap" id="ultimatecrawloptimizer_add_rankmath_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_rankmath_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('all-in-one-seo-pack/all_in_one_seo_pack.php')) { ?>
                <tr>
                  <th scope="row">Add All in One SEO Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/sitemap.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="ultimatecrawloptimizer_aioseo_sitemap" id="ultimatecrawloptimizer_aioseo_sitemap" value="1" <?= ($ultimatecrawloptimizer_aioseo_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('squirrly-seo/squirrly.php')) { ?>
                <tr>
                  <th scope="row">Add Squirrly SEO Sitemap Link
                    <p>Add the link to the Squirrly SEO Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/sitemap.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="ultimatecrawloptimizer_add_squirrly_sitemap" id="ultimatecrawloptimizer_add_squirrly_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_squirrly_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('xml-sitemap-feed/xml-sitemap.php')) { ?>
                <tr>
                  <th scope="row">Add XML Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/sitemap.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="ultimatecrawloptimizer_add_xml_sitemaps_sitemap" id="ultimatecrawloptimizer_add_xml_sitemaps_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_xml_sitemaps_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } else if (is_plugin_active('jetpack/jetpack.php')) { ?>
                <tr>
                  <th scope="row">Add Jetpack Sitemap Link
                    <p>Add the link to the Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/sitemap.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="ultimatecrawloptimizer_add_jetpack_sitemap" id="ultimatecrawloptimizer_add_jetpack_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_jetpack_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />

                  </td>
                </tr>
              <? } else { // do something if no SEO plugin is active 
              ?>
                <tr>
                  <th scope="row">Add Wordpress Default Sitemap Link
                    <p>Add the link to the Wordpress Default Sitemap by adding the following line to your robots.txt file:<br>
                      <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/wp-sitemap.xml</code>
                    </p>
                  </th>
                  <td>
                    <input type="checkbox" name="ultimatecrawloptimizer_add_wp_default_sitemap" id="ultimatecrawloptimizer_add_wp_default_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_wp_default_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                  </td>
                </tr>
              <? } ?>
              <tr>
                <th scope="row">
                  Add News Sitemap Link
                  <p>
                    Add the link to the News Sitemap by adding the following line to your robots.txt file:<br />
                    <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/sitemap-news.xml</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_add_news_sitemap" id="ultimatecrawloptimizer_add_news_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_news_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Add Woocommerce Product Sitemap Link
                  <p>
                    Add the link to the Woocommerce product Sitemap by adding the following line to your robots.txt file:<br />
                    <code>Sitemap: https://<?= $_SERVER['HTTP_HOST'] ?>/product-sitemap.xml</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_add_woocommerce_product_sitemap" id="ultimatecrawloptimizer_add_woocommerce_product_sitemap" value="1" <?= ($ultimatecrawloptimizer_add_woocommerce_product_sitemap ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Block SEO Tool Crawlers</h3>
          <p>By blocking SEO tool crawlers, website owners can have more control over the data that is available to the public, the amount of traffic to their site, and minimize the risk of server overload. By controlling the amount of traffic, website owners can ensure that their site is always accessible and available to their users.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block Ahrefs Crawler
                  <p>
                    Block Ahrefs crawler from accessing your site by adding the following to your robots.txt file:<br /><code>User-agent: AhrefsBot<br />Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_ahrefs_crawler" id="ultimatecrawloptimizer_block_ahrefs_crawler" value="1" <?= ($ultimatecrawloptimizer_block_ahrefs_crawler ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Semrush Crawler
                  <p>
                  Block Semrush Crawler from accessing your website by adding the following to your robots.txt file:<br />
                  <code>User-agent: SemrushBot<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-SA<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-BA<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-SI<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-SWA<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-CT<br />
                    Disallow: /<br />
                    User-agent: SemrushBot-BM<br />
                    Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_semrush_crawler" id="ultimatecrawloptimizer_block_semrush_crawler" value="1" <?= ($ultimatecrawloptimizer_block_semrush_crawler ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Moz Crawler
                  <p>
                    Block Moz Crawler from accessing your website by adding the following to your robots.txt file:<br /><code>User-agent: rogerbot<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_moz_crawler" id="ultimatecrawloptimizer_block_moz_crawler" value="1" <?= ($ultimatecrawloptimizer_block_moz_crawler ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Majestic Crawler
                  <p>
                    Block the Majestic Crawler from accessing your website by adding the following to your robots.txt file:<br /><code>User-agent: MJ12bot<br />
                      Disallow: /</code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_majestic_crawler" id="ultimatecrawloptimizer_block_majestic_crawler" value="1" <?= ($ultimatecrawloptimizer_block_majestic_crawler ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Xenu
                  <p>
                    Block the Xenu Crawler from accessing your website by adding the following to your robots.txt file:<br /><code>User-agent: Xenu<br />
                      Disallow: /<br />
                      User-agent: Xenu's Link Sleuth 1.1c<br />
                      Disallow: /
                      </code>
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_xenu" id="ultimatecrawloptimizer_block_xenu" value="1" <?= ($ultimatecrawloptimizer_block_xenu ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Search Engine Crawlers</h3>
          <p>By blocking SEO tool crawlers, website owners can have more control over the data that is available to the public, the amount of traffic to their site, and minimize the risk of server overload. By controlling the amount of traffic, website owners can ensure that their site is always accessible and available to their users.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Google Bot:
                  <p>Allow/Block Google crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_bot" id="ultimatecrawloptimizer_change_google_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_google_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_bot" id="ultimatecrawloptimizer_change_google_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_google_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_bot" id="ultimatecrawloptimizer_change_google_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_google_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_google_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_google_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Images
                  <p>Allow/Block Google Images crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_images" id="ultimatecrawloptimizer_change_google_images_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_google_images, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_images_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_images" id="ultimatecrawloptimizer_change_google_images_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_google_images, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_images_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_images" id="ultimatecrawloptimizer_change_google_images_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_google_images, true) ?> <?php echo (!$ultimatecrawloptimizer_change_google_images) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_google_images_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Media Partners
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_media_partners" id="ultimatecrawloptimizer_change_google_media_partners_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_google_media_partners, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_media_partners_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_media_partners" id="ultimatecrawloptimizer_change_google_media_partners_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_google_media_partners, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_media_partners_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_media_partners" id="ultimatecrawloptimizer_change_google_media_partners_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_google_media_partners, true) ?> <?php echo (!$ultimatecrawloptimizer_change_google_media_partners) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_google_media_partners_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google AdsBot
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_adsbot" id="ultimatecrawloptimizer_change_google_adsbot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_google_adsbot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_adsbot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_adsbot" id="ultimatecrawloptimizer_change_google_adsbot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_google_adsbot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_adsbot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_adsbot" id="ultimatecrawloptimizer_change_google_adsbot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_google_adsbot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_google_adsbot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_google_adsbot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Google Mobile
                  <p>Allow/Block Google Mobile crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_mobile" id="ultimatecrawloptimizer_change_google_mobile_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_google_mobile, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_mobile_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_mobile" id="ultimatecrawloptimizer_change_google_mobile_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_google_mobile, true) ?> />
                    <label for="ultimatecrawloptimizer_change_google_mobile_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_google_mobile" id="ultimatecrawloptimizer_change_google_mobile_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_google_mobile, true) ?> <?php echo (!$ultimatecrawloptimizer_change_google_mobile) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_google_mobile_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Bing Bot
                  <p>Allow/Block Bing Bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_bing_bot" id="ultimatecrawloptimizer_change_bing_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_bing_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_bing_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_bing_bot" id="ultimatecrawloptimizer_change_bing_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_bing_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_bing_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_bing_bot" id="ultimatecrawloptimizer_change_bing_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_bing_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_bing_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_bing_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  MSN Bot
                  <p>Allow/Block MSNBot Media crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_msn_bot" id="ultimatecrawloptimizer_change_msn_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_msn_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_msn_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_msn_bot" id="ultimatecrawloptimizer_change_msn_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_msn_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_msn_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_msn_bot" id="ultimatecrawloptimizer_change_msn_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_msn_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_msn_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_msn_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  MSNBot Media
                  <p>Allow/Block MSNBot Media crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_msn_bot_media" id="ultimatecrawloptimizer_change_msn_bot_media_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_msn_bot_media, true) ?> />
                    <label for="ultimatecrawloptimizer_change_msn_bot_media_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_msn_bot_media" id="ultimatecrawloptimizer_change_msn_bot_media_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_msn_bot_media, true) ?> />
                    <label for="ultimatecrawloptimizer_change_msn_bot_media_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_msn_bot_media" id="ultimatecrawloptimizer_change_msn_bot_media_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_msn_bot_media, true) ?> <?php echo (!$ultimatecrawloptimizer_change_msn_bot_media) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_msn_bot_media_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Apple bot
                  <p>Allow/Block Apple bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_apple_bot" id="ultimatecrawloptimizer_change_apple_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_apple_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_apple_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_apple_bot" id="ultimatecrawloptimizer_change_apple_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_apple_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_apple_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_apple_bot" id="ultimatecrawloptimizer_change_apple_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_apple_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_apple_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_apple_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yandex Bot
                  <p>Allow/Block Yandex Bot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yandex_bot" id="ultimatecrawloptimizer_change_yandex_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_yandex_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_yandex_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yandex_bot" id="ultimatecrawloptimizer_change_yandex_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_yandex_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_yandex_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yandex_bot" id="ultimatecrawloptimizer_change_yandex_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_yandex_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_yandex_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_yandex_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yandex Images
                  <p>Allow/Block Yandex Images crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yandex_images" id="ultimatecrawloptimizer_change_yandex_images_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_yandex_images, true) ?> />
                    <label for="ultimatecrawloptimizer_change_yandex_images_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yandex_images" id="ultimatecrawloptimizer_change_yandex_images_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_yandex_images, true) ?> />
                    <label for="ultimatecrawloptimizer_change_yandex_images_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yandex_images" id="ultimatecrawloptimizer_change_yandex_images_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_yandex_images, true) ?> <?php echo (!$ultimatecrawloptimizer_change_yandex_images) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_yandex_images_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Yahoo Search (Slurp bot)
                  <p>Allow/Block Yahoo Search (Slurp bot) crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yahoo_bot" id="ultimatecrawloptimizer_change_yahoo_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_yahoo_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_yahoo_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yahoo_bot" id="ultimatecrawloptimizer_change_yahoo_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_yahoo_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_yahoo_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_yahoo_bot" id="ultimatecrawloptimizer_change_yahoo_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_yahoo_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_yahoo_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_yahoo_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  DuckDuckGo Bot
                  <p>Allow/Block DuckDuckGo crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_duckduckgo_bot" id="ultimatecrawloptimizer_change_duckduckgo_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_duckduckgo_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_duckduckgo_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_duckduckgo_bot" id="ultimatecrawloptimizer_change_duckduckgo_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_duckduckgo_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_duckduckgo_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_duckduckgo_bot" id="ultimatecrawloptimizer_change_duckduckgo_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_duckduckgo_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_duckduckgo_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_duckduckgo_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Qwant
                  <p>Allow/Block Qwant crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_qwant_bot" id="ultimatecrawloptimizer_change_qwant_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_qwant_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_qwant_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_qwant_bot" id="ultimatecrawloptimizer_change_qwant_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_qwant_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_qwant_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_qwant_bot" id="ultimatecrawloptimizer_change_qwant_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_qwant_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_qwant_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_qwant_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Baidu/Sogou/Soso/Youdao - Chinese search
                  <p>Allow/Block Baidu,Sogou,Soso,Youdao crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_baidu_bot" id="ultimatecrawloptimizer_change_baidu_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_baidu_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_baidu_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_baidu_bot" id="ultimatecrawloptimizer_change_baidu_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_baidu_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_baidu_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_baidu_bot" id="ultimatecrawloptimizer_change_baidu_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_baidu_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_baidu_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_baidu_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Naverbot - South Korean Search Engine
                  <p>Allow/Block Naverbot crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_naver_bot" id="ultimatecrawloptimizer_change_naver_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_naver_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_naver_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_naver_bot" id="ultimatecrawloptimizer_change_naver_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_naver_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_naver_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_naver_bot" id="ultimatecrawloptimizer_change_naver_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_naver_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_naver_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_naver_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Seznam - Czech Search Engine
                  <p>Allow/Block Seznam crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_seznam_bot" id="ultimatecrawloptimizer_change_seznam_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_seznam_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_seznam_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_seznam_bot" id="ultimatecrawloptimizer_change_seznam_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_seznam_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_seznam_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_seznam_bot" id="ultimatecrawloptimizer_change_seznam_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_seznam_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_seznam_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_seznam_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>


      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Social Media Crawlers</h3>
          <p>The social media crawler crawls a website to scans the website and collect information about its content and structure, specifically for the purpose of generating preview snippets or preview cards to be displayed on social media platforms when a link to the website is shared. These preview snippets usually include a title, description, and an image, and are intended to provide a quick preview of the website's content to social media users, encouraging them to click through to the website.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Facebook:
                  <p>
                    Allow/Block Facebook crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_facebook_bot" id="ultimatecrawloptimizer_change_facebook_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_facebook_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_facebook_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_facebook_bot" id="ultimatecrawloptimizer_change_facebook_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_facebook_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_facebook_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_facebook_bot" id="ultimatecrawloptimizer_change_facebook_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_facebook_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_facebook_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_facebook_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Instagram:
                  <p>
                    Allow/Block Instagram crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_instagram_bot" id="ultimatecrawloptimizer_change_instagram_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_instagram_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_instagram_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_instagram_bot" id="ultimatecrawloptimizer_change_instagram_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_instagram_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_instagram_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_instagram_bot" id="ultimatecrawloptimizer_change_instagram_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_instagram_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_instagram_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_instagram_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Whatsapp:
                  <p>
                    Allow/Block Whatsapp crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_whatsapp_bot" id="ultimatecrawloptimizer_change_whatsapp_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_whatsapp_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_whatsapp_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_whatsapp_bot" id="ultimatecrawloptimizer_change_whatsapp_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_whatsapp_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_whatsapp_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_whatsapp_bot" id="ultimatecrawloptimizer_change_whatsapp_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_whatsapp_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_whatsapp_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_whatsapp_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Telegram:
                  <p>
                    Allow/Block Telegram crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_telegram_bot" id="ultimatecrawloptimizer_change_telegram_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_telegram_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_telegram_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_telegram_bot" id="ultimatecrawloptimizer_change_telegram_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_telegram_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_telegram_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_telegram_bot" id="ultimatecrawloptimizer_change_telegram_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_telegram_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_telegram_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_telegram_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Twitter:
                  <p>
                    Allow/Block Twitter crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_twitter_bot" id="ultimatecrawloptimizer_change_twitter_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_twitter_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_twitter_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_twitter_bot" id="ultimatecrawloptimizer_change_twitter_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_twitter_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_twitter_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_twitter_bot" id="ultimatecrawloptimizer_change_twitter_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_twitter_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_twitter_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_twitter_bot_3">Disable</label>
                  </div>
                </td>
              </tr>

              <tr>
                <th scope="row">
                  LinkedIn
                  <p>Allow/Block Linkedin crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_linkedin_bot" id="ultimatecrawloptimizer_change_linkedin_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_linkedin_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_linkedin_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_linkedin_bot" id="ultimatecrawloptimizer_change_linkedin_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_linkedin_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_linkedin_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_linkedin_bot" id="ultimatecrawloptimizer_change_linkedin_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_linkedin_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_linkedin_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_linkedin_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Pinterest
                  <p>
                    Allow/Block Pinterest crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_pinterest_bot" id="ultimatecrawloptimizer_change_pinterest_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_pinterest_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_pinterest_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_pinterest_bot" id="ultimatecrawloptimizer_change_pinterest_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_pinterest_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_pinterest_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_pinterest_bot" id="ultimatecrawloptimizer_change_pinterest_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_pinterest_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_pinterest_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_pinterest_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Discord
                  <p>
                    Allow/Block Discord crawler from accessing your site.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_discord_bot" id="ultimatecrawloptimizer_change_discord_bot_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_discord_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_discord_bot_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_discord_bot" id="ultimatecrawloptimizer_change_discord_bot_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_discord_bot, true) ?> />
                    <label for="ultimatecrawloptimizer_change_discord_bot_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_discord_bot" id="ultimatecrawloptimizer_change_discord_bot_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_discord_bot, true) ?> <?php echo (!$ultimatecrawloptimizer_change_discord_bot) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_discord_bot_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Image Crawlability</h3>
          <p>The robots.txt file can also be used to control crawlability of specific image file types, such as .webp, .jpg, .png, and .gif. This can be useful if a website owner wants to only allow a specific set of image file types to be crawled and indexed by search engines and other crawlers.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  .Webp Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .webp images on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_webp" id="ultimatecrawloptimizer_change_webp_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_webp, true) ?> />
                    <label for="ultimatecrawloptimizer_change_webp_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_webp" id="ultimatecrawloptimizer_change_webp_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_webp, true) ?> />
                    <label for="ultimatecrawloptimizer_change_webp_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_webp" id="ultimatecrawloptimizer_change_webp_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_webp, true) ?> <?php echo (!$ultimatecrawloptimizer_change_webp) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_webp_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Jpg Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Jpg images on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_jpg" id="ultimatecrawloptimizer_change_jpg_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_jpg, true) ?> />
                    <label for="ultimatecrawloptimizer_change_jpg_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_jpg" id="ultimatecrawloptimizer_change_jpg_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_jpg, true) ?> />
                    <label for="ultimatecrawloptimizer_change_jpg_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_jpg" id="ultimatecrawloptimizer_change_jpg_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_jpg, true) ?> <?php echo (!$ultimatecrawloptimizer_change_jpg) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_jpg_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Png Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Png images on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_png" id="ultimatecrawloptimizer_change_png_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_png, true) ?> />
                    <label for="ultimatecrawloptimizer_change_png_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_png" id="ultimatecrawloptimizer_change_png_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_png, true) ?> />
                    <label for="ultimatecrawloptimizer_change_png_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_png" id="ultimatecrawloptimizer_change_png_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_png, true) ?> <?php echo (!$ultimatecrawloptimizer_change_png) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_png_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Gif Images:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Gif images on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_gif" id="ultimatecrawloptimizer_change_gif_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_gif, true) ?> />
                    <label for="ultimatecrawloptimizer_change_gif_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_gif" id="ultimatecrawloptimizer_change_gif_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_gif, true) ?> />
                    <label for="ultimatecrawloptimizer_change_gif_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_gif" id="ultimatecrawloptimizer_change_gif_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_gif, true) ?> <?php echo (!$ultimatecrawloptimizer_change_gif) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_gif_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Files Crawlability</h3>
          <p>The crawlability of .pdf, .docx, .html, and .php files on a website can be controlled using the robots.txt file by specifying the "Allow" or "Disallow" rules for those file types.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  .PDF Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .PDF files on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_pdf" id="ultimatecrawloptimizer_change_pdf_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_pdf, true) ?> />
                    <label for="ultimatecrawloptimizer_change_pdf_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_pdf" id="ultimatecrawloptimizer_change_pdf_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_pdf, true) ?> />
                    <label for="ultimatecrawloptimizer_change_pdf_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_pdf" id="ultimatecrawloptimizer_change_pdf_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_pdf, true) ?> <?php echo (!$ultimatecrawloptimizer_change_pdf) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_pdf_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .DOCX Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .DOCX files on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_docx" id="ultimatecrawloptimizer_change_docx_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_docx, true) ?> />
                    <label for="ultimatecrawloptimizer_change_docx_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_docx" id="ultimatecrawloptimizer_change_docx_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_docx, true) ?> />
                    <label for="ultimatecrawloptimizer_change_docx_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_docx" id="ultimatecrawloptimizer_change_docx_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_docx, true) ?> <?php echo (!$ultimatecrawloptimizer_change_docx) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_docx_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .Html Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .Html files on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_html" id="ultimatecrawloptimizer_change_html_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_html, true) ?> />
                    <label for="ultimatecrawloptimizer_change_html_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_html" id="ultimatecrawloptimizer_change_html_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_html, true) ?> />
                    <label for="ultimatecrawloptimizer_change_html_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_html" id="ultimatecrawloptimizer_change_html_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_html, true) ?> <?php echo (!$ultimatecrawloptimizer_change_html) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_html_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  .PHP Files:
                  <p>
                    The robots.txt file will be updated to block or allow crawling of .PHP files on a website.
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_php" id="ultimatecrawloptimizer_change_php_1" value="1" <? checked(1, $ultimatecrawloptimizer_change_php, true) ?> />
                    <label for="ultimatecrawloptimizer_change_php_1">Allow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_php" id="ultimatecrawloptimizer_change_php_2" value="2" <? checked(2, $ultimatecrawloptimizer_change_php, true) ?> />
                    <label for="ultimatecrawloptimizer_change_php_2">Disallow</label>
                    <input type="radio" onclick="searchEngineCrawlers(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_change_php" id="ultimatecrawloptimizer_change_php_3" value="3" <? checked(3, $ultimatecrawloptimizer_change_php, true) ?> <?php echo (!$ultimatecrawloptimizer_change_php) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_change_php_3">Disable</label>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Block Bad Bots</h3>
          <p>Blocking bad bots can provide several benefits for your website's security, performance, and analytics. By blocking bad bots that can cause harm to your website through scraping, spamming, and attacks, you can protect your website and ensure stability. Additionally, blocking bad bots can conserve bandwidth and improve website speed, provide accurate website analytics data, and reduce server load to ensure reliability.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Block Bad Bots
                  <p>Block upto 100 Bad Bots From accessing Your Website to save server resources<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_scrappers" id="ultimatecrawloptimizer_block_scrappers" value="1" <?= ($ultimatecrawloptimizer_block_scrappers ? ' checked' : '') ?> onclick="change_robots_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      
      <div class="custom-seo-settings-box">
        <p class="submit"><input type="submit" name="submit" class="button button-primary" value="Save Changes" /></p>
      </div>
    </form>
  </div>
<?php
}