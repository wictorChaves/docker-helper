# Volumes

#### Listar

```batch
docker volume ls
```

#### Criar

```batch
docker volume create <nome>
```

#### Inspecionar 

```batch
docker volume inspect <nome>
```

#### Verificar vinculo com um container

```batch
docker inspect --format='{{.Config.Volumes}}' <id ou nome do container>
```

#### Criando com o container

Criamos através da flag "-v"

##### Anônimo

```batch
docker run -d -p 80:80 --name <id ou nome do container> -v <diretório do container> <imagem>
```

##### Nomeado

```batch
docker run -d -p 80:80 --name <id ou nome do container> -v <nome>:<diretório do container> <imagem>
```

##### Bind mounts

Não utilize caminho relativo

```batch
docker run -d -p 80:80 --name <id ou nome do container> -v <diretório local>:<diretório do container> <imagem>
```

##### Somente leitura

```batch
docker run -d -p 80:80 --name <id ou nome do container> -v <nome>:<diretório do container>:ro <imagem>
```

#### Remover

```batch
docker volume rm <nome>
```

#### Remover volumes não utilizados

```batch
docker volume prune
```