<?php


namespace Core\ExamOne\Plugin\Model;

class Product
{
/*  public function beforeGetFinalPrice(\Magento\Catalog\Model\Product $subject, $result, $qty = null)
    {
        return $result;
    }*/

    public function aroundGetFinalPrice(\Magento\Catalog\Model\Product $subject,callable $proceed, $qty = null)
    {
        $qty = (float)5;
        $proceed();
        return (float)100 * $qty;
    }


    /*public function afterGetFinalPrice(\Magento\Catalog\Model\Product $subject, $result, $qty)
    {
        if(isset($qty)) $qty = 1;
        return (float)100 * $qty;
    }*/
}
