<?php
/*
** search.php
** mk_build_main_wrapper : builds the main divisions that contains the content. Located in framework/helpers/global.php
** mk_get_view gets the parts of the pages, modules and components. Function located in framework/helpers/global.php
*/

get_header("search");


mk_build_main_wrapper( mk_get_view('templates', 'wp-search', true) );


get_footer();
