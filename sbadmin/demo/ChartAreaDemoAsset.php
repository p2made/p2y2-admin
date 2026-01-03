<?php
/**
 * ChartAreaDemoAsset.php
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
 * @class \p2m\admin\sbadmin\demo\ChartAreaDemoAsset
 */

/**
 * Load this asset with...
p2m\admin\sbadmin\demo\ChartAreaDemoAsset::register($this);
 * or...
use p2m\admin\sbadmin\demo\ChartAreaDemoAsset;
P2SBAdminAsset::register($this);
 * or specify as a dependency with...
		'p2m\admin\sbadmin\demo\ChartAreaDemoAsset',
 */

namespace p2m\admin\sbadmin\demo;

use yii\web\AssetBundle;

class ChartAreaDemoAsset extends AssetBundle
{
	public $sourcePath = '@p2m/admin/sbadmin/demo/data';

	public $js = [
		'chart-area-demo.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
	];
}
