<?php

/**
 * @author Chandan Kumar <chandan.k@echidnainc.com>
 */

namespace Echidna\Yves\ContactUs;

use Spryker\Shared\Kernel\Container\GlobalContainer;
use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Symfony\Component\Form\FormFactory;

class ContactUsDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @var string
     */
    protected const SERVICE_FORM_FACTORY = 'form.factory';

    /**
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getFormFactory(): FormFactory
    {
        return (new GlobalContainer())->get(static::SERVICE_FORM_FACTORY);
    }
}
