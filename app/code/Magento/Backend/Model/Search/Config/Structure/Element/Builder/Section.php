<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Backend\Model\Search\Config\Structure\Element\Builder;

use Magento\Backend\Model\Search\Config\Structure\ElementBuilderInterface;
use Magento\Config\Model\Config\StructureElementInterface;

class Section implements ElementBuilderInterface
{
    /**
     * @inheritdoc
     */
    public function build(StructureElementInterface $structureElement)
    {
        $elementPathParts = explode('/', $structureElement->getPath());
        return ['section' => $elementPathParts[1]];
    }
}
