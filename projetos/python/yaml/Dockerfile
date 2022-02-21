FROM python:3
WORKDIR /usr/src/app
RUN pip install pyaml
COPY . .
CMD [ "python", "./check-yaml-file.py" ]