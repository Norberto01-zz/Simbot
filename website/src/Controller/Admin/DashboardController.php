<?php

namespace App\Controller\Admin;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller used to manage blog contents in the backend.
 *
 * Please note that the application backend is developed manually for learning
 * purposes. However, in your real Symfony application you should use any of the
 * existing bundles that let you generate ready-to-use backends without effort.
 *
 * @Route("/admin")
 * @Security("has_role('ROLE_ADMIN')")
 */
class DashboardController extends Controller
{
    /**
     * @Route("/", name="admin_index")
     * @Method("GET")
     */
    public function index()
    {
        $this->redirect('/admin/dashboard');
    }

    /**
     * @Route("/dashboard", name="admin_dashboard")
     */
    public function dashboard()
    {

        return $this->render('admin/dashboard/index.html.twig');
    }


}
