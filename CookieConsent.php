<?php
namespace easyrider7522\cookieconsent;

use yii\base\Widget;


class CookieConsent extends Widget
{
    public $lang = 'en';
    
    public $options = [];
    
    public $optionsJs = false;
    
    
    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->registerClientScript();
    }
    
    
    /**
     * Registers the required css/js
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        
        $jsObject = $this->optionsJs ?
                    $this->optionsJs :
                    ( empty( $this->options ) ? '{}' : json_encode( $this->options ));
        
        $view->registerJs( "window.addEventListener(\"load\",function(){window.cookieconsent.initialise({$jsObject})});", $view::POS_HEAD, 'cookieconsent-starter' );
        
        CookieConsentAsset::register( $view );
    }
}
