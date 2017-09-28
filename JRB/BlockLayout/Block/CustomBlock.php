<?php
namespace JRB\BlockLayout\Block;
 
class CustomBlock extends \Magento\Framework\View\Element\Template
{
    public function getCustomTemplateTxt()
    {
        return 'My first modules with "custom block, layout, template and controller"';
    }
}