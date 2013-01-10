<ul class="actions">
<?php 
if(UserModule::isAdmin()) {
?>
<li style="display:inline"><?php echo CHtml::link(UserModule::t('Manage User'),array('/user/admin')); ?> ||</li>
<?php 
} else {
?>
<li style="display:inline"><?php echo CHtml::link(UserModule::t('List User'),array('/user')); ?> ||</li>
<?php
}
?>
<li style="display:inline"><?php echo CHtml::link(UserModule::t('Edit'),array('edit')); ?> ||</li>
<li style="display:inline"><?php echo CHtml::link(UserModule::t('Change password'),array('changepassword')); ?></li>
</ul>