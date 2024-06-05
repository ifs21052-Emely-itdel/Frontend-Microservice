import os
from flask_cors import CORS
from PyPDF2 import PdfReader, PdfWriter
from flask import Flask,render_template, request, send_file, after_this_request, url_for
from werkzeug.utils import secure_filename

app = Flask(__name__)
CORS(app)

@app.route('/')
def home():
    return render_template("index.html")

@app.route('/pdf-compress/', methods=['POST'])
def pdf_compress():
    if request.method == 'POST':
        file = request.files['pdf']
        securefile = secure_filename(file.filename)
        file.save(securefile)
        reader = PdfReader(securefile)
        writer = PdfWriter()

        for page in reader.pages:
            page.compress_content_streams()  # This is CPU intensive!
            writer.add_page(page)

        result_file = f"{os.path.splitext(securefile)[0]}_compressed.pdf"
        with open(result_file, "wb") as f:
            writer.write(f)
            
        os.remove(securefile)
        
        @after_this_request
        def remove_file(response):
            try:
                os.remove(result_file)
            except Exception as e:
                print(f"Error deleting compressed file: {e}")
            return response

        return send_file(result_file, as_attachment=True)

if __name__ == '__main__':
    app.run()