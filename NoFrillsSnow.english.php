<?php

// Settings
$txt['nofrillssnow_enabled'] = 'Enable the No Frills Snow Addon';
$txt['nofrillssnow_title'] = 'Snow Storm';
$txt['nofrillssnow_settings'] = 'Snow Storm Settings';
$txt['nofrillssnow_options'] = 'Snow Storm Options';
$txt['nofrillssnow_default'] = 'Default value: ';
$txt['nofrillssnow_desc'] = 'This addon adds a snow storm effect to your site.<br />Snowstorm can eat up a lot of CPU, even on modern computers, because of the number of elements being moved around the screen at once. Consider raising the animation interval, and lowering the amount of snowflakes (active and max) to help reduce CPU use.
Where supported, Snowstorm will attempt to use GPU-based hardware acceleration to draw and animate the snow. Having GPU acceleration can help in reducing CPU load.
<br />By default, mobile devices are excluded from the snow effect to be nice to their CPUs (and batteries.)';
$txt['nofrillssnow_enabled_desc'] = 'Master setting to enable or disable the snow storm';
$txt['nofrillssnow_animationInterval'] = 'Theoretical "milliseconds per frame" measurement. 20 = fast + smooth, but high CPU use. 50 = more conservative, but slower';
$txt['nofrillssnow_flakesMax'] = 'Sets the maximum number of snowflakes that can exist on the screen at any given time.';
$txt['nofrillssnow_flakesMaxActive'] = 'Sets the limit of "falling" snowflakes (ie. moving on the screen, thus considered to be active.)';
$txt['nofrillssnow_followMouse'] = 'Allows snow to move dynamically with the "wind", relative to the mouse\'s X (left/right) coordinates.';
$txt['nofrillssnow_freezeOnBlur'] = 'Stops the snow effect when the browser window goes out of focus, eg., user is in another tab. Saves CPU, nicer to user.';
$txt['nofrillssnow_snowColor'] = 'Do not go where the Huskeys go and don\'t eat (or use?) yellow snow.';
$txt['nofrillssnow_snowCharacter'] = '&amp;bull; (&bull;) = bullet. Changing this may result in cropping of the character and may require flakeWidth/flakeHeight changes, so be careful.
<br/>&amp;#x2744; (&#x2744;) a UTF-8 snowflake is a nice choice if your system font supports it.';
$txt['nofrillssnow_flakeWidth'] = 'Max pixel width reserved for snow element, 16 works well with &amp;#x2744;';
$txt['nofrillssnow_flakeHeight'] = 'Max pixel height reserved for snow element, 16 works well with &amp;#x2744;';
$txt['nofrillssnow_snowStick'] = 'Allows the snow to "stick" to the bottom of the window. When off, snow will never sit at the bottom.';
$txt['nofrillssnow_useMeltEffect'] = 'When recycling fallen snow (or rarely, when falling), have it "melt" and fade out if browser supports it';
$txt['nofrillssnow_useTwinkleEffect'] = 'Allow snow to randomly "flicker" in and out of view while falling';
$txt['nofrillssnow_vMaxX'] = 'Defines maximum X velocities for the storm; a random value in this range is selected for each snowflake.';
$txt['nofrillssnow_vMaxY'] = 'Defines maximum Y velocities for the storm; a random value in this range is selected for each snowflake.';