<?php
/**
* Emanon Free child function
*/

function enqueue_parent_css() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_css' );

//子テーマ用のビジュアルエディタースタイル
add_editor_style( 'lib/css/editor-style.css' );

//Emanon Pro 子テーマ用の関数を以下に記述