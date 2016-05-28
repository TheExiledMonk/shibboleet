<?PHP
namespace shibboleet\plugin\template;

function __plugin_init ()
{
}

function get_header ( $title, $menu=true )
{
  $header  = "<!DOCTYPE html>";
  $header .= "<html>";
  $header .= "<head>";
  $header .= '<meta charset="UTF-8">';
  $header .= "<title>$title :: " . SL_TITLE . "</title>";
  $header .= '<link href="' . DIR_RESOURCES . 'style.css" rel="stylesheet" type="text/css" />';
  $header .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
  $header .= "</head>";
  $header .= "<body>";
  $header .= '<div id="wrapper">';
  $header .= '<div id="header">';
  $header .= '<h1>' . SL_NAME . '</h1>';
  $header .= '</div>';
  if ( $menu == true )
  {
    $header .= '<div id="menu">';
    $header .= get_menu ();
    $header .= '</div>';
  }
  $header .= '<div id="body">';
  return $header;
}

function get_footer ()
{
  $footer  = '</div>';
  $footer .= '<div id="footer">';
  $footer .= '<p>Built using Shibboleet</p>';
  $footer .= '</div>';
  $footer .= '</div>';
  $footer .= '</body>';
  $footer .= '</html>';
  return $footer;
}

function get_menu ()
{
  $menu  = '<a href="/">Dashboard</a>';
  $menu .= '<a href="/?p=settings-users">Users</a>';
  return $menu;
}