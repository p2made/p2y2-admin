<?php
/**
 * P2SBAdminAsset.php
 *
 * Yii2 asset for sbAdmin
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-admin
 * @class \p2m\assets\P2SBAdminAsset
 */

/**
 * Load this asset with...
p2m\admin\sbadmin\assets\P2SBAdminAsset::register($this);
 * or...
use p2m\admin\sbadmin\assets\P2SBAdminAsset;
P2SBAdminAsset::register($this);
 * or specify as a dependency with...
		'p2m\admin\sbadmin\assets\P2SBAdminAsset',
 */

namespace p2m\admin\sbadmin\assets;

use yii\web\AssetBundle;

class P2SBAdminAsset extends AssetBundle
{
	public $sourcePath = '@p2m/admin/sbadmin/assets/lib';

	public $css = [
		'css/sb-admin.min.css',
	];

	public $cssOptions = [
		'crossorigin' => 'anonymous',
	];

	public $js = [
		'js/sb-admin.min.js',
	];

	public $jsOptions = [
		'crossorigin' => 'anonymous',
	];

	public $depends = [
		'p2m\assets\P2BootstrapAsset',
		'p2m\assets\P2BootstrapIconsAsset',
	];
}
