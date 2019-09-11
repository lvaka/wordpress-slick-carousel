# WordPress Slick Carousel Shortcode Plug In
Using Slick Coursel by Ken Wheeler @ https://kenwheeler.github.io/slick/

This Plugin Makes the necessary imports for Ken Wheeler's Slick Carousel and consolidates this into a shortcode.

[slick_carousel]

# Parameters
"class" => 'slick-slider', //Choose what class to set for the containing div
"images" => '', //send a CSV of Id's of images for the slider
"slidestoshow" => '7', //Number of slides to show at once
"slidestoscroll" => '1', //How many slides to scroll at once
"arrows" => 'false', //Show Arrows
"dots" => 'true', //Show Dots
"infinite" => 'true', //Run infinitely
"autoplay" => 'true', //Autoplay Slider
"autoplayspeed" => '2000', //Speed of autoplay
"speed" => '300', //Speed of slides	
"responsive" => '', //Custom responsive queries.  Refer to original Slick Slider documentation
"variablewidth" => 'false', //If width is variable

# Use
In the standard WordPress text editor drop in 
[slick_carousel images="1,2,4"]

Add in any other parameters you like, or keep the defaults.

