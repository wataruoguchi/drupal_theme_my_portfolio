<?php
/**
 * Add css files from CDN
 * drupal_add_css('', array('type' => 'external'));
 */
drupal_add_css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', array('type' => 'external'));
drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('type' => 'external'));
drupal_add_css('http://fonts.googleapis.com/css?family=Roboto:100,300,900|Roboto+Slab:700', array('type' => 'external'));

/**
 * Add js files from CDN
 * drupal_add_js('', 'external');
 */
drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('type' => 'external', 'async_js' => true));
drupal_add_js('https://cdnjs.cloudflare.com/ajax/libs/holder/2.8.1/holder.min.js', array('type' => 'external', 'async_js' => true));

/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function zen_sub_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  zen_sub_preprocess_html($variables, $hook);
  zen_sub_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function zen_sub_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function zen_sub_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
function zen_sub_preprocess_node(&$vars, $hook) {
  //Get image url
  // http://theming.isaacsonwebdevelopment.com/pre-process-node
  // http://benbuckman.net/articles/render-image-fields-drupal-7/
  //https://www.drupal.org/node/1899614
  $node = $vars['node'];
  $vars['uri'] = _zen_sub_getImageUriByNode($node);
  /**
   * http://www.citytree.be/uncategorized-en/undefined-index-quick-fix-in-drupal7-error-reporting
   * The code used to be..
   * $imageUrl = file_create_url($vars['node']->field_image['und'][0]['uri']);
   * And it shows error; Undefined index: und ...
  */
}
function zen_sub_preprocess_views_view_fields(&$vars, $hook) {
  //Get content url
  global $base_url;
  $nid = $vars['row']->nid;
  $vars['path'] = drupal_get_path_alias($base_url."/node/".$nid);

  //Get image url
  $node = node_load($nid);
  $vars['uri'] = _zen_sub_getImageUriByNode($node);
}
function _zen_sub_getImageUriByNode ($node) {
  $imageObject = field_get_items('node', $node, 'field_image');
  $imageUrl = file_create_url($imageObject[0]['uri']);
  return render($imageUrl);
}

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function zen_sub_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function zen_sub_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function zen_sub_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */
