<?php
/**
 * DatatablesDemo2Asset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-things
 * @class \p2m\sbAdmin\demo\DatatablesDemo2Asset
 */

/**
 * Load this asset with...
p2m\sbAdmin\demo\DatatablesDemo2Asset::register($this);

 * or specify as a dependency with...
		'p2m\sbAdmin\demo\DatatablesDemo2Asset',
 */

namespace p2m\sbAdmin\demo;

use yii\web\AssetBundle;

class DatatablesDemo2Asset extends AssetBundle
{
	public $sourcePath = '@p2m/sbAdmin/demo/sb-admin2';

	public $js = [
		'datatables-demo.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\sbAdmin\demo\P2BootstrapAsset',
		'p2m\sbAdmin\demo\P2BootstrapIconsAsset',
	];
}
