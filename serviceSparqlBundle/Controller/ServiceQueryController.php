<?php

namespace mi2s\serviceSparqlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use mi2s\nadirBundle\Controller\Logger4Php;

class ServiceQueryController extends Controller
{
	
	private $logger  ; 
	private $PATH    ;
	private $CONF_APACHE_PHP4  ; 
	static  $URL_JENA      = "http://localhost:3031/rdf/sparql" ;
	
	public function __construct() {}
	
    public function indexAction($name)
    {
    	
    	$result = new ServiceQueryController('select * from dataSets') ;
    	$result->sql = 'ssss' ; 
    	$res = $this->get('sparql_service.logger4log')->apache4Logger('/tmp/sf2.log','nadir logger','message warnig ') ; 
        return new Response('ok'.$res) ; 
    }
    
	/*
	 * un function using php4logger 
	 */    
    
    public function apache4Logger($path,$label,$msg){
    	
    	    \Logger::configure(array(
        		'rootLogger' => array(
            'appenders' => array('default'),
        		),
        	'appenders' => array(
            'default' => array(
                'class' => 'LoggerAppenderFile',
                'layout' => array(
                    'class' => 'LoggerLayoutSimple'
                ),
                'params' => array(
                	'file' =>  $path,
                	'append' => true
                )
            )
        )
    	));
    	    
    	$logger  = \Logger::getLogger($label) ;
    	$logger->info($msg);
    }
    
    public function putFileOnServer($file){
    	
    }
    
    
}