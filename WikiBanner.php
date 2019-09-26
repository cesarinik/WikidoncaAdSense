<?php
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
