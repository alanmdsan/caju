CREATE TABLE `caju`.`restaurantes` ( 
    `id` INT NOT NULL AUTO_INCREMENT , 
    `nome` VARCHAR(255) NOT NULL , 
    `descricao` VARCHAR(255) NOT NULL , 
    `cnpj` VARCHAR(20) NOT NULL , 
    `endereco` VARCHAR(255) NOT NULL , 
    `telefone` VARCHAR(20) NOT NULL , 
    PRIMARY KEY (`id`)) ENGINE = InnoDB;