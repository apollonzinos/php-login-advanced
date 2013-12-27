## A PHP login script (ADVANCED VERSION)

A simple, but secure PHP login script. Similar to minimal version, but much more features: PDO, Register, login, logout,
email verification, password reset, edit user data, gravatars, captchas, remember me / stay logged in cookies,
"remember me" supports parallel login from multiple devices, login with email, i18n/internationalization,
mail sending via PHPMailer (SMTP or PHP's mail() function/linux sendmail). Uses the ultra-modern & future-proof PHP 5.5.
BLOWFISH hashing/salting functions (includes the official PHP 5.3 & PHP 5.4 compatibility pack, which makes those
functions available in those versions too).

Follow the project on **[Twitter](https://twitter.com/simplephplogin)**,
**[Facebook](https://www.facebook.com/pages/PHP-Login-Script/461306677235868)** or
**[Google+](https://plus.google.com/104110071861201951660)** and have a look on the official support blog
**[Dev Metal](http://www.dev-metal.com)**. Ask questions in the [Official Support Forum](http://109.75.177.79/forum/).

**This script is part of the php-login project, a collection of 4 different login scripts**.
See [php-login.net](http://www.php-login.net) for more info.

*Please note: The entire project is currently in a restructuring process,
look into https://github.com/panique/php-login for the latest stable version and install tutorials.*

*Please also note: This version is not maintained anymore. The php-login project will focus on developing the
[Professional MVC Version](https://github.com/panique/php-login) and highly recommends you to also use that version.*

1. **One-file version:** Full login script in one file. Uses a one-file SQLite database (no MySQL needed) and PDO.
   Features: Register, login, logout.
   https://github.com/panique/php-login-one-file
2. **Minimal version** All the basic functions in a clean file structure, uses MySQL and mysqli.
   Register, login, logout.
   https://github.com/panique/php-login-minimal
3. **Advanced version** Similar to the minimal version, but full of features.
   Uses PDO, Captchas, mail sending via SMTP and much more.
   https://github.com/panique/php-login-advanced
4. **Professional version** Everything comes with a professional MVC framework structure, perfect for building
   real applications. Additional features like: URL rewriting, professional usage of controllers and actions, PDO, MySQL,
   mail sending via PHPMailer (SMTP or PHP's mail() function/linux sendmail), user profile pages, public user profiles,
   gravatars and local avatars, account upgrade/downgrade etc., login via Facebook, Composer integration, etc.
   https://github.com/panique/php-login

## Live-demo

Live demo **[here](http://php-login.net/demo3.html)**, live demo's phpinfo(). **[here](http://109.75.177.79:80/)**

## Requirements

- PHP 5.3.7+
- MySQL 5 database (please use a modern version of MySQL (5.5, 5.6, 5.7) as very old versions have a exotic bug that
[makes PDO injections possible](http://stackoverflow.com/q/134099/1114320).
- activated PHP's GD graphic functions (the tutorial shows how)
- enabled OpenSSL module (the tutorial shows how)
- this version uses mail sending, so you need to have an **SMTP mail sending account** somewhere OR you know how to get
 **linux's sendmail** etc. to run. As it's nearly impossible to send real mails with PHP's mail() function (due to
 anti-spam blocking of nearly every major mail provider in the world) you should really use SMTP mail sending.

## Installation (quick setup)

* 1. create database *login* and table *users* via the SQL statements in the `_installation` folder.
* 2. in `config/config.php`, change mySQL user and password (*DB_USER* and *DB_PASS*).
* 3. in `config/config.php`, change *COOKIE_DOMAIN* to your domain name (and don't forget to put the dot in front of the domain!)
* 4. in `config/config.php`, change *COOKIE_SECRET_KEY* to a random string. this will make your cookies more secure
* 5. change the URL part of EMAIL_PASSWORDRESET_URL and EMAIL_VERIFICATION_URL in `config/config.php` to your URL! You need to provide the URL of your project here to link to your project from within
verification/password reset mails.
* 6. as this version uses email sending, you'll need to a) provide an SMTP account in the config OR b) install a mail server tool on your server.
Using a real SMTP provider (like SMTP2GO etc.) is highly recommended. Sending emails manually via mail() is something for hardcore admins.
Usually mails sent via mail() will never reach the receiver. Please also don't try weird Gmail setups, this can fail to a lot of reasons.
Get professional and send mails like mail should be sent. It's extremely cheap and works.

- To enable OpenSSL, do `sudo apt-get install openssl` (and restart the apache via `sudo service apache2 restart`)
- To enable PHP's GD graphic functions, do `sudo apt-get install php5-gd` (and restart the apache via `sudo service apache2 restart`)

## Installation (very detailed setup)

A very detailed guideline on how to install the script
[here in this blog post](http://www.dev-metal.com/install-php-login-nets-2-advanced-login-script-ubuntu/).

## Troubleshooting & useful stuff

Please use a real SMTP provider for sending mail. Using something like gmail.com or even trying to send mails via
mail() will bring you into a lot of problems (unless you really really know what you are doing). Sending mails is a
huge topic. But if you still want to use Gmail: Gmail is very popular as an SMTP mail sending service and would
work for smaller projects, but sometimes gmail.com will not send mails anymore, usually because of:

1. "SMTP Connect error": PHPMailer says "smtp login failed", but login is correct: Gmail.com thinks you are a spammer. You'll need to
"unlock" your application for gmail.com by logging into your gmail account via your browser, go to http://www.google.com/accounts/DisplayUnlockCaptcha
and then, within the next 10minutes, send an email via your app. Gmail will then white-list your app server.
Have a look here for full explanaition: https://support.google.com/mail/answer/14257?p=client_login&rd=1

2. "SMTP data quota exceeded": gmail blocks you because you have sent more than 500 mails per day (?) or because your users have provided
 too much fake email addresses. The only way to get around this is renting professional SMTP mail sending, prices are okay, 10.000 mails for $5.

## How this script works

If you look into the code and at the file/folder-structure everything should be self-explaining.

TODO: Can somebody create a written, recorded or info-graphic-like explanation on how this php-login script works, inside out ?

*Please note: This version is not maintained anymore. The php-login project will focus on developing the
[Professional MVC Version](https://github.com/panique/php-login) and highly recommends you to also use that version.*

## Useful links

- [How to use PDO](http://wiki.hashphp.org/PDO_Tutorial_for_MySQL_Developers)
- [A little guideline on how to use the PHP 5.5 password hashing functions and its "library plugin" based PHP 5.3 & 5.4 implementation](http://www.dev-metal.com/use-php-5-5-password-hashing-functions/)
- [How to setup latest version of PHP 5.5 on Ubuntu 12.04 LTS](http://www.dev-metal.com/how-to-setup-latest-version-of-php-5-5-on-ubuntu-12-04-lts/). Same for Debian 7.0 / 7.1:
- [How to setup latest version of PHP 5.5 on Debian Wheezy 7.0/7.1 (and how to fix the GPG key error)](http://www.dev-metal.com/setup-latest-version-php-5-5-debian-wheezy-7-07-1-fix-gpg-key-error/)
- [Notes on password & hashing salting in upcoming PHP versions (PHP 5.5.x & 5.6 etc.)](https://github.com/panique/php-login/wiki/Notes-on-password-&-hashing-salting-in-upcoming-PHP-versions-%28PHP-5.5.x-&-5.6-etc.%29)
- [Some basic "benchmarks" of all PHP hash/salt algorithms](https://github.com/panique/php-login/wiki/Which-hashing-&-salting-algorithm-should-be-used-%3F)

## Themes / User Interfaces / Styles

Bookmark the highly related partner-project "[php-login-styles](https://github.com/panique/php-login-styles)" which will
host beautiful themes for all the php-login versions. Currently this is only a placeholder, the project starts in 2014.

## License

Licensed under [MIT](http://www.opensource.org/licenses/mit-license.php). You can use this script for free for any
private or commercial projects.

## Contribute

Please commit only in *develop* branch. The *master* branch will always contain the stable version.

## Support / Donate

If you think this script is useful and saves you a lot of work, then think about supporting the project:

1. Rent your next server at [A2 Hosting](http://www.a2hosting.com/4471.html) or [DigitalOcean](https://www.digitalocean.com/?refcode=40d978532a20).
2. Donate via [PayPal](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=P5YLUK4MW3LDG)
   or [GitTip](https://www.gittip.com/Panique/)
3. Contribute to this project. Feel free to improve this project with your skills.

## Stats

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/panique/php-login-advanced/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
