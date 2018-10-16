<?php

namespace App\Drift\Acf;

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
					'outage' => 'group_5bbf31087bfe4'
				));
				$acfExportManager->import();
			}
		});
	}
}