<?php
$wgExtensionCredits['other'][] = array(
        'path' => __FILE__,
        'name' => "WikiBanner",
        'description' => "Allows top and bottom banners to be added to the wiki as configured in the LocalSettings.php file.",
        'version' => '1.2 beta',
        'author' => "maelstr0m e [https://www.mediawiki.org/wiki/User:Cesarinik Riccardo Cesarini]",
        'url' => "http://www.mediawiki.org/wiki/Extension:WikiBanner",
	'license-name' => 'MIT'
);

$wgHooks['BeforePageDisplay'][] = 'Banner::InsertAds';
if (!class_exists('Banner')) {
if (!function_exists('InsertAds'))   {
	class Banner {
		function InsertAds( OutputPage $out, Skin $skin ) {
			global $wgTopBannerCode, $wgBottomBannerCode;
			$out->prependHTML( $wgTopBannerCode );
			$out->addHTML( $wgBottomBannerCode );
			return TRUE;
		}
	}
}
}