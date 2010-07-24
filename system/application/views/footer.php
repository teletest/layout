</div>
<!-- /main -->
</div>

<?php 
	$this->load->view("sidebar/index"); 
?>

<!-- clear main & sidebar sections -->
<br clear="left" />
<!-- /clear main & sidebar sections -->

<!-- footer -->
 <div id="footer">
   <!-- please do not remove this. respect the authors :) -->
	<div id="themeinfo">
	<?php echo anchor("", $this->lang->line('teletest_logo'), array('title'=>'Teletest'));?> &copy; <?php echo date("Y");?> (<?php echo $this->lang->line('teletest_version');?>0.1)</p>
	<p><?php echo anchor('feedback','Feedback'); ?> | <?php echo anchor('fq','Frequent Questions'); ?> | <?php echo anchor('support','Support'); ?></p>
		Powered By: <a href="http://www.neosense.com/">NeoSense</a>. 
		Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/">CSS 3</a>.
	</div>
 </div>
 <!-- /footer -->

 <a href="javascript:void(0);" class="setLiquid"><span>SetPageWidth</span></a>
<!-- /main wrapper -->
</div>

<!-- <p>{debug}</p><br /><br /> -->

</body>
</html>