<?php
namespace easyrider7522\cookieconsent;

use yii\base\Widget;


class CookieConsent extends Widget
{
	public $lang = 'en';
	
	public $options = [
		'palette'	=> [
			'popup'		=> [
				'background'	=> '#237afc',
			],
			'button'	=> [
				'background'	=> '#fff',
				'text'			=> '#237afc',
			],
		],
		'theme'		=> 'classic',
		'position'	=> 'bottom-right',
		'content'	=> [
			'message'	=> 'Ez az oldal is sütiket használ, aminek a tényét az EU-s törvények alapján jelezni kell a felhasználók felé.',
			'dismiss'	=> 'Értem',
			'link'		=> 'Sütikről',
			'href'		=> 'https://hu.wikipedia.org/wiki/HTTP-s%C3%BCti',
		],
	];
	
	
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
        
		$code = 'window.addEventListener("load",function(){window.cookieconsent.initialise(' . json_encode( $this->options ) . ')});'
		
        $view->registerJs( $code, 'POS_HEAD', 'cookieconsent-start' );
        
        CookieConsentAsset::register( $view );
    }
}
