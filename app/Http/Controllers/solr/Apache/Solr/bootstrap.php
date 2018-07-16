<?php
// This script contains the solr server configurations

namespace App\Http\Controllers\solr;

/* Domain name of the Solr server */
// define('SOLR_SERVER_HOSTNAME', '10.20.6.69');
define('SOLR_SERVER_HOSTNAME', 'localhost');

/* Whether or not to run in secure mode */
// define('SOLR_SECURE', true);
define('SOLR_SECURE', false);

/* HTTP Port to connection */
define('SOLR_SERVER_PORT', ((SOLR_SECURE) ? 8443 : 8983));

/* Path to solr core */
// $core='your core';
$core='gov_orgs';
define('SOLR_SERVER_PATH', '/solr/'.$core);

/* Maximum number of rows fetched */
// configure this in config/solr.php
// define('RESPONSE_ROWS', 10);

/* HTTP Port to connection */
// configure this in config/solr.php
// define('SOLR_WRITER_TYPE', 'json');

/* HTTP Basic Authentication Username */
define('SOLR_SERVER_USERNAME', 'admin');

/* HTTP Basic Authentication password */
define('SOLR_SERVER_PASSWORD', 'changeit');

/* HTTP connection timeout */
/* This is maximum time in seconds allowed for the http data transfer operation. Default value is 30 seconds */
define('SOLR_SERVER_TIMEOUT', 10);

/* File name to a PEM-formatted private key + private certificate (concatenated in that order) */
define('SOLR_SSL_CERT', 'certs/combo.pem');

/* File name to a PEM-formatted private certificate only */
define('SOLR_SSL_CERT_ONLY', 'certs/solr.crt');

/* File name to a PEM-formatted private key */
define('SOLR_SSL_KEY', 'certs/solr.key');

/* Password for PEM-formatted private key file */
define('SOLR_SSL_KEYPASSWORD', 'StrongAndSecurePassword');

/* Name of file holding one or more CA certificates to verify peer with*/
define('SOLR_SSL_CAINFO', 'certs/cacert.crt');

/* Name of directory holding multiple CA certificates to verify peer with */
define('SOLR_SSL_CAPATH', 'certs/');

?>