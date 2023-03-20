<?php

declare(strict_types=1);

/*
 * This file is part of a CloudFront Contao Bundle
 *
 * @copyright  Dirk Piethah 2022..2023
 * @author     Dirk Piethwn (BugBuster)
 * @package    CloudFront
 * @license    LGPL-3.0-or-later
 * @see        https://github.com/Piethan/contao-cloudfront
 */


// src/ContaoManager/Plugin.php
namespace Piethan\CloudFrontBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\CloudFrontBundle;
use SomeVendor\CloudFrontBundle\CloudFrontBundle;

class Plugin implements BundlePluginInterface
{
public function getBundles(ParserInterface $parser): array
{
return [
BundleConfig::create(CloudFrontBundle::class)
->setLoadAfter([CloudFrontBundle::class]),
];
}
}