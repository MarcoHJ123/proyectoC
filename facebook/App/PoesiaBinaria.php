<?php

namespace App;

class PoesiaBinaria
{
  protected $fb;
  protected $helper;
  protected $loggedUser;
  protected $name;
  protected $email;
  protected $id;

  function __construct()
  {
    session_start();
    $this->name = (isset($_SESSION['name']))?$_SESSION['name']:false;
    $this->id = (isset($_SESSION['id']))?$_SESSION['id']:false;
  }

  public function facebookInit()
  {
    $appId = Config::get('appId');
    $appSecret = Config::get('appSecret');
    $this->fb = new \Facebook\Facebook([
                 'app_id' => $appId,
                 'app_secret' => $appSecret,
                 'default_graph_version' => 'v2.6',
                 ]);
    $this->helper = $this->fb->getRedirectLoginHelper();
  }

  public function getLogin()
  {
    $_SESSION['more'] ='';
    $permissions = array();
    $loginUrl = $this->helper->getLoginUrl(Config::get('loginUrl'), $permissions);
    header('Location: '.$loginUrl);
    echo $loginUrl;
    die();
  }

  public function login()
  {
    $this->facebookInit();
    try {
      $at = (isset($_SESSION['accessToken']))?$_SESSION['accessToken']:false;
      if ($at)
    {
      $_SESSION['more'] = "Tengo el access token de antes.";
      $at = unserialize($at);
    }
      if (!$at)
    $at = $this->helper->getAccessToken();
      if (!$at)
    $this->getLogin();

      $this->loggedUser = $this->fb->get('/me', $at);
      $gu = $this->loggedUser->getGraphUser();

      $this->name = $gu->getName();
      $this->id = $gu->getId();
      $_SESSION['name'] = $this->name;
      $_SESSION['id'] = $this->id;
      $_SESSION['accessToken'] = $at;
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
      $intento = (isset($_SESSION['try']))?$_SESSION['try']:0;
      if ($intento<5)
    {
      $_SESSION['try']=$intento+1;
      $this->getLogin();
    }
      echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
      echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }
    return true;
  }

  public function getLoggedUser()
  {
    return $this->loggedUser;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getId()
  {
    return $this->id;
  }

  public function isLogged()
  {
    return ($this->id!=false);
  }

  public function logout()
  {
    if (isset($_SESSION['name']))
      unset($_SESSION['name']);
    if (isset($_SESSION['id']))
      unset($_SESSION['id']);
  }
};