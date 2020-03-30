<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'bigatello');

/* Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/* Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/* Nome do host do MySQL */
define('DB_HOST', 'localhost');

/* Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/* O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'nU-qGiL,0Bz /.Yly2isvCXv0pT-tXSVQu#[({z*P,BHwEiwg:ql4J~4K3gA49Q`');
define('SECURE_AUTH_KEY', 'C*5R2V.%>,sV$kqU6? !jHMJ+M3~Y)``?IO~1Pl;EOD+3EBvOKY;VIS#C:}`.gvB');
define('LOGGED_IN_KEY', '1Rr}]gqCo;[ybXWNsi!_g`s7+;~u.rkdTe?> Bmt^DjQT#_#m1HFdW ,a;JT*?jv');
define('NONCE_KEY', '}@Hgn++b&**-6c|Gm~Ure5/3PJ05IB(zaJBg5Y6rrf>I}m=I:7h>LxXTce&67bZZ');
define('AUTH_SALT', '3yt-_{Kz[6#)06AadHTEF1vm2|I=Ucw[3^]PLiKV/j5S}|g4Y+#Z.<$C 2Z}p#:A');
define('SECURE_AUTH_SALT', '8GBz&<~=j@;nijSKgI KjRQ953~E|m&L6=EN65{vr sU3Ek@_b5$ X{/c1PZ3e/Z');
define('LOGGED_IN_SALT', '1*>S/2oC,mti}[kg}3bQgd&,/6z,KgKb/qaT&e%fQ3QR^q5K=;cRk]XnKL@i4$l`');
define('NONCE_SALT', ',potGjP*:`h>&hp^M:V~K9m5WmxInKWJ](@J33u;qCC[#T:hmv)DI^B?_9Wi1|xO');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'tbi_7965_oius_';

/*
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/* Caminho absoluto para o diretório WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
