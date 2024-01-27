<!DOCTYPE html><html lang="<?=config("app")->lang?>"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?=config("app")->name?></title><style>
:root{--color:#0096ff;}*{margin:0;padding:0;box-sizing:border-box;}
body{background:#f5f6fa;}#navbar{background:var(--color);height:2.2rem;}
#navbar li{list-style:none;}#navbar ul{float:right;}
#navbar a{text-decoration:none;color:white;position:relative;top:8.2px;padding:1em;}
#header{text-align:center;padding:19px;font-size:33px;}
#header a{text-decoration:none;border:1px solid var(--color);padding:2px;background:var(--color);
position:relative;top:3px;right:15px;color:white;margin-right:5px;}
</style></head><body><div class="wrap-container"><nav id="navbar"><a href="<?=public_url()?>" class="logo" translate="no"><?=config("app")->name?></a></nav><main id="main-container">
<header id="header">
<h2 translate="no">OceanWebTurk</h2>
<a class="btn" href="https://github.com/oceanwebturk">GitHub</a>
</header>
</main></div>
</body></html>
