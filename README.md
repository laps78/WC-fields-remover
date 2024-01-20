# WC-fields-remover

### Версия v.1.0.1
### Установка:

Скопировать папку с плагином в папку wp-content/plugins/
### Совет:

> Чтобы изменить перечень полей, удаляемые плагином, > редактируйте тело функции `fields_remover()`

Для отмены удаления поля достаточно просто полностью удалить из файла стройчку с упоминанием соответствующего поля.
<br>
(см. таблицу полей ниже)

### Список доступных полей по умолчанию по группам

|Группа |	Название 				    |Приоритет|
|-------|---------------------|---------|
|Billing|	billing_first_name 	|	10      |
|       |  billing_last_name 	|	20      |
| 		  |  billing_company 		| 30      |
|	 		  |  billing_country 		| 40      |
|	 		  |  billing_address_1 	|	50      |
|			  |  billing_address_2 	|	60      |
|			  |  billing_city    	  |	70      |
|			  |  billing_state 	   	|	80      |
|			  |  billing_postcode 	|	90      |
|			  |  billing_phone 			| 100     |
|			  |  billing_email 			| 110     |
|Shipping| shipping_first_name |	10     |
|    		|	shipping_last_name 	|	20      |
|		    |	shipping_company 		| 30      |
|			  | shipping_country 		| 40      |
|    		|	shipping_address_1 	|	50      |
|		    |	shipping_address_2 	|	60      |
|			  | shipping_city 			| 70      |
|			  | shipping_state 			| 80      |
|			  | shipping_postcode 	|	90      |
|Account |	account_password 		| –      |
|Order  | order_comments  		|	–       |
___
