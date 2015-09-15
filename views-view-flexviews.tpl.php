<?php

/**
 * @file
 * Default view template to display content using Flexviews.
 */
?>

<?php
$flexdirection = $options['flexdirection'];
$flexwrap = $options['flexwrap'];
$justifycontent = $options['justifycontent'];
$alignitems = $options['alignitems'];
$aligncontent = $options['aligncontent'];
$childwidth = $options['childwidth'];
?>

<?php print
"<style> .flexviews-container {
 display: -webkit-box;
 display: -webkit-flex;
 display: -ms-flexbox;
 display: flex;
 -moz-box-sizing: border-box; padding: 2px; min-height: 100px;  width: 100%;";


switch ($flexdirection) {
    case "row":
print "-webkit-box-direction: normal; ";
print "-moz-box-direction: normal; ";
print "-webkit-box-orient: horizontal; ";
print "-moz-box-orient: horizontal; ";
print "-webkit-flex-direction: row; ";
print "-ms-flex-direction: row; ";
print "flex-direction: row; ";
        break;
    case "row-reverse":
print "-webkit-box-direction: reverse; ";
print "-moz-box-direction: reverse; ";
print "-webkit-box-orient: horizontal; ";
print "-moz-box-orient: horizontal; ";
print "-webkit-flex-direction: row-reverse; ";
print "-ms-flex-direction: row-reverse; ";
print "flex-direction: row-reverse; ";
        break;
    case "column":
print "-webkit-box-direction: normal; ";
print "-moz-box-direction: normal; ";
print "-webkit-box-orient: vertical; ";
print "-moz-box-orient: vertical; ";
print "-webkit-flex-direction: column; ";
print "-ms-flex-direction: column; ";
print "flex-direction: column; ";
        break;
    case "column-reverse":
print "-webkit-box-direction: reverse; ";
print "-moz-box-direction: reverse; ";
print "-webkit-box-orient: vertical; ";
print "-moz-box-orient: vertical; ";
print "-webkit-flex-direction: column-reverse; ";
print "-ms-flex-direction: column-reverse; ";
print "flex-direction: column-reverse; ";
        break;
}

switch ($flexwrap) {
    case "nowrap":
print "-webkit-flex-wrap: nowrap; ";
print "-ms-flex-wrap: nowrap; ";
print "flex-wrap: nowrap; ";
        break;
    case "wrap":
print "-webkit-flex-wrap: wrap; ";
print "-ms-flex-wrap: wrap; ";
print "flex-wrap: wrap; ";
        break;
    case "wrap-reverse":
print "-webkit-flex-wrap: wrap-reverse; ";
print "-ms-flex-wrap: wrap-reverse; ";
print "flex-wrap: wrap-reverse; ";
        break;
}


switch ($justifycontent) {
    case "flex-start":
print "-webkit-box-pack: start; ";
print "-moz-box-pack: start; ";
print "-webkit-justify-content: flex-start; ";
print "-ms-flex-pack: start; ";
print "justify-content: flex-start; ";
        break;
    case "flex-end":
print "-webkit-box-pack: end; ";
print "-moz-box-pack: end; ";
print "-webkit-justify-content: flex-end; ";
print "-ms-flex-pack: end; ";
print "justify-content: flex-end; ";
        break;
    case "center":
print "-webkit-box-pack: center; ";
print "-moz-box-pack: center; ";
print "-webkit-justify-content: center; ";
print "-ms-flex-pack: center; ";
print "justify-content: center; ";
        break;
    case "space-between":
print "-webkit-box-pack: justify; ";
print "-moz-box-pack: justify; ";
print "-webkit-justify-content: space-between; ";
print "-ms-flex-pack: justify; ";
print "justify-content: space-between; ";
        break;
    case "space-around":
print "-webkit-box-pack: justify; ";
print "-moz-box-pack: justify; ";
print "-webkit-justify-content: space-around; ";
print "-ms-flex-pack: distribute; ";
print "justify-content: space-around; ";
        break;
}

switch ($alignitems) {
    case "flex-start":
print "-webkit-box-align: start; ";
print "-moz-box-align: start; ";
print "-webkit-align-items: flex-start; ";
print "-ms-flex-align: start; ";
print "align-items: flex-start; ";
        break;
    case "flex-end":
print "-webkit-box-align: end; ";
print "-moz-box-align: end; ";
print "-webkit-align-items: flex-end; ";
print "-ms-flex-align: end; ";
print "align-items: flex-end; ";
        break;
    case "center":
print "-webkit-box-align: center; ";
print "-moz-box-align: center; ";
print "-webkit-align-items: center; ";
print "-ms-flex-align: center; ";
print "align-items: center; ";
        break;
    case "baseline":
print "-webkit-box-align: baseline; ";
print "-moz-box-align: baseline; ";
print "-webkit-align-items: baseline; ";
print "-ms-flex-align: baseline; ";
print "align-items: baseline; ";
        break;
    case "stretch":
print "-webkit-box-align: stretch; ";
print "-moz-box-align: stretch; ";
print "-webkit-align-items: stretch; ";
print "-ms-flex-align: stretch; ";
print "align-items: stretch; ";
        break;
}

switch ($aligncontent) {
    case "flex-start":
print "-webkit-align-content: flex-start; ";
print "-ms-flex-line-pack: start; ";
print "align-content: flex-start; ";
        break;
    case "flex-end":
print "-webkit-align-content: flex-end; ";
print "-ms-flex-line-pack: end; ";
print "align-content: flex-end; ";
        break;
    case "center":
print "-webkit-align-content: center; ";
print "-ms-flex-line-pack: center; ";
print "align-content: center; ";
        break;
    case "space-between":
print "-webkit-align-content: space-between; ";
print "-ms-flex-line-pack: justify; ";
print "align-content: space-between; ";
        break;
    case "space-around":
print "-webkit-align-content: space-around; ";
print "-ms-flex-line-pack: distribute; ";
print "align-content: space-around; ";
        break;
    case "stretch":
print "-webkit-align-content: stretch; ";
print "-ms-flex-line-pack: stretch; ";
print "align-content: stretch; ";
        break;
}


print " } .flexviews-container > div { ";

print "-webkit-box-flex: 0; ";
print "-moz-box-flex: 0; ";
print "-webkit-flex: 0 1 auto; ";
print "-ms-flex: 0 1 auto; ";
print "flex: 0 1 auto; ";
print "-webkit-align-self: auto; ";
print "-ms-flex-item-align: auto; ";
print "align-self: auto; ";

print " width: " . $childwidth . "%; }</style>";
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<div class="flexviews-container">
<?php foreach ($rows as $id => $row): ?>
  <div <?php if ($row_classes[$id]) print 'class="' . implode(' ', $row_classes[$id]) . '"'; ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>
</div>
