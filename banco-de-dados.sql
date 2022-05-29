CREATE TABLE usuario (
  id_usuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_usuario VARCHAR(255) NULL,
  senha_usuario VARCHAR(255) NULL,
  email_usuario VARCHAR(255) NULL,
  tipo_usuario CHAR(1) NULL,
  status_usuario CHAR(1) NULL DEFAULT 1,
  PRIMARY KEY(id_usuario)
);

CREATE TABLE fornecedor (
  id_cliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_cliente VARCHAR(255) NULL,
  fone_cliente VARCHAR(20) NULL,
  email_cliente VARCHAR(255) NULL,
  end_cliente VARCHAR(255) NULL,
  cnpj_cliente VARCHAR(14) NULL,
  PRIMARY KEY(id_cliente)
);

CREATE TABLE produto (
  id_produto INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_produto VARCHAR(255) NULL,
  produto_valor FLOAT NULL,
  produto_quantidade VARCHAR(255) NULL,
  produto_id_fornecedor INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(id_produto),
  INDEX produto_FKIndex1(produto_id_fornecedor)
);

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `arquivos` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `arquivos` (`id`, `url`, `data`) VALUES
(1, '31082020093056-3.png', '2020-08-31 09:30:56'),
(2, '31082020093712-1.png', '2020-08-31 09:37:12'),
(3, '31082020093830-4.png', '2020-08-31 09:38:30');

ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `arquivos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;


