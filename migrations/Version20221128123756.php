<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221128123756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__dessert_user AS SELECT id, id_user_id, name, price, description, img, quantity FROM dessert_user');
        $this->addSql('DROP TABLE dessert_user');
        $this->addSql('CREATE TABLE dessert_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, description VARCHAR(300) NOT NULL, img VARCHAR(600) DEFAULT NULL, quantity INTEGER NOT NULL, CONSTRAINT FK_C0891BAC79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO dessert_user (id, id_user_id, name, price, description, img, quantity) SELECT id, id_user_id, name, price, description, img, quantity FROM __temp__dessert_user');
        $this->addSql('DROP TABLE __temp__dessert_user');
        $this->addSql('CREATE INDEX IDX_C0891BAC79F37AE5 ON dessert_user (id_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__dessert_user AS SELECT id, id_user_id, name, price, description, img, quantity FROM dessert_user');
        $this->addSql('DROP TABLE dessert_user');
        $this->addSql('CREATE TABLE dessert_user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_user_id INTEGER NOT NULL, id_dessert_list_user_id INTEGER NOT NULL, dessert_list_user_id INTEGER NOT NULL, name VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, description VARCHAR(300) NOT NULL, img VARCHAR(600) DEFAULT NULL, quantity INTEGER NOT NULL, CONSTRAINT FK_C0891BAC79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_C0891BAC13059777 FOREIGN KEY (id_dessert_list_user_id) REFERENCES dessert_list_user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_C0891BAC1FF566D3 FOREIGN KEY (dessert_list_user_id) REFERENCES dessert_list_user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO dessert_user (id, id_user_id, name, price, description, img, quantity) SELECT id, id_user_id, name, price, description, img, quantity FROM __temp__dessert_user');
        $this->addSql('DROP TABLE __temp__dessert_user');
        $this->addSql('CREATE INDEX IDX_C0891BAC79F37AE5 ON dessert_user (id_user_id)');
        $this->addSql('CREATE INDEX IDX_C0891BAC1FF566D3 ON dessert_user (dessert_list_user_id)');
        $this->addSql('CREATE INDEX IDX_C0891BAC13059777 ON dessert_user (id_dessert_list_user_id)');
    }
}
