<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="http://tablesorter.com/jquery.tablesorter.min.js"></script>
<script>
$(function(){
	$('#log_table').tablesorter({
		'headers': {
			2: {sorter: false},
			3: {sorter: false},
			4: {sorter: false},
			5: {sorter: false},
			6: {sorter: false},
			7: {sorter: false},
			8: {sorter: false}
		},
		'widgets': ['zebra']
	});
})
</script>
<link rel="stylesheet" type="text/css" href="http://tablesorter.com/themes/blue/style.css" />
<style type="text/css">
table#log_table td.error { background: #f96; }
table#log_table td.info { background: #9cf; }
</style>
<table id="log_table" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
	<thead>
		<tr>
			<th>time</th>
			<th>type</th>
			<th>message</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($logs as $log): ?>
    <?php if (!isset($log['time'])) { continue; } ?>
		<tr>
			<td><?php echo HTML::chars($log['time']) ?></td>
			<td class="<?php echo HTML::chars(strtolower($log['type'])) ?>"><?php echo HTML::chars($log['type']) ?></td>
			<td><?php echo HTML::chars($log['message']) ?></td>
		</tr>
	<?php endforeach ?>
</tbody>
</table>
