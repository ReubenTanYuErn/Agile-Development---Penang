<?php
function _hash($password, $obscured = NULL, $algorithm = "sha1")
{
  
  $mode = in_array($algorithm, hash_algos());

  $salt = uniqid(mt_rand(), true);

  $salt = $mode ? hash($algorithm, $salt) : sha1($salt);

  $slen = strlen($salt);

  $slen = max($slen >> 3, ($slen >> 2) - strlen($password));
  
  $salt = $obscured ? _harvest($obscured, $slen, $password) : substr($salt, 0, $slen);
 
  $hash = $mode ? hash($algorithm, $password) : sha1($password);

  $hash = _scramble($hash, $salt, $password);
 
  $hash = $mode ? hash($algorithm, $hash) : sha1($hash);

  $hash = substr($hash, $slen);
  
  $hash = _scramble($hash, $salt, $password);
 
  return $obscured && $obscured !== $hash ? false : $hash;
}

function _scramble($hash, $salt, $password)
{
  $k = strlen($password); $j = $k = $k > 0 ? $k : 1; $p = 0; $index = array(); $out = ""; $m = 0;
  for ($i = 0; $i < strlen($salt); $i++)
  {
    $c = substr($password, $p, 1);
    $j = pow($j + ($c !== false ? ord($c) : 0), 2) % (strlen($hash) + strlen($salt));
    while (array_key_exists($j, $index))
      $j = ++$j % (strlen($hash) + strlen($salt));
    $index[$j] = $i;
    $p = ++$p % $k;
  }
  for ($i = 0; $i < strlen($hash) + strlen($salt); $i++)
    $out .= array_key_exists($i, $index) ? $salt[$index[$i]] : $hash[$m++];
  return $out;
}

function _harvest($obscured, $slen, $password)
{
  $k = strlen($password); $j = $k = $k > 0 ? $k : 1; $p = 0; $index = array(); $out = "";
  for ($i = 0; $i < $slen; $i++)
  {
    $c = substr($password, $p, 1);
    $j = pow($j + ($c !== false ? ord($c) : 0), 2) % strlen($obscured);
    while (in_array($j, $index))
      $j = ++$j % strlen($obscured);
    $index[$i] = $j;
    $p = ++$p % $k;
  }
  for ($i = 0; $i < $slen; $i++)
    $out .= $obscured[$index[$i]];
  return $out;
}


?>