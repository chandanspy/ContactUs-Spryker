<?php

/**
 * @author Chandan Kumar <chandan.k@echidnainc.com>
 */

declare(strict_types = 1);

namespace Echidna\Yves\ContactUs\Controller;

use Spryker\Yves\Kernel\Controller\AbstractController;
use Spryker\Yves\Kernel\View\View;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Echidna\Yves\ContactUs\ContactUsFactory getFactory()
 */
class ContactUsController extends AbstractController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Spryker\Yves\Kernel\View\View
     */
    public function indexAction(Request $request): View
    {
        $contactUsForm = $this->getFactory()->createContactUsForm()->handleRequest($request);
        $templateData = [];
        $templateData['contactUsForm'] = $contactUsForm->createView();
        if ($contactUsForm->isSubmitted() && $contactUsForm->isValid()) {
            $formData = $contactUsForm->getData();
        }

        return $this->view(
            $templateData,
            [],
            '@ContactUs/views/Form/index.twig',
        );
    }
}
