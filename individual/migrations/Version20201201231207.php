<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201201231207 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE furniture -- DROP FOREIGN KEY FK_26B07E2EC54C8C93');
        // $this->addSql('DROP INDEX idx_26b07e2ec54c8c93 ON furniture');
        // $this->addSql('CREATE INDEX IDX_665DDAB3C54C8C93 ON furniture (type_id)');
        $this->addSql('ALTER TABLE furniture ADD CONSTRAINT FK_26B07E2EC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('INSERT INTO type (id, name) VALUES (8, \'Desckq\')');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE furniture -- DROP FOREIGN KEY FK_665DDAB3C54C8C93');
        // $this->addSql('DROP INDEX idx_665ddab3c54c8c93 ON furniture');
        // $this->addSql('CREATE INDEX IDX_26B07E2EC54C8C93 ON furniture (type_id)');
        $this->addSql('ALTER TABLE furniture ADD CONSTRAINT FK_665DDAB3C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('INSERT INTO type (id, name) VALUES (6, \'Desck\')');
    }
}
