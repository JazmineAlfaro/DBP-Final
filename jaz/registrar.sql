
CREATE TABLE `registrar` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` text
) 

INSERT INTO `registrar` (`id`, `username`, `name`, `last_name`, `password`) VALUES
(1, 'yaes', 'fabio', 'carbajal', '6438'),
(2, 'alfaro', 'jazmine', 'alfaro', '7234'),
(3, 'edi', 'eddy', 'choque', '2345'),

