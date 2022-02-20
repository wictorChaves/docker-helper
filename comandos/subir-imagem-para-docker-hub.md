# Subir imagem para o Docker Hub

É necessário ter uma conta no Docker Hub para utilizar os comandos abaixo

#### Logar

```batch
docker login
```

#### Enviar imagem

É necessário criar o projeto no Docker Hub

```batch
docker push <usuário>/<projeto>
```

#### Criar e enviar uma nova versão

Nova versão

```batch
docker build -t <usuário>/<projeto>:<versão> .
```
>lembre de colocar a tag da nova versão

Enviar
```batch
docker push <usuário>/<projeto>:<versão>
```

#### Logout

```batch
docker logout
```