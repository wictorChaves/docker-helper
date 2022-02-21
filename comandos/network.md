# Network

 - [Tipos de rede (drivers)](network/tipos-redes-drivers.md)

#### Listar

```batch
docker network ls
```

#### Criar

```batch
docker network create <nome>
```

#### Remover

```batch
docker network rm <nome>
```

#### Remover redes não utilizadas

```batch
docker network prune
```

#### Criar especificando o driver 

```batch
docker network create -d <driver> <nome>
```

#### Conectar um container a uma rede

```batch
docker network connect <rede> <container>
```

#### Inspecionar

```batch
docker network inspect <nome>
```

#### disconectar um container a uma rede

```batch
docker network disconnect <rede> <container>
```

#### Executando um container em uma rede

```batch
docker run -d -p 80:80 --name <id ou nome do container> --network <nome>
```