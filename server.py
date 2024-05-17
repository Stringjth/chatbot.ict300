from flask import Flask, request, jsonify
from google.cloud import dialogflow
import os
from flask_cors import CORS
import json

app = Flask(__name__)
CORS(app, resources={r"/webhook": {"origins": "http://localhost:5173"}})
@app.route('/webhook', methods=['POST'])
def webhook():
    data = request.json
    user_info = {
        'name': data['queryResult']['parameters']['name'],
        'email': data['queryResult']['parameters']['email'],
        'dob': data['queryResult']['parameters']['date']
    }
    pdf_path = generate_pdf(user_info)
    return {
        "fulfillmentText": f"Merci pour votre préinscription. Vous pouvez télécharger votre fiche [ici]({pdf_path})"
    }

def generate_pdf(user_info):
    pdf = FPDF()
    pdf.add_page()
    pdf.set_font("Arial", size = 12)
    pdf.cell(200, 10, txt = "Fiche de Preinscription", ln = True, align = 'C')
    pdf.cell(200, 10, txt = f"Nom: {user_info['name']}", ln = True)
    pdf.cell(200, 10, txt = f"Email: {user_info['email']}", ln = True)
    pdf.cell(200, 10, txt = f"Date de naissance: {user_info['dob']}", ln = True)
    
    pdf_filename = f"preinscription_{user_info['name']}.pdf"
    pdf_path = os.path.join("path_to_save_pdf", pdf_filename)
    pdf.output(pdf_path)
    return pdf_path

if __name__ == '__main__':
    app.run(debug=True)