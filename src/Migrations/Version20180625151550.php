<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180625151550 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fact_sheets (id INT AUTO_INCREMENT NOT NULL, tab_title VARCHAR(110) NOT NULL, category VARCHAR(60) NOT NULL, main_title VARCHAR(60) NOT NULL, video_description_title VARCHAR(60) NOT NULL, video_description_text VARCHAR(3000) NOT NULL, video_src VARCHAR(2048) NOT NULL, video_alt VARCHAR(100) NOT NULL, explanation_title VARCHAR(60) NOT NULL, explanation_text VARCHAR(3000) NOT NULL, scientific_fact_title VARCHAR(60) NOT NULL, scientific_fact_text VARCHAR(3000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE home_questions (id INT AUTO_INCREMENT NOT NULL, page_id INT NOT NULL, question VARCHAR(160) NOT NULL, UNIQUE INDEX UNIQ_F4082D91C4663E4 (page_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movies (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quizz (id INT AUTO_INCREMENT NOT NULL, page_id INT NOT NULL, question VARCHAR(160) NOT NULL, first_answer VARCHAR(110) NOT NULL, first_answer_correction TINYINT(1) NOT NULL, second_answer VARCHAR(110) NOT NULL, second_answer_correction TINYINT(1) NOT NULL, third_answer VARCHAR(110) NOT NULL, third_answer_correction TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_7C77973DC4663E4 (page_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE home_questions ADD CONSTRAINT FK_F4082D91C4663E4 FOREIGN KEY (page_id) REFERENCES fact_sheets (id)');
        $this->addSql('ALTER TABLE quizz ADD CONSTRAINT FK_7C77973DC4663E4 FOREIGN KEY (page_id) REFERENCES fact_sheets (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE home_questions DROP FOREIGN KEY FK_F4082D91C4663E4');
        $this->addSql('ALTER TABLE quizz DROP FOREIGN KEY FK_7C77973DC4663E4');
        $this->addSql('DROP TABLE fact_sheets');
        $this->addSql('DROP TABLE home_questions');
        $this->addSql('DROP TABLE movies');
        $this->addSql('DROP TABLE quizz');
    }
}
