<?php
/* View helpers
 * see http://github.com/sofadesign/vincent-helye.com
----------------------------------------------------------------------------------------- */
function public_url_for($path)
{
  $args = func_get_args();
  $paths = array(option('base_path'));
  $paths[] = 'public';
  $paths = array_merge($paths, $args);
  
  return call_user_func_array('file_path', $paths);
}