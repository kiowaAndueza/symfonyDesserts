<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128125039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dessert_list_user');
        $this->addSql('DROP TABLE dessert_user');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dessert_list_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL COLLATE "BINARY", CONSTRAINT FK_F828603A79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_F828603A79F37AE5 ON dessert_list_user (id_user_id)');
        $this->addSql('CREATE TABLE dessert_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user_id INTEGER NOT NULL, dessert_list_user_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL COLLATE "BINARY", price DOUBLE PRECISION NOT NULL, description VARCHAR(300) NOT NULL COLLATE "BINARY", img VARCHAR(600) DEFAULT NULL COLLATE "BINARY", quantity INTEGER NOT NULL, CONSTRAINT FK_C0891BAC79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_C0891BAC1FF566D3 FOREIGN KEY (dessert_list_user_id) REFERENCES dessert_list_user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_C0891BAC1FF566D3 ON dessert_user (dessert_list_user_id)');
        $this->addSql('CREATE INDEX IDX_C0891BAC79F37AE5 ON dessert_user (id_user_id)');
    }
}
