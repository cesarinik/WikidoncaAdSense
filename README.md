Wikidonca AdSense
==========
Basato sul progetto Wikibanner di maelstr0m (abbandonato), aggiornato al nuovo formato JSON ed inoltre personalizzato e implementato con nuove funzioni (tra cui i banner in sidebar), permette di inserire nel wiki i i banner indicati nel file di configurazione.

Per far funzionare i banner è sufficiente dichiarare le tre variabili $wgBannerSuperiore, $wgBannerInferiore, $wgBannerLaterale, nel file LocalSettings.php con i codici di Google AdSense (è anche possibile inserire div e stili)

Es.

`
$wgBannerSuperiore = '<div style="text-align:center; margin:10px 0px;"><script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><ins class="adsbygoogle" style="display:block" data-full-width-responsive="true" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script></div>';
`
