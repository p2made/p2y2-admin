<?php
/**
 * P2sbAdmin2Asset.php
 *
 * Yii2 asset for sbAdmin2
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-admin
 * @class \p2m\admin\assets\P2sbAdmin2Asset
 */

/**
 * Load this asset with...

p2m\admin\assets\P2sbAdmin2Asset::register($this);

 * or specify as a dependency with...

		'p2m\admin\assets\P2sbAdmin2Asset',

 */

namespace p2m\admin\assets;

use yii\web\AssetBundle;

class P2sbAdmin2Asset extends AssetBundle
{
	public $sourcePath = '@p2m/sbAdmin/assets/lib';

	public $css = [
		'css/sb-admin-2.min.css',
	];

	public $js = [
		'js/sb-admin-2.min.js',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
