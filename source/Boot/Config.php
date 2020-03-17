<?php

/**Sistema d do Banco de Dados
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "fullstackphp");

/**Sistema de Urls
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.cafecontrol.com.br");
define("CONF_URL_TEST", "https://www.localhost/fullstack");

/**Sistema do Site
 * SITE
 */
define("CONF_SITE_NAME", "LuverControl");
define("CONF_SITE_TITLE", "Gerencie suas contas com o melhor café");
define("CONF_SITE_DESC",
    "A LuverControl é um gerenciador de contas simples, poderoso e gratuito. O prazer de tomar um 
    café e ter o controle total de suas contas.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "luver.com.br");
define("CONF_SITE_ADDR_STREET", "SP - Rua Guitis");
define("CONF_SITE_ADDR_NUMBER", "47");
define("CONF_SITE_ADDR_COMPLEMENT", "");
define("CONF_SITE_ADDR_CITY", "São Paulo");
define("CONF_SITE_ADDR_STATE", "SP");
define("CONF_SITE_ADDR_ZIPCODE", "02652-080");

/**Sistema de Redes Socias
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@LuverEventos");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@LuverEventos");
define("CONF_SOCIAL_FACEBOOK_APP", "626590460695980");
define("CONF_SOCIAL_FACEBOOK_PAGE", "upinside");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "robsonvleiteoficial");
define("CONF_SOCIAL_GOOGLE_PAGE", "107305124528362639842");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "103958419096641225872");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "patopreto19");
define("CONF_SOCIAL_YOUTUBE_PAGE", "upinside");

/**Sistema de Datas
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**Sistema de Senhas
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**Sistema de Templates
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "cafeweb");
define("CONF_VIEW_APP", "cafeapp");
define("CONF_VIEW_ADMIN", "cafeadm");

/**Sistema de Upload
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**Sistema de Imagens
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**Sistema de Envio de Email
 * MAIL
 */
define("CONF_MAIL_HOST", "br766.hostgator.com.br");
define("CONF_MAIL_PORT", "465");
define("CONF_MAIL_USER", "fsphp@luver.com.br");
define("CONF_MAIL_PASS", "jacare190359");
define("CONF_MAIL_SENDER", ["name" => "luver", "address" => "contato@luver.com.br"]);
define("CONF_MAIL_SUPPORT", "patopreto82@gmail.com");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "ssl");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");

/**Sistema de Pagamento
 * PAGAR-ME
 */
define("CONF_PAGARME_MODE", "test");
define("CONF_PAGARME_LIVE", "ak_live_7S3ycMcA16r08IBcgcQoaXlj8r4vek");
define("CONF_PAGARME_TEST", "ak_test_7S3ycMcA16r08IBcgcQoaXlj8r4vek");
define("CONF_PAGARME_BACK", CONF_URL_BASE . "/pay/callback");