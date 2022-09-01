install composer


Microsoft Windows [Version 10.0.10586]
(c) 2016 Microsoft Corporation. All rights reserved.

C:\Users\adel>cd c:\xampp\htdocs

c:\xampp\htdocs>composer global require laravel/installer
Changed current directory to C:/Users/adel/AppData/Roaming/Composer
Info from https://repo.packagist.org: #StandWithUkraine
Using version ^4.2 for laravel/installer
./composer.json has been created
Running composer update laravel/installer
Loading composer repositories with package information
Updating dependencies
Lock file operations: 13 installs, 0 updates, 0 removals
  - Locking laravel/installer (v4.2.16)
  - Locking psr/container (1.1.2)
  - Locking symfony/console (v5.4.12)
  - Locking symfony/deprecation-contracts (v2.5.2)
  - Locking symfony/polyfill-ctype (v1.26.0)
  - Locking symfony/polyfill-intl-grapheme (v1.26.0)
  - Locking symfony/polyfill-intl-normalizer (v1.26.0)
  - Locking symfony/polyfill-mbstring (v1.26.0)
  - Locking symfony/polyfill-php73 (v1.26.0)
  - Locking symfony/polyfill-php80 (v1.26.0)
  - Locking symfony/process (v5.4.11)
  - Locking symfony/service-contracts (v2.5.2)
  - Locking symfony/string (v5.4.12)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 13 installs, 0 updates, 0 removals
  - Downloading symfony/polyfill-php80 (v1.26.0)
  - Downloading symfony/process (v5.4.11)
  - Downloading symfony/polyfill-mbstring (v1.26.0)
  - Downloading symfony/polyfill-intl-normalizer (v1.26.0)
  - Downloading symfony/polyfill-intl-grapheme (v1.26.0)
  - Downloading symfony/polyfill-ctype (v1.26.0)
  - Downloading symfony/string (v5.4.12)
  - Downloading symfony/deprecation-contracts (v2.5.2)
  - Downloading psr/container (1.1.2)
  - Downloading symfony/service-contracts (v2.5.2)
  - Downloading symfony/polyfill-php73 (v1.26.0)
  - Downloading symfony/console (v5.4.12)
  - Downloading laravel/installer (v4.2.16)
  - Installing symfony/polyfill-php80 (v1.26.0): Extracting archive
  - Installing symfony/process (v5.4.11): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.26.0): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.26.0): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.26.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.26.0): Extracting archive
  - Installing symfony/string (v5.4.12): Extracting archive
  - Installing symfony/deprecation-contracts (v2.5.2): Extracting archive
  - Installing psr/container (1.1.2): Extracting archive
  - Installing symfony/service-contracts (v2.5.2): Extracting archive
  - Installing symfony/polyfill-php73 (v1.26.0): Extracting archive
  - Installing symfony/console (v5.4.12): Extracting archive
  - Installing laravel/installer (v4.2.16): Extracting archive
6 package suggestions were added by new dependencies, use `composer suggest` to see details.
Generating autoload files
11 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found

c:\xampp\htdocs>




Windows PowerShell
Copyright (C) 2015 Microsoft Corporation. All rights reserved.

PS C:\xampp\htdocs\siakad> composer update
Loading composer repositories with package information
Info from https://repo.packagist.org: #StandWithUkraine
Updating dependencies
Your requirements could not be resolved to an installable set of packages.

  Problem 1
    - Root composer.json requires php ^8.1.6 but your php version (7.4.29) does not satisfy that requirement.

