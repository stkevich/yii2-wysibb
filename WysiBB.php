<?php
namespace stkevich\wysibb;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

/**
 * Widget for visual editor WysiBB to yii2.
 *
 * @author Stas Kevich <st.kevich@gmail.com>
 */
class WysiBBWidget extends InputWidget
{
    /**
     * @var array wisybb.js options
     */
    public $clientOptions = [];

    /**
     * @var array options for html textarea
     */
    public $inputOptions = ['class' => 'form-control'];


    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (!isset($this->clientOptions['debug'])) {
            $this->clientOptions['debug'] = 'false';
        }
        if (!isset($this->clientOptions['buttons'])) {
            $this->clientOptions['buttons'] = 'bold,italic,underline,|,link,|,code,quote';
        }

    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerScript();

        if ($this->hasModel()) {
            print Html::activeTextarea($this->model, $this->attribute, $this->inputOptions);
        } else {
            print Html::textarea($this->name, $this->value, $this->inputOptions);
        }

    }

    /**
     * registration JS
     */
    private function registerScript()
    {
        $view = $this->getView();
        WysiBBAsset::register($view);

        $clientOptions = Json::encode($this->clientOptions);
        $js = new JsExpression("jQuery('#{$this->options['id']}').wysibb($clientOptions);");
        $this->view->registerJs($js);
    }
}