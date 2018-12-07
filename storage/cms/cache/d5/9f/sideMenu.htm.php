<?php 
class Cms5c019d2916e32456152716_ce0e0bdee2fccdf5867fc77c640a1c5eClass extends Cms\Classes\PartialCode
{
public function onEnd()
{
    $this['parentPage'] = explode("/", substr($this->page->url,1));
    $this['getMenu'] = $this['parentPage'][0];
    $this['subMenu'] = ucwords(str_replace("-"," ",$this['getMenu']));
}
}
