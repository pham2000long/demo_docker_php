-- Bài 1
SELECT categories.*, count(items.category_id) AS "Count items"
FROM categories INNER JOIN items 
ON categories.id = items.category_id
GROUP BY categories.id;

-- Bài 2
SELECT categories.*, sum(items.amount) AS "Sum amount"
FROM categories INNER JOIN items 
ON categories.id = items.category_id
GROUP BY categories.id;

-- Bài 3
SELECT categories.*
FROM categories INNER JOIN items 
ON categories.id = items.category_id
WHERE items.amount > 40
GROUP BY categories.id;

-- Bài 4

UPDATE categories as a INNER JOIN categories as b ON a.id = b.id 
SET a.id = b.id,
a.name = b.name,
a.description = b.description,
a.created_at = b.created_at,
a.updated_at = b.updated_at;

DELETE FROM categories 
WHERE id NOT IN (SELECT DISTINCT category_id FROM items);

SELECT * FROM categories;
SELECT * FROM items;

INSERT INTO categories (`id`, `name`, `description` )
VALUES (7, 'Long', 'Empty Category');

