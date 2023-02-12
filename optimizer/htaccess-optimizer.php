<?php
function ultimatecrawloptimizer_settings_htaccess_page()
{
  if (isset($_POST['htaccess_content'])) {
    file_put_contents(ABSPATH . '.htaccess', stripslashes($_POST['htaccess_content']));
    // Update the state of the checkbox in the database
    update_option('ultimatecrawloptimizer_theme_filter_ip', isset($_POST['ultimatecrawloptimizer_theme_filter_ip']));
    update_option('ultimatecrawloptimizer_block_india', isset($_POST['ultimatecrawloptimizer_block_india']));
    update_option('ultimatecrawloptimizer_bangladesh', isset($_POST['ultimatecrawloptimizer_bangladesh']));
    update_option('ultimatecrawloptimizer_block_pakistan', isset($_POST['ultimatecrawloptimizer_block_pakistan']));
    update_option('ultimatecrawloptimizer_enable_gzip', isset($_POST['ultimatecrawloptimizer_enable_gzip']));
    update_option('ultimatecrawloptimizer_enable_trailing', isset($_POST['ultimatecrawloptimizer_enable_trailing']));
    update_option('ultimatecrawloptimizer_redirect_feed', isset($_POST['ultimatecrawloptimizer_redirect_feed']));
    update_option('ultimatecrawloptimizer_enable_caching', isset($_POST['ultimatecrawloptimizer_enable_caching']));
    update_option('ultimatecrawloptimizer_enable_querystrings', isset($_POST['ultimatecrawloptimizer_enable_querystrings']));
    update_option('ultimatecrawloptimizer_disable_xmlrpc', isset($_POST['ultimatecrawloptimizer_disable_xmlrpc']));
    update_option('ultimatecrawloptimizer_enable_securityheaders', isset($_POST['ultimatecrawloptimizer_enable_securityheaders']));
    update_option('ultimatecrawloptimizer_disable_directorybrowsing', isset($_POST['ultimatecrawloptimizer_disable_directorybrowsing']));
    update_option('ultimatecrawloptimizer_enable_httpsredirect', isset($_POST['ultimatecrawloptimizer_enable_httpsredirect']));
    update_option('ultimatecrawloptimizer_disable_uploads_php', isset($_POST['ultimatecrawloptimizer_disable_uploads_php']));
    update_option('ultimatecrawloptimizer_disable_includes_php', isset($_POST['ultimatecrawloptimizer_disable_includes_php']));
    update_option('ultimatecrawloptimizer_disable_wpcontent_php', isset($_POST['ultimatecrawloptimizer_disable_wpcontent_php']));
    update_option('ultimatecrawloptimizer_disable_user_enumeration', isset($_POST['ultimatecrawloptimizer_disable_user_enumeration']));
    update_option('ultimatecrawloptimizer_disable_plugin_theme_editor', isset($_POST['ultimatecrawloptimizer_disable_plugin_theme_editor']));
    update_option('ultimatecrawloptimizer_prevent_exposed_login_feedback', isset($_POST['ultimatecrawloptimizer_prevent_exposed_login_feedback']));
    update_option('ultimatecrawloptimizer_disable_mixed_content', isset($_POST['ultimatecrawloptimizer_disable_mixed_content']));

if (isset($_POST['ultimatecrawloptimizer_enable_trailing'])) update_option('ultimatecrawloptimizer_enable_trailing', $_POST['ultimatecrawloptimizer_enable_trailing']);
  }

  $htaccess_content = file_get_contents(ABSPATH . '.htaccess');
  $ultimatecrawloptimizer_theme_filter_ip = get_option('ultimatecrawloptimizer_theme_filter_ip', false);
  $ultimatecrawloptimizer_block_india = get_option('ultimatecrawloptimizer_block_india', false);
  $ultimatecrawloptimizer_bangladesh = get_option('ultimatecrawloptimizer_bangladesh', false);
  $ultimatecrawloptimizer_block_pakistan = get_option('ultimatecrawloptimizer_block_pakistan', false);
  $ultimatecrawloptimizer_enable_gzip = get_option('ultimatecrawloptimizer_enable_gzip', false);
  $ultimatecrawloptimizer_redirect_feed = get_option('ultimatecrawloptimizer_redirect_feed', false);
  $ultimatecrawloptimizer_enable_trailing = get_option('ultimatecrawloptimizer_enable_trailing', false);
  $ultimatecrawloptimizer_enable_caching = get_option('ultimatecrawloptimizer_enable_caching', false);
  $ultimatecrawloptimizer_enable_querystrings = get_option('ultimatecrawloptimizer_enable_querystrings', false);
  $ultimatecrawloptimizer_disable_directorybrowsing = get_option('ultimatecrawloptimizer_disable_directorybrowsing', false);
  $ultimatecrawloptimizer_enable_securityheaders = get_option('ultimatecrawloptimizer_enable_securityheaders', false);
  $ultimatecrawloptimizer_enable_httpsredirect = get_option('ultimatecrawloptimizer_enable_httpsredirect', false);
  $ultimatecrawloptimizer_disable_xmlrpc = get_option('ultimatecrawloptimizer_disable_xmlrpc', false);
  $ultimatecrawloptimizer_disable_uploads_php = get_option('ultimatecrawloptimizer_disable_uploads_php', false);
  $ultimatecrawloptimizer_disable_includes_php = get_option('ultimatecrawloptimizer_disable_includes_php', false);
  $ultimatecrawloptimizer_disable_wpcontent_php = get_option('ultimatecrawloptimizer_disable_wpcontent_php', false);
  $ultimatecrawloptimizer_disable_user_enumeration = get_option('ultimatecrawloptimizer_disable_user_enumeration', false);
  $ultimatecrawloptimizer_disable_plugin_theme_editor = get_option('ultimatecrawloptimizer_disable_plugin_theme_editor', false);
  $ultimatecrawloptimizer_prevent_exposed_login_feedback = get_option('ultimatecrawloptimizer_prevent_exposed_login_feedback', false);
  $ultimatecrawloptimizer_disable_mixed_content = get_option('ultimatecrawloptimizer_disable_mixed_content', false);
?>

  <div class="wrap custom-seo-settings robots-optimizaiton">
    <h1 class="custom-seo-settings-title">.Htaccess Optimization</h1>
    <form method="post" action="">
      <div class="custom-seo-settings-box sticky-textarea">
        <textarea id="htaccess_content" name="htaccess_content"><?php echo $htaccess_content ?></textarea>
      </div>

      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Block Countries</h3>
          <p>Blocking countries in .htaccess is a method used to restrict access to a website from specific countries. This is usually done for security reasons, such as to prevent hackers or malicious actors from accessing a site, or for compliance with laws and regulations. In some cases, a site owner may also block countries to restrict access to their content, for example, to comply with copyright laws. To block countries, the website's .htaccess file is modified to include specific rules that deny access from the desired countries based on their IP addresses.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Filter Your IP Address
                  <p>Filter Your IP Address when you access from blocked countries<br />
                  </p>
                  <?php
                  $client_ip = $_SERVER['REMOTE_ADDR'];
                  echo "Your IP address is: " . $client_ip;
                  ?>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_theme_filter_ip" id="ultimatecrawloptimizer_theme_filter_ip" value="1" <?= ($ultimatecrawloptimizer_theme_filter_ip ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block India
                  <p>Block Indian Traffic by adding following ip addresses in .Htaccess file<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_india" id="ultimatecrawloptimizer_block_india" value="1" <?= ($ultimatecrawloptimizer_block_india ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked);document.getElementById('htaccess_content').value = document.getElementById('htaccess_content').value.replaceAll('Allow from ' + '<?php echo $_SERVER['REMOTE_ADDR']; ?>', ''); if(document.getElementById('ultimatecrawloptimizer_theme_filter_ip').checked) {document.getElementById('htaccess_content').value += '\nAllow from ' + '<?php echo $_SERVER['REMOTE_ADDR']; ?>';}"/>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Bangladesh
                  <p>Block Indian Traffic by adding following ip addresses in .Htaccess file<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_bangladesh" id="ultimatecrawloptimizer_bangladesh" value="1" <?= ($ultimatecrawloptimizer_bangladesh ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked);document.getElementById('htaccess_content').value = document.getElementById('htaccess_content').value.replaceAll('Allow from ' + '<?php echo $_SERVER['REMOTE_ADDR']; ?>', ''); if(document.getElementById('ultimatecrawloptimizer_theme_filter_ip').checked) {document.getElementById('htaccess_content').value += '\nAllow from ' + '<?php echo $_SERVER['REMOTE_ADDR']; ?>';}"/>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block Pakistan
                  <p>Block Indian Traffic by adding following ip addresses in .Htaccess file<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_block_pakistan" id="ultimatecrawloptimizer_block_pakistan" value="1" <?= ($ultimatecrawloptimizer_block_pakistan ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked);document.getElementById('htaccess_content').value = document.getElementById('htaccess_content').value.replaceAll('Allow from ' + '<?php echo $_SERVER['REMOTE_ADDR']; ?>', ''); if(document.getElementById('ultimatecrawloptimizer_theme_filter_ip').checked) {document.getElementById('htaccess_content').value += '\nAllow from ' + '<?php echo $_SERVER['REMOTE_ADDR']; ?>';}"/>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Speed Optimizations</h3>
          <p>Optimizing the .htaccess file is a crucial step in improving the speed of a website. One optimization is to enable Gzip compression, which reduces the amount of data sent from the server to the client. This results in faster page load times for users. Another optimization is to enable browser caching. This allows the client's browser to store elements of the website, such as images, CSS and JavaScript files, so that they can be reused on subsequent page loads. This improves the overall speed of the website. Lastly, removing query strings from static resources can also improve caching and speed. By doing so, you can prevent certain proxy caches from not caching a page, allowing for a faster and more efficient browsing experience for users.</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Enable Gzip Compression
                  <p>Enable Gzip compression in .htaccess to reduce data sent from server and improve page load times.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_enable_gzip" id="ultimatecrawloptimizer_enable_gzip" value="1" <?= ($ultimatecrawloptimizer_enable_gzip ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Enable Browser Caching
                  <p>Enable browser caching in .htaccess to allow client's browser to reuse website elements for faster page loads.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_enable_caching" id="ultimatecrawloptimizer_enable_caching" value="1" <?= ($ultimatecrawloptimizer_enable_caching ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Enable Remove Query Strings from Static Resources
                  <p>Remove query strings from static resources to improve caching and speed.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_enable_querystrings" id="ultimatecrawloptimizer_enable_querystrings" value="1" <?= ($ultimatecrawloptimizer_enable_querystrings ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="custom-seo-settings-box">
        <div class="custom-seo-settings-box__column">
          <h3>Security Optimizations</h3>
          <p>To secure your website, you can use .htaccess file for security optimizations. These include: Cross-Site Scripting (XSS) protection by adding "Content-Security-Policy" header to allow only same-domain scripts, HTTPS Strict Transport Security (HSTS) by adding "Strict-Transport-Security" header, Frame Busting by adding "X-Frame-Options" header with value "DENY" and Referrer Policy by adding "Referrer-Policy" header with value "no-referrer-when-downgrade".</p>
        </div>
        <div class="custom-seo-settings-box__column">
          <table class="form-table">
            <tbody>
              <tr>
                <th scope="row">
                  Disable Directory Browsing
                  <p>Disabling directory browsing in .htaccess prevents unauthorized access to the directory structure of a website, making it more secure. It also prevents sensitive information from being displayed to the public.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_directorybrowsing" id="ultimatecrawloptimizer_disable_directorybrowsing" value="1" <?= ($ultimatecrawloptimizer_disable_directorybrowsing ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Trailing Slash
                  <p>You can redirect to either trailing slash or non trailing slash structure using .htaccess file
                  </p>
                </th>
                <td>
                  <div class="custom-seo-settings-box__radio-btns">
                    <input type="radio" onclick="change_htaccess_text(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_enable_trailing" id="ultimatecrawloptimizer_enable_trailing_1" value="1" <? checked(1, $ultimatecrawloptimizer_enable_trailing, true) ?> />
                    <label for="ultimatecrawloptimizer_enable_trailing_1">Trailing Slash</label>
                    <input type="radio" onclick="change_htaccess_text(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_enable_trailing" id="ultimatecrawloptimizer_enable_trailing_2" value="2" <? checked(2, $ultimatecrawloptimizer_enable_trailing, true) ?> />
                    <label for="ultimatecrawloptimizer_enable_trailing_2">No /</label>
                    <input type="radio" onclick="change_htaccess_text(this.getAttribute('name'),this.getAttribute('value'))" name="ultimatecrawloptimizer_enable_trailing" id="ultimatecrawloptimizer_enable_trailing_3" value="3" <? checked(3, $ultimatecrawloptimizer_enable_trailing, true) ?> <?php echo (!$ultimatecrawloptimizer_enable_trailing) ? 'checked' : '' ?> />
                    <label for="ultimatecrawloptimizer_enable_trailing_3">Disable</label>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Add Security Headers
                  <p>Add Security Headers to prevent attacks on website.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_enable_securityheaders" id="ultimatecrawloptimizer_enable_securityheaders" value="1" <?= ($ultimatecrawloptimizer_enable_securityheaders ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Enable HTTPS Redirect
                  <p>Enable HTTPS Redirect by adding preferred version.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_enable_httpsredirect" id="ultimatecrawloptimizer_enable_httpsredirect" value="1" <?= ($ultimatecrawloptimizer_enable_httpsredirect ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Disable XMLRPC
                  <p>Disabling XMLRPC can improve the security of a WordPress site as it eliminates a potential attack vector for malicious actors. XMLRPC is also known to cause performance issues and slowdowns on some websites.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_xmlrpc" id="ultimatecrawloptimizer_disable_xmlrpc" value="1" <?= ($ultimatecrawloptimizer_disable_xmlrpc ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block PHP Files in Uploads Directory
                  <p>By blocking all PHP files from being executed in the uploads directory, helping to secure your website by preventing the execution of malicious files that may have been uploaded to the directory.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_uploads_php" id="ultimatecrawloptimizer_disable_uploads_php" value="1" <?= ($ultimatecrawloptimizer_disable_uploads_php ? ' checked' : '') ?> />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block PHP Files in WP-CONTENT Directory
                  <p>By blocking all PHP files from being executed in the wp-content directory, helping to secure your website by preventing the execution of malicious files that may have been uploaded to the directory.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_wpcontent_php" id="ultimatecrawloptimizer_disable_wpcontent_php" value="1" <?= ($ultimatecrawloptimizer_disable_wpcontent_php ? ' checked' : '') ?> />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Block PHP Files in WP-INCLUDES Directory
                  <p>By blocking all PHP files from being executed in the wp-includes directory, helping to secure your website by preventing the execution of malicious files that may have been uploaded to the directory.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_includes_php" id="ultimatecrawloptimizer_disable_includes_php" value="1" <?= ($ultimatecrawloptimizer_disable_includes_php ? ' checked' : '') ?> />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Disable User Enumeration
                  <p>By disabling user enumeration in WordPress, you reduce the amount of information that is made available to potential attackers, making it more difficult for them to target specific users and compromise their accounts. This can help to improve the overall security of your website.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_user_enumeration" id="ultimatecrawloptimizer_disable_user_enumeration" value="1" <?= ($ultimatecrawloptimizer_disable_user_enumeration ? ' checked' : '') ?> onclick="change_htaccess_text(this.getAttribute('id') , this.checked)" />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Disable Plugin and Theme Editor
                  <p>This helps to improve the security of your WordPress website by preventing unauthorized users from making changes to your plugins and themes through the editor.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_plugin_theme_editor" id="ultimatecrawloptimizer_disable_plugin_theme_editor" value="1" <?= ($ultimatecrawloptimizer_disable_plugin_theme_editor ? ' checked' : '') ?> />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Prevent Exposed login feedback
                  <p>Exposed login feedback is a security issue in which a user is presented with a message indicating the status of their login attempt on a website's login page.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_prevent_exposed_login_feedback" id="ultimatecrawloptimizer_prevent_exposed_login_feedback" value="1" <?= ($ultimatecrawloptimizer_prevent_exposed_login_feedback ? ' checked' : '') ?> />
                </td>
              </tr>
              <tr>
                <th scope="row">
                  Mixed content fixer
                  <p>Mixed content occurs when a web page is loaded over a secure HTTPS connection, but some of the resources (such as images, scripts, or stylesheets) are served over an insecure HTTP connection. This creates a security vulnerability as the insecure resources can be intercepted and modified by an attacker.<br />
                  </p>
                </th>
                <td>
                  <input type="checkbox" name="ultimatecrawloptimizer_disable_mixed_content" id="ultimatecrawloptimizer_disable_mixed_content" value="1" <?= ($ultimatecrawloptimizer_disable_mixed_content ? ' checked' : '') ?> />
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