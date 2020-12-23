SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tb_info` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tb_info` (`id`, `titulo`, `descricao`) VALUES
(1, 'aaaa', 'bbbbb');

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tb_produtos` (`id`, `descricao`, `preco`) VALUES
(1, 'produto1', 55);


ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