PS C:\xampp\htdocs\siakad> composer update
Loading composer repositories with package information
Updating dependencies
Lock file operations: 116 installs, 0 updates, 0 removals
  - Locking beyondcode/laravel-dump-server (1.3.0)
  - Locking dnoegel/php-xdg-base-dir (v0.1.1)
  - Locking doctrine/cache (2.2.0)
  - Locking doctrine/dbal (2.13.9)
  - Locking doctrine/deprecations (v1.0.0)
  - Locking doctrine/event-manager (1.1.2)
  - Locking doctrine/inflector (1.4.4)
  - Locking doctrine/instantiator (1.4.1)
  - Locking doctrine/lexer (1.2.3)
  - Locking dragonmantank/cron-expression (v2.3.1)
  - Locking egulias/email-validator (2.1.25)
  - Locking erusev/parsedown (1.7.4)
  - Locking ezyang/htmlpurifier (v4.14.0)
  - Locking fideloper/proxy (4.4.2)
  - Locking filp/whoops (2.14.5)
  - Locking fzaninotto/faker (v1.9.2)
  - Locking guzzlehttp/guzzle (7.5.0)
  - Locking guzzlehttp/promises (1.5.2)
  - Locking guzzlehttp/psr7 (2.4.1)
  - Locking hamcrest/hamcrest-php (v2.0.1)
  - Locking intervention/image (2.7.2)
  - Locking laravel/framework (v5.8.38)
  - Locking laravel/tinker (v1.0.10)
  - Locking laravelcollective/html (v5.8.0)
  - Locking league/flysystem (1.1.9)
  - Locking league/fractal (0.19.2)
  - Locking league/mime-type-detection (1.11.0)
  - Locking maatwebsite/excel (3.1.40)
  - Locking maennchen/zipstream-php (2.2.1)
  - Locking markbaker/complex (3.0.1)
  - Locking markbaker/matrix (3.0.0)
  - Locking mockery/mockery (1.3.5)
  - Locking monolog/monolog (1.27.1)
  - Locking myclabs/deep-copy (1.11.0)
  - Locking myclabs/php-enum (1.8.4)
  - Locking nesbot/carbon (2.62.0)
  - Locking nikic/php-parser (v4.14.0)
  - Locking nunomaduro/collision (v3.2.0)
  - Locking opis/closure (3.6.3)
  - Locking paragonie/random_compat (v9.99.100)
  - Locking phar-io/manifest (1.0.3)
  - Locking phar-io/version (2.0.1)
  - Locking php-parallel-lint/php-console-color (v0.3)
  - Locking php-parallel-lint/php-console-highlighter (v0.5)
  - Locking phpdocumentor/reflection-common (2.2.0)
  - Locking phpdocumentor/reflection-docblock (5.3.0)
  - Locking phpdocumentor/type-resolver (1.6.1)
  - Locking phpoffice/phpspreadsheet (1.24.1)
  - Locking phpoption/phpoption (1.9.0)
  - Locking phpspec/prophecy (v1.15.0)
  - Locking phpunit/php-code-coverage (6.1.4)
  - Locking phpunit/php-file-iterator (2.0.5)
  - Locking phpunit/php-text-template (1.2.1)
  - Locking phpunit/php-timer (2.1.3)
  - Locking phpunit/php-token-stream (3.1.3)
  - Locking phpunit/phpunit (7.5.20)
  - Locking psr/container (1.1.2)
  - Locking psr/http-client (1.0.1)
  - Locking psr/http-factory (1.0.1)
  - Locking psr/http-message (1.0.1)
  - Locking psr/log (1.1.4)
  - Locking psr/simple-cache (1.0.1)
  - Locking psy/psysh (v0.9.12)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking ramsey/uuid (3.9.6)
  - Locking sebastian/code-unit-reverse-lookup (1.0.2)
  - Locking sebastian/comparator (3.0.3)
  - Locking sebastian/diff (3.0.3)
  - Locking sebastian/environment (4.2.4)
  - Locking sebastian/exporter (3.1.4)
  - Locking sebastian/global-state (2.0.0)
  - Locking sebastian/object-enumerator (3.0.4)
  - Locking sebastian/object-reflector (1.1.2)
  - Locking sebastian/recursion-context (3.0.1)
  - Locking sebastian/resource-operations (2.0.2)
  - Locking sebastian/version (2.0.1)
  - Locking swiftmailer/swiftmailer (v6.3.0)
  - Locking symfony/console (v4.4.45)
  - Locking symfony/css-selector (v5.4.11)
  - Locking symfony/debug (v4.4.44)
  - Locking symfony/deprecation-contracts (v2.5.2)
  - Locking symfony/error-handler (v4.4.44)
  - Locking symfony/event-dispatcher (v4.4.44)
  - Locking symfony/event-dispatcher-contracts (v1.1.13)
  - Locking symfony/finder (v4.4.44)
  - Locking symfony/http-client-contracts (v2.5.2)
  - Locking symfony/http-foundation (v4.4.45)
  - Locking symfony/http-kernel (v4.4.45)
  - Locking symfony/mime (v5.4.12)
  - Locking symfony/polyfill-ctype (v1.26.0)
  - Locking symfony/polyfill-iconv (v1.26.0)
  - Locking symfony/polyfill-intl-idn (v1.26.0)
  - Locking symfony/polyfill-intl-normalizer (v1.26.0)
  - Locking symfony/polyfill-mbstring (v1.26.0)
  - Locking symfony/polyfill-php72 (v1.26.0)
  - Locking symfony/polyfill-php73 (v1.26.0)
  - Locking symfony/polyfill-php80 (v1.26.0)
  - Locking symfony/process (v4.4.44)
  - Locking symfony/routing (v4.4.44)
  - Locking symfony/service-contracts (v2.5.2)
  - Locking symfony/translation (v4.4.45)
  - Locking symfony/translation-contracts (v2.5.2)
  - Locking symfony/var-dumper (v4.4.44)
  - Locking tecnickcom/tcpdf (6.5.0)
  - Locking theseer/tokenizer (1.2.1)
  - Locking tightenco/parental (v0.8.0)
  - Locking tijsverkoyen/css-to-inline-styles (2.2.4)
  - Locking vlucas/phpdotenv (v3.6.10)
  - Locking webmozart/assert (1.11.0)
  - Locking yajra/laravel-datatables (v1.5.0)
  - Locking yajra/laravel-datatables-buttons (v4.13.3)
  - Locking yajra/laravel-datatables-editor (v1.25.1)
  - Locking yajra/laravel-datatables-fractal (v1.6.0)
  - Locking yajra/laravel-datatables-html (v4.41.1)
  - Locking yajra/laravel-datatables-oracle (v9.21.2)
  - Locking zizaco/entrust (1.9.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 2 installs, 3 updates, 2 removals
  - Downloading symfony/css-selector (v5.4.11)
  - Downloading php-parallel-lint/php-console-color (v0.3)
  - Downloading php-parallel-lint/php-console-highlighter (v0.5)
  - Downloading nunomaduro/collision (v3.2.0)
  - Removing jakub-onderka/php-console-highlighter (v0.4)
  - Removing jakub-onderka/php-console-color (v0.2)
  - Downgrading symfony/css-selector (v6.1.3 => v5.4.11): Extracting archive
  - Downgrading symfony/deprecation-contracts (v3.1.1 => v2.5.2): Extracting archive
  - Installing php-parallel-lint/php-console-color (v0.3): Extracting archive
  - Installing php-parallel-lint/php-console-highlighter (v0.5): Extracting archive
  - Upgrading nunomaduro/collision (v3.1.0 => v3.2.0): Extracting archive
85 package suggestions were added by new dependencies, use `composer suggest` to see details.
Package swiftmailer/swiftmailer is abandoned, you should avoid using it. Use symfony/mailer instead.
Package symfony/debug is abandoned, you should avoid using it. Use symfony/error-handler instead.
Package tightenco/parental is abandoned, you should avoid using it. Use calebporzio/parental instead.
Package fzaninotto/faker is abandoned, you should avoid using it. No replacement was suggested.
Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi
Discovered Package: beyondcode/laravel-dump-server
Discovered Package: fideloper/proxy
Discovered Package: intervention/image
Discovered Package: laravel/tinker
Discovered Package: laravelcollective/html
Discovered Package: maatwebsite/excel
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Discovered Package: yajra/laravel-datatables-buttons
Discovered Package: yajra/laravel-datatables-editor
Discovered Package: yajra/laravel-datatables-fractal
Discovered Package: yajra/laravel-datatables-html
Discovered Package: yajra/laravel-datatables-oracle
Discovered Package: zizaco/entrust
Package manifest generated successfully.
70 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
Found 3 security vulnerability advisories affecting 1 package.
Run composer audit for a full list of advisories.



RUN

PS C:\xampp\htdocs\siakad> php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
[Thu Sep  1 12:52:59 2022] PHP 7.4.29 Development Server (http://127.0.0.1:8000) started
[Thu Sep  1 13:09:54 2022] 127.0.0.1:50645 Accepted
[Thu Sep  1 13:09:54 2022] 127.0.0.1:50646 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50646 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50645 Closed without sending a request; it was probably just an unused speculative preconnection
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50645 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50649 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50650 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50649 [200]: GET /plugins/pace/pace.min.css
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50651 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50650 [200]: GET /css/nifty.min.css
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50652 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50651 [200]: GET /css/bootstrap.min.css
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50652 [200]: GET /plugins/pace/pace.min.js
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50649 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50650 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50651 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50652 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50654 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50654 [200]: GET /js/jquery.min.js
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50654 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50656 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50656 [200]: GET /js/bootstrap.min.js
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50657 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50658 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50657 [200]: GET /js/nifty.min.js
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50659 Accepted
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50658 [200]: GET /img/logo.png
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50656 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50659 [200]: GET /img/bg.png
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50657 Closing
[Thu Sep  1 13:10:04 2022] 127.0.0.1:50658 Closing
[Thu Sep  1 13:10:05 2022] 127.0.0.1:50659 Closing
[Thu Sep  1 13:10:05 2022] 127.0.0.1:50661 Accepted
[Thu Sep  1 13:10:05 2022] 127.0.0.1:50661 [200]: GET /img/logo.png
[Thu Sep  1 13:10:05 2022] 127.0.0.1:50661 Closing
[Thu Sep  1 13:17:49 2022] 127.0.0.1:50711 Accepted
[Thu Sep  1 13:17:49 2022] 127.0.0.1:50712 Accepted
[Thu Sep  1 13:17:56 2022] 127.0.0.1:50712 Closing
[Thu Sep  1 13:17:56 2022] 127.0.0.1:50711 Closed without sending a request; it was probably just an unused speculative preconnection
[Thu Sep  1 13:17:56 2022] 127.0.0.1:50711 Closing
[Thu Sep  1 13:17:56 2022] 127.0.0.1:50714 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50714 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50716 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50717 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50716 [200]: GET /css/bootstrap.min.css
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50718 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50717 [200]: GET /plugins/pace/pace.min.css
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50719 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50718 [200]: GET /css/nifty.min.css
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50719 [200]: GET /plugins/pace/pace.min.js
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50716 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50717 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50718 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50719 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50720 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50721 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50720 [200]: GET /js/jquery.min.js
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50722 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50721 [200]: GET /js/bootstrap.min.js
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50723 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50722 [200]: GET /js/nifty.min.js
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50724 Accepted
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50723 [200]: GET /img/logo.png
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50720 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50724 [200]: GET /img/bg.png
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50721 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50722 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50723 Closing
[Thu Sep  1 13:17:57 2022] 127.0.0.1:50724 Closing
[Thu Sep  1 20:29:34 2022] 127.0.0.1:50821 Accepted
[Thu Sep  1 20:29:34 2022] 127.0.0.1:50822 Accepted
[Thu Sep  1 20:29:42 2022] 127.0.0.1:50822 Closing
[Thu Sep  1 20:29:42 2022] 127.0.0.1:50821 Closed without sending a request; it was probably just an unused speculative preconnection
[Thu Sep  1 20:29:42 2022] 127.0.0.1:50821 Closing
[Thu Sep  1 20:29:42 2022] 127.0.0.1:50823 Accepted
[Thu Sep  1 20:29:42 2022] 127.0.0.1:50823 [200]: GET /favicon.ico
[Thu Sep  1 20:29:42 2022] 127.0.0.1:50823 Closing

