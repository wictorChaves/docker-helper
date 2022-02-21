# Tipos de rede (drivers)

 - **Bridge:** o mais comum e default do Docker, utilizado quando containers precisam se conectar (na maioria das vezes optamos por este driver);
 - **host:** permite a conexão entre um container a máquina que está hosteando o Docker;
 - **macvlan:** permite a conexão a um container por um MAC address;
 - **none:** remove todas conexões de rede de um container;
 - **plugins:** permite extensões de terceiros para criar outras redes;
