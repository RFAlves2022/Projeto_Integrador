-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jul-2023 às 03:28
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_favoritos`
--

CREATE TABLE `tb_favoritos` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `filme_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_favoritos`
--

INSERT INTO `tb_favoritos` (`id`, `usuario_id`, `filme_id`) VALUES
(8, 3, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_titulos`
--

CREATE TABLE `tb_titulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `elenco` varchar(200) NOT NULL,
  `diretor` varchar(70) NOT NULL,
  `genero` varchar(70) NOT NULL,
  `sinopse` varchar(400) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_titulos`
--

INSERT INTO `tb_titulos` (`id`, `titulo`, `elenco`, `diretor`, `genero`, `sinopse`, `link`, `img`) VALUES
(5, 'Barbie', 'Margot Robbie, Ryan Gosling, America Ferrera', 'Greta Gerwig', 'Aventura, Comédia, Família', 'No fabuloso live-action da boneca mais famosa do mundo, acompanhamos o dia a dia em Barbieland - o mundo mágico das Barbies, onde todas as versões da boneca vivem em completa harmonia e suas únicas preocupações são encontrar as melhores roupas para passear com as amigas e curtir intermináveis festas. Porém, uma das bonecas (interpretada por Margot Robbie) começa a perceber que talvez sua vida não ', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ujs1Ud7k49M\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1689615221.webp'),
(8, 'Mistério em Paris', 'Adam Sandler, Jennifer Aniston, Mark Strong', 'Jeremy Garelick', 'Comédia, Policial', 'Mistério em Paris é a sequência de Mistério no Mediterrâneo. Prepare seu passaporte e mochila de aventuras, Nick Spitz (Adam Sandler) e Audrey Spitz (Jennifer Aniston) estão de malas prontas para resolver outro mistério internacional. Depois dos eventos do primeiro longa, Nick e Audrey sofrem com o fracasso da agência de investigações que eles abriram. Agora detetives profissionais e em tempo inte', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FDcsfr7bsE8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690247219.jfif'),
(9, 'Homem-Formiga e a Vespa: Quantumania', 'Paul Rudd, Evangeline Lilly, Michael Douglas', ' Peyton Reed', ' Ação, Aventura, Ficção científica', 'Em Homem-Formiga e a Vespa: Quantumania, quando Cassie (Kathryn Newton), filha de Scott Lang (Paul Rudd), desenvolve um dispositivo que permitiria a comunicação com o reino quântico, o experimento termina em desastre: Cassie, Scott e sua companheira e heroína, Vespa, Hope van Dyne (Evangeline Lilly) involuntariamente se encontram no reino místico. Unindo forças com os pais de Hope, Hank Pym (Micha', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/6jIz_8tokvg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690247332.jpeg'),
(10, 'O Pacto', 'Jake Gyllenhaal, Dar Salim, Alexander Ludwig', 'Guy Ritchie', ' Ação, Suspense, Guerra', 'Em O Pacto, durante a Guerra do Afeganistão, o Sargento John Kinley (Jake Gylenhaal) recruta o intérprete local Ahmed (Dar Salim) para acompanhar a equipe na missão de neutralizar o maior número possível de instalações do Talibã. Porém, no confronto, Kinley acaba sendo atingido e é gravemente ferido. Para salvar o sargento, Ahmed não pensa duas vezes antes de colocar a própria vida em risco e carr', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/02PPMPArNEQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690247447.jpg'),
(11, 'Belo Desastre', 'Dylan Sprouse, Virginia Gardner, Austin North', 'Roger Kumble', 'Comédia dramática, Romance, Drama, Comédia', 'Em Belo Desastre, Abby Abernathy (Virginia Gardner) acredita que já está bem distante de seu tumultuado passado, mas quando ela chega à faculdade com sua melhor amiga America (Libe Barer), seu caminho para um novo começo é colocado em risco por uma aventura de uma noite com um cara chamado Travis “Mad Dog” Maddox (Dylan Sprouse). Travis é o típico garoto bad boy e exatamente a pessoa que Abby deve', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/nvaenzyXl4o\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690247732.jpg'),
(12, 'Jung_E', 'Hyun-joo Kim, Kyung-soo Ryu', 'Sang-Ho Yeon', 'Ficção científica, Suspense, Aventura, Ação', 'Em uma distopia de um planeta Terra inabitável do século XXII devido às mudanças climáticas, uma guerra interna eclode no abrigo construído para a sobrevivência humana. O resultado dessa guerra civil, ou a vitória – significando o fim da guerra – depende da clonagem do cérebro de uma soldado de elite, o lendário mercenário JUNG_E.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1PcEMLVlDe0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690248025.webp'),
(13, 'Shazam! Fúria dos Deuses', 'Zachary Levi, Asher Angel, Jack Dylan Grazer', 'David F. Sandberg', 'Fantasia, Aventura, Ação, Comédia', 'Shazam! Fúria dos Deuses é a sequência do primeiro filme do herói que apresenta as aventuras do adolescente orfão Billy Batson (Asher Angel). Basta gritar uma palavra – SHAZAM! – para que o jovem se transforme no super-herói adulto Shazam (Zachary Levi), dom que recebeu de um antigo mago. Um menino dentro de um corpo de herói, Shazam se diverte com seus superpoderes e começa a testar os limites de', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Ow_BHT3biQ8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690248111.webp'),
(14, '', 'David Lowery', 'Alexander Molony, Ever Anderson, Yara Shahidi', ' Aventura, Fantasia, Família', 'Em Peter Pan & Wendy, Wendy e seus irmãos são levados para o mundo mágico da Terra do Nunca com o herói de suas histórias, Peter Pan.\r\n', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5g-qd_nFuSQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690248332.jpg'),
(15, 'OS CAVALEIROS DO ZODÍACO – SAINT SEIYA: O COMEÇO', 'Tomasz Baginski', 'Mackenyu, Famke Janssen, Sean Bean', 'Aventura, Ação, Fantasia', 'Os Cavaleiros do Zodíaco - Saint Seiya: O Começo é um filme de ação e aventura baseado na famosa série de mangás Os Cavaleiros do Zodíaco, de Masami Kurumada. O longa acompanha Seiya (Mackenyu), um lutador muito habilidoso que participa de competições por dinheiro. Durante uma de suas lutas, Seiya acaba descobrindo que tem poderes, e atrai a atenção do magnata Kido (Sean Bean). Kido encarrega o jo', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/RO08ZmnPHV4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '1690248449.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `username`, `email`, `senha`) VALUES
(3, 'rafa', 'rafa@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_favoritos`
--
ALTER TABLE `tb_favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `filme_id` (`filme_id`);

--
-- Índices para tabela `tb_titulos`
--
ALTER TABLE `tb_titulos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_favoritos`
--
ALTER TABLE `tb_favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_titulos`
--
ALTER TABLE `tb_titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_favoritos`
--
ALTER TABLE `tb_favoritos`
  ADD CONSTRAINT `tb_favoritos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `tb_usuarios` (`id`),
  ADD CONSTRAINT `tb_favoritos_ibfk_2` FOREIGN KEY (`filme_id`) REFERENCES `tb_titulos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
