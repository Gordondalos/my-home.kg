<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.util.number.number_extractor' shared service.

return $this->services['prestashop.core.util.number.number_extractor'] = new \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor(${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->load('getPropertyAccessorService.php')) && false ?: '_'});
