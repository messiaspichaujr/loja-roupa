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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'loja-messi' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@jzmC;PS]3oO_ko9J,L*>r:=/~--DpQrzM>;+.P_/R$)_uBmx[qJ(q-RTg4 @i~M' );
define( 'SECURE_AUTH_KEY',  '.psj0mHNpP$/ c|-$vlApULebnX9aUbWQ&o $g2+(YP[=iT*:kcuX3,[`cmSlk ]' );
define( 'LOGGED_IN_KEY',    'avKWk2jc!7_E0{WDv.XXaUgJwROJ@PQx%8F@#j}k{lD5UlpxU8aalT|z&?IYlS;v' );
define( 'NONCE_KEY',        'V2wz]B,Sz$^D.[%1{wVX|;_?B^A+& )zM.<%LZo{Qwk+Wc|5 80)c$1]^]?U<cI}' );
define( 'AUTH_SALT',        'Rl>1x]bd*l%/Zpg2x_%!V-}$DI:BOn4%ULmPUQW~^wQ||` u!dvj68$vS#(54wz:' );
define( 'SECURE_AUTH_SALT', 'V%[G/^I/XZ04Bad2=-x[/4qQp#[%JG0olmbv|1!O+x.| _>=IQGe|LP/|_ zh=)<' );
define( 'LOGGED_IN_SALT',   'n~7Zuu5+ .ScxL&N|)=(&W<;^d_UE705uV/r{.iR{:XY^5TE-[U?(> =>AIB |5J' );
define( 'NONCE_SALT',       '1n{D~(J&vXeJ<$!C<Q;B#aEIYN|:WVDko.-dxwS~cT[[td}40>>s!_dP{psW4[hS' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'jvwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
