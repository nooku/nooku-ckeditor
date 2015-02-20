<?
/**
 * Nooku Framework - http://nooku.org/framework
 *
 * @copyright   Copyright (C) 2011 - 2015 Johan Janssens and Timble CVBA. (http://www.timble.net)
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://github.com/nooku/nooku-ckeditor for the canonical source repository
 */
?>

<ktml:script src="assets://js/koowa.js" />
<ktml:script src="assets://ckeditor/ckeditor/ckeditor.js" />
<ktml:script src="assets://ckeditor/js/editor.js" />

<? $options = new  KObjectConfig($options);  ?>

<script>
    jQuery(document).ready(function() {
        CKEDITOR.replace( '<?= $id ?>', {
            baseHref   : '<?= $options->baseHref ?>',
            toolbar    : '<?= $options->toolbar ?>',
            height     : '<?= $options->height ?>',
            width      : '<?= $options->width ?>',
            language   : '<?= $options->language ?>',
            contentsLanguage     : '<?= $options->contentsLanguage ?>',
            contentsLangDirection: '<?= $options->contentsLangDirection ?>',
            scayt_autoStartup    : '<?= $options->scayt_autoStartup ?>',
            removeButtons        : '<?= $options->removeButtons ?>'
        });
    });
</script>

<textarea id="<?= $id ?>" name="<?= $name ?>" class="ckeditor editable-<?= $id ?> validate-editor <?= $class ?>" style="visibility:hidden"><?= $text ?></textarea>
