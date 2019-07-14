# recaptcha
Sample project for use of reCaptcha

This project uses google reCaptcha 2.0 (I'm not a robot).

Steps:
1. Create your site and secret keys from https://www.google.com/recaptcha/admin/create
2. Put your site and secret keys in AppKeys.class.php
3. You have to put link to google recaptcha api.js in the scope whre you want to use the reCaptcha in form
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>  
4. Put <div class="g-recaptcha" data-sitekey="YOUR SITE KEY"></div> in the form.
5. You can find reCaptcha validation code in CRecaptcha.class.php
