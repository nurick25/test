<?php
  // Get the name, email, and message from the form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create a new XML file
  $xml = new SimpleXMLElement('<guestbook></guestbook>');

  // Add a new entry to the XML file
  $entry = $xml->addChild('entry');
  $entry->addChild('name', $name);
  $entry->addChild('email', $email);
  $entry->addChild('message', $message);

  // Save the XML file
  $xml->asXML('guestbook.xml');

  // Redirect the user to the guestbook page
  header('Location: guestbook.html');
?>
