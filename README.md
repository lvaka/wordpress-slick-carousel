# WordPress Slick Carousel Shortcode Plug In
Using Slick Coursel by Ken Wheeler @ https://kenwheeler.github.io/slick/

This Plugin Makes the necessary imports for Ken Wheeler's Slick Carousel and consolidates this into a shortcode.

[slick_carousel]

# Parameters
"class" => 'slick-slider', //Choose what class to set for the containing div\s\s
"images" => '', //send a CSV of Id's of images for the slider\s\s
"slidestoshow" => '7', //Number of slides to show at once\s\s
"slidestoscroll" => '1', //How many slides to scroll at once\s\s
"arrows" => 'false', //Show Arrows\s\s
"dots" => 'true', //Show Dots\s\s
"infinite" => 'true', //Run infinitely\s\s
"autoplay" => 'true', //Autoplay Slider\s\s
"autoplayspeed" => '2000', //Speed of autoplay\s\s
"speed" => '300', //Speed of slides\s\s
"responsive" => '', //Custom responsive queries.  Refer to original Slick Slider documentation\s\s
"variablewidth" => 'false', //If width is variable\s\s

# Use
In the standard WordPress text editor drop in 
[slick_carousel images="1,2,4"]

Add in any other parameters you like, or keep the defaults.

