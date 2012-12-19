<!-- File: /app/View/Clerances/create.ctp -->

<H1>Request a Clearance</H1>
<?php
echo $this->Form->create('Clearance');
echo $this->Form->input('Requestor');
echo $this->Form->input('DateRequested');
echo $this->Form->input('Purpose');
echo $this->Form->input('ApprovedBy');
echo $this->Form->end('Save Request');
?>