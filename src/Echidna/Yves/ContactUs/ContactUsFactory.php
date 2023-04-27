<?php

/**
 * @author Chandan Kumar <chandan.k@echidnainc.com>
 */

declare(strict_types = 1);

namespace Echidna\Yves\ContactUs;

use Echidna\Yves\ContactUs\Form\ContactUsForm;
use Spryker\Shared\Application\ApplicationConstants;
use Spryker\Yves\Kernel\AbstractFactory;
use Spryker\Yves\Kernel\Exception\Container\ContainerKeyNotFoundException;
use Symfony\Component\Form\FormFactory;
use Symfony\Component\Form\FormInterface;

/**
 * @method \Echidna\Yves\ContactUs\ContactUsConfig getConfig()
 */
class ContactUsFactory extends AbstractFactory
{
    /**
     * @return \Symfony\Component\Form\FormFactory
     * @throws ContainerKeyNotFoundException
     */
    public function getFormFactory(): FormFactory
    {
        return $this->getProvidedDependency(ApplicationConstants::FORM_FACTORY);
    }

    /**
     * @return \Symfony\Component\Form\FormInterface
     * @throws ContainerKeyNotFoundException
     */
    public function createContactUsForm(): FormInterface
    {
        return $this->getFormFactory()->create(ContactUsForm::class);
    }
}
