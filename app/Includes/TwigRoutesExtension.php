<?php

namespace App\Includes;

class TwigRoutesExtension extends \Twig_Extension
{
    /**
     * @var \Slim\Interfaces\RouterInterface
     */
    private $router;

    /**
     * @var string|\Slim\Http\Uri
     */
    private $uri;

    public function __construct($router, $uri)
    {
        $this->router = $router;
        $this->uri = $uri;
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('es_url_actual', array($this, 'isCurrentPath')),
        ];
    }

    public function isCurrentPath($name, $data = [])
    {
        $this->router->setBasePath("");
        $path_for = trim( $this->router->pathFor( $name, $data ), '/' );
        $path_uri = trim( $this->uri->getPath(), '/' );
        return $path_for === $path_uri;
    }

}
