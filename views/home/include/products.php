<?php
function printProducts($viewbag, $type){
  if (is_array($viewbag[$type])) {
    print "<table class=\"products-table\"><tr><th>Product</th><th class=\"th-description\">Description</th><th class=\"th-price\">Price</th><th>Frequency</th></tr>";
    $i = 0;
      foreach($viewbag[$type] as $product=>$keyval){
        print "<tr>";
        foreach($viewbag[$type][$i] as $val){
          print "<td>$val</td>";
        }
        $i++;
        print "</tr>";
      }
    print "</table>";
  }
  else{
    print "Oops, error. Make sure you are using the consumer table";
  }
}
?>
