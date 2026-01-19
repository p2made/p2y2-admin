<?php
/**
 * ChartBarDemoAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/p2y2
 * @class \p2m\admin\sbadmin\demo\ChartBarDemoAsset
 */

/**
 * Load this asset with...
p2m\admin\sbadmin\demo\ChartBarDemoAsset::register($this);
 * or...
use p2m\admin\sbadmin\demo\ChartBarDemoAsset;
P2SBAdminAsset::register($this);
 * or specify as a dependency with...
		'p2m\admin\sbadmin\demo\ChartBarDemoAsset',
 */

namespace p2m\admin\sbadmin\demo;

use yii\web\AssetBundle;

class ChartBarDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/admin/sbadmin/demo/data';

	public $js = [
		'chart-bar-demo.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
	];
}
