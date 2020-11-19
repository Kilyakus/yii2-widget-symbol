<?php
namespace kilyakus\widget\symbol;

use Yii;
use kilyakus\widgets\Widget;

class Symbol extends Widget
{
    public $pluginName = 'symbol';

    public function run()
    {
        $this->initSettings();
        echo $this->renderInput();
    }

    public function registerAssets()
    {
        $view = $this->getView();
        NaviAsset::register($view);

        $this->registerPlugin($this->pluginName, $this->id);
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
