<?php

namespace Codiac\Advertisement\Model\Config\Source;
class pattern implements \Magento\Framework\Option\ArrayInterface
{
	

    /**
     * @param \Magento\Cms\Model\Block $blockModel
     */
    public function __construct(
    	
    	) {
    	
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
    	
    	$blocks = array();
    	
        array_push($blocks, array(
                'value' => 'Horizontal',
                'label' => 'Horizontal',
        ));
        array_push($blocks, array(
            'value' => 'Square',
            'label' => 'Square',
        ));
        return $blocks;
    }
}