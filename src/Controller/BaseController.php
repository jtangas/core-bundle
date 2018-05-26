<?php
/**
 * Created by PhpStorm.
 * User: jtangas
 * Date: 5/25/18
 * Time: 8:57 PM
 */

namespace Jtangas\CoreBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{
    public function handleRequest($service, $method, ...$args)
    {
        if (method_exists($service, $method)) {
            return $service->{$method}(...$args);
        }
    }

    public function parseRequest(Request $request)
    {

    }
}