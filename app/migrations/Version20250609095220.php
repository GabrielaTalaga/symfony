<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250609095220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE tasks_tags (task_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_85533A508DB60186 (task_id), INDEX IDX_85533A50BAD26311 (tag_id), PRIMARY KEY(task_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tasks_tags ADD CONSTRAINT FK_85533A508DB60186 FOREIGN KEY (task_id) REFERENCES tasks (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tasks_tags ADD CONSTRAINT FK_85533A50BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE tasks_tags DROP FOREIGN KEY FK_85533A508DB60186
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE tasks_tags DROP FOREIGN KEY FK_85533A50BAD26311
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE tasks_tags
        SQL);
    }
}
