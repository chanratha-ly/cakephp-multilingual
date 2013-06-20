<?php
    echo $this->Html->link("Khmer", array("controller"=>"menus", "action"=>"index", "khm"))."<br/>";
    echo $this->Html->link("English", array("controller"=>"menus", "action"=>"index", "eng"))."<br/>";
    echo $this->Html->link("Japanese", array("controller"=>"menus", "action"=>"index", "jpn"));
?>


<ul>
   <li><?php echo __('Send') ?></li>
   <li><?php echo __('Reply') ?></li>
   <li><?php echo __('Forward') ?></li>
   <li><?php echo __('Delete') ?></li>
</ul>