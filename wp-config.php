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
define( 'DB_NAME', 'segredosdeamora' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
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
define( 'AUTH_KEY',         '%HC5u/N=5}#a#GlD!g]PqQtRN^GAJYu<Xb3ClS=M4:y#B PP:1h~0lGtICDe.$.~' );
define( 'SECURE_AUTH_KEY',  '^(x[$bIlOZql`I_i!#keedWwl5N3kU;Pv_T}c(7DN5ZL@.Onp,/]~ lR,6!<pZSJ' );
define( 'LOGGED_IN_KEY',    'K1%l1S*$$^y+A)lv(fzl@qJNMGP!NsF:MKPe4IYB[@b)C0xkONt]4D[f)pl;da`)' );
define( 'NONCE_KEY',        'udsd7S;G8N/W?2m`U%0(?%mAw$zP}A<_{,KXN-{Fu=kB@3+h;Q~]j1_N^&EGizWE' );
define( 'AUTH_SALT',        'JS5(d0/j X#E7K)y_]$a$<j8CbY^8O7EGzfATVZo(.MqND|YA4VN7~]P`P(4eBh3' );
define( 'SECURE_AUTH_SALT', 'Gu]%8[d#^;3w:Ij.MF&=<f U(9ju}>}: ph7ba`x n]0Ll6eJT{Gg,>u]%m+F5Y3' );
define( 'LOGGED_IN_SALT',   '}N@ >ESXO~%}VxqXJzHS*F2j=~&!3[zwiC[,_=RdRf;,YmCtf^!|2=e#67h*&ZBF' );
define( 'NONCE_SALT',       'G^ix%=+D+pIR,+b@Lk`5w`=zgNE-;?Q,ULiij31>}nQDM_3v.5?0N;@H0cr5g_WK' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
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

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
