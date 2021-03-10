<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201202125554 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produits (id INT AUTO_INCREMENT NOT NULL, produits VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE appartient');
        $this->addSql('DROP TABLE bon_commande');
        $this->addSql('DROP TABLE client');
        $this->addSql('ALTER TABLE categorie MODIFY id_categorie INT NOT NULL');
        $this->addSql('ALTER TABLE categorie DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE categorie ADD libelle VARCHAR(255) NOT NULL, DROP nomCategorie, CHANGE id_categorie id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appartient (id_produit INT NOT NULL, id_categorie INT NOT NULL, INDEX FK_appartient_categorie (id_categorie), PRIMARY KEY(id_produit, id_categorie)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bon_commande (id_bon_commande INT AUTO_INCREMENT NOT NULL, facture TINYINT(1) DEFAULT NULL, date_produit_retirer VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id_bon_commande)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE client (id_client INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, email VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, tel VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id_client)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE produits');
        $this->addSql('ALTER TABLE categorie MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE categorie DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE categorie ADD nomCategorie VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, DROP libelle, CHANGE id id_categorie INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD PRIMARY KEY (id_categorie)');
    }
}
