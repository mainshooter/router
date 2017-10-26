<?php

  class Router {
    private $url;
    private $path;
    private $controller;
    private $method;
    private $parameters;

    private $mode;
    // Mode contains how we want to the Router to behave

    /**
     * Runs when the class instancieerd
     * It sets the url and our path
     */
    public function __construct() {
      $indexLocation = $_SERVER['SCRIPT_NAME'];
      // Contains the location of the index.php

      $indexLocation = str_replace('index.php', '', $indexLocation);
      // To remove the index.php and get our current location
      $this->url = $indexLocation;

      $path = str_replace($indexLocation, '', $_SERVER['REQUEST_URI']);
      $this->path = $path;
      // Contains the path of the url without all the things we don't need, like http://localhost/

      $_SERVER['REQUEST_URI'];
      // Contains the full url
    }

    /**
     * Sets the mode of the Router
     * @param string $mode The mode is by default default, you can also enable that you onyl whant to use one router
     */
    public function setMode($mode = 'default') {
      switch ($mode) {
        case 'one-controller':
          $this->mode = 'default';
          break;
        case 'default':
          $this->mode = 'default';
          break;

        default:
          $this->mode = 'default';
          break;
      }
    }

    public function routerDebug() {
      echo '<div style="font-size: 1.6em;padding: 1em;">';
        echo "<h2 style='padding: 0; margin: 4px;'>Router debug</h2>";
        echo "Url: " . $this->url;
        echo "<br>";
        echo "Path: ";
        echo "<pre>";
          var_dump($this->path);
        echo "</pre>";
        echo "<br>";
        echo "Controller: " . $this->controller;
        echo "<br>";
        echo "Methode: " . $this->method;
        echo "<br>";
        echo "Parameters: ";
        echo "<pre>";
        var_dump($this->parameters);
        echo "</pre>";
        echo "</br>";
        echo "Custom URLs";
        echo "<pre>";
          var_dump($this->customURLs);
        echo "</pre>";
      echo "</div>";
    }
  }

?>
