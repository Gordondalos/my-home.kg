Эта ошибка возникает при выборе украинского или русского языка при установке, на 1.7.6.7, 1.7.6.8, и 1.7.7

На гитхабе уже несколько раз пользователи создавали запрос на исправление этого бага, но пока проблема не решена.

https://github.com/PrestaShop/PrestaShop/issues/20519

Один из вариантов решения проблемы - в установочном архиве, перед установкой изменить 2 файла:

1. install\upgrade\sql\1.6.0.3.sql

7 строка:

ALTER TABLE `PREFIX_tab_lang` CHANGE `name` `name` VARCHAR(64) DEFAULT NULL; 
заменить 64 на 512

2. \classes\Tab.php

73 строка:

'name' => array('type' => self::TYPE_STRING, 'lang' => true, 'required' => true, 'validate' => 'isTabName', 'size' => 64), 
заменить 64 на 512

 

И напоминаю, что разработчики не читают этот форум. Если есть желание сообщить о баге - надо создавать тикет на гитхабе или https://forge.prestashop.com


mysqldump -p my_home > my_home_backup.sql
