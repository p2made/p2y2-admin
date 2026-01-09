<?php
/**
 * ChartPieDemoAsset.php
 *
 * Yii2 asset for _ResourceName_
 * https:_resource_website_
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2
 * @class \p2m\admin\sbadmin\demo\ChartPieDemoAsset
 */

/**
 * Load this asset with...
p2m\admin\sbadmin\demo\ChartPieDemoAsset::register($this);
 * or...
use p2m\admin\sbadmin\demo\ChartPieDemoAsset;
P2SBAdminAsset::register($this);
 * or specify as a dependency with...
		'p2m\admin\sbadmin\demo\ChartPieDemoAsset',
 */

namespace p2m\admin\sbadmin\demo;

use yii\web\AssetBundle;

class ChartPieDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/admin/sbadmin/demo/data';

	public $js = [
		'chart-pie-demo.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
	];
}
