<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180329144103 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE relaxation_slider DROP FOREIGN KEY FK_F14C288338BBE828');
        $this->addSql('DROP INDEX IDX_F14C288338BBE828 ON relaxation_slider');
        $this->addSql('ALTER TABLE relaxation_slider CHANGE relaxation_id relaxation_slider_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE relaxation_slider ADD CONSTRAINT FK_F14C2883A705C309 FOREIGN KEY (relaxation_slider_id) REFERENCES relaxation (id)');
        $this->addSql('CREATE INDEX IDX_F14C2883A705C309 ON relaxation_slider (relaxation_slider_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE relaxation_slider DROP FOREIGN KEY FK_F14C2883A705C309');
        $this->addSql('DROP INDEX IDX_F14C2883A705C309 ON relaxation_slider');
        $this->addSql('ALTER TABLE relaxation_slider CHANGE relaxation_slider_id relaxation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE relaxation_slider ADD CONSTRAINT FK_F14C288338BBE828 FOREIGN KEY (relaxation_id) REFERENCES relaxation (id)');
        $this->addSql('CREATE INDEX IDX_F14C288338BBE828 ON relaxation_slider (relaxation_id)');
    }
}
