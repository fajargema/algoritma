SELECT 
    promo.id,
    pro.name as product_nama_1,
    pe.name as product_nama_2,
    harga_promo.price as harga_promo
FROM promo
LEFT JOIN product pro ON promo.product1_id = pro.id
LEFT JOIN product pe ON promo.product2_id = pe.id
LEFT JOIN harga_promo ON harga_promo.promo_id = promo.id;