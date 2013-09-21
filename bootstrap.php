<?php
define('SP', realpath(__DIR__) . '/');
define('CP', SP . 'config/');
define('MP', SP . 'module/');

function __autoload($className)
{
    require(SP . 'class/' . $className . '.php');
}

/* utils. */
function dump()
{
    foreach(func_get_args() as $value)
    {
        echo "<pre>" . print_r($value, TRUE) . "</pre>\n";
    }
}

/**
 * Wraps around $_SESSION
 *
 * @param string $name name of session variable to set
 * @param mixed $value value for the variable. Set this to null to
 *   unset the variable from the session.
 *
 * @return mixed value for the session variable
 */
function session($name, $value = null)
{

  static $session_active = false;

  // ref: stackoverflow.com/questions/3788369/how-to-tell-if-a-session-is-active/7656468#7656468
  if ($session_active === false) {

    if (($current = ini_get('session.use_trans_sid')) === false)
      error(500, 'Calls to session() requires [session.use_trans_sid] to be set');

    $test = "mix{$current}{$current}";

    $prev = @ini_set('session.use_trans_sid', $test);
    $peek = @ini_set('session.use_trans_sid', $current);

    if ($peek !== $current && $peek !== false)
      session_start();

    $session_active = true;
  }

  if (func_num_args() === 1)
    return (isset($_SESSION[$name]) ? $_SESSION[$name] : null);

  if ($value === null)
    unset($_SESSION[$name]);
  else
    $_SESSION[$name] = $value;
}

/**
 * Wraps around $_COOKIE and setcookie().
 *
 * @param string $name name of the cookie to get or set
 * @param string $value optional. value to set for the cookie
 * @param integer $expire default 1 year. expiration in seconds.
 * @param string $path default '/'. path for the cookie.
 *
 * @return string value if only the name param is passed.
 */
function cookie($name, $value = null, $expire = 31536000, $path = '/') {
  if (func_num_args() === 1)
    return (isset($_COOKIE[$name]) ? $_COOKIE[$name] : null);
  setcookie($name, $value, time() + $expire, $path);
}
