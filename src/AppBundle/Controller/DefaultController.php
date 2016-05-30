<?php

namespace AppBundle\Controller;

use Facebook\Facebook;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template
     */
    public function indexAction()
    {
        $facebook = new Facebook([
            'app_id' => '796251190510155',
            'app_secret' => 'fe99b96f3fba85cfb0d11787da1e30f7',
            'default_graph_version' => 'v2.6',
        ]);

        $token = $facebook->getJavaScriptHelper()->getAccessToken();
        var_dump($token);

        return [];
    }
}
