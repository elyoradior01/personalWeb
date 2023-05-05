CREATE DATABASE db_personalwebely;

CREATE TABLE `form_data` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nama` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telp` VARCHAR(20) NOT NULL,
  `pesan` TEXT NOT NULL,
  `status_del` char(1) NOT NULL DEFAULT 'N'
);