<?php

/**
 * @author Chandan Kumar <chandan.k@echidnainc.com>
 */

declare(strict_types=1);

namespace Echidna\Yves\ContactUs\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class ContactUsRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    /**
     * @var string
     */
    public const ROUTE_CONTACT_US_INDEX = 'contact-us-index';

    /**
     * Specification:
     * - Adds Routes to the RouteCollection.
     *
     * @api
     *
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        return $this->addContactUsIndexRoute($routeCollection);
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    private function addContactUsIndexRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/contact-us', 'ContactUs', 'ContactUs', 'indexAction');
        $route = $route->setMethods(['GET', 'POST']);
        $routeCollection->add(static::ROUTE_CONTACT_US_INDEX, $route);

        return $routeCollection;
    }
}
