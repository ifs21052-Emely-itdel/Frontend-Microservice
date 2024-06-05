# For more information, please refer to https://aka.ms/vscode-docker-python
FROM python:latest
LABEL authors="Dedi"

RUN pip install Flask
RUN pip install Flask-Cors
RUN pip install PyPdf2
RUN apt update
RUN apt upgrade -y

COPY . .

EXPOSE 5000

CMD flask --app app run --host=0.0.0.0
