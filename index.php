<?php

require 'vendor/autoload.php';

$browserFactory = new HeadlessChromium\BrowserFactory('google-chrome');
$browser = $browserFactory->createBrowser([
  'debugLogger' => 'php://stdout',
]);
$page = $browser->createPage();
$page->navigate($argv[1])->waitForNavigation();
echo strlen($page->getHtml());
$browser->close();
