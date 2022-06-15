<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220613123609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD numeroadresse VARCHAR(255) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL, CHANGE cartenombre cartenombre VARCHAR(255) NOT NULL, CHANGE expiremois expiremois VARCHAR(255) NOT NULL, CHANGE expireannee expireannee VARCHAR(255) NOT NULL, CHANGE cvv cvv VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `user` DROP numeroadresse, CHANGE telephone telephone INT NOT NULL, CHANGE cartenombre cartenombre INT NOT NULL, CHANGE expiremois expiremois INT NOT NULL, CHANGE expireannee expireannee INT NOT NULL, CHANGE cvv cvv INT NOT NULL');
    }
}
