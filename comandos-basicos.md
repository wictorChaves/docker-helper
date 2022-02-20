# Comando básicos 

#### Ver quais conteiners estão executando

```batch
docker ps
docker conteiner ls
```

> Duas formas de escrever o mesmo comando

#### Ver todos os conteiner que foram executados na maquina

```batch
docker ps -a
```

#### Cria e executa um conteiner

```batch
docker run ubuntu
```
> o comando "run" sempre cria um novo conteiner

#### Remover um conteiner

```batch
docker rm nome_conteiner
docker rm id_container
```

#### Forçar a remoção de um conteiner

```batch
docker rm id_container -f
```

#### Executa um conteiner

```batch
docker start ubuntu
```
> Utilizando este comando todas as flags executadas juntamente do comando "run" permanecerão

#### Executa um conteiner no background

```batch
docker run -d nginx
```

#### Executa o conteiner no modo interação

```batch
docker run -it ubuntu
```

#### Parar um conteiner

```batch
docker stop nome_conteiner
docker stop id
```
> Duas formas de parar o conteiner

#### Expondo porta do conteiner

```batch
docker run -p 80:80 nginx
```
> 80 do começo é a porta da maquina local que esta executando o comando e o 80 do fim é a porta do conteiner.

#### Definir nome para o conteiner

```batch
docker run -p 80:80 nginx --name meu_localhost
```

#### Acessando os logs

```batch
docker logs id_container 
```

#### Fica escutando os logs

```batch
docker logs -f id_container 
```