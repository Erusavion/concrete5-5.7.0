<?
defined('C5_EXECUTE') or die("Access Denied.");
?>

<a name="_edit<?=$b->getBlockID()?>"></a>

<? $bt = $b->getBlockTypeObject(); ?>

<script type="text/javascript">

<? $ci = Loader::helper("concrete/urls"); ?>
<? $url = $ci->getBlockTypeJavaScriptURL($bt); 
if ($url != '') { ?>
	ccm_addHeaderItem("<?=$url?>", 'JAVASCRIPT');
<? } 

$identifier = strtoupper('BLOCK_CONTROLLER_' . $btHandle);
if (is_array($headerItems[$identifier])) {
	foreach($headerItems[$identifier] as $item) { 
		if ($item instanceof CSSOutputObject) {
			$type = 'CSS';
		} else {
			$type = 'JAVASCRIPT';
		}
		?>
		ccm_addHeaderItem("<?=$item->file?>", '<?=$type?>');
	<?
	}
}
?>
$(function() {
	$('#ccm-block-form').concreteAjaxBlockForm({
		'task': 'edit',
		'bID': <? if (is_object($b->getProxyBlock())) { ?><?=$b->getProxyBlock()->getBlockID()?><? } else { ?><?=$b->getBlockID()?><? } ?>,
		<? if ($bt->supportsInlineEdit()) { ?>
			btSupportsInlineEdit: true,
		<? } else { ?>
			btSupportsInlineEdit: false
		<? } ?>
	});
});
</script>

<?
$hih = Loader::helper("concrete/ui/help");
$blockTypes = $hih->getBlockTypes();
$cont = $bt->getController();
if ($b->getBlockTypeHandle() == BLOCK_HANDLE_SCRAPBOOK_PROXY) {
	$bx = Block::getByID($b->getController()->getOriginalBlockID());
	$cont = $bx->getController();
}

if (isset($blockTypes[$bt->getBlockTypeHandle()])) {
	$help = $blockTypes[$bt->getBlockTypeHandle()];
} else {
	if ($cont->getBlockTypeHelp()) {
		$help = $cont->getBlockTypeHelp();
	}
}
if (isset($help) && !$bt->supportsInlineEdit()) { ?>
	<div class="dialog-help" id="ccm-menu-help-content"><? 
		if (is_array($help)) { 
			print $help[0] . '<br><br><a href="' . $help[1] . '" class="btn small" target="_blank">' . t('Learn More') . '</a>';
		} else {
			print $help;
		}
	?></div>
<? } ?>

<div <? if (!$bt->supportsInlineEdit()) { ?>class="ccm-ui"<? } ?>>

<form method="post" id="ccm-block-form" class="validate" action="<?=$b->getBlockEditAction()?>&rcID=<?=intval($rcID)?>" enctype="multipart/form-data">

<? foreach($this->controller->getJavaScriptStrings() as $key => $val) { ?>
	<input type="hidden" name="ccm-string-<?=$key?>" value="<?=h($val)?>" />
<? } ?>

<? if (!$bt->supportsInlineEdit()) { ?>
<div id="ccm-block-fields">
<? } else { ?>
<div>
<? } ?>
