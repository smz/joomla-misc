<?php
defined('_JEXEC') or die;

class PlgContentTest_aftertitle extends JPlugin {

	// onContentAfterTitle handler
	public function onContentAfterTitle($context, &$article, &$params, $limitstart) {
		return '<h3>This is generated by the "Test Aftertitle" plugin</h3>';
	}

}
