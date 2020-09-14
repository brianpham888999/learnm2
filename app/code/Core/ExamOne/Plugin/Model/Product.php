<?php


namespace Core\ExamOne\Plugin\Model;

class Product
{
    public function beforeGetFinalPrice(\Magento\Catalog\Model\Product $subject, $qty = null)
    {
        $qty = (float)5;
        return $qty;
    }

/*    public function aroundGetFinalPrice(\Magento\Catalog\Model\Product $subject,callable $proceed, $qty = null)
    {
        $qty = (float)5;
        $proceed();
        return (float)100 * $qty;
    }*/


    public function afterGetFinalPrice(\Magento\Catalog\Model\Product $subject, $result, $qty)
    {
        return (float)100 * $qty;
    }
}
