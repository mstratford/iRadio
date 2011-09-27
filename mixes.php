<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("includes/head.html"); ?>
</head>
<body class="ipodlist">
<div id="topbar" class="black">
<div id="title">iRadio</div>
<div id="leftnav"> <a href="extras.php">Extras</a></div></div>
<?php include("includes/listenlive.html"); ?>
<div id="content">
<ul>
<li><a href="mixes.php"><span class="number">&#57406;</span><span class="auto"></span><span class="name">Stop Playing</span><span class="time">&#58163;</span></a></li>
<li><a class="noeffect" href="javascript:document.s1.Play();"><span class="number">1</span><span class="auto"></span><span class="name">
Mix 1</span><span class="time">0:32</span></a></li>
<li><a class="noeffect" href="javascript:document.s2.Play();"><span class="number">2</span><span class="auto"></span><span class="name">
Mix 2</span><span class="time">0:30</span></a></li></ul></div>
<div id="footer"><a href="http://snippetspace.com">Powered by iWebKit</a>
<div style="position: absolute; left: 0; top: 0">
<embed enablejavascript="true" autoplay="false" height="0" name="s1" src="http://www.mfwp101.com/x20.wav" width="0"></embed>
<embed enablejavascript="true" autoplay="false" height="0" name="s2" src="http://www.mfwp101.com/ztech30.wav" width="0"></embed>
</div></div>
</body>
</html>