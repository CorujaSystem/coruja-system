@extends ('layouts.app')

@section('content')

<div class="d-flex flex-column align-items-center mt-3">
    <h1 class="display-3 ">Sobre a campanha</h1>
    <p class="mt-4" style="text-align: justify; text-justify: inter-word;">A campanha originou-se em uma conversa entre os primos Alan Roque e Eugênia Kelly. Após falarem sobre as dificuldades encaradas por alguns estudantes da rede pública, eles decidiram criar uma campanha de arrecadação e doação de material escolar. Esse esforço inicial, feito em 2014, rendeu a entrega de 20 kits a crianças caicoenses, cujas famílias não tinham condições financeiras de comprar os itens necessários para o ano letivo.
        Com o passar dos anos e o apoio crescente da comunidade, a campanha evoluiu. Ganhou o nome de “Dona Coruja” e aumentou seu alcance graças às redes sociais. A última edição, finalizada em abril de 2021, distribuiu 461 kits escolares e contemplou 14 instituições de ensino, localizadas em Caicó e região.
    </p>
    <img src="{{ asset('images/about1.jpg')}}" alt="compra de materiais" class="rounded" width="400">
    <p style="text-align: justify; text-justify: inter-word;" class="mt-4" style="text-align: justify; text-justify: inter-word;"><i>“Decidimos começar uma pequena campanha entre amigos na intenção de ajudar crianças, mas não imaginávamos a proporção que ela iria tomar e como cresceria ano após ano. (...) A educação é transformadora, apesar de estarmos num país onde infelizmente ela não é o foco principal dos nossos governantes. Ela não chega no mesmo nível para todos. (...) Se a entrega de material for um problema a menos no ano letivo dessas crianças, é aí que mora o sentido da Dona Coruja. Se tivermos o poder de ajudar pelo menos um estudante a chegar ao fim de sua jornada, para mim fez todo sentido ter começado essa corrente do bem.”</i> - Alan Roque em entrevista pela revista Collecione.</p>
    <p style="text-align: justify; text-justify: inter-word;"><i>
            “A campanha teve um impacto gigante e muito positivo em minha vida. Primeiro, na minha rotina. O trabalho se inicia em dezembro, quando começamos a selecionar as escolas participantes. Daí por diante minhas férias são dedicadas ao planejamento, arrecadação de recursos, organização e distribuição dos materiais. Dona Coruja tem conseguido ser um alento para várias pessoas, diante das muitas dificuldades financeiras. Certa vez, atendemos a uma família que tinha 12 filhos, destes apenas 1 ainda não frequentava a escola. O pai ficou muito agradecido por ter sido contemplado com o material escolar. Nossa perspectiva é de crescer ainda mais. Precisamos crescer. (...) Infelizmente as desigualdades sociais são uma realidade. Nós acreditamos que a Educação é o caminho e queremos ajudar os estudantes a continuarem em sua própria jornada. Saber que estamos possibilitando a permanência de uma criança na escola nos faz querer continuar, ano após ano.”</i> - Eugênia Kelly em entrevista pela revista Collecione.</p>
</div>
<div class="d-flex justify-content-around">
    <div class="row row-cols-1 row-cols-md-2 g-4 w-75 ">
        <div class="col">
            <div class="card">
                <img src="{{ url('/images/person1.png')}}" class="card-img-top" alt="person1">
                <div class="card-body">
                    <h5 class="card-title">Eugênia Kelly</h5>
                    <p class="card-text">Professora da rede pública municipal de Caicó RN. Desde 2014 coordena a Campanha Dona Coruja .</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ url('/images/person2.png')}}" class="card-img-top" alt="person2">
                <div class="card-body">
                    <h5 class="card-title">Alan Roque</h5>
                    <p class="card-text">Lorem impsum lembrete.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection