<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Foundation | Welcome</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
@yield('menu')
</ul>
</div>
</div>

<div class="callout large primary">
<div class="row column text-center">
<h1>Awesome Blog</h1>
<h2 class="subheader">Hello</h2>
</div>
</div>

<div class="row medium-8 large-7 columns">
@yield('content')
<div class="callout">
<ul class="menu simple">
<!-- <li><a href="#">Author: Mike Mikers</a></li>
<li><a href="#">Comments: 3</a></li>
 --></ul>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
