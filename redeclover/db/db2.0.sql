CREATE TABLE IF NOT EXISTS `produtos` (
	`pro_id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`pro_nome` varchar(255) NOT NULL,
	`pro_desc` varchar(255),
	`pro_valor` float NOT NULL,
	`pro_img` varchar(255) NOT NULL,
	PRIMARY KEY (`pro_id`)
);

CREATE TABLE IF NOT EXISTS `nivel` (
	`niv_id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`niv_numero` int NOT NULL,
	`niv_nome` timestamp NOT NULL,
	PRIMARY KEY (`niv_id`)
);

CREATE TABLE IF NOT EXISTS `usuarios` (
	`usu_id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`usu_senha` varchar(255) NOT NULL,
	`usu_foto` varchar(255),
	`usu_email` varchar(255) NOT NULL,
	`usu_nome` varchar(255) NOT NULL,
	`usu_nick` varchar(255) NOT NULL,
	`usu_niv_id` int NOT NULL,
	PRIMARY KEY (`usu_id`)
);

CREATE TABLE IF NOT EXISTS `pedidos` (
	`ped_id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`ped_data` date NOT NULL,
	`ped_hora` varchar(20) NOT NULL,
	`ped_valor` float NOT NULL,
	`ped_pag_id` int NOT NULL,
	`ped_proped_id` int NOT NULL,
	PRIMARY KEY (`ped_id`)
);

CREATE TABLE IF NOT EXISTS `pagamento` (
	`pag_id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`pag_tipo` varchar(255) NOT NULL,
	PRIMARY KEY (`pag_id`)
);

CREATE TABLE IF NOT EXISTS `produto_pedidos` (
	`proped_id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`proped_pro_id` int NOT NULL,
	`proped_usu_id` int NOT NULL,
	PRIMARY KEY (`proped_id`)
);

CREATE TABLE IF NOT EXISTS `noticias` (
	`not_id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`not_titulo` varchar(255) NOT NULL,
	`not_subtitulo` varchar(255),
	`not_banner` varchar(255),
	`not_descricao` varchar(255) NOT NULL,
	`not_usu_id` varchar(255) NOT NULL,
	`not_data` date NOT NULL,
	`not_hora` varchar(20) NOT NULL,
	PRIMARY KEY (`not_id`)
);



ALTER TABLE `usuarios` ADD CONSTRAINT `usuarios_fk6` FOREIGN KEY (`usu_niv_id`) REFERENCES `nivel`(`niv_id`);
ALTER TABLE `pedidos` ADD CONSTRAINT `pedidos_fk4` FOREIGN KEY (`ped_pag_id`) REFERENCES `pagamento`(`pag_id`);

ALTER TABLE `pedidos` ADD CONSTRAINT `pedidos_fk5` FOREIGN KEY (`ped_proped_id`) REFERENCES `produto_pedidos`(`proped_id`);

ALTER TABLE `produto_pedidos` ADD CONSTRAINT `produto_pedidos_fk1` FOREIGN KEY (`proped_pro_id`) REFERENCES `produtos`(`pro_id`);

ALTER TABLE `produto_pedidos` ADD CONSTRAINT `produto_pedidos_fk2` FOREIGN KEY (`proped_usu_id`) REFERENCES `usuarios`(`usu_id`);
ALTER TABLE `noticias` ADD CONSTRAINT `noticias_fk5` FOREIGN KEY (`not_usu_id`) REFERENCES `usuarios`(`usu_id`);