<html>
<head>
<style>
@page {
	size: 8.5in 11in;
	sheet-size: Letter;
	margin: 7%;
	margin-header: 5mm; 
	margin-footer: 5mm;
	odd-footer-name: html_rxFooter;
	even-footer-name: html_rxFooter;
}

body {
	font-family: Arial, sans-serif;
	font-size: 11;
}

h2 {
	text-align: center;
}

p {
	text-align: center;
}

div.outline {
	border: 1;
	border-style: solid;
}

p.borders {
	border: 1;
	border-style: solid;
}

table.top {
	width: 700;
}

table.order {
	width: 700;
}

th {
	background-color: gray;
	color: #FFFFFF;
}
</style>
</head>
<body>
<div id="clinicDetails">
	<h2>
		<?php echo $practiceName;?>
	</h2>
	<p>
		<?php echo $practiceInfo;?><br>
		<?php echo auto_link(prep_url($website));?><br>
	</p>
</div>
<hr />
<?php echo $letter;?>


<htmlpagefooter name="rxFooter" style="display:none">
<p>The information on this page is CONFIDENTIAL.  Any release of this information requires the expressed written authorization of the patient listed above.  For questions regarding this document, please contact the practice.</p>
<p>This document was generated by NOSH EMR.</p>
</htmlpagefooter>
</body>
</html>
