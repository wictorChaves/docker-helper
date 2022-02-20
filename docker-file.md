## Instruções para o docker file

FROM: imagem base
WORKDIR: diretório da aplicação
EXPOSE: porta da aplicação
COPY: quais arquivos precisam ser copiados
RUN: Executa um comando
CMD: Executa uma lista de comandos

## Examplo

```Dockerfile
FROM node
WORKDIR /app
COPY package*.json .
RUN npm install
COPY . .
EXPOSE 3000
CMD ["node", "app.js"]
```

## Examplo alterando a versão do node

```Dockerfile
FROM node:14
WORKDIR /app
COPY package*.json .
RUN npm install
COPY . .
EXPOSE 3000
CMD ["node", "app.js"]
```