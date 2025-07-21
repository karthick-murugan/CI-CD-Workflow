<?php
function say_hello($name){
echo 'Hello, ' . esc_html($name);
}
say_hello("World") ;
