ALTER TABLE `orders` ADD CONSTRAINT `order_user` 
FOREIGN KEY (`USER_ID`) 
REFERENCES `user`(`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;