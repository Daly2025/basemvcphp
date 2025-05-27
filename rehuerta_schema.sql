-- Tabla para intercambio de semillas
CREATE TABLE IF NOT EXISTS `seed_exchange` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `description` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`)
);

-- Tabla para temas del foro
CREATE TABLE IF NOT EXISTS `forum_topic` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `content` TEXT NOT NULL,
  `image` VARCHAR(255),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`)
);

-- Tabla para comentarios en temas del foro
CREATE TABLE IF NOT EXISTS `forum_comment` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `topic_id` INT NOT NULL,
  `author` VARCHAR(255) NOT NULL,
  `content` TEXT NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`topic_id`) REFERENCES `forum_topic`(`id`) ON DELETE CASCADE
);
