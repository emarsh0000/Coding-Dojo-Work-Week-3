SELECT store.store_id, customer.first_name, customer.last_name, customer.email, 
address.address, city.city_id
FROM customer
LEFT JOIN store ON store.store_id = customer.store_id
LEFT JOIN address ON address.address_id = customer.customer_id 
LEFT JOIN city ON address.city_id = city.city_id
WHERE store.store_id = 1 AND city.city_id IN (1, 42, 312, 459)