# Container

#### Listar em execução

```batch
docker ps
```

#### Listar todos

```batch
docker ps -a
```

#### Criar e executar

```batch
docker run ubuntu --name <nome>
```
> o comando "run" sempre cria um novo container

#### Remover

```batch
docker rm <nome ou id do container>
```

#### Iniciar

```batch
docker start <nome ou id do container>
```

#### Parar

```batch
docker stop <nome ou id do container>
```

#### Executa em background

```batch
docker run -d nginx --name <nome>
```

#### Executar em modo interação

```batch
docker start -it ubuntu
docker run -it ubuntu --name <nome>
```

#### Expor porta

```batch
docker run -p <porta local>:<porta container> nginx --name <nome>
```

> "--name \<nome>" não é obrigatório

#### Acessando os logs

```batch
docker logs -f <nome ou id do container>
```

> "-f" não é obrigatório, comando para escutar alterações

#### Construindo um container

```batch
docker build -t <nome>:<tag> <diretório da imagem>
```
> "-t \<nome>:\<tag>" não é obrigatório