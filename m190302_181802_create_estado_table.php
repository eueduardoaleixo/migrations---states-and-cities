<?php

use console\migrations\base\Migration;

/**
 * Handles the creation of table `{{%estado}}`.
 */
class m190302_181802_create_estado_table extends Migration
{
    protected $popularTabela = 1;
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%estado}}', [
            'id' => $this->primaryKey(),
            'uf' => $this->string(),
            'nome' => $this->string(),
            'updated_at' => $this->integer(),
            'created_at' => $this->integer(),
        ], $this->getDefaultTableOptions());

        $this->createIndex('idx-estado-id','{{%estado}}','id');

        if($this->popularTabela)
        {

            $this->batchInsert("{{%estado}}", ['id','uf','nome','created_at','updated_at'],
                [
                    [11, 'RO', 'Rondônia',time(),time()],
                    [12, 'AC', 'Acre',time(),time()],
                    [13, 'AM', 'Amazonas',time(),time()],
                    [14, 'RR', 'Roraima',time(),time()],
                    [15, 'PA', 'Pará',time(),time()],
                    [16, 'AP', 'Amapá',time(),time()],
                    [17, 'TO', 'Tocantins',time(),time()],
                    [21, 'MA', 'Maranhão',time(),time()],
                    [22, 'PI', 'Piauí',time(),time()],
                    [23, 'CE', 'Ceará',time(),time()],
                    [24, 'RN', 'Rio Grande do Norte',time(),time()],
                    [25, 'PB', 'Paraíba',time(),time()],
                    [26, 'PE', 'Pernambuco',time(),time()],
                    [27, 'AL', 'Alagoas',time(),time()],
                    [28, 'SE', 'Sergipe',time(),time()],
                    [29, 'BA', 'Bahia',time(),time()],
                    [31, 'MG', 'Minas Gerais',time(),time()],
                    [32, 'ES', 'Espírito Santo',time(),time()],
                    [33, 'RJ', 'Rio de Janeiro',time(),time()],
                    [35, 'SP', 'São Paulo',time(),time()],
                    [41, 'PR', 'Paraná',time(),time()],
                    [42, 'SC', 'Santa Catarina',time(),time()],
                    [43, 'RS', 'Rio Grande do Sul',time(),time()],
                    [50, 'MS', 'Mato Grosso do Sul',time(),time()],
                    [51, 'MT', 'Mato Grosso',time(),time()],
                    [52, 'GO', 'Goiás',time(),time()],
                    [53, 'DF', 'Distrito Federal',time(),time()],
                ]);


        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%estado}}');
    }
}
