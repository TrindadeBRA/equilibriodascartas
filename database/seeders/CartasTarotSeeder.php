<?php

namespace Database\Seeders;

use App\Models\CartasTarot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartasTarotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //O Louco
        CartasTarot::create([
            "nome_da_carta" => "O Louco",
            "valor_positivo" => "O louco indica um começo, sejam ciclos novos, sejam renovações de energia. Este é o momento de descobrir novos horizontes, sentir novas energias e desejar que novas oportunidades aconteçam.",
            "valor_negativo" => "O louco tem como obstáculo a imprudência, falta de paciência e precipitações. É muito importante que tome decisões com cuidado e cautela, pois você pode acabar deixando de lado sentimentos e emoções de pessoas próximas a você, não por egocentrismo, mas por querer sempre agir rápido demais.",
            "valor_amor" => "Você tem um espírito muito positivo e descontraído, e pode passar isso a seu parceiro, descobrindo momentos muito felizes. Por outro lado, você pode chegar a se perguntar se este relacionamento é realmente o que você deseja, pode estar se sentindo incompleta e em busca de algo novo. Se está solteiro (a) sua energia está mais para descontração e conhecer pessoas novas, aproveite este momento para se divertir.",
            "valor_trabalho" => "No emprego é o momento de viver algo novo, essa notícia pode chegar como um novo trabalho, ou uma fase nova no seu trabalho. O louco também pode avisar que está com um desejo enorme de mudança, e se sentir que vale a pena, vá atrás de seu objetivo, mas tenha certeza antes de dar o primeiro passo. Se está desempregado (a) poderá receber ótimas notícias, pois um novo ciclo está a se iniciar."
        ]);

        //O Mago
        CartasTarot::create([
            "nome_da_carta" => "O Mago",
            "valor_positivo" => "O mago é objetivo e representa os talentos de uma pessoa em comunicação, além de aconselhar arriscar em algo totalmente novo. A força de vontade, o conhecimento e a esperteza simbolizam esta carta. Ela mostra a materialização dos seus desejos e adverte para aproveitar as oportunidades.",
            "valor_negativo" => "O mago adverte para que use sua sabedoria e não se iluda, e acredite ter a resposta para todas as coisas. A carta sinaliza que mantenha o controle de suas ações.",
            "valor_amor" => "Converse com seu parceiro sobre suas vontades e desejos. Você é uma pessoa que busca um relacionamento perfeito, permita-se viver o real. Se está solteiro (a), confie nessa segurança que sente e arrisque-se.",
            "valor_trabalho" => "Esse é um ótimo momento para conseguir parcerias, boas oportunidades estão no seu caminho, então acredite em seu potencial. Se estiver desempregado (a) provavelmente uma oportunidade incrível aparecerá em seu caminho! Acredite nas possibilidades, e utilize do seu poder de se expressar a seu favor."
        ]);

        //A Papisa
        CartasTarot::create([
            "nome_da_carta" => "A Papisa",
            "valor_positivo" => "A papisa está fortemente ligada ao poder da intuição e também da piedade. A carta indica o preparo para lidar com diversos tipos de questões com sabedoria ou a falta de afeto e dificuldade em expor seus sentimentos. Manter seus planos em segredo até poder coloca-los em prática é a melhor forma de chegar ao resultado desejado.",
            "valor_negativo" => "Você está com medo de refletir sobre suas atitudes e como sua vida em um geral, por isso evita ao máximo pensar sobre isso. Esse medo de pensar nas experiências traumatizantes e recordar de momentos ruins te impede friamente de evoluir, porque até mesmo as piores lembranças nos fazem amadurecer.",
            "valor_amor" => "Essa dificuldade em expor seus sentimentos na relação pode trazer consequências complicadas, podendo ser ela o medo de se apaixonar para quem está solteiro, ou uma constante dúvida de que realmente gosta de seu parceiro. Em qualquer uma das situações, saiba que é importante manter a calma em situações, e acreditar que as respostas vêm de sua intuição, de seu interior.",
            "valor_trabalho" => "A papisa indica que no trabalho, tome decisões sabias e intuitivas, guarde seus planos e pensamentos, esse período pede descrição, calma e cautela. Se está desempregado (a), pode encontrar uma oportunidade com a ajuda do sexo feminino, que te orientará da melhor maneira. Se concentre em seus objetivos, e defina as melhores direções a seguir."
        ]);

        //A Imperatriz
        CartasTarot::create([
            "nome_da_carta" => "A Imperatriz",
            "valor_positivo" => "Você possuirá consciência de seus problemas e saberá como enfrenta-los da melhor forma, estará também apta para entender profundamente questões sociais ou o sentimento das pessoas mais próximas á você, podendo orientá-las de forma inteligente. No baralho, esta carta traz a possibilidade de enxergar todas as situações e também a capacidade de se trabalhar com todas elas.",
            "valor_negativo" => "Essa carta pede atenção para intrigas e desavenças que surgirão. Alguém atrasará seus projetos e complicarão o entendimento de muitos setores em sua vida. Apesar destes sinais, esta carta também demonstra que mesmo te atrasando por um tempo, as questões serão solucionadas.",
            "valor_amor" => "Este arcano maior traz a fertilidade, intuição, e equilíbrio emocional. Use a sensualidade para esquentar ainda mais este amor e viver momentos de união e cumplicidade. Por outro lado, é importante atentar-se á possibilidade desses sentimentos se confundirem e serem alimentados como egoísmo, posse, infidelidade, ansiedade e ciúmes.",
            "valor_trabalho" => "Você estará em um momento com muito foco em sua área profissional, a questão financeira é um objetivo muito importante em sua vida. Se está desempregado (a), a energia que a imperatriz te enviará lhe possibilitará a encontrar as oportunidades muito interessantes em um momento em que você saberá julgar melhor os acontecimentos."
        ]);

        //O Imperador
        CartasTarot::create([
            "nome_da_carta" => "O Imperador",
            "valor_positivo" => "De forma positiva, as energias desse arcano são de proteção e cuidado. O imperador traz em sua figura o aspecto de organização, e do respeito.",
            "valor_negativo" => "Alguém próximo de você irá te reprimir de diversas formas, te rebaixando, humilhando e menosprezando seu valor. Essa pessoa se mostra inflexível para todo tipo de assunto e usa de sua superioridade para te controlar. Fique atento e não permita este tipo de ação.",
            "valor_amor" => "Essa carta representa todo cuidado e a segurança fornecidas por uma pessoa próxima. Será um período de segurança e estabilidade em seu relacionamento, com ótimos momentos juntos. Porém, cuidado com relacionamentos abusivos em diversos aspectos. A vontade dele impor regras às suas ações traz a necessidade do cuidado para que as coisas sejam vistas friamente e para que nada ofusque sua visão.",
            "valor_trabalho" => "Seu sucesso profissional está próximo, seus esforços estarão evidentes e serão reconhecidos, por isso, você poderá receber uma recompensa, seja um bônus ou promoção. Se está desempregado (a), as chances de encontrar uma oportunidade interessante são altas nesse período, invista em você!"
        ]);

        //O Sacerdote
        CartasTarot::create([
            "nome_da_carta" => "O Sacerdote",
            "valor_positivo" => "Este arcano sinaliza a necessidade da busca de respostas mediante fé, seja a mesma interna, ou externa. Você é capaz de lidar com todas as situações, pois utiliza seus dons e a comunicação a seu favor. O sacerdote representa a necessidade de viver dentro da legalidade, seguindo os preceitos éticos, morais e de ordem.",
            "valor_negativo" => "Há uma grande dificuldade para compreender os assuntos da vida, ou também um mau uso de sua inteligência para tomar decisões, escolher propósito ou encontrar direções.",
            "valor_amor" => "A carta indica uma conexão do consulente com o mundo espiritual e divindade. Os sacerdotes são, por si só, os símbolos de conexão com esse outro mundo. Sua busca é por um amor a vida inteira. Se está em um relacionamento, o sacerdote indica um possível casamento para quem ainda não realizou este sonho. Se está solteiro (a), tenha paciência, há alguém predestinado em seu caminho.",
            "valor_trabalho" => "Tenha fé, as coisas acontecem em nossas vidas no momento certo, mantenha sua postura séria e siga com lealdade o seu caminho justo, as recompensas virão no momento favorável, só não desista de seus objetivos."
        ]);

        //Os Enamorados
        CartasTarot::create([
            "nome_da_carta" => "Os Enamorados",
            "valor_positivo" => "Esse arcano traz consigo a oportunidade, benefícios e possíveis ofertas em sua vida neste exato momento. Suas escolhas estão completamente em suas mãos, e você tem a necessidade de fazer uma escolha neste momento em que está procrastinando. Utilize seus conhecimentos para analisar qual o melhor caminho a seguir. Há a certeza de boas parcerias neste momento, nos negócios e nos relacionamentos.",
            "valor_negativo" => "Ela evidencia o medo de errar na hora de tomar uma decisão muito importante, pois você está enfrentando um momento de muita pressão emocional. Mantenha a calma e aja friamente mediante as situações.",
            "valor_amor" => "Há uma pessoa no qual você está interessado (a), ou ela pode surgir a qualquer momento. Esse é o momento de pensar com calma e clareza se realmente está pronto para se envolver com alguém.",
            "valor_trabalho" => "Se estiver empregado (a), este é o momento de avaliar se está feliz onde está, ou se chegou o momento de investir naquele sonho que está parado há um certo tempo. Se está desempregado (a), o arcano indica chegada da oportunidade que vai mudar seus caminhos, e uma chegada favorável de dinheiro. A carta anuncia boas notícias em breve no campo profissional."
        ]);

        //O Carro
        CartasTarot::create([
            "nome_da_carta" => "O Carro",
            "valor_positivo" => "Esta carta simboliza a vitória, a confiança, a oportunidade, e os novos desafios. Talvez esse seja o momento mais adequado para colocar aquelas metas que estão no seu coração em prática. Sabe aquele sonho que você somente “deixou para lá”? Este é o momento de analisar o quanto ele pode ser possível e correr atrás para que ele se realize e deixe de ser somente um sonho.",
            "valor_negativo" => "Você pode ser alvo de pessoas oportunistas, e mesmo sabendo que estão te explorando, você se deixará levar pelo orgulho. Aprenda a se valorizar e veja que não tem nada de fraco. Não deixe ser manipulado por absolutamente ninguém.",
            "valor_amor" => "Você pode acabar se apegando por alguém que não esperava, e tornando-se algo mais sério. Veja a importância dessa pessoa, e caso esteja sentindo que seja recíproco, não perca tempo, e assuma o que seu coração diz.",
            "valor_trabalho" => "Você vive em constante busca de reconhecimento no seu trabalho, mas saiba que este momento pode estar bem próximo de seus caminhos. Continue focado, seu esforço será beneficiado. Se está desempregado (a), um bom emprego te cerca, peça ajuda á uma pessoa que você tem muita amizade, pode rolar indicação."
        ]);

        //A Justiça
        CartasTarot::create([
            "nome_da_carta" => "A Justiça",
            "valor_positivo" => "Em forma de alerta, esse arcano pede que tenha sabedoria, e saiba pensar com cautela em suas decisões. Qualquer decisão que tiver agora irá trazer consequências futuras, então tenha plena certeza do que está optando. Utilize sua intuição também para fazer boas escolhas.",
            "valor_negativo" => "Você sofrerá injustiças em breve no seu caminho. Cuidado com o que diz a pessoas próximas para não ser mal interpretado, não se envolver em fofocas ou discussões sem sentido.",
            "valor_amor" => "Não abra espaço para desculpas ou para brigas, converse com seu parceiro para verificar se realmente estão felizes com esta relação. Entenda sempre o outro lado e evite julgamentos, pesem o que é valioso para vocês como individual. Se está solteiro (a), saiba que não é o momento de se envolver com alguém.",
            "valor_trabalho" => "Faça escolhas rigorosas em seu trabalho. Seja justo acima de tudo, não julgue sem fundamento. Utilize da sua influência para auxiliar seus colegas de trabalho. Se está desempregado (a), saiba que você deve escolher as vagas que anda se candidatando, o desespero pode te atrapalhar friamente nesse momento."
        ]);

        //O Eremita
        CartasTarot::create([
            "nome_da_carta" => "O Eremita",
            "valor_positivo" => "Este arcano reforça a importância do silêncio para obter uma luz interna, aprofundar no seu emocional e mental para reavaliar seus objetivos de vida. Reveja tudo que alcançou até o momento, e o que te fez chegar até aí, e aprenda com todas as dificuldades em que já passou.",
            "valor_negativo" => "Evite a solidão e preste mais atenção nos acontecimentos que estão passando bem diante de seus olhos e pedem foco da sua parte. Tudo que estiver acontecendo de ruim e negativo no seu caminho atualmente, é resultado desse seu desejo de isolamento, então, mexa-se.",
            "valor_amor" => "Para os solteiros, fique atento antes de construir um processo de apego com alguém, pois não correrá o risco de errar com a pessoa. Se está em um relacionamento, analise se este é o relacionamento em que sonhou sua vida toda. Coloque-se em primeiro lugar.",
            "valor_trabalho" => "Não haja por conta própria, o momento não é adequado para isto. Não aposte em situações desesperadas, não é a hora ideal para correr riscos muito altos."
        ]);

        //A Roda da Fortuna
        CartasTarot::create([
            "nome_da_carta" => "A Roda da Fortuna",
            "valor_positivo" => "Toda a plantação positiva que você fez em sua vida, você está á um passo de colher. Seus projetos e objetivos em que lutou a vida toda para idealizar estão á um momento de suas mãos agarrarem as oportunidades.",
            "valor_negativo" => "Você coloca a culpa de tudo de ruim que acontece na sua vida em sua má sorte, porém foque que tudo na vida é uma eterna colheita daquilo que plantamos. Tudo que for feito com empenho e dedicação, terá bons retornos. O que for feito com má vontade e falta de cuidado, terá retornos negativos.",
            "valor_amor" => "Há um possível fim amoroso próximo do seu caminho. A vida é feita de ciclos e este é o momento de compreender que o ciclo emocional de seu relacionamento chegou ao fim. Não há transformação quando não há mais sentimento, mesmo que seja de uma das partes. Se está solteiro (a), compreenda que pessoas interessantes aparecerão no seu caminho, mas analise se elas são merecedoras de toda a sua dedicação.",
            "valor_trabalho" => "Este arcano pede que se mantenha da forma que está, pelo menos neste momento. Mudanças não serão bem aceitas pelo destino agora, então preserve-se para que não hajam surpresas negativas. Os ciclos estão em constante movimentação, então aguarde para que o novo apareça."
        ]);

        //A Força
        CartasTarot::create([
            "nome_da_carta" => "A Força",
            "valor_positivo" => "Este arcano traz a representatividade de eficiência em suas conquistas, porém o risco alto de tomar decisões precipitadas. Não deixe que anulem sua personalidade, ou que você se deixe levar pelos interesses alheios. Mantenha a coragem e exerça o domínio emocional.",
            "valor_negativo" => "Você não está sabendo dominar suas forças, está agindo com agressividade em algumas situações, e isso poderá te trazer o afastamento de pessoas amadas, e o isolamento, cuidado!",
            "valor_amor" => "Seu relacionamento está passando por momentos fortes, e passarão tranquilamente por problemas que vierem. Vocês conseguem se entender, a sintonia de vocês tem ajudado muito a relação. Continuem com essa energia que ambos têm, e manterão um relacionamento alegre e feliz. Se está solteiro (a), seu poder de sedução está em alta e um amor entrará no seu caminho em breve. Não tenha medo de arriscar.",
            "valor_trabalho" => "Seu espiritual está em alta, então utilize isso a seu favor no campo de trabalho. Você conseguirá alcançar o patamar profissional que tanto sonhou, então mantenha-se focado. Se está desempregado (a), invista em tudo que possa auxiliar na sua carreira, e continue buscando, você será notado em uma entrevista."
        ]);

        //O Enforcado
        CartasTarot::create([
            "nome_da_carta" => "O Enforcado",
            "valor_positivo" => "Você passará por um período de chateações com aqueles que ama, então este é o momento de novos aprendizados, analisar como estava nossa relação com aquele que tínhamos apreço. Sua paciência vai te levar cada dia mais longe, trabalhe emocionalmente este campo, para que tenha cada dia mais sucesso com as pessoas, e na vida.",
            "valor_negativo" => "Você está em um momento que não consegue enxergar soluções para seus problemas, se vê sem saída. Você precisa analisar qual o ponto principal dos problemas, e a forma mais sensata de resolvê-los.",
            "valor_amor" => "Há estagnação em seu relacionamento, não há término, porém vocês já não se sentem tão próximos quanto gostariam. Este é o momento de sentar e conversar o que pode ser implementado no relacionamento de vocês, e mudar o que for preciso para que façam funcionar. Se está solteiro (a), primeiro finalize assuntos pendentes do passado, para que sua vida possa caminhar passos longos á frente. Você precisa ter o coração totalmente limpo para iniciar uma nova relação.",
            "valor_trabalho" => "Repense os planos de sua carreira profissional e se sente que está no ambiente e na carreira correta. Você precisará neste momento seguir aquilo que seu coração manda, seja até mesmo para mudar de profissão. Este é somente o momento para repensar e analisar a fundo o que está sentindo, para que possa dar o primeiro passo. Se está desempregado (a), tenha cautela em suas escolhas, não deixe que o desespero escolha por você."
        ]);

        //A Morte
        CartasTarot::create([
            "nome_da_carta" => "A Morte",
            "valor_positivo" => "É o momento de uma super transformação positiva, e colocar pontos finais definitivos naquilo que já não faz mais parte do seu caminho. Seu passado já não voltará mais e precisa que o que ficou para trás, realmente fique lá atrás. Se está passando por um momento de fragilidade emocional, saiba que todo fim, gerará novos começos.",
            "valor_negativo" => "Quando você não aceita os desafios que a vida te promove, e as mudanças que a vida deseja lhe proporcionar, você perde tudo aquilo de positivo que poderia e viria a acontecer em seu caminho, impossibilitando que a vida siga realmente o seu rumo. Comece a ver de forma positiva as coisas que o destino tem a lhe oferecer.",
            "valor_amor" => "Há o nascimento de um amor cheio de intensidade para chegar ao seu caminho, aproveite este momento para realmente finalizar relações anteriores, e abrir espaço em sua vida para a chegada do novo, do encontro de almas.",
            "valor_trabalho" => "Você estava passando por um momento problemático no trabalho, porém a situação será resolvida bem em breve. Se empenhe para que novas oportunidades apareçam, pois essa carta indica um novo rumo profissional, uma nova oportunidade. Se está desempregado (a), confie mais em si mesmo e em sua capacidade."
        ]);

        //A Temperança
        CartasTarot::create([
            "nome_da_carta" => "A Temperança",
            "valor_positivo" => "Esse arcano pede que constantemente trabalhe o poder da paciência, da cautela e da flexibilidade mediante situações. Tudo em nossas vidas é um constante equilíbrio, então tenha certeza que seu emocional, mental e profissional estão andando todos pelo caminho da ordem. Você é constantemente protegido pelas forças universais, utilize isso como um ponto positivo, e estude mais sobre seu energético, e como melhorá-lo.",
            "valor_negativo" => "Você é facilmente manipulável e isso irá causar alguns problemas em seu destino. Tome a frente de seu destino e deixe de aceitar tudo que lhe impõe, e evite fazer as coisas somente para agradar as pessoas. Você irá perder sua identidade se manter desta forma.",
            "valor_amor" => "A parceria no seu relacionamento tem sido algo crucial, e deve se manter em seu equilíbrio atual. Mantenham o diálogo e o respeito acima de qualquer coisa. Se está solteiro (a), não se prenda em buscar alguém agora, tudo acontece no momento certo.",
            "valor_trabalho" => "Esse é o momento de trabalhar com calma, focando em seu desempenho e futuro profissional. Aproveite essa harmonia em sua vida para buscar cursos, melhorias profissionais, auxílio de carreira, para que chegue cada hora mais longe. Aumente seu conhecimento."
        ]);

        //O Diabo
        CartasTarot::create([
            "nome_da_carta" => "O Diabo",
            "valor_positivo" => "Este arcano indica a ambição em excesso que você anda tendo em seu caminho, ou a falta do mesmo. Você já parou para pensar se viver exatamente conforme as regras, e deixando seu desejo de lado tem sido algo positivo para a sua vida? Analise friamente se você tem feito tudo aquilo que realmente sente vontade de fazer, e se não, o real motivo de não ser completamente realizado.",
            "valor_negativo" => "Cuidado da forma em que anda gastando e mantendo seu lado financeiro, você passará por apertos devido a falta de controle e aptidão com seu dinheiro.",
            "valor_amor" => "Seu envolvimento tem sido apenas carnal, e este é o momento de definir se está confortável com o envolvimento emocional como próximo passo. Se tiver um relacionamento sólido, cuidado com as tentações carnais de sua jornada.",
            "valor_trabalho" => "É preciso deixar a diversão e o prazer de lado para que consiga focar em seu profissional. Cuidado para não passar por cima de ninguém para conquistar suas coisas, aja de forma justa e ética em seu ambiente de trabalho, ninguém obtém sucesso sendo assim."
        ]);

        //A Casa de Deus
        CartasTarot::create([
            "nome_da_carta" => "A Casa de Deus",
            "valor_positivo" => "Muitas mudanças estão para acontecer em seu caminho, e te impactarão de forma emocional. Algumas atitudes que você teve em sua vida, terão reflexo agora, mexendo um pouco com você. Evite ser arrogante com as pessoas, principalmente com aquelas que já te auxiliaram tanto. Colhemos o que plantamos nas pessoas.",
            "valor_negativo" => "Você está agindo com teimosia e perdendo oportunidades ótimas, permita-se viver o destino e aceitar que o passado ficou para trás. Se desprenda para que consiga evoluir como ser humano, para todo fim há um novo começo. A limpeza de sua energia é necessária para que você se encontre.",
            "valor_amor" => "Esse arcano vem com o aviso de que se não mudar suas atitudes e a forma com que você vê o seu relacionamento, o fim estará bem próximo. Procure entender o outro, escute o que ele tem a dizer. Aceite que as vezes precisamos mudar nossas atitudes para que nosso relacionamento vá para frente.",
            "valor_trabalho" => "Fique atento, você passará por problemas financeiros, e isso poderá refletir no seu desenvolvimento no trabalho. Por isso, este é o momento de colocar no papel suas prioridades financeiras, e milimetrar como irá cuidar desta parte, para que não afete outros pontos."
        ]);

        //Estrela
        CartasTarot::create([
            "nome_da_carta" => "Estrela",
            "valor_positivo" => "Todo aquele medo e mágoas guardadas estão á um passo de sair do seu caminho. Este é um momento de renovações, o universo te conduzirá para os melhores caminhos. Este é o momento de ótimas colheitas emocionais, onde você se sentirá renovado. Utilize esse momento para se conhecer melhor, identificar quem você é realmente por dentro.",
            "valor_negativo" => "Está passando dos limites nos objetivos em que anda colocando no seu caminho, anda pensando alto demais, e esquecendo-se de colocar os devidos pés no chão. Para todo sonho, precisamos ter uma visão de realidade, que você está esquecendo de exercer.",
            "valor_amor" => "Viverá um amor intenso e cheio de surpresas. É um momento de muita felicidade e apego emocional, de sentir o que realmente esperou sentir por muito tempo. Se está solteiro (a), um amor que deve aquecer o coração está próximo do seu caminho. Se já está em um relacionamento, cultive bons sentimentos.",
            "valor_trabalho" => "Passará por um momento de muita confiança, e esse sentimento é ideal para aqueles que buscam em realizar sonhos. Se está desempregado (a), este é o momento de se destacar por seus esforços. O sucesso e prosperidade estão próximos do seu caminho. Tenha confiança e fé no que o destino lhe reserva."
        ]);

        //A Lua
        CartasTarot::create([
            "nome_da_carta" => "A Lua",
            "valor_positivo" => "Seu processo de conexão familiar estará bem alto neste momento. Você estará mais sensível emocionalmente, então irá desejar estar próximo de quem você ama e se sente próximo, aproveite este momento para curtir momentos com essas pessoas.",
            "valor_negativo" => "Você tem forte medo em arriscar e nisto, anda perdendo boas oportunidades. A dominação do medo é algo essencial para se trabalhar em sua jornada. Não viva a vida se arrependendo das oportunidades que deixou passar, agarre as oportunidades atuais.",
            "valor_amor" => "Cuidado em seu relacionamento com o período de esconder coisas, talvez vocês não estejam sendo totalmente honestos sobre as informações. A conversa franca é o melhor caminho neste momento, para que nenhum dos dois saia ferido deste relacionamento. Se está solteiro (a), cuidado para não se envolver em falsas ilusões amorosas.",
            "valor_trabalho" => "Seu instinto está aflorado neste momento, possibilitando que você veja a abertura de novas portas em seu caminho. Evite fofocas no ambiente de trabalho, pois talvez tenham o objetivo de te prejudicar dentro do ambiente profissional. Se está desempregado (a), cuidado para não alimentar nas pessoas sentimentos falsos e ilusórios."
        ]);

        //O Sol
        CartasTarot::create([
            "nome_da_carta" => "O Sol",
            "valor_positivo" => "O Sol no Tarot traz uma mensagem forte e positiva, indicando quase sempre conquistas e sucesso em seus objetivos. É a hora de encontrar esclarecimentos à todas as dúvidas que te perseguiram e firmar com você mesmo o compromisso de empenho para conquista.",
            "valor_negativo" => "O lado negativo da carta O Sol, mostra que lhe falta modéstia. O seu brilho está a te confundir, te separando das pessoas queridas e ofuscando a sua visão da realidade. Coloque seus pés no chão, enxergue aqueles que sempre contribuíram de forma positiva em sua vida, não existe felicidade verdadeira em ser feliz sozinho.",
            "valor_amor" => "A carta do Sol no campo do amor traz a inteligência emocional, discernimento, a possibilidade de apoio e suporte incondicional para as questões do coração. O seu parceiro(a) promoverá a harmonia e o bem-estar na sua relação. Se for do desejo do casal, há grandes possibilidades da chegada de um bebê à família e para aqueles que sonham em se casar, o plano poderá sair do pensamento e se concretizar. Para quem está solteiro, o Sol simboliza um amor ardente chegando, aquela que te tirará o fôlego, fique preparado!",
            "valor_trabalho" => "O Sol simboliza concretização de sonhos, vida financeira estável, sucesso e reconhecimento profissional. É o seu momento de realizações nesse setor. Se está desempregado, o seu brilho próprio será sua principal ferramenta para se destacar, então aproveite, só tome cuidado para não perder a modéstia!"
        ]);

        //O Julgamento
        CartasTarot::create([
            "nome_da_carta" => "O Julgamento",
            "valor_positivo" => "Há a chegada de ótimas notícias em seu caminho, graças a todas as ações positivas que realizou ao redor de sua vida. Boas ações geram bons resultados, boas colheitas, e notícias que irão te surpreender estão cada hora mais próximas. Mantenha seu caminho organizado, mantenha-se fazendo planos, e tome suas decisões com calma e sabedoria.",
            "valor_negativo" => "Alguém próximo a você, bem próximo, inclusive, fala mal e te difama ao restante das pessoas. Se você chateou uma pessoa de alguma forma, peça desculpas e não deixe que esta pessoa fique magoada com você. Converse para que tudo se coloque nos eixos, nada sem resolução.",
            "valor_amor" => "Esta carta sinaliza tanto para os solteiros, tanto para aqueles que já estão em um relacionamento, o aspecto de mudança geral. Compreenda as pessoas que estão a sua volta, escute mais aqueles que precisam ser ouvidos, e antes de qualquer coisa, não julgue. Entregue-se às suas emoções, e não crie tantas expectativas, viva um dia de cada vez.",
            "valor_trabalho" => "Há a possibilidade de promoção em seu trabalho, e o início em alguma outra oportunidade que te fará muito feliz. Porém, para que mudanças positivas aconteçam, utilize seu poder de diálogo, e converse sobre seus valores como profissional, mostre suas competências e o quanto de esforço tem envolvido em todo esse processo para chegar onde chegou. Se está desempregado (a), não desanime, as oportunidades irão aparecer, mesmo que pareça um momento muito difícil."
        ]);

        //O Mundo
        CartasTarot::create([
            "nome_da_carta" => "O Mundo",
            "valor_positivo" => "Este arcano sinaliza a conquista e o alcance de todos os seus projetos que pareciam tão distantes. Você alcançará o momento de plenitude, tanto emocional como material, então evite tantas preocupações desnecessárias, pois o mundo está á seu favor. É o fim de uma jornada cheia de dificuldades e pedras no caminho.",
            "valor_negativo" => "Mantenha os pés no chão e analise tudo a sua volta. Evite se envolver em confusões e problemas, para que a conclusão de seus sonhos seja mais rápida e plena.",
            "valor_amor" => "Plenitude e satisfação são as palavras que irão definir seu relacionamento no momento, talvez seja um ótimo momento para um passo mais sério como casamento. Se estiver solteiro (a), um ótimo relacionamento do passado pode voltar para te mostrar que a paixão e o fogo não tiveram fim.",
            "valor_trabalho" => "Se estiver desempregado (a), saiba que a busca chegou ao fim, o trabalho ideal te chamará rapidamente. Uma entrada de dinheiro que não estava esperando também pode vir a acontecer bem em breve. Se já está trabalhando, saiba que haverá um bônus ou uma promoção no seu caminho nos próximos dias."
        ]);

        // //XXXXXXX
        // CartasTarot::create([
        //     "nome_da_carta" => "XXXXXXX",
        //     "valor_positivo" => "XXXXXX",
        //     "valor_negativo" => "XXXXXXX",
        //     "valor_amor" => "XXXXXXX",
        //     "valor_trabalho" => "XXXXXXXX"
        // ]);

    }
}
