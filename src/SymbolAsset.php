<?php
namespace kilyakus\widget\symbol;

class SymbolAsset extends \kilyakus\widgets\AssetBundle
{
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/widget-symbol'],'widget-symbol');
        parent::init();
    }
}
