<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'vagrant');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'vagrant');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l*FbgQ75hM]V xC{gK):6xg1nG(A6a+rq]5Gh,0Hzz&L$Es&,JP6-P|I!o6r!=kc');
define('SECURE_AUTH_KEY',  'dDR Q>|POQ!n,;W(WNCr22,_*7$!SD Jt4qy^<B/]>8YNyJ2h*^{/nF)a:z=Mo8D');
define('LOGGED_IN_KEY',    '{Mb9S[v/G_[$pT?K?upoO(<bX)A(1=7H`]8j]g(SmKH(mwYW%m*4Odv6h9~:2Y*R');
define('NONCE_KEY',        '1n$|{;VCjHd@Ob!S>ilo-^*$-{5I=E co,lUxb`RQ:x-_-y!u>!OTJNUTUNN31!W');
define('AUTH_SALT',        'vi$nuCQ4{P[}cyY9MFhZ/WXYXSU3+:#x!Iq#0&xCIa&c9iZYKOcyzX2-o55s7=gV');
define('SECURE_AUTH_SALT', 'mI/L$RLxrh<D7J 29Z`Enu];S[5cV>:S-;ZuF#- ?G5i5!vk/nW2:)jFV=,F$V3Q');
define('LOGGED_IN_SALT',   '}fI/u1U+Foxa|`Hv<omJBpKUe`V{6sC[W32&MH{M=qfp[qYZ:Apwg=~D7.G;sp6c');
define('NONCE_SALT',       'yB!Y`Sk)xCPc~wLBL_UVxq,=LMCB`@tm@_h]h*fr$=W)1>1K7,GFnAL^!uzJ3(Oq');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
