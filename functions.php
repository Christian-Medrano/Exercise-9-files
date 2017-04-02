<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function alphabet($type) {
  if ($type == 'ampersand') {
  	$character = '&';

    echo '<p>The Ampersand (&#38;) is an abbreviation of "and per say and". The character was once included as the last letter of the alphabet. However, it is typically only seen under certain circumstances such as joining names and is not accepted as a substitution for "and" in academic writing.</p>';
  } else {
    echo '<p>Select a character to learn more about it.</p>';
  }
}