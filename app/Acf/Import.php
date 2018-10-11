<?php

namespace Drift\Acf;

class Import
{
	public function __construct()
	{
		add_action('init', function() {
			if (class_exists('AcfExportManager\AcfExportManager')) {
				$acfExportManager = new \AcfExportManager\AcfExportManager();
				$acfExportManager->setTextdomain('halland');
				$acfExportManager->setExportFolder(__DIR__);
				$acfExportManager->autoExport(array(
					// Add ACF-fields here
				));
				$acfExportManager->import();
			}
		});
	}
}