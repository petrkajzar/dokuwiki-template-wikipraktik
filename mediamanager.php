<?php

/**
 * DokuWiki Media Manager Popup
 *
 * @author   Andreas Gohr <andi@splitbrain.org>
 * @author   Petr Kajzar <petr.kajzar@centrum.cz>
 * @license  GPL 2 (http://www.gnu.org/licenses/gpl.html)
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?><!DOCTYPE html>
<html lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction'] ?>" class="popup no-js">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>
    <?php echo hsc($lang['mediaselect'])?> [<?php echo strip_tags($conf['title'])?>]
</title>
<script>(function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)</script>
<?php tpl_metaheaders()?>
<?php echo tpl_favicon(array('favicon')) ?>
<?php tpl_includeFile('meta.html') ?>
</head>

<body>
    <div id="media__manager" class="dokuwiki">
        <?php html_msgarea() ?>
        <nav id="mediamgr__aside"><div class="pad">
            <h1><?php echo hsc($lang['mediaselect'])?></h1>

            <?php /* keep the id! additional elements are inserted via JS here */?>
            <div id="media__opts"></div>

            <?php tpl_mediaTree() ?>
        </div></nav>

        <main id="mediamgr__content">
            <?php tpl_mediaContent() ?>
        </main>
    </div>
</body>
</html>