<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220613125314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_prestations (user_id INT NOT NULL, prestations_id INT NOT NULL, INDEX IDX_1A231144A76ED395 (user_id), INDEX IDX_1A2311448BE96D0D (prestations_id), PRIMARY KEY(user_id, prestations_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_prestations ADD CONSTRAINT FK_1A231144A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_prestations ADD CONSTRAINT FK_1A2311448BE96D0D FOREIGN KEY (prestations_id) REFERENCES prestations (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user CHANGE numeroadresse numeroadresse VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user_prestations');
        $this->addSql('ALTER TABLE `user` CHANGE numeroadresse numeroadresse INT NOT NULL');
    }
}
