CREATE DATABASE IF NOT EXISTS blog_mvc;
USE blog_mvc;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO posts (title, content) VALUES
('Hello Pak Mujahid', 'Ini postingan pertama pertama saya di blog sederhana ini.'),
('Saya sedang ulangan PHP MVC', 'saya baru saja membuat struktur php mvc.');