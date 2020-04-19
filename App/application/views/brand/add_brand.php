<script language="javascript">
$(function(){
	$('#error_brand_name').hide()
	$('#form_add_brand').submit(function(){
		if($('#brand_name').val().length < 1)
		{
			$('#error_brand_name').show()
			return false
		}
	});
});
</script>

<?php 
echo form_open(base_url().'brand/insert_brand',array('id' => 'form_add_brand'));
?>
<div class="modal-header">
    <button class="close" data-dismiss="modal"><span>&times;</span></button>
    <h4>Add Brand</h4>
</div>
<div class="modal-body">
    <div class="input-group">
        <label for="brand_name" class="input-group-addon">
            Brand Name
        </label>
      	<?php echo form_input(array('autocomplete' => 'off', 'name' => 'brand_name', 'class' => 'form-control', 'id' => 'brand_name','placeholder' => 'Max 25 Characters')) ?>
    </div>
	<div id="error_brand_name" class="col-md-12 form_errors messageContainer text-danger"><span class="glyphicon glyphicon-remove"></span> Required / Max - 25 characters</div><br>
</div>
<div class="modal-footer">
    <button type="submit" name="edit_brand" class="btn btn-success"><i class="fa fa-save fa-fw"></i>Save</button>
    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times fa-fw"></i>Close</button>
</div>
<?php
echo form_close();
?>