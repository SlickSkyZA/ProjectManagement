<?php     
$attributes = array('class' => 'bs-example form-horizontal');
echo form_open('settings/templates?settings=templates&group=bugs&email=bug_assigned', $attributes); ?>
			<input type="hidden" name="email_group" value="bug_assigned">
			<input type="hidden" name="return_url" value="<?=base_url()?>settings/?settings=templates&group=bugs&email=bug_assigned">
			<div class="form-group">
				<label class="col-lg-12"><?=lang('subject')?></label>
				<div class="col-lg-12">
				<input class="form-control" name="subject" value="<?=$this -> applib -> get_any_field('email_templates',array(
                                    'email_group' => 'bug_assigned'
                                    ), 'subject')?>" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-12"><?=lang('message')?></label>
				<div class="col-lg-12">
				<textarea class="form-control foeditor" name="email_template">
				<?=$this -> applib -> get_any_field('email_templates',array(
				                                    'email_group' => 'bug_assigned'
									), 'template_body')?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-12">
				<button type="submit" class="btn btn-sm btn-primary"><?=lang('save_changes')?></button>
				</div>
			</div>
		</form>