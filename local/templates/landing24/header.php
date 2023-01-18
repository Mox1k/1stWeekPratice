<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title><? $APPLICATION->ShowTitle()?></title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/dist/css/style.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
	<?
		$APPLICATION->ShowHead();
	?>
</head>
<body class="is-boxed has-animations">

<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							<a href="index.php">
								<img class="header-logo-image" src="<?=SITE_TEMPLATE_PATH?>/assets/dist/images/logo.svg" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        
</body>