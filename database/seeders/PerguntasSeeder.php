<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Qual é o maior oceano do mundo?',
            'opcao_a' => 'Atlântico',
            'opcao_b' => 'Índico',
            'opcao_c' => 'Pacífico',
            'opcao_d' => 'Ártico',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem pintou a ultima ceia?',
            'opcao_a' => 'Michelangelo',
            'opcao_b' => 'Leonardo da Vinci',
            'opcao_c' => 'Rafael',
            'opcao_d' => 'Donatello',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual pais com a maior população do mundo"?',
            'opcao_a' => 'Ídia',
            'opcao_b' => 'China',
            'opcao_c' => 'Estados Unidos',
            'opcao_d' => 'Indonésia',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qauntos planetas existem no sistema solar?',
            'opcao_a' => '7',
            'opcao_b' => '8',
            'opcao_c' => '9',
            'opcao_d' => '10',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que continente fica o Egito?',
            'opcao_a' => 'Ásia',
            'opcao_b' => 'Europa',
            'opcao_c' => 'África',
            'opcao_d' => 'América',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que continente fica o Egito?',
            'opcao_a' => 'Ásia',
            'opcao_b' => 'Europa',
            'opcao_c' => 'África',
            'opcao_d' => 'América',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Em que ano começou a Primeira Guerra Mundial?',
            'opcao_a' => '1905',
            'opcao_b' => '1914',
            'opcao_c' => '1918',
            'opcao_d' => '1939',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem descobriu o Brasil segundo a história oficial?',
            'opcao_a' => 'Cristóvão Colombo',
            'opcao_b' => 'Fernão de Magalhães',
            'opcao_c' => 'Pedro Álvares Cabral',
            'opcao_d' => 'Vasco da Gama',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);
        Pergunta::create([
            'texto' => 'Qual foi a principal causa da Revolução Francesa?',
            'opcao_a' => 'A invasão inglesa',
            'opcao_b' => 'A fome e as desigualdades sociais',
            'opcao_c' => 'O avanço do Império Romano',
            'opcao_d' => 'O domínio espanhol',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem foi o líder do movimento da independência da Índia?',
            'opcao_a' => 'Jawaharlal Nehru',
            'opcao_b' => 'Mahatma Gandhi',
            'opcao_c' => 'Indira Gandhi',
            'opcao_d' => 'Dalai Lama',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem foi o primeiro presidente do Brasil?',
            'opcao_a' => 'Deodoro da Fonseca',
            'opcao_b' => 'Getúlio Vargas',
            'opcao_c' => 'Marechal Floriano Peixoto',
            'opcao_d' => 'Dom Pedro II',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual civilização construiu Machu Picchu?',
            'opcao_a' => 'Astecas',
            'opcao_b' => 'Maias',
            'opcao_c' => 'Incas',
            'opcao_d' => 'Egípcios',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem foi o último imperador do Brasil?',
            'opcao_a' => 'Dom Pedro I',
            'opcao_b' => 'Dom Pedro II',
            'opcao_c' => 'Marechal Deodoro',
            'opcao_d' => 'José Bonifácio',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual era o nome do navio em que Charles Darwin viajou para estudar a teoria da evolução?',
            'opcao_a' => 'Endurance',
            'opcao_b' => 'Beagle',
            'opcao_c' => 'Titanic',
            'opcao_d' => 'Victoria',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual país lançou a primeira bomba atômica usada em guerra?',
            'opcao_a' => 'Alemanha',
            'opcao_b' => 'Estados Unidos',
            'opcao_c' => 'Rússia',
            'opcao_d' => 'Japão',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual era o nome do muro que dividia a Alemanha em duas partes durante a Guerra Fria?',
            'opcao_a' => 'Muro de Londres',
            'opcao_b' => 'Muro da Liberdade',
            'opcao_c' => 'Muro de Berlim',
            'opcao_d' => 'Muro de Varsóvia',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
