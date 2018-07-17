<?php
namespace App;

class Config
{
  protected static $cfg = array('appId' => "648732662168277",
                'appSecret' => "9a1ff7ef7265be977ebbafa1cbd2fe90");

  public static function get($ent)
  {
    if (isset(self::$cfg[$ent]))
      return self::$cfg[$ent];
    return null;
  }

}?>
