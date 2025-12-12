<?php
/**
 * DatatablesSimpleDemoAsset.php
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
 * @class \p2m\admin\sbadmin\demo\DatatablesSimpleDemoAsset
 */

/**
 * Load this asset with...
p2m\admin\sbadmin\demo\DatatablesSimpleDemoAsset::register($this);
 * or...
use p2m\admin\sbadmin\demo\DatatablesSimpleDemoAsset;
P2SBAdminAsset::register($this);
 * or specify as a dependency with...
		'p2m\admin\sbadmin\demo\DatatablesSimpleDemoAsset',
 */

namespace p2m\admin\sbadmin\demo;

use yii\web\AssetBundle;

class DatatablesSimpleDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/admin/sbadmin/demo/data';

	public $js = [
		'datatables-simple-demo.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\admin\sbadmin\assets\P2SBAdminAsset',
	];
}
