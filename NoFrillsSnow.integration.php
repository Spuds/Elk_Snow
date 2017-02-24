<?php

/**
 * @package No Frills Snow
 * @author Spuds
 * @copyright (c) 2014 Spuds
 * @license MIT public license
 *
 * @version 1.0
 */

if (!defined('ELK'))
	die('No access...');

/**
 * ilt_nofrillssnow()
 *
 * - Integrate_load_theme, Called from load.php
 * - Used to add items to the loaded theme (css / js)
 */
function ilt_nofrillssnow()
{
	global $context, $modSettings;

	// If its not enabled
	if (empty($modSettings['nofrillssnow_enabled']))
		return;

	// If we are in an area where we never want it to snow, like Texas
	if (in_array($context['current_action'], array('admin', 'helpadmin', 'printpage')))
		return;

	// And let it snow, let it snow, let it snow
	addInlineJavascript('		
		snowStorm.animationInterval = ' . $modSettings['nofrillssnow_animationInterval'] . ';
		snowStorm.flakesMax = ' . $modSettings['nofrillssnow_flakesMax'] . ';
		snowStorm.flakesMaxActive = ' . $modSettings['nofrillssnow_flakesMaxActive'] . ';
		snowStorm.followMouse = ' . (empty($modSettings['nofrillssnow_followMouse']) ? 0 : 1) . ';
		snowStorm.freezeOnBlur = ' . (empty($modSettings['nofrillssnow_freezeOnBlur']) ? 0 : 1) . ';
		snowStorm.snowColor = "' . $modSettings['nofrillssnow_snowColor'] . '";
		snowStorm.snowCharacter = "' . $modSettings['nofrillssnow_snowCharacter'] . '";
		snowStorm.flakeWidth = ' . $modSettings['nofrillssnow_flakeWidth'] . ';
		snowStorm.flakeHeight = ' . $modSettings['nofrillssnow_flakeHeight'] . ';
		snowStorm.snowStick = ' . (empty($modSettings['nofrillssnow_snowStick']) ? 0 : 1) . ';
		snowStorm.useMeltEffect = ' . (empty($modSettings['nofrillssnow_useMeltEffect']) ? 0 : 1) . ';
		snowStorm.useTwinkleEffect = ' . (empty($modSettings['nofrillssnow_useTwinkleEffect']) ? 0 : 1) . ';
		snowStorm.vMaxX  = ' . $modSettings['nofrillssnow_vMaxX'] . ';
		snowStorm.vMaxY = ' . $modSettings['nofrillssnow_vMaxY'] . ';', true);

	// The snow script
	loadJavascriptFile(array('snowstorm.min.js'), array('defer' => false, 'stale' => '?v=1.44'));
}

/**
 * iaa_fb4elk()
 *
 * - Admin Hook, integrate_admin_areas, called from Admin.php
 * - Used to add/modify admin menu areas
 *
 * @param mixed[] $admin_areas
 */
function iaa_nofrillssnow(&$admin_areas)
{
	global $txt;

	loadlanguage('NoFrillsSnow');
	$admin_areas['config']['areas']['addonsettings']['subsections']['nofrillssnow'] = array($txt['nofrillssnow_title']);
}

/**
 * imm_nofrillssnow()
 *
 * - Admin Hook, integrate_sa_modify_modifications, called from AddonSettings.controller.php
 * - Used to add subactions to the addon area
 *
 * @param mixed[] $sub_actions
 */
function imm_nofrillssnow(&$sub_actions)
{
	$sub_actions['nofrillssnow'] = array(
		'dir' => SUBSDIR,
		'file' => 'NoFrillsSnow.integration.php',
		'function' => 'nofrillssnow_settings',
		'permission' => 'admin_forum',
	);
}

/**
 * nofrillssnow_settings()
 *
 * - Defines our settings array and uses our settings class to manage the data
 */
function nofrillssnow_settings()
{
	global $txt, $context, $scripturl, $modSettings;

	loadlanguage('NoFrillsSnow');
	$context[$context['admin_menu_name']]['tab_data']['tabs']['nofrillssnow']['description'] = $txt['nofrillssnow_desc'];

	// Lets build a settings form
	require_once(SUBSDIR . '/SettingsForm.class.php');

	// Instantiate the form
	$fbSettings = new Settings_Form();

	// All the options, well at least some of them!
	$config_vars = array(
		array('check', 'nofrillssnow_enabled', 'postinput' => $txt['nofrillssnow_enabled_desc']),
		array('title', 'nofrillssnow_options'),
			array('int', 'nofrillssnow_animationInterval', 'postinput' => $txt['nofrillssnow_default'] . '33'),
			array('int', 'nofrillssnow_flakesMax', 'postinput' => $txt['nofrillssnow_default'] . '128'),
			array('int', 'nofrillssnow_flakesMaxActive', 'postinput' => $txt['nofrillssnow_default'] . '64'),
			array('check', 'nofrillssnow_followMouse'),
			array('check', 'nofrillssnow_freezeOnBlur'),
			array('text', 'nofrillssnow_snowColor', 'postinput' => $txt['nofrillssnow_default'] . '#99ccff'),
			array('text', 'nofrillssnow_snowCharacter', 'postinput' => $txt['nofrillssnow_default'] . '&amp;bull;'),
			array('int', 'nofrillssnow_flakeWidth', 'postinput' => $txt['nofrillssnow_default'] . '8'),
			array('int', 'nofrillssnow_flakeHeight', 'postinput' => $txt['nofrillssnow_default'] . '8'),
			array('check', 'nofrillssnow_snowStick'),
			array('check', 'nofrillssnow_useMeltEffect'),
			array('check', 'nofrillssnow_useTwinkleEffect'),
			array('int', 'nofrillssnow_vMaxX', 'postinput' => $txt['nofrillssnow_default'] . '8'),
			array('int', 'nofrillssnow_vMaxY', 'postinput' => $txt['nofrillssnow_default'] . '5'),
	);

	// Load the settings to the form class
	$fbSettings->settings($config_vars);

	// Saving?
	if (isset($_GET['save']))
	{
		checkSession();

		// Some defaults are good to have
		if (empty($_POST['nofrillssnow_animationInterval']))
			$_POST['nofrillssnow_animationInterval'] = 33;
		if (empty($_POST['nofrillssnow_flakesMax']))
			$_POST['nofrillssnow_flakesMax'] = 128;
		if (empty($_POST['nofrillssnow_flakesMaxActive']))
			$_POST['nofrillssnow_flakesMaxActive'] = 64;
		if (empty($_POST['nofrillssnow_vMaxX']))
			$_POST['nofrillssnow_vMaxX'] = 8;
		if (empty($_POST['nofrillssnow_vMaxY']))
			$_POST['nofrillssnow_vMaxY'] = 5;
		if (empty($_POST['nofrillssnow_flakeWidth']))
			$_POST['nofrillssnow_flakeWidth'] = 8;
		if (empty($_POST['nofrillssnow_flakeHeight']))
			$_POST['nofrillssnow_flakeHeight'] = 8;
		if (empty($_POST['nofrillssnow_snowColor']))
			$_POST['nofrillssnow_snowColor'] = '#99ccff';
		if (empty($_POST['nofrillssnow_snowCharacter']))
			$_POST['nofrillssnow_snowCharacter'] = '&bull;';

		Settings_Form::save_db($config_vars);
		redirectexit('action=admin;area=addonsettings;sa=nofrillssnow');
	}

	// Continue on to the settings template
	$context['settings_title'] = $txt['nofrillssnow_title'];
	$context['page_title'] = $context['settings_title'] = $txt['nofrillssnow_settings'];
	$context['post_url'] = $scripturl . '?action=admin;area=addonsettings;sa=nofrillssnow;save';

	Settings_Form::prepare_db($config_vars);
}