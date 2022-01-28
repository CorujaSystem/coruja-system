@extends ('layouts.admin')

@section('content')

<h1 class="mb-4">Dashboard</h1>

<div class="d-flex mb-4">
    <div class="card chart">
        <div class="card-body ">
            <canvas id="kit-canvas"></canvas>
        </div>
    </div>

    <div class="card chart mx-3">
        <div class="card-body ">
            <canvas id="gender-kit-canvas"></canvas>
        </div>
    </div>

    <div class="card chart">
        <div class="card-body ">
            <canvas id="kits-by-grade-canvas"></canvas>
        </div>
    </div>


</div>

<div class="d-flex">
<div class="card chart">
    <div class="card bar-chart mx-4">
        <div class="card-body ">
            <canvas id="school-kits-canvas"></canvas>
        </div>
    </div>
</div>

<script src="{{ asset('chart.js/chart.js') }}"></script>
<script>
    const kitsOptions = (title) => ({
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: title,
                font: {
                    size: 20
                }
            }
        }
    });

    function randomColor() {
        const r = Math.floor(125 + Math.random() * 120);
        const g = Math.floor(125 + Math.random() * 120);
        const b = Math.floor(125 + Math.random() * 120);

        return `rgba(${r},${g},${b}, 0.7)`;
    }

    function randomColors(count) {
        const colors = []
        for (let i = 0; i < count; i++) {
            colors.push(randomColor())
        }
        return colors
    }


    const kitsCtx = document.getElementById('kit-canvas').getContext('2d');
    const kitsChart = new Chart(kitsCtx, {
        type: 'doughnut',
        data: {
            labels: ['Concluídos', 'Pendentes'],
            datasets: [{
                label: 'Conclusão de Kits',
                data: {{$allKitsData}},
                backgroundColor: ['#2ecc71', '#dc3545'],
            }],
        },
        options: kitsOptions('Conclusão de Kits')

    });

    const genderKitsCtx = document.getElementById('gender-kit-canvas').getContext('2d');
    const genderKitsChart = new Chart(genderKitsCtx, {
        type: 'doughnut',
        data: {
            labels: ['Masculino', 'Feminino'],
            datasets: [{
                label: 'Kits restando',
                data: {{$genderKitsData}},
                backgroundColor: ['#1e6af7', '#ff00c8'],
            }],
        },
        options: kitsOptions('Kits restando por sexo')

    });

    const kitsByGradeCtx = document.getElementById('kits-by-grade-canvas').getContext('2d');
    const kitsByGradeChart = new Chart(kitsByGradeCtx, {
        type: 'doughnut',
        data: {
            labels: {!! $studentsByGradeLabel !!},
            datasets: [{
                label: 'Kits restando',
                data: {{$studentsByGradeCount}},
                backgroundColor: ['#059bff', '#ff6384', '#ff9020', '#ffc234', '#1dcdcd'],
            }],
        },
        options: kitsOptions('Kits restando por série')

    });

    const schoolKitsCtx = document.getElementById('school-kits-canvas').getContext('2d');
    const schoolKitsChart = new Chart(schoolKitsCtx, {
        type: 'bar',
        data: {
            labels: {!! $schoolLabels !!},
            datasets: [
            {
                label: 'Kits prontos por Escola',
                data: {{$schoolKitsData}},
                backgroundColor: randomColors({{$schoolCount}}),
            },
            {
                label: 'Todos os kits',
                data: {{$schoolAllKitsData}},
                backgroundColor: randomColors({{$schoolCount}}),
            }
            ],
        },
        options: kitsOptions('Kits prontos por Escola')
    });
</script>
@endsection
