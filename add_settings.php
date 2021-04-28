<?php

/**
 * @package No Frills Snow
 * @author Spuds
 * @copyright (c) 2014 Spuds
 * @license MIT public license
 *
 * @version 1.0
 */

// If we have found SSI.php and we are outside of ElkArte, then we are running standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('ELK'))
{
	require_once(dirname(__FILE__) . '/SSI.php');
}
elseif (!defined('ELK'))
{
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as ElkArte\'s SSI.php.');
}

global $modSettings;

// List settings here in the format: setting_key => default_value.  Escape any "s. (" => \")
// No that's not hard coded ;) ... regardless of what site or from what country you may visit those are still valid blacklist titles
$addon_settings = array(
	'nofrillssnow_animationInterval' => 33,
	'nofrillssnow_flakesMax' => 128,
	'nofrillssnow_flakesMaxActive' => 64,
	'nofrillssnow_followMouse' => 1,
	'nofrillssnow_freezeOnBlur' => 1,
	'nofrillssnow_snowColor' => '#99ccff',
	'nofrillssnow_snowCharacter' => '&bull;',
	'nofrillssnow_snowStick' => 1,
	'nofrillssnow_targetElement' => '',
	'nofrillssnow_useMeltEffect' => 1,
	'nofrillssnow_useTwinkleEffect' => 1,
	'nofrillssnow_vMaxX' => 8,
	'nofrillssnow_vMaxY' => 5,
	'nofrillssnow_flakeHeight' => 8,
	'nofrillssnow_flakeWidth' => 8,
);

// Update mod settings if applicable
foreach ($addon_settings as $new_setting => $new_value)
{
	if (!isset($modSettings[$new_setting]))
	{
		updateSettings(array($new_setting => $new_value));
	}
}

if (ELK === 'SSI')
{
	echo 'Congratulations! You have successfully installed this modification!';
}