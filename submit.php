<?php
  // Get the name, email, and message from the form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create a new Markdown file
  $markdown = new Markdown();
  $file = fopen('guestbook.md', 'a');

  // Write the guestbook entry to the Markdown file
  fwrite($file, $markdown->render([
    'name' => $name,
    'email' => $email,
    'message' => $message,
  ]));

  // Close the Markdown file
  fclose($file);

  // Redirect the user to the guestbook page
  header('Location: /guestbook');
?>
