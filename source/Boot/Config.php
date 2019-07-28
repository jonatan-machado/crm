<?php
/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "think");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "http://localhost/think");
define("CONF_URL_TEST", "http://localhost/think");
define("CONF_URL_ADMIN", "/admin");


/**
 * SITE
 */
define("CONF_SITE_NAME", "Think World");
define("CONF_SITE_TITLE", "Gerencia suas contas com o melhor café");
define("CONF_SITE_DESC", "O CafeControl é um gerenciador de contas simples, poderoso e gratuito. O prazer de tomar um café e ter o controle total de suas contas.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "thinkworld.com.br");

/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "@joninter");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "@joninter");
define("CONF_SOCIAL_FACEBOOK_APP", "jonatanmachado");
define("CONF_SOCIAL_FACEBOOK_PAGE", "thinkworldbr");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "jonatamachado");
define("CONF_SOCIAL_GOOGLE_PAGE", "");
define("CONF_SOCIAL_GOOGLE_AUTHOR", "");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "");
define("CONF_SOCIAL_YOUTUBE_PAGE", "");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "trigger");
define("CONF_MESSAGE_INFO", "info");
define("CONF_MESSAGE_SUCCESS", "success");
define("CONF_MESSAGE_WARNING", "warning");
define("CONF_MESSAGE_ERROR", "error");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "cafecontrol");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "../storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "");
define("CONF_MAIL_PORT", "");
define("CONF_MAIL_USER", "");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "Jonatan Machado", "address" => "contato@thinkworld.com.br"]);
define("CONF_MAIL_SUPPORT", "suporte@thinkworld.com.br");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");