<?php
require_once('inc/supports.php');
require_once('inc/assets.php');
require_once('inc/apparence.php');
require_once('inc/menus.php');
require_once('inc/images.php');
require_once('inc/style.php');
require_once('inc/query/posts.php');
require_once('inc/query/bootcamp.php');

function hollycamp_icon(string $name):string {
    $SpriteUrl= get_template_directory_uri() . '/assets/sprite.14d9fd56.svg';
    return <<<HTML
    <svg class="icon"><use xlink:href="{$SpriteUrl}#{$name}"></use></svg>
    HTML;
}

function hollycamp_paginate(): string {
    return '<div class="pagination">' . paginate_links(['prev_text' => hollycamp_icon('arrow'), 'next_text' => hollycamp_icon('arrow')]) . '</div>';
}