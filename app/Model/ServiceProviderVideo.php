<?php
class ServiceProviderVideo extends Model {
	public $belongsTo = 'ServiceProvider';
	public $actsAs = array(
		'FileUpload.FileUpload' => array(
			'uploadDir' => 'upload',
			'allowedTypes' => array(
				'mpeg' => array('video/mpeg'),
				'mp4' => array('video/mp4'),
				'3gp' => array('video/3gpp')
			)
		)
	);
}