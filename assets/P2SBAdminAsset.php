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
 * @class \p2m\admin\assets\P2SBAdminAsset
 */

/**
 * Load this asset with...

p2m\admin\assets\P2SBAdminAsset::register($this);

 * or...

use p2m\admin\assets\P2SBAdminAsset;
P2SBAdminAsset::register($this);

 * or specify as a dependency with...

		'p2m\admin\assets\P2SBAdminAsset',

 */

namespace p2m\admin\assets;

use yii\web\AssetBundle;

class P2SBAdminAsset extends AssetBundle
{
	public $sourcePath = '@p2m/admin/assets/lib/sb-admin';

	public $css = [
		'css/sb-admin.min.css',
	];

	public $js = [
		'js/sb-admin.min.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
