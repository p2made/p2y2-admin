<?php
/**
 * P2sbAdminAsset.php
 *
 * Yii2 asset for sbAdmin
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-sb-admin
 * @class \p2m\assets\P2sbAdminAsset
 */

/**
 * Load this asset with...
 * p2m\sbAdmin\assets\P2sbAdminAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sbAdmin\assets\P2sbAdminAsset',
 */

namespace p2m\sb-admin\assets;

use yii\web\AssetBundle;

class P2sbAdminAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sb-admin/assets/lib/sb-admin';

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
