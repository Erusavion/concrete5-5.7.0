<?
defined('C5_EXECUTE') or die("Access Denied.");
?>
<div class="ccm-page-type-composer-output-control" data-page-type-composer-output-control-id="<?=$control->getPageTypeComposerOutputControlID()?>">
<div class="ccm-page-type-composer-item-control-bar">
	<ul class="ccm-page-type-composer-item-controls">
		<li><a href="#" data-command="move-output-control" style="cursor: move"><i class="glyphicon glyphicon-move"></i></a></li>
	</ul>
<div class="ccm-page-type-composer-output-control-inner">
	<?
	print $control->getPageTypeComposerControlOutputLabel();
	?>
</div>
</div>
</div>
