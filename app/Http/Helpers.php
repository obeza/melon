<?php

namespace App\Http;

class Helpers {

  public static function checkIsValid($valid) {
    if ($valid)
      return "is-invalid";
    return "";
  }

}

?>