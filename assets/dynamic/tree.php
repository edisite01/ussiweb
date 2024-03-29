<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="simpletreemenu.js">

/***********************************************
* Simple Tree Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Please keep this notice intact
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<link rel="stylesheet" type="text/css" href="simpletree.css" />
</head>
<body>
	<h4>Simple Tree Menu #1 (persist enabled):</h4>

<a href="javascript:ddtreemenu.flatten('treemenu1', 'expand')">Expand All</a> | <a href="javascript:ddtreemenu.flatten('treemenu1', 'contact')">Contact All</a>

<ul id="treemenu1" class="treeview">
<li>Item 1</li>
<li>Item 2</li>

<li>Folder 1
	<ul>
	<li>Sub Item 1.1</li>
	<li>Sub Item 1.2</li>
	</ul>
</li>
<li>Item 3</li>

<li>Folder 2
	<ul>
	<li>Sub Item 2.1</li>
	<li>Folder 2.1
		<ul>
		<li>Sub Item 2.1.1</li>
		<li>Sub Item 2.1.2</li>
		</ul>
	</li>
</ul>
</li>

<li>Item 4</li>
</ul>

<h4>Simple Tree Menu #2 (Folder 1.1 open by default):</h4>

<a href="javascript:ddtreemenu.flatten('treemenu2', 'expand')">Expand All</a> | <a href="javascript:ddtreemenu.flatten('treemenu2', 'contact')">Contact All</a>

<ul id="treemenu2" class="treeview">
<li>Item 1</li>

<li>Folder 1
	<ul>
	<li>Sub Item 1.1</li>
	<li>Folder 1.1
		<ul rel="open">
		<li>Sub Item 1.1.1</li>
		<li>Sub Item 1.1.2</li>
		<li>Folder 1.1.1
			<ul>
			<li>Sub item 1.1.1.1</li>
			<li>Sub item 1.1.1.2</li>
			<li>Sub item 1.1.1.3</li>
			<li>Sub item 1.1.1.4</li>
			</ul>
		</li>
		</ul>
	</li>
    </ul>
</li>

<li>Item 2</li>
</ul>

<script type="text/javascript">

//ddtreemenu.createTree(treeid, enablepersist, opt_persist_in_days (default is 1))

ddtreemenu.createTree("treemenu1", true)
ddtreemenu.createTree("treemenu2", false)

</script>
</body>
</html>