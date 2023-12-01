<?php

if (!function_exists('add_action')) {
    die();
}
?>
<link rel="stylesheet" type="text/css" href="<?php echo plugin_dir_url(__FILE__); ?>style.css" media="all">
<div class="wrap">

  <h1>Corpus: AI-Powered Chatbot <span style="margin-left:5px;line-height: 12px; font-size: 12px; color: #999;">
      <?php echo 'v' . CORPUS_VERSION; ?>
    </span></h1>

  <p style="margin:5px 0">
    <!-- <span style="color: #999; margin:0 5px;">|</span> -->
    ★★★★★ Like this plugin? <a target="_blank" rel="noopener noreferrer"
      href="https://wordpress.org/support/plugin/<?php echo CORPUS_SLUG; ?>/reviews/?rate=5#new-post"
      title="THANK YOU for your support!">Please give it a 5-star rating »</a>
  </p>

  <div class="corpus-wrapper">
    <h2>Meet Corpus Chat</h2>
    <div class="corpus-icon">
      <svg enable-background="new 0 0 20 20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="m19.5 9.6c0-5.2-4.3-9.5-9.5-9.5s-9.5 4.3-9.5 9.5 4.3 9.5 9.5 9.5c1.6 0 3.2-.4 4.5-1.1.2-.1 1 .4 1.7 1 .6.5.9 1.1 1 .9.5-.6 1.3-3.6 1.5-4.3.3-.9.4-1.8.6-2.7.3-1.8.2-3.3.2-3.3zm-3.2 2.2s-2.4 3.4-6.3 3.4-6.3-3.4-6.3-3.4c-.1-.1-.1-.2-.1-.3 0-.3.2-.5.4-.5s.3.1.4.2c0 0 2.2 3 5.5 3s5.5-3 5.5-3c.1-.2.4-.3.6-.1.4.2.4.5.3.7z" fill="#368df6"/></svg>
    </div>
    <div>
      Corpus is a customer service chatbot powered by AI, designed to automate and streamline customer service operations. With Corpus, over 50% of customer support requests can be resolved instantly by providing timely responses to customer inquiries around the clock.
    </div>
    <div style="margin-top:8px">
      To get started, <a href="https://app.corpus.chat/auth/signup?plan=free" target="_blank"
      style="font-weight:600;white-space: nowrap;">sign up for a free Corpus account</a>, add your data, and activate the plugin.
    </div>
    <table style="margin-top:20px"><tr>
      <td><a href="https://x.com/corpuschathq" target="twitter" class="social" title="X">
        <svg fill="currentColor" viewBox="0 0 24 24" style="width:16px;height:16px;margin-right:8px;color:#999">
          <path d="m18.9 1h3.7l-8 9.3 9.4 12.7h-7.4l-5.8-7.7-6.6 7.7h-3.7l8.6-10-9.1-12h7.6l5.2 7zm-1.3 19.8h2l-13.1-17.7h-2.2z"></path>
        </svg>
      </a></td>
      <td><a href="https://youtube.com/@corpuschathq" target="youtube" class="social" title="Youtube">
        <svg fill="currentColor" viewBox="0 0 24 24" style="width:20px;height:20px;margin-right:8px;color:#999">
          <path clip-rule="evenodd" d="m21.4 4.1c1 .3 1.8 1.1 2.1 2.1.5 1.9.5 5.8.5 5.8s0 3.9-.5 5.8c-.3 1-1.1 1.8-2.1 2.1-1.9.5-9.4.5-9.4.5s-7.5 0-9.4-.5c-1-.3-1.8-1.1-2.1-2.1-.5-1.9-.5-5.8-.5-5.8s0-3.9.5-5.8c.3-1 1.1-1.8 2.1-2.1 1.9-.5 9.4-.5 9.4-.5s7.5 0 9.4.5zm-5.6 7.9-6.2 3.6v-7.2z" fill-rule="evenodd"></path>
        </svg>
      </a></td>
      <td><a href="https://tiktok.com/@corpuschathq" target="tiktok" class="social" title="Tiktok">
        <svg fill="currentColor" viewBox="0 0 24 24" style="width:16px;height:16px;margin-right:8px;color:#999">
          <path clip-rule="evenodd" d="m17 .1c.4 3.4 2.3 5.4 5.6 5.7v3.8c-1.9.2-3.6-.4-5.6-1.6v7.2c0 9.1-9.9 11.9-13.9 5.4-2.5-4.2-1-11.6 7.3-11.9v4c-.6.1-1.3.3-1.9.5-1.9.6-2.9 1.8-2.6 3.8.6 3.9 7.7 5.1 7.1-2.6v-14.3z" fill-rule="evenodd"></path>
        </svg>
      </a></td>
      <td><a href="https://instagram.com/corpuschathq" target="instagram" class="social" title="Instagram">
        <svg fill="currentColor" viewBox="0 0 24 24" style="width:16px;height:16px;margin-right:8px;color:#999">
          <path d="m12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.668.072 4.948c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.668-.014 4.948-.072c4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948s-.014-3.667-.072-4.947c-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
        </svg>
      </a></td>
    </tr></table>
  </div>

  <form method="post" action="options.php" class="corpus-wrapper">
    <h2>Plugin Settings</h2>
    <?php
    settings_fields('corpus_chatbot_id');
    do_settings_sections('corpus_chatbot_id');
    ?>
    <div class="corpus-help">
      Enter your Chatbot ID, public URL or dashboard URL.
      <a href="#"
        onclick="document.getElementById('corpus-extra-help').classList.toggle('corpus-hidden');this.innerHTML=this.innerHTML=='Show info'?'Hide info':'Show info'">Show
        info</a>
    </div>
    <div class="corpus-help corpus-hidden" id="corpus-extra-help">
      <strong>ⓘ</strong> To get your Chatbot ID, <a href="https://app.corpus.chat/dashboard"
        target="_blank"><strong>sign in to your account</strong></a>, click on the chatbot you want to use, and copy the
      ID from the browser address bar.
    </div>

    <?php submit_button('Save and activate &raquo;'); ?>

    <?php if (get_option('corpus_chatbot_id')): ?>
      <p><br><a style="color:inherit" href="https://app.corpus.chat/project/<?php echo get_option('corpus_chatbot_id'); ?>/widget" target="_blank">Manage your widget settings &raquo;</a></p>
    <?php endif; ?>


    <script>
      document.querySelector('input[name="corpus_chatbot_id"]').addEventListener('change', (e) => {
        const ele = e.target;
        if (ele.value.indexOf('https://app.corpus.chat/project/') > -1) {
          ele.value = ele.value.split('https://app.corpus.chat/project/')[1].split('/')[0];
          return;
        }
        if (ele.value.indexOf('.corpuschat.app') > -1) {
          ele.value = ele.value.split('.corpuschat.app')[0].replace('https://', '');
          return;
        }
      });
    </script>
  </form>

</div>
