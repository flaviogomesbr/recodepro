<<<<<<< HEAD
/* TABELA 1: ID, Nome, Data de nascimento, CPF, sexo, nacionalidade, e-mail */;
=======
DROP DATABASE if exists fseletro;
CREATE DATABASE if not exists fseletro;
>>>>>>> 4aed5d3 (atualizando pastas do git)

CREATE TABLE `cadastrocliente` (
  `idcadastrocliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `cpf` char(14) NOT NULL,
  `sexo` varchar(10) NOT NULL DEFAULT 'F ou M',
  `nacionalidade` varchar(45) NOT NULL DEFAULT 'Brasil',
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idcadastrocliente`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  UNIQUE KEY `email_UNIQUE` (`email`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/* Inserindo dados na TABELA 1 */;
=======
) ;


>>>>>>> 4aed5d3 (atualizando pastas do git)
INSERT INTO `cadastrocliente` VALUES 
                                    (1,'Abel Silva','2000-12-01','35452290740','M','Brasil','abelsilva@gmail.com'),
                                    (2,'Bruno Silva','2000-12-02','35452290741','M','Argentina','bruno@gmail.com'),
                                    (3,'Caio Silva','2000-12-03','35452290742','M','Brasil','caio@gmail.com'),
                                    (4,'Camila Silva','2000-12-04','35452290743','F','Brasil','camila@gmail.com'),
                                    (5,'Daiane Silva','2000-12-05','35452290744','F','Chile','daiana@gmail.com'),
                                    (6,'Diogo Silva','2000-12-06','35452290745','M','Portugal','diogo@gmail.com'),
                                    (7,'Elisa Silva','2000-12-07','35452290746','F','Brasil','elisa@gmail.com'),
                                    (8,'Fabiana Silva','2000-12-08','35452290747','F','Brasil','fabiana@gmail.com'),
                                    (9,'Gabriel Silva','2000-12-05','35452290751','M','Brasil','gabriel@gmail.com'),
                                    (10,'Maria Silva','2000-12-05','35452290752','F','Brasil','maria@gmail.com');



<<<<<<< HEAD
/* TABELA 2: Categorias, produtos, preço antigo, preço novo e imagens */;

/* Criando TABELA 2 */;
=======

>>>>>>> 4aed5d3 (atualizando pastas do git)
CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `precofinal` decimal(8,2) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`idproduto`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;


/* Inserindo itens na TABELA 2 */;
=======
) ;



>>>>>>> 4aed5d3 (atualizando pastas do git)
INSERT INTO `produto` (`idproduto`, `categoria`, `descricao`, `preco`, `precofinal`, `imagem`) VALUES
                    (1,'geladeira','Geladeira Brastemp Frost Free Side Inverse 540 litros',6389.00,5019.00,'./imagens/geladeira1.jpeg'),
                    (2,'geladeira','Geladeira Brastemp Branca Frost Free 375 litros',2068.00,1910.90,'./imagens/geladeira2.jpeg'),
                    (3,'geladeira','Geladeira Frost Free Consul Prata 340 litros',2199.00,2069.00,'./imagens/geladeira3.jpeg'),
                    (4,'fogao','Fogão 4 Bocas Consul Inox com Mesa de Vidro',1209.00,1129.00,'./imagens/fogao1.jpeg'),
                    (5,'fogao','Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático',600.00,519.70,'./imagens/fogao2.jpeg'),
                    (6,'microondas','Micro-ondas Consul 32 litros Inox 220V',580.00,409.88,'./imagens/microondas01.jpeg'),
                    (7,'microondas','Micro-ondas 25L Espelhado Philco 220V',508.70,464.53,'./imagens/microondas02.jpeg'),
                    (8,'microondas','Micro-ondas Electrolux 20L Branco',459.00,436.05,'./imagens/microondas03.jpeg'),
                    (9,'lavalouca','Lava-Louça Electroclux Inox com 10 Serviços, 6 Programas de Lavagem',3500.00,2799.90,'./imagens/lavalouca1.jpeg'),
                    (10,'lavalouca','Lava-Louça Compacta com 8 Serviços Branca 127V Brastemp',1970.50,1730.61,'./imagens/lavalouca2.jpeg'),
                    (11,'lavaroupas','Lavadora de Roupas Brastemp 11 kg com Turbo Performance Branca',1690.00,1214.10,'./imagens/lavadoraderoupas1.jpeg'),
                    (12,'lavaroupas','Lavadora de Roupas Philco Inverter 12 kg',2399.00,2179.90,'./imagens/lavadoraderoupas2.jpeg');
<<<<<<< HEAD
COMMIT;
=======

>>>>>>> 4aed5d3 (atualizando pastas do git)


CREATE TABLE comentarios (
`id` int auto_increment,
`nome` VARCHAR(100),
`msg` VARCHAR(300),
`dia` datetime default now(),
PRIMARY KEY (`id`));