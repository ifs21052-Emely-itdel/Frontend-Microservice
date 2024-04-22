document.getElementById('pdf-form').addEventListener('submit', function(event) {
  event.preventDefault();
  
  const fileInput = document.getElementById('pdf-file');
  const file = fileInput.files[0];
  
  if (file) {
      alert('PDF file selected: ' + file.name);
  } else {
      alert('Please select a PDF file.');
  }
});
