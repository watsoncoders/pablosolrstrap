ALTER TABLE telegram_users
ADD FULLTEXT(username, full_name, bio, groups);
