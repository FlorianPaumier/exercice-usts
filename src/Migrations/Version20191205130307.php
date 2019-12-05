<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191205130307 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article_tag RENAME INDEX idx_66cf3fa885c4074c TO IDX_919694F97294869C');
        $this->addSql('ALTER TABLE article_tag RENAME INDEX idx_66cf3fa8a76ed395 TO IDX_919694F9BAD26311');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article_tag RENAME INDEX idx_919694f97294869c TO IDX_66CF3FA885C4074C');
        $this->addSql('ALTER TABLE article_tag RENAME INDEX idx_919694f9bad26311 TO IDX_66CF3FA8A76ED395');
        $this->addSql('ALTER TABLE user CHANGE roles roles TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
