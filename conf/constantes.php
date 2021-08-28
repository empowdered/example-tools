<?php

define("PATH_TO_REQUEST", "" . $_SERVER['DOCUMENT_ROOT'] . "");
define("USER_TOKEN","plaza.construccion@gmail.com");
define("PASS_USER","1234");
//backend de authbeta, segun tabla propiedad en BD
/*
define("MS_ESIGN_AUTH_SERVICE_GET_TOKEN","http://localhost:8080/esign-auth-service/rest-services/usuario/token");
define("MS_ESIGN_AUTH_SERVICE_LOGIN_BY_DOC","http://localhost:8080/esign-auth-service/rest-services/usuario/loginbydocument");
define("MS_EMAIL_SERVICE_SEND_EMAIL","https://emailservice.qa-esign.cl/esign-email-service/rest-services/email/sendEmail");
define("ESIGNER_CONFIGURACION_CERTIFICADOS_WSDL","http://10.101.2.18:8180/SignServerEsign/WSConsultaConfiguracion");
define("MS_AUTH_SERVICE_FIND_BY_DOCUMENT","http://localhost:8080/authservice/rest-services/usuario/findbydocument");
define("MS_ESIGN_AUTH_SERVICE_GET_TOKEN_EMAIL","http://localhost:8080/authservice/rest-services/usuario/tokenCertificados");
define("MS_ESIGN_AUTH_SERVICE_GET_CERTIFICATE","http://localhost:8080/authservice/rest-services/certificado/consultaConfiguracion");
define("MS_ESIGN_AUTH_SERVICE_GET_CERTIFICATE_BY_EMAIL","http://localhost:8080/rest-services/certificado/consultaConfiguracionByEmail");
define("URL_CHALENGE", "http://qa.checkmiid.cl:8080/BackendValidacion/WSValidacionChallenge");
define("URL_SOLICITUD","http://ra-qa.e-sign.cl:8180/esign-bs/WSCreaSolicitudBS");
define("URL_DESCARGA_CERTIFICADO_PIN","http://10.101.2.18:8180/SignServerEsign/WSDescargaCertificadoConfPinFirma");
define("MS_ESIGN_AUTH_SERVICE_GET_CERTIFICATE_BY_CLIENT","http://localhost:8080/authservice/rest-services/certificado/consultaConfiguracionByIdCliente");
define("URL_DESCARGA_CERTIFICADO","http://10.101.2.18:8180/SignServerEsign/WSDescargaCertificadoConf");
 * 
 *  */ 
$constantesAuthbeta = array(
    0  =>array(
      'TYPE' => 'REST', 
      'MS_ESIGN_AUTH_SERVICE_GET_TOKEN' => 'http://localhost:8080/esign-auth-service/rest-services/usuario/token',),
    1 =>array(    
         'TYPE' => 'REST', 
     'MS_ESIGN_AUTH_SERVICE_LOGIN_BY_DOC' => 'http://localhost:8080/esign-auth-service/rest-services/usuario/loginbydocumenthttp://localhost:8080/esign-auth-service/rest-services/usuario/loginbydocument',),
    2 =>array(    
         'TYPE' => 'REST', 
     'MS_EMAIL_SERVICE_SEND_EMAIL' => 'https://emailservice.qa-esign.cl/esign-email-service/rest-services/email/sendEmail',),
    3 =>array(    
         'TYPE' => 'SOAP', 
     'ESIGNER_CONFIGURACION_CERTIFICADOS_WSDL' => 'http://10.101.2.18:8180/SignServerEsign/WSConsultaConfiguracion',),
    4 =>array(    
         'TYPE' => 'REST', 
     'MS_AUTH_SERVICE_FIND_BY_DOCUMENT' => 'http://localhost:8080/authservice/rest-services/usuario/findbydocument',),
    5 =>array(    
         'TYPE' => 'REST', 
     'MS_ESIGN_AUTH_SERVICE_GET_TOKEN_EMAIL' => 'http://localhost:8080/authservice/rest-services/usuario/tokenCertificados',),
    6 =>array(    
         'TYPE' => 'REST',
     'MS_ESIGN_AUTH_SERVICE_GET_CERTIFICATE' => 'http://localhost:8080/authservice/rest-services/certificado/consultaConfiguracion',),
    7 =>array(    
         'TYPE' => 'REST',
     'MS_ESIGN_AUTH_SERVICE_GET_CERTIFICATE_BY_EMAIL' => 'http://localhost:8080/rest-services/certificado/consultaConfiguracionByEmail',),
    8 =>array(    
         'TYPE' => 'REST',
     'URL_CHALLENGE' => '"http://qa.checkmiid.cl:8080/BackendValidacion/WSValidacionChallenge',),
    9 =>array(    
         'TYPE' => 'REST',
     'URL_SOLICITUD' => 'http://ra-qa.e-sign.cl:8180/esign-bs/WSCreaSolicitudBS',),
    10 =>array(    
         'TYPE' => 'SOAP',
     'URL_DESCARGA_CERTIFICADO_PIN' => 'http://10.101.2.18:8180/SignServerEsign/WSDescargaCertificadoConfPinFirma',),
    11 =>array(    
         'TYPE' => 'SOAP',   
     'MS_ESIGN_AUTH_SERVICE_GET_CERTIFICATE_BY_CLIENT' => 'http://localhost:8080/authservice/rest-services/certificado/consultaConfiguracionByIdCliente',),
    12 =>array(    
         'TYPE' => 'SOAP',
     'URL_DESCARGA_CERTIFICADO' => 'http://10.101.2.18:8180/SignServerEsign/WSDescargaCertificadoConf',),
);