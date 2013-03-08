<?php
include('common.php');
include('model/auto.php');

$model = 'auto';
?>

<link rel="stylesheet" type="text/css" href="lib/dhtmlx/dhtmlxgrid.css" />
<link rel="stylesheet" type="text/css" href="lib/dhtmlx/skins/dhtmlxgrid_skins.css" />
<script src="lib/dhtmlx/dhtmlxcommon.js"></script>
<script src="lib/dhtmlx/dhtmlxGrid/dhtmlxgrid.js"></script>
<script src="lib/dhtmlx/dhtmlxGrid/dhtmlxgridcell.js"></script>

<div id="mygrid_container" style="width:600px;height:150px;"></div>

<script>
var mygrid;
mygrid = new dhtmlXGridObject('mygrid_container');
mygrid.setImagePath("lib/dhtmlx/imgs/");
mygrid.setHeader("Model,Qty,Price");
mygrid.setInitWidths("*,150,150");
mygrid.setColAlign("left,right,right");
mygrid.setSkin("light");
mygrid.init();
</script>



<?//����?>
<h2><?=$SCH[$model]['name']?></h2>

<?//������ť��?>
<div style="margin-bottom:15px;">
	<input type="button" value="���" />
</div>

<?//�Զ����ѯɸѡ��?>
<div style="margin-bottom:15px;">
	<? foreach ($SCH[$model]['field'] as $key => $value) : ?>
		
	<? endforeach ?>
</div>


<?//�б���?>
<table cellspacing="1" cellpadding="5" border="0" class="table">
	<?//��ͷ?>
	<tr>
		<th width="20"></th>
		<? foreach ($SCH[$model]['field'] as $key => $value) : ?>
			<th>
				<span style="float:left;"><?=$value['name']?></span>
				<span style="float:right;">
					<a href="">����</a> 
					<a href="">����</a>
				</span>
			</th>
		<? endforeach ?>
	</tr>
	
	<?//��ѯɸѡ��?>
	<tr>
		<td></td>
		<? foreach ($SCH[$model]['field'] as $key => $value) : ?>
			<td>
				<input type="text" name="<?=$key?>" value="" />
				<input type="button" value="ɸѡ" />
			</td>
		<? endforeach ?>
	</tr>
	
	<?//�����������?>
	<? if ($list) : ?>
		<? foreach ($list as $row) : ?>
		
		<? endforeach ?>
	<? else : ?>
		<tr height="50">
			<td colspan="<?=count($SCH[$model]['field'])+1?>">Ŀǰ��δ����κμ�¼</td>
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
