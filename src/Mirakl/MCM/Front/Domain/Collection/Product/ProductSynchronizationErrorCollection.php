<?php
namespace Mirakl\MCM\Front\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizationError;

/**
 * @method ProductSynchronizationError current()
 * @method ProductSynchronizationError first()
 * @method ProductSynchronizationError get($offset)
 * @method ProductSynchronizationError offsetGet($offset)
 * @method ProductSynchronizationError last()
 */
class ProductSynchronizationErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductSynchronizationError::class;
}