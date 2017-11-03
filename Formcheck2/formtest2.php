<!DOCTYPE html>
<html lang="en">

<?php
/* All-in-one form processor, Version 2.
 *
 *   -- If a request was sent, it processes the form.
 *   -- If not responding to a request, it generates the form.
 *
 * This version processes the data by printing it 3 ways:
 *  (1) the raw data is dumped, using print_r.
 *  (2) each expected form element is nicely printed with a label.
 *     ==>This version uses array notation to handle multiple select correctly.
 *  (3) a list of all received data is printed in name=value format.
 *
 * This version also differs from Versions 1 and 2 by omitting the
 * form action attribute altogether, which implies the form data will
 * be submitted to the same URL as the form itself.
 */

// if $_POST is set, then we have a form submission to process
 if( $_POST )
 {
?>

<head>
  <title>Form Data Version 3</title>
  <meta charset="utf-8">
</head>
<body>

<h1>Raw Form Data</h1>
<pre>
<?php
  // (1) Print the associative array to see raw data.
  // To avoid HTML injection, escape all HTML special chars
   print htmlspecialchars(print_r($_POST,true));
?>
</pre>

<!-- (2) Extract each form item from posted data -->
<h1>Form input values</h1>
<p>Your Name: <?php print htmlspecialchars($_POST["visitor_name"]) ?></p>
<p>Password: <?php print htmlspecialchars($_POST["password"]) ?></p>

<!-- Handle checkbox specially: if box not checked, value not set. -->
<?php if( isset($_POST["licenseOK"]) ) { ?>
  <p>License accepted</p>
<?php } else { ?>
  <p>License declined</p>
<?php } ?>

<p>Account type: <?php print htmlspecialchars($_POST["account_type"]) ?></p>

<!-- Handle multiple select specially: if no options selected, value not set.
     If it is set, it is an array whose elements are to be printed. -->
<?php if( isset($_POST["options"]) ) { ?>
<p>Options: <?php foreach($_POST["options"] as $opt) { print htmlspecialchars("$opt, "); } ?></p>
<?php } else { ?>
<p>No options selected</p>
<?php } ?>

<p>Operating system: <?php print htmlspecialchars($_POST["system"]) ?></p>
<p>Remarks: <?php print htmlspecialchars($_POST["remarks"]) ?></p>

<!-- (3) Run thru all elements of the array of posted data -->
<h1>All Form Data</h1>
<?php
    foreach($_POST as $key=>$val)
    {
      if( is_array($val) ) // print array-valued item as list
      {
	 foreach($val as $multi)
	 {
	    print "<p>".htmlspecialchars($key)." = ".htmlspecialchars($multi)."\n</p>";
	 }
      }
      else
      {
	    print "<p>".htmlspecialchars($key)." = ".htmlspecialchars($val)."\n</p>";
      }
    }
?>




<?php
/**************** End processing part, start of form ***************/

// No $_POST, put out the form
  } else /* ! $_POST */
  {
?>