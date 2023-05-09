const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  // Get the name, email, and message from the form
  const name = document.querySelector('input[name="name"]').value;
  const email = document.querySelector('input[name="email"]').value;
  const message = document.querySelector('textarea[name="message"]').value;

  // Create a new Markdown file
  const markdown = new Markdown();
  const file = `guestbook.md`;
  const content = markdown.render([
    'name' => name,
    'email' => email,
    'message' => message,
  ]);

  // Write the guestbook entry to the Markdown file
  fetch(`${file}`, {
    method: 'PUT',
    body: content,
  });

  // Redirect the user to the guestbook page
  window.location.href = `/guestbook`;
});
