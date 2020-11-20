<?php
namespace kilyakus\widget\symbol;

use Yii;
use kilyakus\widgets\Widget;

class Symbol extends Widget
{
    public function run()
    {
        $this->initSettings();
        echo $this->renderInput();
    }

    public function registerAssets()
    {
        $view = $this->getView();
        SymbolAsset::register($view);
    }

    protected function initSettings()
    {
        $this->registerAssets();
    }

    protected function renderInput()
    {
        return;
    }
}
