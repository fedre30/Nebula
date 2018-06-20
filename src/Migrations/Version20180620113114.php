<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180620113114 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE questions');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE fact_sheets DROP slug, DROP category, DROP main_title, DROP video_description_title, DROP video_description_text, DROP video_src, DROP video_alt, DROP explanation_title, DROP explanation_text, DROP scientific_fact_title, DROP scientific_fact_text, DROP posted_at, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE tab_title tab_title VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE questions (id INT UNSIGNED AUTO_INCREMENT NOT NULL, id_fact INT UNSIGNED NOT NULL, question VARCHAR(120) NOT NULL COLLATE utf8_general_ci, answer TINYINT(1) NOT NULL, INDEX id_fact_constraint (id_fact), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT UNSIGNED AUTO_INCREMENT NOT NULL, user VARCHAR(60) NOT NULL COLLATE utf8_general_ci, password VARCHAR(60) NOT NULL COLLATE utf8_general_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT id_fact_constraint FOREIGN KEY (id_fact) REFERENCES fact_sheets (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE fact_sheets ADD slug VARCHAR(120) NOT NULL COLLATE utf8_general_ci, ADD category VARCHAR(60) NOT NULL COLLATE utf8_general_ci, ADD main_title VARCHAR(60) NOT NULL COLLATE utf8_general_ci, ADD video_description_title VARCHAR(60) NOT NULL COLLATE utf8_general_ci, ADD video_description_text VARCHAR(3000) NOT NULL COLLATE utf8_general_ci, ADD video_src VARCHAR(2048) NOT NULL COLLATE utf8_general_ci, ADD video_alt VARCHAR(100) NOT NULL COLLATE utf8_general_ci, ADD explanation_title VARCHAR(60) NOT NULL COLLATE utf8_general_ci, ADD explanation_text VARCHAR(3000) NOT NULL COLLATE utf8_general_ci, ADD scientific_fact_title VARCHAR(60) NOT NULL COLLATE utf8_general_ci, ADD scientific_fact_text VARCHAR(3000) NOT NULL COLLATE utf8_general_ci, ADD posted_at DATETIME NOT NULL, CHANGE id id INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE tab_title tab_title VARCHAR(110) NOT NULL COLLATE utf8_general_ci');
    }
}
