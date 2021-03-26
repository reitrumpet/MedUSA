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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'medusa' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'b$@eUlK{S|9Ow:/s.FuTpMzKq+oq/+=xa-)}p+)%F,wD):lufiw LG=APj:`P@Kc' );
define( 'SECURE_AUTH_KEY',  'h3Kdo*UYewH;c~4#d=uY!)1r<k`kx9XUvRI5em_N^YY-xr=E Fcz&6>Hff5+.Qjd' );
define( 'LOGGED_IN_KEY',    '@L)/W-Ee0q(h`qt&,?v.!$ZATd1Y,IJ/X,E2Ad+q*x~kM2aK8taP>:&L.12ioswQ' );
define( 'NONCE_KEY',        'ySc`a_OyE]4@>WePih1tTZSn]k`qmR;VXS7:P,TkhUHmit,Ue]=G=[QL0.%D*b X' );
define( 'AUTH_SALT',        'g*YT]U$mrLa**8b^_R&u%_Spmh<|x)U${ukLP+LuyP{ergw5TJQA3h$[0X]Fre z' );
define( 'SECURE_AUTH_SALT', '[|Ld/%.N({h2}@KPs&MVvN(GdPr91xhuwH[*h[#hFk7_geo%b[tOSXFEX4ka%3:$' );
define( 'LOGGED_IN_SALT',   'w+/DM/&#:*obUBoxpeP6(suiqQ:u#TzD_X;,aDq*nx#M2oB;F[ZPF6X^8^)?^#ul' );
define( 'NONCE_SALT',       'y|@([^G8I8eZq=~(6~RoDm *1WiTq0t@r:q1`hY:1q:&HX/__%exIwdQ}AieBU^u' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
