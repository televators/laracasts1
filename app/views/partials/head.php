<?php use App\Core\App; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <title>Laracasts - The PHP Practitioner</title>
</head>
<body>
	<header>
		<h1><?= App::get( 'config' )[ 'info' ][ 'siteTitle' ]; ?></h1>
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="/coffee">Coffee</a></li>
				<li><a href="/users">Users</a></li>
			</ul>
		</nav>
	</header>
	<main>
