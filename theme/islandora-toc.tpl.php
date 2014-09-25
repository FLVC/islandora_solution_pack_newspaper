<?php
/**
 * @file
 *
 */
?>
<?php if (isset($toc_entries['title'])): ?>
  <?php $booktitle = $toc_entries['title']; ?>
  <?php print "<h3>$booktitle</h3>"; ?>
<?php endif; ?>
<h4>Table of Contents</h4>
<div id="toctree" class="islandora-toc">
  <?php $lastlevel = 0 ?>
  <?php foreach($toc_entries['table_of_contents'] as $toc_entry): ?>
      <?php $currentlevel = $toc_entry['level']; ?>
      <?php $nodeid = "L" . $currentlevel . "P" . $toc_entry['pagenum']; ?>
      <?php if (($currentlevel > $lastlevel)&&($currentlevel - $lastlevel == 1)): ?>
      <?php     print "<ul><li id='$nodeid'>"; ?>
      <?php endif; ?>
      <?php if ($currentlevel == $lastlevel): ?>
      <?php     print "</li><li id='$nodeid'>"; ?>
      <?php endif; ?>
      <?php if ($currentlevel < $lastlevel): ?>
      <?php     for ($i=$currentlevel; $i<$lastlevel; $i++): ?>
      <?php         print "</li></ul>"; ?>
      <?php     endfor; ?>
      <?php     print "</li><li id='$nodeid'>"; ?>
      <?php endif; ?>
      <?php $pageindex = intval($toc_entry['pagenum']) - 1; ?>
      <?php print l($toc_entry['title'], "islandora/object/{$object->id}", array('fragment' => "page/n{$pageindex}/mode/2up", 'html' => 'TRUE')); ?>
      <?php $lastlevel = $currentlevel ?>
  <?php endforeach; ?>
  <?php if ($lastlevel > 0): ?>
  <?php     for ($i=0; $i<$lastlevel; $i++): ?>
  <?php         print "</li></ul>"; ?>
  <?php     endfor; ?>
  <?php endif; ?>
</div>
