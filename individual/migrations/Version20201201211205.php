<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201201211205 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE furniture DROP FOREIGN KEY FK_26B07E2EC54C8C93');
        $this->addSql('DROP INDEX idx_26b07e2ec54c8c93 ON furniture');
        $this->addSql('CREATE INDEX IDX_665DDAB3C54C8C93 ON furniture (type_id)');
        $this->addSql('ALTER TABLE furniture ADD CONSTRAINT FK_26B07E2EC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE furniture DROP FOREIGN KEY FK_665DDAB3C54C8C93');
        $this->addSql('DROP INDEX idx_665ddab3c54c8c93 ON furniture');
        $this->addSql('CREATE INDEX IDX_26B07E2EC54C8C93 ON furniture (type_id)');
        $this->addSql('ALTER TABLE furniture ADD CONSTRAINT FK_665DDAB3C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
    }
}
