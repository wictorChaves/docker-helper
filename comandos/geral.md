# Geral

#### Remove container, redes, imagens e cache que não estão sendo utilizadas

```batch
docker system prune
```
>Cuidado que este comando é um comando destrutivo

#### Copiar arquivo do container para a maquina local

```batch
docker cp <nome do container em execução>:<WORKDIR>/app.js ./minha_pasta_local
```

#### Verificando processamento do container

```batch
docker top <nome do container>
```

#### Inspecionar um container

```batch
docker inspect <nome do container>
```

#### Verificar processamento do docker

```batch
docker status
```