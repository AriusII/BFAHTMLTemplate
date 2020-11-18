<?PHP
  function checkAnum($value) {
    $checkit = preg_match("/^[a-zA-Z0-9]+$/",$value);
    if($checkit) {
      return true;
    }
    else {
      return false;
    }
  }

  function checkIP($value) {
    $checkit = preg_match("/^[0-9\*]{1,3}+\.[0-9\*]{1,3}+\.[0-9\*]{1,3}+\.[0-9\*]{1,3}+$/",$value);
    if($checkit) {
      return true;
    }
    else {
      return false;
    }
  }

  function checkName($value) {
    $checkit = preg_match("/^[a-zA-Z0-9[:space:]]+$/",$value);
    if($checkit) {
      return true;
    }
    else {
      return false;
    }
  }
  
  function checkPwd($value) {
    $checkit = preg_match("/^[a-zA-Z0-9[:space:]]+$/",$value);
    if($checkit) {
      return true;
    }
    else {
      return false;
    }
  }
  
  function checkMail($string) {
    if(preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z]{2,4}$/", $string)) {
      return true;
    }
    else { return false; }
  }
  
  function checkInt($value) {
    $checkit = preg_match("/^[0-9]+$/",$value);
    if($checkit) {
      return true;
    }
    else {
      return false;
    }
  }