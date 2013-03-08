<?php
include('common.php');
header('Content-Type: text/html; charset=utf-8'); 

include('model/auto.php');



$model = 'auto';

$grid = array(
	'parent' 		=> 'mygrid_container',
	'image_path' 	=> "lib/dhtmlx/imgs/",
	'skin' 			=> 'light',
	'auto_height' 	=> true,
	'auto_width' 	=> true,
	'columns'		=> null,
);

foreach ($SCH[$model]['field'] as $key => $value) {
	$grid['columns'][] = array(
		'label' => $value['name'],
		'width'	=> '80',
		'type'	=> 'ed',
	);
}

/*{
	"parent":"mygrid_container",
	"image_path":"lib/dhtmlx/imgs/",
	"skin":"light",
	"auto_height":true,
	"auto_width":true,
	"columns":[
		{"label":null,"width":"80","type":"ed"},
		{"label":null,"width":"80","type":"ed"}
	]
}*/
?>

<link rel="stylesheet" type="text/css" href="lib/dhtmlx/dhtmlxgrid.css" />
<link rel="stylesheet" type="text/css" href="lib/dhtmlx/skins/dhtmlxgrid_skins.css" />
<script src="lib/dhtmlx/dhtmlxcommon.js"></script>
<script src="lib/dhtmlx/dhtmlxGrid/dhtmlxgrid.js"></script>
<script src="lib/dhtmlx/dhtmlxGrid/dhtmlxgridcell.js"></script>

<div id="mygrid_container" style="width:600px;height:150px;"></div>

<script>
new dhtmlXGridObject(<?=stripslashes(urldecode(json_encode($grid)))?>);

/*
var mygrid;
mygrid = new dhtmlXGridObject('mygrid_container');
mygrid.setImagePath("lib/dhtmlx/imgs/");
mygrid.setHeader("Model,Qty,Price");
mygrid.setInitWidths("*,150,150");
mygrid.setColAlign("left,right,right");
mygrid.setSkin("light");
mygrid.init();
*/

/*{
"parent":"mygrid_container",
"image_path":"lib/dhtmlx/imgs/",
"skin":"light",
"auto_height": true,
"auto_width": true,
"columns":[
	{ label: "Sales",           width:50, 	type:"ed" },
	{ label:["Book title",
		 "#text_filter"],   width:150, 	type:"ed" },
	{ label:["Author",
		 "#select_filter"], width:150, 	type:"ed" },
	{ label: "Price",       width:50, 	type:"ed" },
	{ label:"In store" , 	width:80, 	type:"ch" },
	{ label:"Shipping" , 	width:50, 	type:"ed" },
	{ label:"Bestseller" , 	width:50, 	type:"ed" },
	{ label:"Date" , 	width:50, 	type:"ed" }
]}*/
</script>



<?//标题?>
<h2><?=$SCH[$model]['name']?></h2>

<?//顶部按钮区?>
<div style="margin-bottom:15px;">
	<input type="button" value="添加" />
</div>

<?//自定义查询筛选器?>
<div style="margin-bottom:15px;">
	<? foreach ($SCH[$model]['field'] as $key => $value) : ?>
		
	<? endforeach ?>
</div>


<?//列表表格?>
<table cellspacing="1" cellpadding="5" border="0" class="table">
	<?//表头?>
	<tr>
		<th width="20"></th>
		<? foreach ($SCH[$model]['field'] as $key => $value) : ?>
			<th>
				<span style="float:left;"><?=$value['name']?></span>
				<span style="float:right;">
					<a href="">升序</a> 
					<a href="">降序</a>
				</span>
			</th>
		<? endforeach ?>
	</tr>
	
	<?//查询筛选器?>
	<tr>
		<td></td>
		<? foreach ($SCH[$model]['field'] as $key => $value) : ?>
			<td>
				<input type="text" name="<?=$key?>" value="" />
				<input type="button" value="筛选" />
			</td>
		<? endforeach ?>
	</tr>
	
	<?//表格内容正文?>
	<? if ($list) : ?>
		<? foreach ($list as $row) : ?>
		
		<? endforeach ?>
	<? else : ?>
		<tr height="50">
			<td colspan="<?=count($SCH[$model]['field'])+1?>">目前暂未添加任何记录</td>
		</tr>
	<? endif ?>
</table>




<style>
.table { background:#999; }
.table th, .table td { font-size:12px; }
.table th { background:#E0E0E0; }
.table td { background:#FFF; }

a { color:blue; }
</style>
