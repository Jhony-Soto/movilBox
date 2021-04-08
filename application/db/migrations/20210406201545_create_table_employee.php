<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateTableEmployee extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table=$this->table('APPX_employee', ['id' => 'id']);
        $table->addColumn('firstname','text',['null'=>false])
                ->addColumn('lastname','text',['null'=>false])
                ->addColumn('departament_id','integer',['null'=>false],['default'=>0])
                ->addColumn('salary','double',['null'=>false],['default'=>0])
                ->addColumn('educationlevel_id','integer',['null'=>false],['default'=>0])
                ->create();
    }

}
