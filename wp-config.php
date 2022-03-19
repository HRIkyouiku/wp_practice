<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'w_practice' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&[G;Q-!S3dec7WIO?(*m7Njl2Jyj5E[57YZr9i?8Aj%5#_xdA su7nzCk_u`nGq-' );
define( 'SECURE_AUTH_KEY',  'z/tpdP>tLldw9siQ+f} .^,5Oj?f~{H;nJ50+du/y~~/RoisB |yBGM^(4f?0y($' );
define( 'LOGGED_IN_KEY',    'Ux[@8Es5,4u#{N=+sC~Hi=oG@TQ}.,:v`!,u&2=($%F$M;lRUJJ.*<bqW|<_`I%1' );
define( 'NONCE_KEY',        'DlU%2d6m=VhcmhH,x%W 6_M,QF^1W9TDQ<51Zz?^F.x#PK!:R4fz<N WHz2Giy;L' );
define( 'AUTH_SALT',        '6rQ)JzdhgODj5M/|9r$@7H:.*1;OuJa%sv!`jLQ8R#|`lPr<XHi5Jn,hf1pz/Uat' );
define( 'SECURE_AUTH_SALT', 'k:&f;Hn+CSxUfR]mP?jBzk>EWo:gQ1_Mu{,0Fx#Bg5aGbtH;XHR6z++jb`m:jD F' );
define( 'LOGGED_IN_SALT',   'pqnh?+dAyn;2}O80TKd,&Se?jPU,zX}mrCVn&h~7}{sdL%TNutYZ.>vY=k}oXP=8' );
define( 'NONCE_SALT',       'b8f7,~B99MC`R`4 CH6KU!njj8N9 CMSOV{%C@,Z~>k_j+P|neyfa7tDr03AVMSW' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
