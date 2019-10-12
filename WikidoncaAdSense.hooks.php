<?php
	class WikidoncaAdSenseHooks {
		function PaginaPrincipale ( OutputPage $out, Skin $skin ) {
			global $wgBannerSuperiore, $wgBannerInferiore;
			$out->prependHTML( $wgBannerSuperiore );
			$out->addHTML( $wgBannerInferiore );
		}
		function Laterale ( $skin, &$bar ) {
			global $wgBannerLaterale;
			$bar[ 'Ads' ] = $wgBannerLaterale;
			return true;
	}
	};
?>
