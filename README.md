## NoFrills Snow for Elkarte

#### License

This Elkarte addon is released under a MIT public license.

#### Introduction

This addon adds a snow storm effect to your site.

Snowstorm can eat up a lot of CPU, even on modern computers, because of the number of elements being moved around the screen at once. Consider raising the animation interval, and lowering the amount of snowflakes (active and max) to help reduce CPU use.

Where supported, Snowstorm will attempt to use GPU-based hardware acceleration to draw and animate the snow. Having GPU acceleration can help in reducing CPU load.

By default, mobile devices are excluded from the snow effect to be nice to their CPUs (and batteries.)

The snow effect is also disabled in the Admin panel

This addon utilizes Scott Schiller Snowstorm javascript, BSD license, [Snowstorm](http://www.schillmania.com/projects/snowstorm), it does all the work
the addon is simply a wrapper.

#### Features

 - Master setting to enable or disable the snow storm
 - Set Theoretical "milliseconds per frame" measurement
 - Set the maximum number of snowflakes that can exist on the screen at any given time
 - Set the limit of "falling" snowflakes (ie. moving on the screen, thus considered to be active.)
 - Allows snow to move dynamically with the "wind", relative to the mouse\'s X (left/right) coordinates
 - Ability to stop the snow effect when the browser window goes out of focus. Saves CPU, nicer to user.
 - Set the color of the snowflakes to adjust for theme backgrounds.
 - Set the snowflake character, changing it may require flakeWidth/flakeHeight changes.
 - Set Max pixel width/height reserved for snow element (for above).
 - Allows the snow to "stick" to the bottom of the window.
 - When recycling fallen snow off the bottom, have it "melt" and fade out (if browser supports it)
 - Allow snow to randomly "flicker" in and out of view while falling
 - Defines maximum X/Y velocities for the storm
