<?php

use App\Exercicio;
use Illuminate\Database\Seeder;

class ExerciciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exercicio = new Exercicio();
        $exercicio->nome = 'Supino Reto';
        $exercicio->descricao = 'Deite sobre um banco horizontal e mantenha os glúteos em contato com o banco.
Segure a barra de forma que as mãos fiquem com a palma voltada para a direção dos seus pés e com uma distância maior que a largura dos ombros. 
Ao Inspirar: Desça a barra até o peito, controlando o movimento para que ela não toque seu corpo.
Ao Expirar: Estique os braços levantando a barra.';
        $exercicio->categoria_id = '1';
        $exercicio->save();

        $exercicio = new Exercicio();
        $exercicio->nome = 'Supino Inclinado';
        $exercicio->descricao = 'Deite sobre um banco inclinado (aproximadamente 45 graus) e mantenha os glúteos em contato com o banco.
Segure a barra de forma que as mãos fiquem com a palma voltada para a direção dos seus pés e com uma distância maior que a largura dos ombros.Ao Inspirar: Desça a barra até o peito, na altura do tórax, 
controlando o movimento para que ela não toque seu corpo.
Ao Expirar: Estique os braços levantando a barra.';
        $exercicio->categoria_id = '1';
        $exercicio->save();

        $exercicio = new Exercicio();
        $exercicio->nome = 'Crossover ';
        $exercicio->descricao = 'Para esse exercício, você utilizará as pegadas de uma mão.
Selecione o peso desejado e ajuste as polias para uma posição que fique um pouco mais alto que seus ombros.
 Mantenha-se no centro da máquina, dê um passo a frente e mantenha um pé a frente do outro.
As palmas das mãos devem permanecer voltadas para frente.
Deixe as costas retas e o tronco levemente inclinado para frente. Ao Expirar: Mantenha os cotovelos ligeiramente dobrados e feche os braços na frente do seu corpo, de modo a quase tocar as mãos.
Inalar: Lentamente retorne à posição inicial (sem esticar completamente os cotovelos).';
        $exercicio->categoria_id = '1';
        $exercicio->save();

        $exercicio = new Exercicio();
        $exercicio->nome = 'Crucifixo ';
        $exercicio->descricao = 'Segure um halter em uma das mãos e ajoelhe-se no banco com o joelho oposto. Incline-se para a frente e mantenha as costas paralelas ao chão, apoiando o peso do corpo sobre sua mão livre.
Mantenha o cotovelo do braço que segura o peso levemente flexionado.Ao Expirar: Dobre o cotovelo e levante o peso até que ele fique na mesma altura do seu peitoral.
Ao Inspirar: Abaixe o peso lentamente à posição inicial e repita.';
        $exercicio->categoria_id = '1';
        $exercicio->save();

        $exercicio = new Exercicio();
        $exercicio->nome = 'Remada Unilateral ';
        $exercicio->descricao = 'Deite-se em um banco horizontal. Segure os halteres com os braços estendidos e os cotovelos levemente flexionados. 
        Ao Inspirar: Abra os braços, abaixando os halteres até que os cotovelos atinjam a altura dos ombros.
Ao Expirar: Levante os halteres até que eles quase se toquem.';
        $exercicio->categoria_id = '2';
        $exercicio->save();

        $exercicio = new Exercicio();
        $exercicio->nome = 'Puxada na Frente com Triângulo';
        $exercicio->descricao = 'Sente-se no aparelho, de modo que os joelhos fiquem apoiados sob o apoio frontal e os pés apoiados no chão. Os joelhos devem ficar dobrados em 90 graus.
Segure o triângulo de modo que os cotovelos fiquem levemente flexionados e mantenha os cotovelos paralelos.Ao Expirar: Dobre os cotovelos e puxe o triângulo para baixo, em direção ao seu peito. Desça até que o mosquetão atinja a altura do seu queixo.
Ao Inspirar: Estique os braços lentamente, voltando à posição inicial.
Contraia o abdome, mantenha a coluna reta e incline-se levemente para trás.';
        $exercicio->categoria_id = '2';
        $exercicio->save();

        $exercicio = new Exercicio();
        $exercicio->nome = 'Puxada Alta com Braços Estendidos ';
        $exercicio->descricao = 'Selecione o peso desejado, prenda a barra grande no mosquetão e ajuste a polia de modo que a barra fique em uma posição mais alta que a linha do peitoral.
Fique de frente para os pesos e segure a barra com a palma da mão voltada para baixo e os braços um pouco mais abertos que a largura dos ombros.
Flexione levemente os cotovelos e mantenha suas mãos na direção do peitoral. Deixe as costas retas, o abdome contraído, o tronco levemente inclinado para frente e os pés posicionados um a frente do outro.
Dê um passo para trás, para que o peso fique ligeiramente para fora da pilha enquanto seus braços estiverem esticados.';
        $exercicio->categoria_id = '2';
        $exercicio->save();
    }
}
