<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180207193353 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE antibot_post_tag (post_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_C49A38884B89032C (post_id), INDEX IDX_C49A3888BAD26311 (tag_id), PRIMARY KEY(post_id, tag_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE antibot_post_tag ADD CONSTRAINT FK_C49A38884B89032C FOREIGN KEY (post_id) REFERENCES antibot_post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE antibot_post_tag ADD CONSTRAINT FK_C49A3888BAD26311 FOREIGN KEY (tag_id) REFERENCES antibot_tag (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE symfony_demo_post_tag');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE symfony_demo_post_tag (post_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_6ABC1CC44B89032C (post_id), INDEX IDX_6ABC1CC4BAD26311 (tag_id), PRIMARY KEY(post_id, tag_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ADD CONSTRAINT FK_6ABC1CC44B89032C FOREIGN KEY (post_id) REFERENCES antibot_post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE symfony_demo_post_tag ADD CONSTRAINT FK_6ABC1CC4BAD26311 FOREIGN KEY (tag_id) REFERENCES antibot_tag (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE antibot_post_tag');
    }
}
