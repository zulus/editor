<?php
/**
 * Document   : ckeditor
 * Created on : 2011-01-04, 17:29:57
 *
 * @author Dawid Pakuła(ZuluS) <dawid.pakula [at] w3des.net>
 * @package $(package)
 */
?>
<?php echo $open; ?>
	<label<?php if ($id = $this->attr('id')) echo '" for="'.$id.'"'; ?>>
		<?php echo $label; ?>
		<span class="field">
			<?php if ($this->editable()=== TRUE): ?>
                <?php Editor::factory($this->get('editor'), $this->get('options') ? $this->get('options') : array())->value($this->val())->render(true, $this->field()->name(), true); ?>
			<?php else: ?>
				<span><?php echo $this->val(); ?></span>
			<?php endif; ?>
		</span>
	</label>
	<?php echo $message; ?>
<?php echo $close; ?>