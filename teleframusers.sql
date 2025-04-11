CREATE TABLE telegram_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    telegram_id BIGINT,
    username VARCHAR(100),
    full_name VARCHAR(255),
    phone VARCHAR(30),
    bio TEXT,
    country VARCHAR(100),
    groups TEXT,
    last_active DATETIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
