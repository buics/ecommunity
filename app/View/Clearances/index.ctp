
<fieldset>
	<legend>Clearance</legend>
	<p><?php echo $this->Html->link("Request a Clearance", array('action' => 'create')); ?></p>
								
	<table>
		<tr>
	        <th>Date Requested</th>
	        <th>Requestor</th>
	        <th>Purpose</th>
	        <th>Status</th>
	        <th>Action</th>
	    </tr>
	    
		<?php foreach ($clearances as $clearance): ?>
	    <tr>							        
	        <td><?php echo $clearance['Clearance']['DateRequested']; ?> </td>
	        <td><?php echo $clearance['Clearance']['Requestor']; ?> </td>
	        <td><?php echo $clearance['Clearance']['Purpose']; ?> </td>
	        <td>Pending</td>
	        <th>
	        	
			<?php
			echo $this->Form->postLink('View', array('action' => 'view', $clearance['Clearance']['Id']));
			?>	
	        	
        	<?php echo $this->Form->postLink(
			'Delete',
			array('action' => 'delete', $clearance['Clearance']['Id']),
			array('confirm' => 'Are you sure?'));
			?>
	        </th>
	    </tr>
	    <?php endforeach; ?>
    </table>
    
    
    
</fieldset>