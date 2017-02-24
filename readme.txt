[hr]
[center][size=16pt][b]NoFrills Snow for Elkarte[/b][/size][/center]
[hr]
[color=blue][b][size=12pt][u]License[/u][/size][/b][/color]
This Elkarte addon is released under a MIT public license.

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
This addon adds a snow storm effect to your site.[br]Snowstorm can eat up a lot of CPU, even on modern computers, because of the number of elements being moved around the screen at once. Consider raising the animation interval, and lowering the amount of snowflakes (active and max) to help reduce CPU use.
Where supported, Snowstorm will attempt to use GPU-based hardware acceleration to draw and animate the snow. Having GPU acceleration can help in reducing CPU load.
[br]By default, mobile devices are excluded from the snow effect to be nice to their CPUs (and batteries.)
[br]The snow effect is also disabled in the Admin panel


This addon utilizes Scott Schiller Snowstorm javascript, BSD license, ( http://www.schillmania.com/projects/snowstorm ), it does all the work
the addon is simply a wrapper.

[color=blue][b][size=12pt][u]Features[/u][/size][/b][/color]
o Master setting to enable or disable the snow storm
o Set Theoretical "milliseconds per frame" measurement
o Set the maximum number of snowflakes that can exist on the screen at any given time
o Set the limit of "falling" snowflakes (ie. moving on the screen, thus considered to be active.)
o Allows snow to move dynamically with the "wind", relative to the mouse\'s X (left/right) coordinates
o Ability to stop the snow effect when the browser window goes out of focus. Saves CPU, nicer to user.
o Set the color of the snowflakes to adjust for theme backgrounds.
o Set the snowflake character, changing it may require flakeWidth/flakeHeight changes.
o Set Max pixel width/height reserved for snow element (for above).
o Allows the snow to "stick" to the bottom of the window.
o When recycling fallen snow off the bottom, have it "melt" and fade out (if browser supports it)
o Allow snow to randomly "flicker" in and out of view while falling
o Defines maximum X/Y velocities for the storm