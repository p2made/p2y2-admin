<?php
/**
 * P2sbAdmin2UserAsset.php
 *
 * Yii2 asset for sbAdmin2User
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2025
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-sb-admin
 * @class \p2m\assets\P2sbAdmin2UserAsset
 */

/**
 * Load this asset with...
 * p2m\sbAdmin\assets\P2sbAdmin2UserAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\sbAdmin\assets\P2sbAdmin2UserAsset',
 */
namespace p2m\sbAdmin\assets;

use yii\web\AssetBundle;

class P2sbAdmin2UserAsset extends AssetBundle
{
	public $sourcePath = '@p2m/sbAdmin/assets/lib';

	public $css = [
		'css/sb-admin-2-user.min.css',
	];

	public $depends = [
		'p2m\assets\P2CoreAsset',
	];
}
